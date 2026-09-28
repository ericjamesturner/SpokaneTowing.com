<?php

namespace App\Livewire;

use App\Models\Quote;
use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Resend;

class QuoteDisplay extends Component
{
    public $fromAddress;
    public $toAddress;
    public $customerName;
    public $customerPhone;
    public $distance = null;
    public $duration = null;
    public $quote = null;
    public $error = null;
    public $loading = true;

    // Quote record ID
    public $quoteRecordId = null;


    public function mount($fromAddress, $toAddress, $customerName = null, $customerPhone = null)
    {
        $this->fromAddress = $fromAddress;
        $this->toAddress = $toAddress;
        $this->customerName = $customerName;
        $this->customerPhone = $customerPhone;

        if ($fromAddress && $toAddress) {
            $this->calculateQuote();
        } else {
            $this->error = 'Please provide both pickup and drop-off addresses.';
            $this->loading = false;
        }
    }

    public function calculateQuote()
    {
        $this->loading = true;
        $this->error = null;
        $this->quote = null;

        try {
            // Get coordinates for pickup location to check service area
            $pickupCoords = $this->getCoordinates($this->fromAddress);
            if (!$pickupCoords) {
                throw new \Exception('Unable to find pickup location. Please enter a valid address.');
            }

            // Check if pickup is within service area
            $distanceFromSpokane = $this->calculateDistanceFromSpokane($pickupCoords['lat'], $pickupCoords['lng']);
            if ($distanceFromSpokane > config('towing.service_area.max_pickup_distance')) {
                throw new \Exception('Pickup location is outside our service area. Please call us at (509) 797-7999 for assistance.');
            }

            // Calculate distance between pickup and dropoff
            $result = $this->calculateDistance($this->fromAddress, $this->toAddress);
            
            if ($result) {
                $this->distance = (int) ceil($result['distance']);
                $this->duration = $result['duration'];

                // Calculate pricing
                $hookFee = config('towing.pricing.hook_fee');
                $perMile = config('towing.pricing.per_mile');
                $minimumCharge = config('towing.pricing.minimum_charge');

                $mileageCharge = $this->distance * $perMile;
                $totalCharge = $hookFee + $mileageCharge;
                
                // Apply minimum charge
                $finalCharge = max($totalCharge, $minimumCharge);
                
                $this->quote = [
                    'distance' => $this->distance,
                    'duration' => $this->duration,
                    'hookFee' => $hookFee,
                    'mileageCharge' => $mileageCharge,
                    'total' => $finalCharge,
                    'isMinimum' => $finalCharge == $minimumCharge,
                ];
                
                // Save quote to database
                $quoteRecord = Quote::create([
                    'from_address' => $this->fromAddress,
                    'to_address' => $this->toAddress,
                    'customer_name' => $this->customerName,
                    'customer_phone' => $this->customerPhone,
                    'distance' => $this->distance,
                    'duration' => $this->duration,
                    'hook_fee' => $hookFee,
                    'mileage_charge' => $mileageCharge,
                    'total' => $finalCharge,
                    'is_minimum' => $finalCharge == $minimumCharge,
                    'status' => 'quoted',
                    'quoted_at' => now(),
                ]);

                $this->quoteRecordId = $quoteRecord->id;

                // Send email notification
                $this->sendQuoteNotification($quoteRecord);
            }
        } catch (\Exception $e) {
            $this->error = $e->getMessage();
        }

        $this->loading = false;
    }


    private function calculateDistance($from, $to)
    {
        $apiKey = config('towing.google_maps.api_key');
        
        if (empty($apiKey)) {
            // Fallback: estimate based on straight-line distance
            return [
                'distance' => rand(5, 30), // Mock distance in miles
                'duration' => rand(10, 45), // Mock duration in minutes
            ];
        }

        $response = Http::get('https://maps.googleapis.com/maps/api/distancematrix/json', [
            'origins' => $from,
            'destinations' => $to,
            'units' => 'imperial',
            'key' => $apiKey,
        ]);

        if ($response->successful()) {
            $data = $response->json();
            
            if ($data['status'] == 'OK' && $data['rows'][0]['elements'][0]['status'] == 'OK') {
                $element = $data['rows'][0]['elements'][0];
                
                return [
                    'distance' => round($element['distance']['value'] * 0.000621371, 1), // Convert meters to miles
                    'duration' => round($element['duration']['value'] / 60), // Convert seconds to minutes
                ];
            }
        }

        throw new \Exception('Unable to calculate distance. Please check the addresses and try again.');
    }

    private function getCoordinates($address)
    {
        $apiKey = config('towing.google_maps.api_key');
        
        if (empty($apiKey)) {
            // Fallback for testing
            return ['lat' => 47.6588, 'lng' => -117.4260];
        }

        $response = Http::get('https://maps.googleapis.com/maps/api/geocode/json', [
            'address' => $address,
            'key' => $apiKey,
        ]);

        if ($response->successful()) {
            $data = $response->json();
            
            if ($data['status'] == 'OK' && count($data['results']) > 0) {
                $location = $data['results'][0]['geometry']['location'];
                return ['lat' => $location['lat'], 'lng' => $location['lng']];
            }
        }

        return null;
    }

    private function calculateDistanceFromSpokane($lat, $lng)
    {
        $centerLat = config('towing.service_area.center_lat');
        $centerLng = config('towing.service_area.center_lng');
        
        // Haversine formula for distance calculation
        $earthRadius = 3959; // miles
        
        $latDiff = deg2rad($lat - $centerLat);
        $lngDiff = deg2rad($lng - $centerLng);
        
        $a = sin($latDiff/2) * sin($latDiff/2) +
             cos(deg2rad($centerLat)) * cos(deg2rad($lat)) *
             sin($lngDiff/2) * sin($lngDiff/2);
        
        $c = 2 * atan2(sqrt($a), sqrt(1-$a));
        
        return $earthRadius * $c;
    }

    public function showBookingForm()
    {
        if ($this->quoteRecordId) {
            $quote = Quote::find($this->quoteRecordId);
            if ($quote) {
                // Update status to booking
                $quote->update(['status' => 'booking']);

                // Redirect to booking page
                return redirect()->route('quote.book', $quote);
            }
        }
    }

    private function sendQuoteNotification($quoteRecord)
    {
        $resendKey = env('RESEND_KEY');
        $notificationEmail = env('QUOTE_NOTIFICATION_EMAIL');

        if (empty($resendKey) || empty($notificationEmail)) {
            Log::warning('Resend key or notification email not configured');
            return;
        }

        try {
            $resend = Resend::client($resendKey);

            $customerName = $quoteRecord->customer_name ?? 'Unknown';
            $resend->emails->send([
                'from' => 'Spokane Towing <spokanetowing@e.ravenfab.com>',
                'to' => [$notificationEmail],
                'subject' => "New Quote from {$customerName} - \${$quoteRecord->total}",
                'html' => $this->buildQuoteEmailHtml($quoteRecord),
            ]);

            Log::info("Quote notification email sent for quote #{$quoteRecord->quote_number}");
        } catch (\Exception $e) {
            Log::error("Failed to send quote notification email: " . $e->getMessage());
        }
    }

    private function buildQuoteEmailHtml($quote)
    {
        $quotedAt = $quote->quoted_at->format('M j, Y g:i A');
        $customerName = $quote->customer_name ?? 'Not provided';
        $customerPhone = $quote->customer_phone ?? 'Not provided';

        return <<<HTML
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="margin: 0; padding: 0; font-family: Arial, sans-serif; background-color: #f4f4f4;">
    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="background-color: #f4f4f4;">
        <tr>
            <td align="center" style="padding: 20px;">
                <table role="presentation" width="600" cellspacing="0" cellpadding="0" style="background-color: #ffffff; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
                    <!-- Header -->
                    <tr>
                        <td style="background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%); padding: 30px; text-align: center;">
                            <h1 style="margin: 0 0 8px 0; color: #ffffff; font-size: 28px; font-weight: bold;">New Instant Quote</h1>
                            <p style="margin: 0; color: #94a3b8; font-size: 16px;">Quote #{$quote->quote_number}</p>
                        </td>
                    </tr>

                    <!-- Customer Info -->
                    <tr>
                        <td style="padding: 20px 30px 0 30px;">
                            <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="background-color: #dc2626; border-radius: 10px;">
                                <tr>
                                    <td style="padding: 20px;">
                                        <table role="presentation" width="100%" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td style="padding: 8px 0; border-bottom: 1px solid rgba(255,255,255,0.2);">
                                                    <span style="color: rgba(255,255,255,0.8); font-size: 14px;">Customer</span><br>
                                                    <span style="color: #ffffff; font-size: 18px; font-weight: bold;">{$customerName}</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 12px 0 0 0;">
                                                    <span style="color: rgba(255,255,255,0.8); font-size: 14px;">Phone</span><br>
                                                    <span style="color: #ffffff; font-size: 18px; font-weight: bold;">{$customerPhone}</span>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- Timestamp -->
                    <tr>
                        <td style="padding: 20px 30px 0 30px;">
                            <p style="margin: 0; color: #6b7280; font-size: 14px;">Quote generated on {$quotedAt}</p>
                        </td>
                    </tr>

                    <!-- Route Details -->
                    <tr>
                        <td style="padding: 20px 30px 0 30px;">
                            <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="background-color: #f8fafc; border-radius: 10px; border: 1px solid #e2e8f0;">
                                <tr>
                                    <td style="padding: 20px;">
                                        <table role="presentation" width="100%" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td style="padding: 10px 0; border-bottom: 1px solid #e2e8f0;">
                                                    <span style="color: #6b7280; font-size: 12px; text-transform: uppercase; letter-spacing: 0.5px;">Pickup Location</span><br>
                                                    <span style="color: #1f2937; font-size: 15px; font-weight: 500;">{$quote->from_address}</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 10px 0; border-bottom: 1px solid #e2e8f0;">
                                                    <span style="color: #6b7280; font-size: 12px; text-transform: uppercase; letter-spacing: 0.5px;">Drop-off Location</span><br>
                                                    <span style="color: #1f2937; font-size: 15px; font-weight: 500;">{$quote->to_address}</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 10px 0;">
                                                    <table role="presentation" width="100%" cellspacing="0" cellpadding="0">
                                                        <tr>
                                                            <td width="50%">
                                                                <span style="color: #6b7280; font-size: 12px; text-transform: uppercase; letter-spacing: 0.5px;">Distance</span><br>
                                                                <span style="color: #1f2937; font-size: 15px; font-weight: 500;">{$quote->distance} miles</span>
                                                            </td>
                                                            <td width="50%">
                                                                <span style="color: #6b7280; font-size: 12px; text-transform: uppercase; letter-spacing: 0.5px;">Est. Drive Time</span><br>
                                                                <span style="color: #1f2937; font-size: 15px; font-weight: 500;">{$quote->duration} mins</span>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- Pricing -->
                    <tr>
                        <td style="padding: 20px 30px;">
                            <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="background-color: #f8fafc; border-radius: 10px; border: 1px solid #e2e8f0;">
                                <tr>
                                    <td style="padding: 20px;">
                                        <table role="presentation" width="100%" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td style="padding: 8px 0; border-bottom: 1px solid #e2e8f0;">
                                                    <table role="presentation" width="100%" cellspacing="0" cellpadding="0">
                                                        <tr>
                                                            <td style="color: #6b7280; font-size: 14px;">Hook Fee</td>
                                                            <td align="right" style="color: #1f2937; font-size: 14px; font-weight: 500;">\${$quote->hook_fee}</td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 8px 0; border-bottom: 1px solid #e2e8f0;">
                                                    <table role="presentation" width="100%" cellspacing="0" cellpadding="0">
                                                        <tr>
                                                            <td style="color: #6b7280; font-size: 14px;">Mileage ({$quote->distance} mi)</td>
                                                            <td align="right" style="color: #1f2937; font-size: 14px; font-weight: 500;">\${$quote->mileage_charge}</td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 15px 0 5px 0;">
                                                    <table role="presentation" width="100%" cellspacing="0" cellpadding="0">
                                                        <tr>
                                                            <td style="color: #1f2937; font-size: 16px; font-weight: bold;">Total Quote</td>
                                                            <td align="right" style="color: #16a34a; font-size: 28px; font-weight: bold;">\${$quote->total}</td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="padding: 0 30px 30px 30px; text-align: center;">
                            <p style="margin: 0 0 15px 0; color: #6b7280; font-size: 14px; font-style: italic;">The customer may call or proceed to book this tow.</p>
                            <p style="margin: 0; color: #9ca3af; font-size: 13px;">Spokane Towing | (509) 797-7999</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
HTML;
    }

    public function render()
    {
        return view('livewire.quote-display');
    }
}