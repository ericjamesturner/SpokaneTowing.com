<?php

namespace App\Livewire;

use App\Models\Quote;
use Livewire\Component;

class QuoteBookingForm extends Component
{
    public Quote $quote;
    
    // Form fields
    public $customer_name = '';
    public $customer_phone = '';
    public $customer_email = '';
    public $home_address = '';
    public $vehicle_year = '';
    public $vehicle_make = '';
    public $vehicle_model = '';
    public $problem = '';
    public $problem_other = '';
    
    protected $rules = [
        'customer_name' => 'required|min:2',
        'customer_phone' => 'required|min:10',
        'customer_email' => 'required|email',
        'home_address' => 'required|min:5',
        'vehicle_year' => 'required|numeric|min:1900|max:2025',
        'vehicle_make' => 'required|min:2',
        'vehicle_model' => 'required|min:1',
        'problem' => 'required',
        'problem_other' => 'required_if:problem,other',
    ];

    public function mount(Quote $quote)
    {
        $this->quote = $quote;
        
        // Pre-fill form if data exists
        $this->customer_name = $quote->customer_name ?? '';
        $this->customer_phone = $quote->customer_phone ?? '';
        $this->customer_email = $quote->customer_email ?? '';
        $this->home_address = $quote->home_address ?? '';
        $this->vehicle_year = $quote->vehicle_year ?? '';
        $this->vehicle_make = $quote->vehicle_make ?? '';
        $this->vehicle_model = $quote->vehicle_model ?? '';
        $this->problem = $quote->problem ?? '';
        $this->problem_other = $quote->problem_other ?? '';
    }

    // Properties automatically save on update
    public function updated($propertyName)
    {
        // Save to database whenever a field is updated
        $this->quote->update([
            $propertyName => $this->$propertyName,
            'last_updated_field' => $propertyName,
            'last_activity_at' => now(),
        ]);
    }

    // Validate and submit the complete form
    public function submit()
    {
        $this->validate();
        
        // Update all fields and change status to booked
        $this->quote->update([
            'customer_name' => $this->customer_name,
            'customer_phone' => $this->customer_phone,
            'customer_email' => $this->customer_email,
            'home_address' => $this->home_address,
            'vehicle_year' => $this->vehicle_year,
            'vehicle_make' => $this->vehicle_make,
            'vehicle_model' => $this->vehicle_model,
            'problem' => $this->problem,
            'problem_other' => $this->problem === 'other' ? $this->problem_other : null,
            'status' => 'booked',
            'booked_at' => now(),
        ]);
        
        // Send email
        $this->sendBookingEmail();
        
        // Redirect to thank you page
        return redirect()->route('quote.thankyou', $this->quote);
    }
    
    private function sendBookingEmail()
    {
        $emailData = [
            'customerName' => $this->customer_name,
            'customerPhone' => $this->customer_phone,
            'customerEmail' => $this->customer_email,
            'homeAddress' => $this->home_address,
            'vehicleInfo' => $this->vehicle_year . ' ' . $this->vehicle_make . ' ' . $this->vehicle_model,
            'problem' => $this->problem === 'other' ? $this->problem_other : $this->problem,
            'fromAddress' => $this->quote->from_address,
            'toAddress' => $this->quote->to_address,
            'distance' => $this->quote->distance,
            'duration' => $this->quote->duration,
            'hookFee' => $this->quote->hook_fee,
            'mileageCharge' => $this->quote->mileage_charge,
            'total' => $this->quote->total,
            'bookingTime' => now()->format('Y-m-d H:i:s'),
            'quoteNumber' => $this->quote->quote_number,
        ];
        
        \Mail::send([], [], function ($message) use ($emailData) {
            $message->to('eric@ravenfab.com')
                    ->subject('New Towing Booking - ' . $emailData['customerName'])
                    ->html('
                        <h2>New Towing Booking</h2>
                        <p><strong>Booking Time:</strong> ' . $emailData['bookingTime'] . '</p>
                        <p><strong>Quote Number:</strong> ' . $emailData['quoteNumber'] . '</p>
                        
                        <h3>Customer Information</h3>
                        <p><strong>Name:</strong> ' . $emailData['customerName'] . '</p>
                        <p><strong>Phone:</strong> ' . $emailData['customerPhone'] . '</p>
                        <p><strong>Email:</strong> ' . $emailData['customerEmail'] . '</p>
                        <p><strong>Home Address:</strong> ' . $emailData['homeAddress'] . '</p>
                        
                        <h3>Vehicle Information</h3>
                        <p><strong>Vehicle:</strong> ' . $emailData['vehicleInfo'] . '</p>
                        <p><strong>Problem:</strong> ' . $emailData['problem'] . '</p>
                        
                        <h3>Towing Details</h3>
                        <p><strong>From:</strong> ' . $emailData['fromAddress'] . '</p>
                        <p><strong>To:</strong> ' . $emailData['toAddress'] . '</p>
                        <p><strong>Distance:</strong> ' . $emailData['distance'] . ' miles</p>
                        <p><strong>Estimated Time:</strong> ' . $emailData['duration'] . ' minutes</p>
                        
                        <h3>Pricing</h3>
                        <p><strong>Hook Fee:</strong> $' . number_format($emailData['hookFee'], 2) . '</p>
                        <p><strong>Mileage:</strong> $' . number_format($emailData['mileageCharge'], 2) . '</p>
                        <p><strong>Total:</strong> $' . number_format($emailData['total'], 2) . '</p>
                    ');
        });
    }

    public function render()
    {
        return view('livewire.quote-booking-form')
            ->layout('layouts.livewire', [
                'title' => 'Complete Your Booking - Spokane Towing',
                'description' => 'Complete your towing service booking with Spokane Towing.'
            ]);
    }
}