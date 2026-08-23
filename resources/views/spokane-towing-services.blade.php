<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Spokane Towing Services | Emergency Towing, Roadside Assistance & More</title>
    <meta name="description" content="Full-service towing company in Spokane, WA. Emergency towing, roadside assistance, flatbed transport, heavy duty & long distance towing. 20-30 min response. Call (509) 797-7999">

    <link rel="canonical" href="{{ url('/spokane-towing-services') }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/spokane-towing-services') }}">
    <meta property="og:title" content="Spokane Towing Services | Emergency Towing, Roadside Assistance & More">
    <meta property="og:description" content="Full-service towing company in Spokane, WA. Emergency towing, roadside assistance, flatbed transport, heavy duty & long distance towing. 20-30 min response. Call (509) 797-7999">
    <meta property="og:image" content="{{ url('/images/og-image.jpg') }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Spokane Towing Services | Emergency Towing, Roadside Assistance & More">
    <meta name="twitter:description" content="Full-service towing company in Spokane, WA. Emergency towing, roadside assistance, flatbed transport, heavy duty & long distance towing. 20-30 min response. Call (509) 797-7999">
    <meta name="twitter:image" content="{{ url('/images/og-image.jpg') }}">

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    @include('partials.fonts')
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Schema.org Structured Data -->
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "TowingService",
        "name": "Spokane Towing Services",
        "image": "{{ asset('images/hero.jpg') }}",
        "url": "{{ url('/spokane-towing-services') }}",
        "telephone": "+15097977999",
        "priceRange": "$$",
        "address": {
            "@@type": "PostalAddress",
            "addressLocality": "Spokane",
            "addressRegion": "WA",
            "addressCountry": "US"
        },
        "geo": {
            "@@type": "GeoCoordinates",
            "latitude": 47.6588,
            "longitude": -117.4260
        },
        "serviceArea": {
            "@@type": "GeoCircle",
            "geoMidpoint": {
                "@@type": "GeoCoordinates",
                "latitude": 47.6588,
                "longitude": -117.4260
            },
            "geoRadius": "50000"
        },
        "openingHoursSpecification": {
            "@@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
            "opens": "00:00",
            "closes": "23:59"
        },
        "hasOfferCatalog": {
            "@@type": "OfferCatalog",
            "name": "Towing Services",
            "itemListElement": [
                {
                    "@@type": "Offer",
                    "itemOffered": {
                        "@@type": "Service",
                        "name": "Emergency Towing",
                        "description": "24/7 emergency towing services in Spokane"
                    }
                },
                {
                    "@@type": "Offer",
                    "itemOffered": {
                        "@@type": "Service",
                        "name": "Roadside Assistance",
                        "description": "Jump starts, tire changes, lockouts, and fuel delivery"
                    }
                },
                {
                    "@@type": "Offer",
                    "itemOffered": {
                        "@@type": "Service",
                        "name": "Accident Recovery",
                        "description": "Professional accident scene recovery and cleanup"
                    }
                }
            ]
        }
    }
    </script>

    <script type="application/ld+json">
    {!! json_encode([
        "@@context" => "https://schema.org",
        "@@type" => "FAQPage",
        "mainEntity" => [
            [
                "@@type" => "Question",
                "name" => "How much do Spokane towing services cost?",
                "acceptedAnswer" => [
                    "@@type" => "Answer",
                    "text" => "Our towing rates are a $140 hook fee plus $6 per mile, with a $200 minimum. We offer competitive pricing with transparent rates and no hidden fees. Call for an instant quote or use our online calculator for exact pricing."
                ]
            ],
            [
                "@@type" => "Question",
                "name" => "Do you provide 24/7 towing services in Spokane?",
                "acceptedAnswer" => [
                    "@@type" => "Answer",
                    "text" => "Yes, our Spokane towing services are available 24 hours a day, 7 days a week, 365 days a year including holidays. We're always ready to help when you need us."
                ]
            ],
            [
                "@@type" => "Question",
                "name" => "What areas do your Spokane towing services cover?",
                "acceptedAnswer" => [
                    "@@type" => "Answer",
                    "text" => "We service all of Spokane County including Spokane Valley, Liberty Lake, Cheney, Deer Park, Airway Heights, and surrounding areas. We also serve Coeur d'Alene, Post Falls, and Hayden in North Idaho."
                ]
            ],
            [
                "@@type" => "Question",
                "name" => "Can you tow my vehicle to any location?",
                "acceptedAnswer" => [
                    "@@type" => "Answer",
                    "text" => "Yes, we can tow your vehicle to any repair shop, dealership, or location of your choice within our service area. Long-distance towing is also available for interstate transport."
                ]
            ]
        ]
    ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
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
                    <a href="/spokane-towing-services" class="text-red-500 font-medium">Services</a>
                    <a href="/#quote" class="text-gray-300 hover:text-white transition font-medium">Get Quote</a>
                    <a href="/faq" class="text-gray-300 hover:text-white transition font-medium">FAQ</a>
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
    <section class="pt-56 pb-20 bg-slate-900 relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-red-600/5 to-transparent"></div>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="max-w-4xl mx-auto">
                <nav class="mb-6 flex items-center text-sm">
                    <a href="/" class="text-gray-400 hover:text-red-500 transition">Home</a>
                    <svg class="w-4 h-4 mx-2 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                    <span class="text-white">Spokane Towing Services</span>
                </nav>

                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">
                    Spokane <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-600 to-red-500">Towing Services</span>
                </h1>
                <p class="text-xl text-gray-300 mb-8">
                    Professional, Reliable, and Affordable Towing Solutions Throughout Spokane County
                </p>

                <div class="grid md:grid-cols-3 gap-6 mb-8">
                    <div class="bg-slate-800/50 backdrop-blur-sm p-6 rounded-2xl border border-slate-700/50">
                        <div class="text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-red-600 to-red-500">24/7</div>
                        <div class="text-gray-400">Emergency Service</div>
                    </div>
                    <div class="bg-slate-800/50 backdrop-blur-sm p-6 rounded-2xl border border-slate-700/50">
                        <div class="text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-red-600 to-red-500">20-30</div>
                        <div class="text-gray-400">Minutes Average Arrival</div>
                    </div>
                    <div class="bg-slate-800/50 backdrop-blur-sm p-6 rounded-2xl border border-slate-700/50">
                        <div class="text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-red-600 to-red-500">50+</div>
                        <div class="text-gray-400">Mile Service Area</div>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="tel:+15097977999" class="bg-gradient-to-r from-red-600 to-red-700 text-white px-8 py-4 rounded-xl hover:from-red-700 hover:to-red-800 transition font-semibold text-lg text-center shadow-lg shadow-red-600/25 flex items-center justify-center space-x-2">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        <span>Call (509) 797-7999</span>
                    </a>
                    <a href="/#quote" class="bg-white/10 backdrop-blur-sm text-white px-8 py-4 rounded-xl hover:bg-white/20 transition font-semibold text-lg text-center border border-white/20">
                        Get Instant Quote
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Overview -->
    <section class="py-20 bg-black">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl font-bold mb-8 text-white">Comprehensive Spokane Towing Services</h2>

                <div class="prose prose-invert prose-lg max-w-none mb-12 prose-p:text-gray-300">
                    <p>
                        When you need professional towing services in Spokane, WA, we're here to help 24 hours a day, 7 days a week.
                        Our comprehensive Spokane towing services cover everything from emergency roadside assistance to heavy-duty commercial vehicle recovery.
                    </p>
                    <p>
                        As a locally-owned and operated towing company, we understand the unique needs of Spokane drivers. Whether you're stranded
                        on I-90, stuck in downtown Spokane, or need assistance anywhere in Spokane County, our fleet of modern tow trucks and
                        experienced operators are ready to respond quickly.
                    </p>
                </div>

                <div class="grid md:grid-cols-2 gap-8 mb-12">
                    <div class="bg-slate-800/50 backdrop-blur-sm p-8 rounded-2xl border border-slate-700/50">
                        <h3 class="text-2xl font-semibold mb-6 text-white">Emergency Towing Services</h3>
                        <ul class="space-y-4 text-gray-300">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-red-500 mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <a href="/24-hour-towing" class="hover:text-red-500 transition">24/7 emergency response throughout Spokane</a>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-red-500 mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <a href="/24-hour-towing" class="hover:text-red-500 transition">Accident recovery and wrecker service</a>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-red-500 mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <a href="/24-hour-towing" class="hover:text-red-500 transition">Vehicle breakdown towing</a>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-red-500 mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <a href="/winch-out-recovery" class="hover:text-red-500 transition">Off-road and winch-out recovery</a>
                            </li>
                        </ul>
                        <a href="/24-hour-towing" class="inline-flex items-center mt-6 text-red-500 hover:text-red-400 font-semibold transition">
                            24 Hour Towing details
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </a>
                    </div>

                    <div class="bg-slate-800/50 backdrop-blur-sm p-8 rounded-2xl border border-slate-700/50">
                        <h3 class="text-2xl font-semibold mb-6 text-white">Roadside Assistance</h3>
                        <ul class="space-y-4 text-gray-300">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-red-500 mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <a href="/battery-jump-start" class="hover:text-red-500 transition">Battery jump start services</a>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-red-500 mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <a href="/lockout-flat-tire" class="hover:text-red-500 transition">Flat tire changes</a>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-red-500 mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <a href="/lockout-flat-tire" class="hover:text-red-500 transition">Lockout assistance</a>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-red-500 mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <a href="/roadside-assistance" class="hover:text-red-500 transition">Emergency fuel delivery</a>
                            </li>
                        </ul>
                        <a href="/roadside-assistance" class="inline-flex items-center mt-6 text-red-500 hover:text-red-400 font-semibold transition">
                            Roadside Assistance details
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </a>
                    </div>
                </div>

                <!-- All Services -->
                <div class="mb-12">
                    <h3 class="text-2xl font-semibold mb-6 text-white">Explore All Our Towing Services</h3>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                        <a href="/24-hour-towing" class="bg-slate-800/50 border border-slate-700/50 rounded-xl px-5 py-4 text-gray-300 hover:text-white hover:border-red-500/50 transition">24 Hour Emergency Towing</a>
                        <a href="/roadside-assistance" class="bg-slate-800/50 border border-slate-700/50 rounded-xl px-5 py-4 text-gray-300 hover:text-white hover:border-red-500/50 transition">Roadside Assistance</a>
                        <a href="/battery-jump-start" class="bg-slate-800/50 border border-slate-700/50 rounded-xl px-5 py-4 text-gray-300 hover:text-white hover:border-red-500/50 transition">Battery Jump Start</a>
                        <a href="/lockout-flat-tire" class="bg-slate-800/50 border border-slate-700/50 rounded-xl px-5 py-4 text-gray-300 hover:text-white hover:border-red-500/50 transition">Lockout & Flat Tire</a>
                        <a href="/flatbed-towing" class="bg-slate-800/50 border border-slate-700/50 rounded-xl px-5 py-4 text-gray-300 hover:text-white hover:border-red-500/50 transition">Flatbed Towing</a>
                        <a href="/heavy-duty-towing" class="bg-slate-800/50 border border-slate-700/50 rounded-xl px-5 py-4 text-gray-300 hover:text-white hover:border-red-500/50 transition">Heavy Duty Towing</a>
                        <a href="/commercial-towing" class="bg-slate-800/50 border border-slate-700/50 rounded-xl px-5 py-4 text-gray-300 hover:text-white hover:border-red-500/50 transition">Commercial Towing</a>
                        <a href="/motorcycle-towing" class="bg-slate-800/50 border border-slate-700/50 rounded-xl px-5 py-4 text-gray-300 hover:text-white hover:border-red-500/50 transition">Motorcycle Towing</a>
                        <a href="/winch-out-recovery" class="bg-slate-800/50 border border-slate-700/50 rounded-xl px-5 py-4 text-gray-300 hover:text-white hover:border-red-500/50 transition">Winch Out & Recovery</a>
                        <a href="/long-distance-towing" class="bg-slate-800/50 border border-slate-700/50 rounded-xl px-5 py-4 text-gray-300 hover:text-white hover:border-red-500/50 transition">Long Distance Towing</a>
                        <a href="/#quote" class="bg-red-600/20 border border-red-600/30 rounded-xl px-5 py-4 text-red-400 hover:text-red-300 hover:border-red-500/50 transition font-semibold">Get an Instant Quote →</a>
                    </div>
                </div>

                <!-- Types of Vehicles -->
                <div class="bg-red-600/10 border border-red-600/30 p-8 rounded-2xl mb-12">
                    <h3 class="text-2xl font-semibold mb-6 text-white">Types of Vehicles We Tow</h3>
                    <div class="grid md:grid-cols-3 gap-8">
                        <div>
                            <h4 class="font-semibold text-red-500 mb-3"><a href="/flatbed-towing" class="hover:underline">Light-Duty Towing</a></h4>
                            <ul class="space-y-2 text-gray-300">
                                <li>• Cars and sedans</li>
                                <li>• SUVs and crossovers</li>
                                <li>• Pickup trucks</li>
                                <li>• <a href="/motorcycle-towing" class="hover:text-red-500 transition underline decoration-slate-600 hover:decoration-red-500">Motorcycles</a></li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-semibold text-red-500 mb-3"><a href="/commercial-towing" class="hover:underline">Medium-Duty Towing</a></h4>
                            <ul class="space-y-2 text-gray-300">
                                <li>• Box trucks</li>
                                <li>• RVs and motorhomes</li>
                                <li>• Delivery vehicles</li>
                                <li>• Small buses</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-semibold text-red-500 mb-3"><a href="/heavy-duty-towing" class="hover:underline">Heavy-Duty Towing</a></h4>
                            <ul class="space-y-2 text-gray-300">
                                <li>• Semi-trucks</li>
                                <li>• Commercial vehicles</li>
                                <li>• Construction equipment</li>
                                <li>• Large buses</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Service Areas -->
                <div class="mb-12">
                    <h3 class="text-2xl font-semibold mb-6 text-white">Spokane Towing Services Coverage Area</h3>
                    <p class="text-gray-300 mb-6">
                        Our Spokane towing services extend throughout Spokane County and surrounding areas. We provide fast response times to all major highways, neighborhoods, and business districts.
                    </p>
                    <div class="grid md:grid-cols-3 gap-6">
                        <div class="bg-slate-800/50 backdrop-blur-sm p-6 rounded-2xl border border-slate-700/50">
                            <h4 class="font-semibold text-white mb-3">Major Highways</h4>
                            <ul class="text-gray-400 space-y-2">
                                <li>• Interstate 90</li>
                                <li>• US Route 2</li>
                                <li>• US Route 195</li>
                                <li>• US Route 395</li>
                                <li>• State Route 290</li>
                            </ul>
                        </div>
                        <div class="bg-slate-800/50 backdrop-blur-sm p-6 rounded-2xl border border-slate-700/50">
                            <h4 class="font-semibold text-white mb-3">Spokane Neighborhoods</h4>
                            <ul class="text-gray-400 space-y-2">
                                <li>• Downtown Spokane</li>
                                <li>• South Hill</li>
                                <li>• North Side</li>
                                <li>• <a href="/towing-spokane-valley" class="hover:text-red-500 transition">Spokane Valley</a></li>
                                <li>• West Plains</li>
                            </ul>
                        </div>
                        <div class="bg-slate-800/50 backdrop-blur-sm p-6 rounded-2xl border border-slate-700/50">
                            <h4 class="font-semibold text-white mb-3">Nearby Cities</h4>
                            <ul class="text-gray-400 space-y-2">
                                <li>• <a href="/towing-cheney" class="hover:text-red-500 transition">Cheney</a></li>
                                <li>• <a href="/towing-liberty-lake" class="hover:text-red-500 transition">Liberty Lake</a></li>
                                <li>• <a href="/towing-airway-heights" class="hover:text-red-500 transition">Airway Heights</a></li>
                                <li>• <a href="/towing-medical-lake" class="hover:text-red-500 transition">Medical Lake</a></li>
                                <li>• <a href="/towing-deer-park" class="hover:text-red-500 transition">Deer Park</a></li>
                            </ul>
                        </div>
                    </div>
                    <p class="mt-6">
                        <a href="/service-areas" class="text-red-500 hover:text-red-400 font-semibold transition">View all service areas, including Coeur d'Alene, Post Falls & Sandpoint →</a>
                    </p>
                </div>

                <!-- Why Choose Us -->
                <div class="bg-gradient-to-r from-red-600 to-red-700 p-8 rounded-2xl mb-12 relative overflow-hidden">
                    <div class="absolute inset-0 bg-black/10"></div>
                    <div class="relative">
                        <h3 class="text-2xl font-semibold mb-6 text-white">Why Choose Our Spokane Towing Services?</h3>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <h4 class="font-semibold text-white mb-2">Professional & Experienced</h4>
                                <p class="text-white/80">Our certified tow truck operators have years of experience handling all types of vehicles and towing situations in Spokane.</p>
                            </div>
                            <div>
                                <h4 class="font-semibold text-white mb-2">Fast Response Times</h4>
                                <p class="text-white/80">With strategically located trucks throughout Spokane, we average 20-30 minute arrival times for emergency calls.</p>
                            </div>
                            <div>
                                <h4 class="font-semibold text-white mb-2">Transparent Pricing</h4>
                                <p class="text-white/80">No hidden fees or surprises. We provide upfront quotes for all our Spokane towing services before we begin.</p>
                            </div>
                            <div>
                                <h4 class="font-semibold text-white mb-2">Insurance Approved</h4>
                                <p class="text-white/80">We work with all major insurance companies and can bill directly for covered towing services.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ Section -->
                <div>
                    <h3 class="text-2xl font-semibold mb-6 text-white">Frequently Asked Questions About Spokane Towing Services</h3>
                    <div class="space-y-6">
                        <div class="bg-slate-800/50 backdrop-blur-sm p-6 rounded-2xl border border-slate-700/50">
                            <h4 class="font-semibold text-white mb-2">How much do Spokane towing services cost?</h4>
                            <p class="text-gray-400">Our towing rates are a $140 hook fee plus $6 per mile, with a $200 minimum. We offer competitive pricing with transparent rates and no hidden fees. Call for an instant quote or use our <a href="/#quote" class="text-red-500 hover:text-red-400 transition">online calculator</a> for exact pricing.</p>
                        </div>
                        <div class="bg-slate-800/50 backdrop-blur-sm p-6 rounded-2xl border border-slate-700/50">
                            <h4 class="font-semibold text-white mb-2">Do you provide 24/7 towing services in Spokane?</h4>
                            <p class="text-gray-400">Yes, our Spokane towing services are available 24 hours a day, 7 days a week, including holidays. We're always ready to help when you need us.</p>
                        </div>
                        <div class="bg-slate-800/50 backdrop-blur-sm p-6 rounded-2xl border border-slate-700/50">
                            <h4 class="font-semibold text-white mb-2">What areas do your Spokane towing services cover?</h4>
                            <p class="text-gray-400">We service all of Spokane County including Spokane Valley, Liberty Lake, Cheney, Deer Park, Airway Heights, and surrounding areas. We also serve Coeur d'Alene, Post Falls, and Hayden in North Idaho.</p>
                        </div>
                        <div class="bg-slate-800/50 backdrop-blur-sm p-6 rounded-2xl border border-slate-700/50">
                            <h4 class="font-semibold text-white mb-2">Can you tow my vehicle to any location?</h4>
                            <p class="text-gray-400">Yes, we can tow your vehicle to any repair shop, dealership, or location of your choice within our service area. Long-distance towing is also available.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-slate-900">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-white">Need Spokane Towing Services Now?</h2>
                <p class="text-xl mb-8 text-gray-300">Don't wait by the roadside. Our professional tow truck operators are standing by to help you 24/7.</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="tel:+15097977999" class="bg-gradient-to-r from-red-600 to-red-700 text-white px-8 py-4 rounded-xl hover:from-red-700 hover:to-red-800 transition font-semibold text-lg shadow-lg shadow-red-600/25 flex items-center justify-center space-x-2">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        <span>Call (509) 797-7999</span>
                    </a>
                    <a href="/#quote" class="bg-white/10 backdrop-blur-sm text-white px-8 py-4 rounded-xl hover:bg-white/20 transition font-semibold text-lg border border-white/20">
                        Get Online Quote
                    </a>
                </div>
                <p class="mt-6 text-gray-500">Average arrival time: 20-30 minutes • Available 24/7</p>
            </div>
        </div>
    </section>

    @include('partials.site-footer')
</body>
</html>
