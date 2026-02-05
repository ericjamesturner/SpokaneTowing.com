<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\RateLimiter;

class ContactForm extends Component
{
    public $name = '';
    public $email = '';
    public $phone = '';
    public $subject = '';
    public $message = '';

    // Honeypot field - should remain empty (bots fill this)
    public $website = '';

    // Timestamp to detect fast submissions (bots submit instantly)
    public $form_loaded_at;

    protected $rules = [
        'name' => 'required|min:2|max:100',
        'email' => 'required|email|max:255',
        'phone' => 'nullable|min:10|max:20',
        'subject' => 'required|min:3|max:200',
        'message' => 'required|min:10|max:5000',
    ];

    public function mount()
    {
        $this->form_loaded_at = time();
    }

    public function submit()
    {
        // Spam check 1: Honeypot field should be empty
        if (!empty($this->website)) {
            // Silently reject - don't let bots know they were caught
            return redirect()->route('contact.thankyou');
        }

        // Spam check 2: Form submitted too fast (less than 3 seconds)
        if (time() - $this->form_loaded_at < 3) {
            // Silently reject
            return redirect()->route('contact.thankyou');
        }

        // Spam check 3: Rate limiting by IP (max 5 submissions per hour)
        $key = 'contact-form:' . request()->ip();
        if (RateLimiter::tooManyAttempts($key, 5)) {
            $this->addError('message', 'Too many submissions. Please try again later.');
            return;
        }
        RateLimiter::hit($key, 3600); // 1 hour decay

        $this->validate();

        // Send email
        $this->sendContactEmail();

        // Redirect to thank you page
        return redirect()->route('contact.thankyou');
    }

    private function sendContactEmail()
    {
        $emailData = [
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone ?: 'Not provided',
            'subject' => $this->subject,
            'message' => $this->message,
            'submittedAt' => now()->format('Y-m-d H:i:s'),
            'ip' => request()->ip(),
        ];

        \Mail::send([], [], function ($mail) use ($emailData) {
            $mail->to('eric@ravenfab.com')
                 ->replyTo($emailData['email'], $emailData['name'])
                 ->subject('Contact Form: ' . $emailData['subject'])
                 ->html('
                    <h2>New Contact Form Submission</h2>
                    <p><strong>Submitted:</strong> ' . $emailData['submittedAt'] . '</p>

                    <h3>Contact Information</h3>
                    <p><strong>Name:</strong> ' . e($emailData['name']) . '</p>
                    <p><strong>Email:</strong> ' . e($emailData['email']) . '</p>
                    <p><strong>Phone:</strong> ' . e($emailData['phone']) . '</p>

                    <h3>Message</h3>
                    <p><strong>Subject:</strong> ' . e($emailData['subject']) . '</p>
                    <div style="background: #f5f5f5; padding: 15px; border-radius: 5px; margin-top: 10px;">
                        ' . nl2br(e($emailData['message'])) . '
                    </div>

                    <hr style="margin-top: 20px;">
                    <p style="color: #666; font-size: 12px;">IP Address: ' . $emailData['ip'] . '</p>
                 ');
        });
    }

    public function render()
    {
        return view('livewire.contact-form')
            ->layout('layouts.contact', [
                'title' => 'Contact Us - Spokane Towing',
                'description' => 'Get in touch with Spokane Towing. We\'re here to help with all your towing and roadside assistance questions.'
            ]);
    }
}
