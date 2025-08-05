<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Thank You - Spokane Towing</title>
    <meta name="description" content="Thank you for booking with Spokane Towing. We'll be there in 20-30 minutes.">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @include('partials.clarity')
</head>
<body class="bg-gray-50">
<div class="min-h-screen bg-gray-50 py-12">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white p-8 rounded-lg border border-gray-200 shadow-sm text-center">
            <!-- Success Icon -->
            <div class="mb-6">
                <div class="mx-auto w-16 h-16 bg-green-100 rounded-full flex items-center justify-center">
                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>
            </div>

            <h1 class="text-3xl font-bold text-gray-900 mb-4">Thank You for Your Booking!</h1>
            
            <p class="text-lg text-gray-600 mb-8">
                We've received your towing request and will be there in <strong>20-30 minutes</strong>.
            </p>

            <!-- Booking Details -->
            <div class="bg-gray-50 p-6 rounded-lg text-left mb-8">
                <h2 class="text-lg font-semibold text-gray-900 mb-4">Booking Details</h2>
                
                <div class="space-y-3">
                    <div class="flex justify-between">
                        <span class="text-gray-600">Quote Number:</span>
                        <span class="font-semibold">{{ $quote->quote_number }}</span>
                    </div>
                    
                    <div class="flex justify-between">
                        <span class="text-gray-600">Customer:</span>
                        <span class="font-semibold">{{ $quote->customer_name }}</span>
                    </div>
                    
                    <div class="flex justify-between">
                        <span class="text-gray-600">Phone:</span>
                        <span class="font-semibold">{{ $quote->customer_phone }}</span>
                    </div>
                    
                    <div class="border-t pt-3">
                        <div class="flex justify-between">
                            <span class="text-gray-600">From:</span>
                            <span class="text-sm">{{ $quote->from_address }}</span>
                        </div>
                        
                        <div class="flex justify-between mt-2">
                            <span class="text-gray-600">To:</span>
                            <span class="text-sm">{{ $quote->to_address }}</span>
                        </div>
                    </div>
                    
                    <div class="border-t pt-3">
                        <div class="flex justify-between">
                            <span class="text-gray-600">Total Price:</span>
                            <span class="text-xl font-bold text-blue-600">${{ number_format($quote->total, 2) }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- What's Next -->
            <div class="bg-blue-50 p-6 rounded-lg text-left mb-8">
                <h2 class="text-lg font-semibold text-gray-900 mb-3">What Happens Next?</h2>
                <ol class="space-y-2 text-gray-700">
                    <li class="flex items-start">
                        <span class="font-bold mr-2">1.</span>
                        <span>Our driver will call you when they're on the way</span>
                    </li>
                    <li class="flex items-start">
                        <span class="font-bold mr-2">2.</span>
                        <span>They'll arrive at your location within 20-30 minutes</span>
                    </li>
                    <li class="flex items-start">
                        <span class="font-bold mr-2">3.</span>
                        <span>Payment is collected after the service is complete</span>
                    </li>
                </ol>
            </div>

            <!-- Contact Info -->
            <div class="text-center">
                <p class="text-gray-600 mb-4">
                    Need to make changes or have questions?
                </p>
                <a href="tel:+15097977999" class="inline-flex items-center gap-2 bg-blue-600 text-white py-3 px-6 rounded-lg hover:bg-blue-700 transition font-semibold">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                    </svg>
                    Call Us: (509) 797-7999
                </a>
            </div>

            <!-- Back to Home -->
            <div class="mt-8">
                <a href="/" class="text-blue-600 hover:text-blue-800 font-medium">
                    ← Back to Home
                </a>
            </div>
        </div>
    </div>
</div>
</body>
</html>