<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Spokane Towing - 24/7 Professional Towing Services</title>
    <meta name="description" content="Fast, reliable towing services in Spokane, WA. Available 24/7 for emergency roadside assistance, vehicle recovery, and more. Call now for a quote!">
    
    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Schema.org Structured Data -->
    @include('partials.schema-local-business')
    @include('partials.schema-website')
    @include('partials.schema-faq')
    
    @if(config('towing.google_maps.api_key'))
        <script>
            ((g) => {
                var h, a, k, p = "The Google Maps JavaScript API", c = "google", l = "importLibrary", q = "__ib__", m = document, b = window;
                b = b[c] || (b[c] = {});
                var d = b.maps || (b.maps = {}), r = new Set, e = new URLSearchParams,
                    u = () => h || (h = new Promise(async (f, n) => {
                        await (a = m.createElement("script"));
                        e.set("libraries", [...r] + "");
                        for (k in g) e.set(k.replace(/[A-Z]/g, t => "_" + t[0].toLowerCase()), g[k]);
                        e.set("callback", c + ".maps." + q);
                        a.src = `https://maps.${c}apis.com/maps/api/js?` + e;
                        d[q] = f;
                        a.onerror = () => h = n(Error(p + " could not load."));
                        a.nonce = m.querySelector("script[nonce]")?.nonce || "";
                        m.head.append(a)
                    }));
                d[l] ? console.warn(p + " only loads once. Ignoring:", g) : d[l] = (f, ...n) => r.add(f) && u().then(() => d[l](f, ...n))
            })({
                key: "{{ config('towing.google_maps.api_key') }}",
                v: "weekly",
                language: "en-US",
                region: "US"
            });
        </script>
    @endif
</head>
<body class="antialiased bg-white text-gray-900">
    <!-- Header -->
    <header class="fixed top-0 w-full bg-gray-900/90 backdrop-blur-sm border-b border-gray-700 z-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <a href="/" class="text-xl font-bold text-white hover:text-gray-200 transition">Spokane Towing</a>
                </div>
                <nav class="hidden md:flex items-center">
                    <a href="tel:+15097977999" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition font-semibold">
                        Call Now: (509) 797-7999
                    </a>
                </nav>
                <div class="md:hidden">
                    <a href="tel:+15097977999" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition font-semibold text-sm">
                        Call Now
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="pt-16 relative overflow-hidden bg-gray-100">
        <div class="absolute inset-0">
            <img 
                src="/images/hero.jpg" 
                alt="Towing service" 
                class="w-full h-full object-cover scale-100 md:scale-75 opacity-30"
                loading="eager"
                width="1536"
                height="1024"
            >
            <div class="absolute inset-0 bg-black/40"></div>
            <div class="absolute inset-0 bg-gradient-to-b from-transparent to-white"></div>
        </div>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-20 relative">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    24/7 Emergency Towing in Spokane
                </h2>
                <p class="text-xl text-gray-700 mb-8">
                    Fast, reliable, and professional towing services when you need them most. 
                    Available around the clock for all your vehicle recovery needs.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="tel:+15097977999" class="bg-blue-600 text-white px-8 py-4 rounded-lg hover:bg-blue-700 transition font-semibold text-lg shadow-lg">
                        Call for Immediate Service
                    </a>
                    <a href="#quote" class="bg-white text-blue-600 px-8 py-4 rounded-lg hover:bg-gray-50 transition font-semibold text-lg border-2 border-blue-600">
                        Get Instant Quote
                    </a>
                </div>
                <p class="mt-6 text-gray-600">Average arrival time: 20-30 minutes</p>
            </div>
        </div>
    </section>

    <!-- Quote Section -->
    <section id="quote" class="py-20 bg-gray-50 relative">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-900 mb-2">
                    Get an Instant Quote
                </h2>
                <p class="text-xl text-center text-gray-600 mb-10">
                    Calculate your towing cost in seconds
                </p>
                
                <form action="{{ route('quote') }}" method="GET" class="space-y-6 max-w-2xl mx-auto">
                    <div>
                        <div class="relative">
                            <input
                                type="text"
                                id="from-address"
                                name="from"
                                placeholder="Pickup location"
                                class="w-full px-4 py-3 pr-12 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-base"
                                required
                            >
                            <button 
                                type="button"
                                onclick="detectLocation('from-address')"
                                class="absolute right-2 top-1/2 -translate-y-1/2 p-2 text-gray-500 hover:text-blue-600 transition"
                                title="Use my location"
                            >
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                    
                    <div>
                        <div class="relative">
                            <input
                                type="text"
                                id="to-address"
                                name="to"
                                placeholder="Drop-off location"
                                class="w-full px-4 py-3 pr-12 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-base"
                                required
                            >
                            <button 
                                type="button"
                                onclick="detectLocation('to-address')"
                                class="absolute right-2 top-1/2 -translate-y-1/2 p-2 text-gray-500 hover:text-blue-600 transition"
                                title="Use my location"
                            >
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                    
                    <button 
                        type="submit"
                        class="w-full bg-blue-600 text-white py-3 px-6 rounded-lg hover:bg-blue-700 transition font-semibold text-lg"
                    >
                        Get Instant Quote
                    </button>
                </form>
                
                
                <script>
                    let fromAutocomplete, toAutocomplete;
                    
                    // Initialize autocomplete when libraries are loaded
                    document.addEventListener('DOMContentLoaded', async () => {
                        try {
                            const { Autocomplete } = await google.maps.importLibrary("places");
                            
                            // Define bounds for 100 miles around Spokane
                            // 100 miles ≈ 1.45 degrees latitude/longitude at this location
                            const spokaneCenter = new google.maps.LatLng(47.6588, -117.4260);
                            const bounds = new google.maps.LatLngBounds(
                                new google.maps.LatLng(46.2088, -118.8760),  // SW corner (~100 miles)
                                new google.maps.LatLng(49.1088, -116.0760)   // NE corner (~100 miles)
                            );
                            
                            // Options for autocomplete
                            const options = {
                                bounds: bounds,
                                componentRestrictions: { country: "us" },
                                fields: ["formatted_address", "geometry", "name"],
                                strictBounds: true,  // Restrict results to bounds
                                types: ["geocode", "establishment"],
                                origin: spokaneCenter
                            };
                            
                            // Initialize autocomplete for both inputs
                            fromAutocomplete = new Autocomplete(
                                document.getElementById('from-address'),
                                options
                            );
                            
                            toAutocomplete = new Autocomplete(
                                document.getElementById('to-address'),
                                options
                            );
                        } catch (e) {
                            console.error('Failed to initialize autocomplete:', e);
                        }
                    });
                    
                    async function detectLocation(fieldId) {
                        if (navigator.geolocation) {
                            try {
                                const { Geocoder } = await google.maps.importLibrary("geocoding");
                                
                                navigator.geolocation.getCurrentPosition(
                                    async (position) => {
                                        const lat = position.coords.latitude;
                                        const lng = position.coords.longitude;
                                        
                                        const geocoder = new Geocoder();
                                        const response = await geocoder.geocode({
                                            location: { lat: lat, lng: lng }
                                        });
                                        
                                        if (response.results && response.results[0]) {
                                            const address = response.results[0].formatted_address;
                                            const input = document.getElementById(fieldId);
                                            if (input) {
                                                input.value = address;
                                            }
                                        }
                                    },
                                    (error) => {
                                        console.error('Error getting location:', error);
                                        alert('Unable to get your location. Please enter address manually.');
                                    }
                                );
                            } catch (e) {
                                console.error('Geocoding failed:', e);
                            }
                        } else {
                            alert('Geolocation is not supported by your browser.');
                        }
                    }
                </script>
                
                <div class="mt-12 text-center">
                    <p class="text-gray-600 mb-4">Prefer to speak with someone?</p>
                    <div class="bg-blue-600 text-white rounded-lg p-6 inline-block">
                        <p class="text-lg mb-2">24/7 Emergency Line</p>
                        <a href="tel:+15097977999" class="text-3xl font-bold hover:underline">
                            (509) 797-7999
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-900 mb-12">
                Our Services
            </h2>
            
            <!-- Main Services Grid -->
            <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto mb-12">
                <a href="/24-hour-towing" class="text-center p-6 hover:bg-gray-50 rounded-lg transition">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">24 Hour Emergency Towing</h3>
                    <p class="text-gray-600">Available 24/7 for breakdowns, accidents, and vehicle recovery.</p>
                </a>
                
                <a href="/roadside-assistance" class="text-center p-6 hover:bg-gray-50 rounded-lg transition">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Roadside Assistance</h3>
                    <p class="text-gray-600">Jump starts, fuel delivery, and emergency roadside help.</p>
                </a>
                
                <a href="/flatbed-towing" class="text-center p-6 hover:bg-gray-50 rounded-lg transition">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Flatbed Towing</h3>
                    <p class="text-gray-600">Safe transport for luxury, classic, and low-clearance vehicles.</p>
                </a>
            </div>
            
            <!-- Additional Services List -->
            <div class="max-w-4xl mx-auto">
                <h3 class="text-2xl font-semibold mb-6 text-center">Complete Service List</h3>
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="space-y-3">
                        <a href="/24-hour-towing" class="flex items-center text-gray-700 hover:text-blue-600">
                            <svg class="w-5 h-5 mr-3 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Local Towing
                        </a>
                        <a href="/long-distance-towing" class="flex items-center text-gray-700 hover:text-blue-600">
                            <svg class="w-5 h-5 mr-3 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Long-Distance Towing
                        </a>
                        <a href="/flatbed-towing" class="flex items-center text-gray-700 hover:text-blue-600">
                            <svg class="w-5 h-5 mr-3 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Flatbed Towing
                        </a>
                        <a href="/24-hour-towing" class="flex items-center text-gray-700 hover:text-blue-600">
                            <svg class="w-5 h-5 mr-3 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Motorcycle Towing
                        </a>
                        <a href="/heavy-duty-towing" class="flex items-center text-gray-700 hover:text-blue-600">
                            <svg class="w-5 h-5 mr-3 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Heavy-Duty Towing
                        </a>
                        <a href="/heavy-duty-towing" class="flex items-center text-gray-700 hover:text-blue-600">
                            <svg class="w-5 h-5 mr-3 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Fleet/Commercial Towing
                        </a>
                        <a href="/winch-out-recovery" class="flex items-center text-gray-700 hover:text-blue-600">
                            <svg class="w-5 h-5 mr-3 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Winch-Outs & Recovery
                        </a>
                    </div>
                    <div class="space-y-3">
                        <a href="/24-hour-towing" class="flex items-center text-gray-700 hover:text-blue-600">
                            <svg class="w-5 h-5 mr-3 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Accident Recovery
                        </a>
                        <a href="/roadside-assistance" class="flex items-center text-gray-700 hover:text-blue-600">
                            <svg class="w-5 h-5 mr-3 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Jump Starts
                        </a>
                        <a href="/roadside-assistance" class="flex items-center text-gray-700 hover:text-blue-600">
                            <svg class="w-5 h-5 mr-3 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Fuel Delivery
                        </a>
                        <a href="/lockout-flat-tire" class="flex items-center text-gray-700 hover:text-blue-600">
                            <svg class="w-5 h-5 mr-3 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Flat Tire Service
                        </a>
                        <a href="/lockout-flat-tire" class="flex items-center text-gray-700 hover:text-blue-600">
                            <svg class="w-5 h-5 mr-3 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Lockout Service
                        </a>
                        <a href="/roadside-assistance" class="flex items-center text-gray-700 hover:text-blue-600">
                            <svg class="w-5 h-5 mr-3 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Roadside Assistance
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section id="about" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                    Why Choose Spokane Towing?
                </h2>
                <div class="grid md:grid-cols-2 gap-6 text-left mt-12">
                    <div class="flex items-start">
                        <svg class="w-6 h-6 text-blue-600 mr-3 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <div>
                            <h3 class="font-semibold mb-1">Fast Response Times</h3>
                            <p class="text-gray-600">Average arrival within 20-30 minutes</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <svg class="w-6 h-6 text-blue-600 mr-3 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <div>
                            <h3 class="font-semibold mb-1">Licensed & Insured</h3>
                            <p class="text-gray-600">Fully licensed and insured for your protection</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <svg class="w-6 h-6 text-blue-600 mr-3 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <div>
                            <h3 class="font-semibold mb-1">Professional Drivers</h3>
                            <p class="text-gray-600">Experienced and courteous service professionals</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <svg class="w-6 h-6 text-blue-600 mr-3 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <div>
                            <h3 class="font-semibold mb-1">Fair Pricing</h3>
                            <p class="text-gray-600">Competitive rates with no hidden fees</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                    Serving Spokane & Surrounding Areas
                </h2>
                <p class="text-xl text-gray-600 mb-8">
                    We provide towing services throughout Spokane County and beyond
                </p>
                <div class="grid md:grid-cols-3 gap-8 text-left">
                    <div>
                        <h3 class="font-semibold mb-2">Contact</h3>
                        <p class="text-gray-600 mb-3">
                            <a href="tel:+15097977999" class="text-blue-600 hover:underline text-xl font-semibold">(509) 797-7999</a>
                        </p>
                        <h3 class="font-semibold mb-2">Service Hours</h3>
                        <p class="text-gray-600">24 Hours a Day<br>7 Days a Week<br>365 Days a Year</p>
                    </div>
                    <div>
                        <h3 class="font-semibold mb-2">Service Areas</h3>
                        <div class="text-gray-600 grid grid-cols-1 gap-1">
                            <a href="/" class="hover:text-blue-600">Spokane, WA</a>
                            <a href="/towing-spokane-valley" class="hover:text-blue-600">Spokane Valley, WA</a>
                            <a href="/towing-cheney" class="hover:text-blue-600">Cheney, WA</a>
                            <a href="/towing-deer-park" class="hover:text-blue-600">Deer Park, WA</a>
                            <a href="/towing-airway-heights" class="hover:text-blue-600">Airway Heights, WA</a>
                            <a href="/towing-liberty-lake" class="hover:text-blue-600">Liberty Lake, WA</a>
                        </div>
                    </div>
                    <div>
                        <h3 class="font-semibold mb-2">&nbsp;</h3>
                        <div class="text-gray-600 grid grid-cols-1 gap-1">
                            <a href="/towing-coeur-d-alene" class="hover:text-blue-600">Coeur d'Alene, ID</a>
                            <a href="/towing-post-falls" class="hover:text-blue-600">Post Falls, ID</a>
                            <a href="/towing-hayden-id" class="hover:text-blue-600">Hayden, ID</a>
                            <a href="/towing-sandpoint" class="hover:text-blue-600">Sandpoint, ID</a>
                            <a href="/towing-colville" class="hover:text-blue-600">Colville, WA</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-8">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <div class="mb-4">
                    <a href="/faq" class="text-gray-400 hover:text-white transition mx-3">FAQ</a>
                    <span class="text-gray-600">|</span>
                    <a href="/#services" class="text-gray-400 hover:text-white transition mx-3">Services</a>
                    <span class="text-gray-600">|</span>
                    <a href="/#contact" class="text-gray-400 hover:text-white transition mx-3">Contact</a>
                </div>
                <p class="text-gray-400">Licensed & Insured | Serving Spokane Since 2010</p>
            </div>
        </div>
    </footer>
</body>
</html>