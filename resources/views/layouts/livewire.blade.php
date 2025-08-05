<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>{{ $title ?? 'Spokane Towing' }}</title>
    <meta name="description" content="{{ $description ?? 'Professional towing services in Spokane, WA' }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @include('partials.clarity')
    @livewireStyles
</head>
<body class="bg-gray-50">
    <div class="min-h-screen bg-gray-50 py-12">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-6">
                <a href="/" class="text-blue-600 hover:text-blue-800 flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    Back to Home
                </a>
            </div>

            <!-- Quote Summary -->
            @if(isset($quote))
            <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm mb-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Your Quote Summary</h2>
                
                <div class="grid md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <p class="text-sm text-gray-600">Quote Number</p>
                        <p class="font-semibold">{{ $quote->quote_number }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Total Price</p>
                        <p class="text-2xl font-bold text-blue-600">${{ number_format($quote->total, 2) }}</p>
                    </div>
                </div>
                
                <div class="border-t pt-4 space-y-2">
                    <div class="flex justify-between">
                        <span class="text-gray-600">From:</span>
                        <span class="text-gray-900">{{ $quote->from_address }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600">To:</span>
                        <span class="text-gray-900">{{ $quote->to_address }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600">Distance:</span>
                        <span class="text-gray-900">{{ $quote->distance }} miles</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600">Arrival Time:</span>
                        <span class="text-gray-900">20-30 minutes</span>
                    </div>
                </div>
            </div>
            @endif

            <!-- Booking Form -->
            <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Complete Your Booking</h2>
                {{ $slot }}
            </div>
        </div>
    </div>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key={{ config('towing.google_maps.api_key') }}&libraries=places"></script>
    @livewireScripts
    @stack('scripts')
</body>
</html>