<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class QuoteDisplay extends Component
{
    public $fromAddress;
    public $toAddress;
    public $distance = null;
    public $duration = null;
    public $quote = null;
    public $error = null;
    public $loading = true;
    public $showBookingForm = false;
    
    // Booking form fields
    public $customerName = '';
    public $customerPhone = '';
    public $customerEmail = '';
    public $homeAddress = '';
    public $vehicleYear = '';
    public $vehicleMake = '';
    public $vehicleModel = '';
    public $problem = '';
    public $problemOther = '';

    protected function rules()
    {
        return [
            'customerName' => 'required|min:2',
            'customerPhone' => 'required|min:10',
            'customerEmail' => 'required|email',
            'homeAddress' => 'required|min:5',
            'vehicleYear' => 'required|numeric|min:1900|max:' . (date('Y') + 1),
            'vehicleMake' => 'required|min:2',
            'vehicleModel' => 'required|min:1',
            'problem' => 'required',
            'problemOther' => 'required_if:problem,other',
        ];
    }

    public function mount($fromAddress, $toAddress)
    {
        $this->fromAddress = $fromAddress;
        $this->toAddress = $toAddress;
        
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
                $this->distance = $result['distance'];
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
            }
        } catch (\Exception $e) {
            $this->error = $e->getMessage();
        }

        $this->loading = false;
    }

    public function bookTow()
    {
        $this->validate();
        
        // Prepare email data
        $emailData = [
            'customerName' => $this->customerName,
            'customerPhone' => $this->customerPhone,
            'customerEmail' => $this->customerEmail,
            'homeAddress' => $this->homeAddress,
            'vehicleInfo' => $this->vehicleYear . ' ' . $this->vehicleMake . ' ' . $this->vehicleModel,
            'problem' => $this->problem === 'other' ? $this->problemOther : $this->problem,
            'fromAddress' => $this->fromAddress,
            'toAddress' => $this->toAddress,
            'quote' => $this->quote,
            'bookingTime' => now()->format('Y-m-d H:i:s'),
        ];
        
        // Send email
        \Mail::send([], [], function ($message) use ($emailData) {
            $message->to('eric@ravenfab.com')
                    ->subject('New Towing Booking - ' . $emailData['customerName'])
                    ->html($this->buildEmailHtml($emailData));
        });
        
        // Store booking details in session for confirmation page
        session()->put('booking_details', $emailData);
        
        // Redirect to confirmation page
        return redirect()->route('booking.confirmation');
    }
    
    private function buildEmailHtml($data)
    {
        return '
            <h2>New Towing Booking</h2>
            <p><strong>Booking Time:</strong> ' . $data['bookingTime'] . '</p>
            
            <h3>Customer Information</h3>
            <p><strong>Name:</strong> ' . $data['customerName'] . '</p>
            <p><strong>Phone:</strong> ' . $data['customerPhone'] . '</p>
            <p><strong>Email:</strong> ' . $data['customerEmail'] . '</p>
            <p><strong>Home Address:</strong> ' . $data['homeAddress'] . '</p>
            
            <h3>Vehicle Information</h3>
            <p><strong>Vehicle:</strong> ' . $data['vehicleInfo'] . '</p>
            <p><strong>Problem:</strong> ' . $data['problem'] . '</p>
            
            <h3>Towing Details</h3>
            <p><strong>From:</strong> ' . $data['fromAddress'] . '</p>
            <p><strong>To:</strong> ' . $data['toAddress'] . '</p>
            <p><strong>Distance:</strong> ' . $data['quote']['distance'] . ' miles</p>
            <p><strong>Estimated Time:</strong> ' . $data['quote']['duration'] . ' minutes</p>
            
            <h3>Pricing</h3>
            <p><strong>Hook Fee:</strong> $' . number_format($data['quote']['hookFee'], 2) . '</p>
            <p><strong>Mileage:</strong> $' . number_format($data['quote']['mileageCharge'], 2) . '</p>
            <p><strong>Total:</strong> $' . number_format($data['quote']['total'], 2) . '</p>
        ';
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
        $this->showBookingForm = true;
        $this->dispatch('booking-form-shown');
    }
    
    public function hideBookingForm()
    {
        $this->showBookingForm = false;
    }

    public function cancelBooking()
    {
        $this->showBookingForm = false;
    }

    public function render()
    {
        return view('livewire.quote-display');
    }
}