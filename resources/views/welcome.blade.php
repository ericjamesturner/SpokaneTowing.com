<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Spokane Towing - 24/7 Professional Towing Services</title>
    <meta name="description" content="Fast, reliable towing services in Spokane, WA. Available 24/7 for emergency roadside assistance, vehicle recovery, and more. Call now for a quote!">
    
    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
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
        <script>
            // Initialize PlaceAutocompleteElement when page loads
            document.addEventListener('DOMContentLoaded', async () => {
                try {
                    await google.maps.importLibrary("places");
                    await google.maps.importLibrary("core");
                    
                    // Wait for elements to be ready
                    setTimeout(() => {
                        const autocompletes = document.querySelectorAll('gmp-place-autocomplete');
                        autocompletes.forEach(autocomplete => {
                            // Set location restriction for Spokane area
                            autocomplete.locationRestriction = {
                                west: -117.6760,
                                north: 47.9088,
                                east: -117.1760,
                                south: 47.4088
                            };
                            
                            // Set origin point to Spokane center
                            autocomplete.origin = { lat: 47.6588, lng: -117.4260 };
                            
                            // Set region and language
                            autocomplete.region = 'US';
                            autocomplete.language = 'en-US';
                            
                            // Request options for imperial units
                            autocomplete.requestOptions = {
                                region: 'US',
                                language: 'en-US',
                                units: 'imperial'
                            };
                            
                            // Try setting units directly on the element
                            if (autocomplete.units !== undefined) {
                                autocomplete.units = 'imperial';
                            }
                        });
                    }, 100);
                } catch (e) {
                    console.error('Failed to load places library:', e);
                }
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
                    <h1 class="text-xl font-bold text-white">Spokane Towing</h1>
                </div>
                <nav class="hidden md:flex items-center space-x-8">
                    <a href="#services" class="text-gray-200 hover:text-white transition">Services</a>
                    <a href="#about" class="text-gray-200 hover:text-white transition">About</a>
                    <a href="#contact" class="text-gray-200 hover:text-white transition">Contact</a>
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
            <img src="/images/hero.png" alt="Towing service" class="w-full h-full object-cover scale-100 md:scale-75 opacity-30">
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
    <section id="quote" class="py-20 bg-gray-50">
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
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Pickup Location
                        </label>
                        <div class="relative">
                            <gmp-place-autocomplete
                                name="from"
                                placeholder="e.g. Spokane Arena, 720 W Mallon Ave, or current location"
                                class="w-full"
                                required
                                location-bias
                                data-lat="47.6588"
                                data-lng="-117.4260"
                                data-radius="50000"
                            ></gmp-place-autocomplete>
                            <button 
                                type="button"
                                onclick="detectLocation('from')"
                                class="absolute right-2 top-1/2 -translate-y-1/2 p-2 text-gray-500 hover:text-blue-600 transition z-10"
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
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Drop-off Location
                        </label>
                        <div class="relative">
                            <gmp-place-autocomplete
                                name="to"
                                placeholder="e.g. Sacred Heart Hospital, 101 W 8th Ave, or repair shop"
                                class="w-full"
                                required
                                location-bias
                                data-lat="47.6588"
                                data-lng="-117.4260"
                                data-radius="50000"
                            ></gmp-place-autocomplete>
                            <button 
                                type="button"
                                onclick="detectLocation('to')"
                                class="absolute right-2 top-1/2 -translate-y-1/2 p-2 text-gray-500 hover:text-blue-600 transition z-10"
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
                
                <style>
                    gmp-place-autocomplete {
                        width: 100%;
                        --gmpx-color-surface: #ffffff;
                        --gmpx-color-on-surface: #1f2937;
                        --gmpx-color-on-surface-variant: #6b7280;
                        --gmpx-color-primary: #3b82f6;
                        --gmpx-color-on-primary: #ffffff;
                        --gmpx-font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
                    }
                    gmp-place-autocomplete input {
                        width: 100%;
                        padding: 0.75rem 3rem 0.75rem 1rem;
                        border: 1px solid #e5e7eb;
                        border-radius: 0.5rem;
                        font-size: 1rem;
                        background-color: #ffffff;
                        color: #1f2937;
                        transition: all 0.2s;
                    }
                    gmp-place-autocomplete input:hover {
                        border-color: #d1d5db;
                    }
                    gmp-place-autocomplete input:focus {
                        outline: none;
                        border-color: #3b82f6;
                        box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
                    }
                    gmp-place-autocomplete input::placeholder {
                        color: #9ca3af;
                    }
                    /* Style the dropdown */
                    .pac-container {
                        background-color: #ffffff !important;
                        border: 1px solid #e5e7eb !important;
                        border-radius: 0.5rem !important;
                        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06) !important;
                        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif !important;
                        margin-top: 0.25rem !important;
                    }
                    .pac-item {
                        padding: 0.75rem 1rem !important;
                        color: #374151 !important;
                        cursor: pointer !important;
                        transition: background-color 0.2s !important;
                        border-bottom: 1px solid #f3f4f6 !important;
                    }
                    .pac-item:last-child {
                        border-bottom: none !important;
                    }
                    .pac-item:hover {
                        background-color: #f3f4f6 !important;
                    }
                    .pac-item-selected {
                        background-color: #eff6ff !important;
                    }
                    .pac-matched {
                        font-weight: 600 !important;
                        color: #1f2937 !important;
                    }
                    .pac-item-query {
                        color: #1f2937 !important;
                        font-weight: 600 !important;
                    }
                    /* Fix the secondary text (address) color */
                    .pac-secondary-text {
                        color: #6b7280 !important;
                        font-size: 0.875rem !important;
                    }
                </style>
                
                <script>
                    async function detectLocation(field) {
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
                                            const autocomplete = document.querySelector(`gmp-place-autocomplete[name="${field}"]`);
                                            if (autocomplete) {
                                                const input = autocomplete.querySelector('input');
                                                if (input) {
                                                    input.value = address;
                                                    autocomplete.value = address;
                                                }
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
            <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Emergency Towing</h3>
                    <p class="text-gray-600">24/7 emergency response for breakdowns, accidents, and vehicle recovery.</p>
                </div>
                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Roadside Assistance</h3>
                    <p class="text-gray-600">Jump starts, tire changes, lockout service, and fuel delivery.</p>
                </div>
                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Long Distance</h3>
                    <p class="text-gray-600">Safe and secure long-distance towing throughout Washington state.</p>
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
                        <h3 class="font-semibold mb-2">Service Hours</h3>
                        <p class="text-gray-600">24 Hours a Day<br>7 Days a Week<br>365 Days a Year</p>
                    </div>
                    <div>
                        <h3 class="font-semibold mb-2">Service Areas</h3>
                        <p class="text-gray-600">Spokane<br>Spokane Valley<br>Liberty Lake<br>Cheney<br>And More</p>
                    </div>
                    <div>
                        <h3 class="font-semibold mb-2">Contact</h3>
                        <p class="text-gray-600">
                            Emergency: <a href="tel:+15097977999" class="text-blue-600 hover:underline">(509) 797-7999</a><br>
                            Email: info@spokanetowing.com
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-8">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <p>&copy; {{ date('Y') }} Spokane Towing. All rights reserved.</p>
                <p class="mt-2 text-gray-400">Licensed & Insured | Serving Spokane Since 2010</p>
            </div>
        </div>
    </footer>
</body>
</html>