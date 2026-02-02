<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Frequently Asked Questions - Spokane Towing</title>
    <meta name="description" content="Common questions about towing services in Spokane. Learn about costs, response times, service areas, and what to expect when you call us.">
    <link rel="canonical" href="{{ url('/faq') }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/faq') }}">
    <meta property="og:title" content="Frequently Asked Questions - Spokane Towing">
    <meta property="og:description" content="Common questions about towing services in Spokane. Learn about costs, response times, service areas, and what to expect when you call us.">
    <meta property="og:image" content="{{ url('/images/og-image.jpg') }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Frequently Asked Questions - Spokane Towing">
    <meta name="twitter:description" content="Common questions about towing services in Spokane. Learn about costs, response times, and service areas.">
    <meta name="twitter:image" content="{{ url('/images/og-image.jpg') }}">

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <!-- Fonts -->
    @include('partials.fonts')

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @include('partials.schema-faq')

    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://spokanetowing.com"
        },
        {
          "@@type": "ListItem",
          "position": 2,
          "name": "FAQ",
          "item": "https://spokanetowing.com/faq"
        }
      ]
    }
    </script>
    @include('partials.clarity')
</head>
<body class="antialiased bg-black text-white">
    <!-- Header -->
    <header class="fixed top-0 w-full z-50">
        <div class="absolute inset-0 bg-slate-900/90 backdrop-blur-md border-b border-white/10"></div>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="flex justify-between items-center h-20">
                <a href="/">
                    <img src="/header-logo.webp" alt="Spokane Towing" class="h-20 w-auto">
                </a>
                <nav class="hidden md:flex items-center space-x-8">
                    <a href="/spokane-towing-services" class="text-gray-300 hover:text-white transition font-medium">Services</a>
                    <a href="/#quote" class="text-gray-300 hover:text-white transition font-medium">Get Quote</a>
                    <a href="/faq" class="text-white font-medium">FAQ</a>
                    <a href="tel:+15097977999" class="bg-gradient-to-r from-red-600 to-red-700 text-white px-6 py-3 rounded-xl hover:from-red-700 hover:to-red-800 transition font-semibold shadow-lg shadow-red-600/25 flex items-center space-x-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        <span>(509) 797-7999</span>
                    </a>
                </nav>
                <div class="md:hidden">
                    <a href="tel:+15097977999" class="bg-gradient-to-r from-red-600 to-red-700 text-white px-4 py-2 rounded-lg font-semibold text-sm flex items-center space-x-1">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        <span>Call Now</span>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="pt-56 pb-16 bg-slate-900">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center">
                <div class="inline-flex items-center space-x-2 bg-red-600/20 border border-red-600/30 rounded-full px-4 py-2 mb-6">
                    <svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span class="text-red-400 text-sm font-medium">Help Center</span>
                </div>
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Frequently Asked Questions</h1>
                <p class="text-xl text-gray-400">Find answers to common questions about our towing services in Spokane.</p>
            </div>
        </div>
    </section>

    <!-- FAQ Content -->
    <section class="py-16 bg-black">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto space-y-8">
                <!-- Pricing Questions -->
                <div class="bg-slate-800/50 backdrop-blur-sm rounded-2xl p-8 border border-slate-700/50">
                    <div class="flex items-center space-x-3 mb-6">
                        <div class="w-10 h-10 bg-gradient-to-br from-red-600 to-red-700 rounded-xl flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h2 class="text-xl font-bold text-white">Pricing & Payment</h2>
                    </div>
                    <div class="space-y-6">
                        <div class="border-l-2 border-red-600 pl-4">
                            <h3 class="font-semibold text-white mb-2">How much does a tow cost?</h3>
                            <p class="text-gray-400">Our pricing includes a hook fee plus mileage. Local tows typically range from $75-$150 depending on distance. We provide upfront quotes before service.</p>
                        </div>
                        <div class="border-l-2 border-red-600 pl-4">
                            <h3 class="font-semibold text-white mb-2">What payment methods do you accept?</h3>
                            <p class="text-gray-400">We accept cash, credit cards, and debit cards. Payment is collected after the service is completed.</p>
                        </div>
                        <div class="border-l-2 border-red-600 pl-4">
                            <h3 class="font-semibold text-white mb-2">Are there any hidden fees?</h3>
                            <p class="text-gray-400">No, we provide transparent pricing upfront. The only additional charges would be for special circumstances like winching or off-road recovery, which we'll discuss before proceeding.</p>
                        </div>
                    </div>
                </div>

                <!-- Service Hours -->
                <div class="bg-slate-800/50 backdrop-blur-sm rounded-2xl p-8 border border-slate-700/50">
                    <div class="flex items-center space-x-3 mb-6">
                        <div class="w-10 h-10 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h2 class="text-xl font-bold text-white">Service Hours & Availability</h2>
                    </div>
                    <div class="space-y-6">
                        <div class="border-l-2 border-green-500 pl-4">
                            <h3 class="font-semibold text-white mb-2">What are your service hours?</h3>
                            <p class="text-gray-400">We provide 24/7 emergency towing services, 365 days a year. We're here whenever you need us, day or night.</p>
                        </div>
                        <div class="border-l-2 border-green-500 pl-4">
                            <h3 class="font-semibold text-white mb-2">How quickly can you arrive?</h3>
                            <p class="text-gray-400">Our average response time is 20-30 minutes within Spokane city limits. We'll provide an estimated arrival time when you call.</p>
                        </div>
                        <div class="border-l-2 border-green-500 pl-4">
                            <h3 class="font-semibold text-white mb-2">Do you provide roadside assistance?</h3>
                            <p class="text-gray-400">Yes, we offer jump starts, tire changes, lockout services, and fuel delivery in addition to towing services.</p>
                        </div>
                    </div>
                </div>

                <!-- Coverage Areas -->
                <div class="bg-slate-800/50 backdrop-blur-sm rounded-2xl p-8 border border-slate-700/50">
                    <div class="flex items-center space-x-3 mb-6">
                        <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <h2 class="text-xl font-bold text-white">Coverage Areas</h2>
                    </div>
                    <div class="space-y-6">
                        <div class="border-l-2 border-blue-500 pl-4">
                            <h3 class="font-semibold text-white mb-2">Where do you provide service?</h3>
                            <p class="text-gray-400">We serve Spokane and surrounding areas including Spokane Valley, Liberty Lake, Cheney, and Airway Heights. Long-distance tows are available upon request.</p>
                        </div>
                        <div class="border-l-2 border-blue-500 pl-4">
                            <h3 class="font-semibold text-white mb-2">Do you tow to other cities?</h3>
                            <p class="text-gray-400">Yes, we can tow to other cities and states. Additional charges apply for long-distance tows, which we'll discuss upfront.</p>
                        </div>
                        <div class="border-l-2 border-blue-500 pl-4">
                            <h3 class="font-semibold text-white mb-2">Do you service highways and rural areas?</h3>
                            <p class="text-gray-400">Absolutely. We provide service on all major highways around Spokane and can reach rural locations. Response times may vary for remote areas.</p>
                        </div>
                    </div>
                </div>

                <!-- Vehicle Types -->
                <div class="bg-slate-800/50 backdrop-blur-sm rounded-2xl p-8 border border-slate-700/50">
                    <div class="flex items-center space-x-3 mb-6">
                        <div class="w-10 h-10 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0"></path>
                            </svg>
                        </div>
                        <h2 class="text-xl font-bold text-white">Vehicle Types & Special Situations</h2>
                    </div>
                    <div class="space-y-6">
                        <div class="border-l-2 border-purple-500 pl-4">
                            <h3 class="font-semibold text-white mb-2">What types of vehicles can you tow?</h3>
                            <p class="text-gray-400">We can tow cars, trucks, SUVs, motorcycles, and light commercial vehicles. We have specialized equipment for different vehicle types.</p>
                        </div>
                        <div class="border-l-2 border-purple-500 pl-4">
                            <h3 class="font-semibold text-white mb-2">Can you tow AWD or 4WD vehicles?</h3>
                            <p class="text-gray-400">Yes, we have flatbed trucks specifically for all-wheel drive and four-wheel drive vehicles to prevent drivetrain damage.</p>
                        </div>
                        <div class="border-l-2 border-purple-500 pl-4">
                            <h3 class="font-semibold text-white mb-2">What if my car is stuck or in an accident?</h3>
                            <p class="text-gray-400">We provide winching and recovery services for stuck vehicles and can safely remove vehicles from accident scenes when cleared by authorities.</p>
                        </div>
                    </div>
                </div>

                <!-- Still Have Questions CTA -->
                <div class="bg-gradient-to-r from-red-600 to-red-700 rounded-2xl p-8 text-center relative overflow-hidden">
                    <div class="absolute inset-0 bg-black/10"></div>
                    <div class="relative">
                        <h2 class="text-2xl font-bold text-white mb-2">Still have questions?</h2>
                        <p class="text-white/90 mb-6">Our friendly dispatchers are available 24/7 to help.</p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            <a href="tel:+15097977999" class="bg-white text-red-700 px-8 py-4 rounded-xl hover:bg-gray-100 transition font-bold text-lg inline-flex items-center justify-center space-x-2 shadow-lg">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                                <span>(509) 797-7999</span>
                            </a>
                            <a href="/" class="bg-white/20 text-white px-8 py-4 rounded-xl hover:bg-white/30 transition font-semibold text-lg border border-white/30">
                                Back to Home
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black border-t border-slate-800">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="flex items-center space-x-3 mb-6 md:mb-0">
                    <img src="/header-logo.webp" alt="Spokane Towing" class="h-20 w-auto">
                </div>

                <div class="flex flex-wrap justify-center gap-6 mb-6 md:mb-0">
                    <a href="/spokane-towing-services" class="text-gray-400 hover:text-white transition">Services</a>
                    <a href="/faq" class="text-gray-400 hover:text-white transition">FAQ</a>
                    <a href="/#quote" class="text-gray-400 hover:text-white transition">Get Quote</a>
                    <a href="/privacy-policy" class="text-gray-400 hover:text-white transition">Privacy</a>
                    <a href="/terms-of-service" class="text-gray-400 hover:text-white transition">Terms</a>
                </div>

                <div class="text-gray-500 text-sm">
                    Licensed & Insured | Serving Spokane Since 2010
                </div>
            </div>

            <div class="mt-8 pt-8 border-t border-slate-800 text-center text-gray-500 text-sm">
                &copy; {{ date('Y') }} Spokane Towing. All rights reserved.
            </div>
        </div>
    </footer>
</body>
</html>
