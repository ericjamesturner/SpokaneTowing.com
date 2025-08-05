<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Booking Confirmed - Spokane Towing</title>
    
    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <!-- Fonts -->
    @include('partials.fonts')

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @include('partials.clarity')
</head>
<body class="antialiased bg-gray-50 text-gray-900">
    <!-- Header -->
    <header class="bg-gray-900/90 backdrop-blur-sm border-b border-gray-700">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <a href="/" class="text-xl font-bold text-white hover:text-gray-200 transition">Spokane Towing</a>
                </div>
                <a href="tel:+15097977999" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition font-semibold">
                    Call Now: (509) 797-7999
                </a>
            </div>
        </div>
    </header>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="max-w-3xl mx-auto">
            <!-- Success Message -->
            <div class="bg-green-50 border border-green-200 rounded-lg p-6 mb-8">
                <div class="flex items-start">
                    <svg class="w-6 h-6 text-green-600 mr-3 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <div>
                        <h1 class="text-2xl font-bold text-green-900 mb-2">Booking Confirmed!</h1>
                        <p class="text-green-700">Your tow has been booked successfully. We'll call you shortly to confirm the details.</p>
                    </div>
                </div>
            </div>

            <!-- Booking Details -->
            <div class="bg-white rounded-lg border border-gray-200 shadow-sm mb-8">
                <div class="p-6 border-b border-gray-200">
                    <h2 class="text-xl font-bold text-gray-900">Booking Details</h2>
                </div>
                
                <div class="p-6 space-y-6">
                    @if(session('booking_details'))
                        @php
                            $details = session('booking_details');
                        @endphp
                        
                        <!-- Customer Information -->
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-3">Customer Information</h3>
                            <div class="grid gap-2 text-sm">
                                <div class="flex">
                                    <span class="text-gray-600 w-32">Name:</span>
                                    <span class="text-gray-900">{{ $details['customerName'] ?? 'N/A' }}</span>
                                </div>
                                <div class="flex">
                                    <span class="text-gray-600 w-32">Phone:</span>
                                    <span class="text-gray-900">{{ $details['customerPhone'] ?? 'N/A' }}</span>
                                </div>
                                <div class="flex">
                                    <span class="text-gray-600 w-32">Email:</span>
                                    <span class="text-gray-900">{{ $details['customerEmail'] ?? 'N/A' }}</span>
                                </div>
                                <div class="flex">
                                    <span class="text-gray-600 w-32">Home Address:</span>
                                    <span class="text-gray-900">{{ $details['homeAddress'] ?? 'N/A' }}</span>
                                </div>
                            </div>
                        </div>

                        <!-- Vehicle Information -->
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-3">Vehicle Information</h3>
                            <div class="grid gap-2 text-sm">
                                <div class="flex">
                                    <span class="text-gray-600 w-32">Vehicle:</span>
                                    <span class="text-gray-900">{{ $details['vehicleInfo'] ?? 'N/A' }}</span>
                                </div>
                                <div class="flex">
                                    <span class="text-gray-600 w-32">Problem:</span>
                                    <span class="text-gray-900">{{ $details['problem'] ?? 'N/A' }}</span>
                                </div>
                            </div>
                        </div>

                        <!-- Towing Details -->
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-3">Towing Details</h3>
                            <div class="grid gap-2 text-sm">
                                <div class="flex">
                                    <span class="text-gray-600 w-32">From:</span>
                                    <span class="text-gray-900">{{ $details['fromAddress'] ?? 'N/A' }}</span>
                                </div>
                                <div class="flex">
                                    <span class="text-gray-600 w-32">To:</span>
                                    <span class="text-gray-900">{{ $details['toAddress'] ?? 'N/A' }}</span>
                                </div>
                                @if(isset($details['quote']))
                                <div class="flex">
                                    <span class="text-gray-600 w-32">Distance:</span>
                                    <span class="text-gray-900">{{ $details['quote']['distance'] ?? 'N/A' }} miles</span>
                                </div>
                                <div class="flex">
                                    <span class="text-gray-600 w-32">Est. Duration:</span>
                                    <span class="text-gray-900">{{ $details['quote']['duration'] ?? 'N/A' }} minutes</span>
                                </div>
                                @endif
                            </div>
                        </div>

                        <!-- Pricing -->
                        @if(isset($details['quote']))
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-3">Pricing</h3>
                            <div class="bg-gray-50 rounded-lg p-4">
                                <div class="space-y-2 text-sm">
                                    <div class="flex justify-between">
                                        <span class="text-gray-600">Hook Fee:</span>
                                        <span class="text-gray-900 font-medium">${{ number_format($details['quote']['hookFee'] ?? 0, 2) }}</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-gray-600">Mileage ({{ $details['quote']['distance'] ?? 0 }} mi × ${{ number_format(config('towing.pricing.per_mile'), 2) }}):</span>
                                        <span class="text-gray-900 font-medium">${{ number_format($details['quote']['mileageCharge'] ?? 0, 2) }}</span>
                                    </div>
                                    <div class="border-t pt-2 mt-2">
                                        <div class="flex justify-between text-base">
                                            <span class="text-gray-900 font-semibold">Total:</span>
                                            <span class="text-gray-900 font-bold">${{ number_format($details['quote']['total'] ?? 0, 2) }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif

                        <!-- Booking Time -->
                        <div class="text-sm text-gray-600">
                            <span>Booking submitted at: {{ $details['bookingTime'] ?? 'N/A' }}</span>
                        </div>
                    @else
                        <p class="text-gray-600">No booking details available.</p>
                    @endif
                </div>
            </div>

            <!-- What's Next -->
            <div class="bg-blue-50 rounded-lg p-6 mb-8">
                <h2 class="text-lg font-semibold text-gray-900 mb-3">What happens next?</h2>
                <ol class="space-y-2 text-gray-700">
                    <li class="flex">
                        <span class="mr-2">1.</span>
                        <span>Our dispatcher will call you within 5-10 minutes to confirm your location and provide an exact arrival time</span>
                    </li>
                    <li class="flex">
                        <span class="mr-2">2.</span>
                        <span>You'll receive SMS updates about your driver's status</span>
                    </li>
                    <li class="flex">
                        <span class="mr-2">3.</span>
                        <span>Our driver will arrive within the estimated timeframe (usually 20-30 minutes)</span>
                    </li>
                    <li class="flex">
                        <span class="mr-2">4.</span>
                        <span>Payment is collected after the service is completed</span>
                    </li>
                </ol>
            </div>

            <!-- Actions -->
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="/" class="flex-1 bg-gray-200 text-gray-700 py-3 px-6 rounded-lg hover:bg-gray-300 transition font-semibold text-center">
                    Back to Home
                </a>
                <a href="tel:+15097977999" class="flex-1 bg-blue-600 text-white py-3 px-6 rounded-lg hover:bg-blue-700 transition font-semibold text-center">
                    Call Us Now: (509) 797-7999
                </a>
            </div>
        </div>
    </div>
</body>
</html>