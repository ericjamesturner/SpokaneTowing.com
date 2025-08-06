<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Spokane Towing Services - 24/7 Professional Towing</title>
    <meta name="description" content="Complete Spokane towing services including emergency towing, roadside assistance, accident recovery, and heavy-duty towing. Available 24/7 throughout Spokane County. Call (509) 797-7999.">
    
    <link rel="canonical" href="{{ url('/spokane-towing-services') }}">
    
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
    
    @include('partials.clarity')
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
    <section class="pt-16 bg-gradient-to-b from-gray-900 to-gray-800 text-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="max-w-4xl mx-auto">
                <nav class="mb-6">
                    <a href="/" class="text-gray-300 hover:text-white">Home</a>
                    <span class="mx-2 text-gray-500">/</span>
                    <span class="text-white">Spokane Towing Services</span>
                </nav>
                
                <h1 class="text-4xl md:text-5xl font-bold mb-6">
                    Spokane Towing Services
                </h1>
                <p class="text-xl text-gray-200 mb-8">
                    Professional, Reliable, and Affordable Towing Solutions Throughout Spokane County
                </p>
                
                <div class="grid md:grid-cols-3 gap-6 mb-8">
                    <div class="bg-gray-700/50 p-4 rounded-lg">
                        <div class="text-3xl font-bold text-blue-400">24/7</div>
                        <div class="text-gray-300">Emergency Service</div>
                    </div>
                    <div class="bg-gray-700/50 p-4 rounded-lg">
                        <div class="text-3xl font-bold text-blue-400">20-30</div>
                        <div class="text-gray-300">Minutes Average Arrival</div>
                    </div>
                    <div class="bg-gray-700/50 p-4 rounded-lg">
                        <div class="text-3xl font-bold text-blue-400">50+</div>
                        <div class="text-gray-300">Mile Service Area</div>
                    </div>
                </div>
                
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="tel:+15097977999" class="bg-blue-600 text-white px-8 py-4 rounded-lg hover:bg-blue-700 transition font-semibold text-lg text-center">
                        Call (509) 797-7999
                    </a>
                    <a href="/#quote" class="bg-white text-gray-900 px-8 py-4 rounded-lg hover:bg-gray-100 transition font-semibold text-lg text-center">
                        Get Instant Quote
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Overview -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl font-bold mb-8 text-gray-900">Comprehensive Spokane Towing Services</h2>
                
                <div class="prose prose-lg max-w-none text-gray-600 mb-12">
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
                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h3 class="text-2xl font-semibold mb-4 text-gray-900">Emergency Towing Services</h3>
                        <ul class="space-y-3 text-gray-600">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mt-1 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>24/7 emergency response throughout Spokane</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mt-1 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Accident recovery and scene cleanup</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mt-1 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Vehicle breakdown towing</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mt-1 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Off-road recovery services</span>
                            </li>
                        </ul>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h3 class="text-2xl font-semibold mb-4 text-gray-900">Roadside Assistance</h3>
                        <ul class="space-y-3 text-gray-600">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mt-1 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Jump start services</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mt-1 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Flat tire changes</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mt-1 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Lockout assistance</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mt-1 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Emergency fuel delivery</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Types of Vehicles -->
                <div class="bg-blue-50 p-8 rounded-lg mb-12">
                    <h3 class="text-2xl font-semibold mb-6 text-gray-900">Types of Vehicles We Tow</h3>
                    <div class="grid md:grid-cols-3 gap-6">
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-3">Light-Duty Towing</h4>
                            <ul class="space-y-2 text-gray-600">
                                <li>• Cars and sedans</li>
                                <li>• SUVs and crossovers</li>
                                <li>• Pickup trucks</li>
                                <li>• Motorcycles</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-3">Medium-Duty Towing</h4>
                            <ul class="space-y-2 text-gray-600">
                                <li>• Box trucks</li>
                                <li>• RVs and motorhomes</li>
                                <li>• Delivery vehicles</li>
                                <li>• Small buses</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-3">Heavy-Duty Towing</h4>
                            <ul class="space-y-2 text-gray-600">
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
                    <h3 class="text-2xl font-semibold mb-6 text-gray-900">Spokane Towing Services Coverage Area</h3>
                    <p class="text-gray-600 mb-6">
                        Our Spokane towing services extend throughout Spokane County and surrounding areas. We provide fast response times to all major highways, neighborhoods, and business districts.
                    </p>
                    <div class="grid md:grid-cols-3 gap-4">
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-2">Major Highways</h4>
                            <ul class="text-gray-600 space-y-1">
                                <li>• Interstate 90</li>
                                <li>• US Route 2</li>
                                <li>• US Route 195</li>
                                <li>• US Route 395</li>
                                <li>• State Route 290</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-2">Spokane Neighborhoods</h4>
                            <ul class="text-gray-600 space-y-1">
                                <li>• Downtown Spokane</li>
                                <li>• South Hill</li>
                                <li>• North Side</li>
                                <li>• Spokane Valley</li>
                                <li>• West Plains</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-2">Nearby Cities</h4>
                            <ul class="text-gray-600 space-y-1">
                                <li>• Cheney</li>
                                <li>• Liberty Lake</li>
                                <li>• Airway Heights</li>
                                <li>• Medical Lake</li>
                                <li>• Deer Park</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Why Choose Us -->
                <div class="bg-gray-900 text-white p-8 rounded-lg mb-12">
                    <h3 class="text-2xl font-semibold mb-6">Why Choose Our Spokane Towing Services?</h3>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <h4 class="font-semibold text-blue-400 mb-2">Professional & Experienced</h4>
                            <p class="text-gray-300">Our certified tow truck operators have years of experience handling all types of vehicles and towing situations in Spokane.</p>
                        </div>
                        <div>
                            <h4 class="font-semibold text-blue-400 mb-2">Fast Response Times</h4>
                            <p class="text-gray-300">With strategically located trucks throughout Spokane, we average 20-30 minute arrival times for emergency calls.</p>
                        </div>
                        <div>
                            <h4 class="font-semibold text-blue-400 mb-2">Transparent Pricing</h4>
                            <p class="text-gray-300">No hidden fees or surprises. We provide upfront quotes for all our Spokane towing services before we begin.</p>
                        </div>
                        <div>
                            <h4 class="font-semibold text-blue-400 mb-2">Insurance Approved</h4>
                            <p class="text-gray-300">We work with all major insurance companies and can bill directly for covered towing services.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ Section -->
                <div>
                    <h3 class="text-2xl font-semibold mb-6 text-gray-900">Frequently Asked Questions About Spokane Towing Services</h3>
                    <div class="space-y-6">
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-2">How much do Spokane towing services cost?</h4>
                            <p class="text-gray-600">Our towing rates vary based on distance and vehicle type. We offer competitive pricing with a base hook fee plus mileage. Call for an instant quote or use our online calculator.</p>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-2">Do you provide 24/7 towing services in Spokane?</h4>
                            <p class="text-gray-600">Yes, our Spokane towing services are available 24 hours a day, 7 days a week, including holidays. We're always ready to help when you need us.</p>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-2">What areas do your Spokane towing services cover?</h4>
                            <p class="text-gray-600">We service all of Spokane County including Spokane Valley, Liberty Lake, Cheney, and surrounding areas within a 50-mile radius of downtown Spokane.</p>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-2">Can you tow my vehicle to any location?</h4>
                            <p class="text-gray-600">Yes, we can tow your vehicle to any repair shop, dealership, or location of your choice within our service area. Long-distance towing is also available.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-blue-600 text-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl font-bold mb-4">Need Spokane Towing Services Now?</h2>
                <p class="text-xl mb-8">Don't wait by the roadside. Our professional tow truck operators are standing by to help you 24/7.</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="tel:+15097977999" class="bg-white text-blue-600 px-8 py-4 rounded-lg hover:bg-gray-100 transition font-semibold text-lg">
                        Call (509) 797-7999
                    </a>
                    <a href="/#quote" class="bg-blue-700 text-white px-8 py-4 rounded-lg hover:bg-blue-800 transition font-semibold text-lg">
                        Get Online Quote
                    </a>
                </div>
                <p class="mt-6 text-blue-100">Average arrival time: 20-30 minutes • Available 24/7</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-lg font-semibold mb-4">Spokane Towing</h3>
                    <p class="text-gray-400 mb-4">Professional towing services throughout Spokane County. Available 24/7 for all your vehicle recovery needs.</p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Services</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="/" class="hover:text-white transition">Emergency Towing</a></li>
                        <li><a href="/" class="hover:text-white transition">Roadside Assistance</a></li>
                        <li><a href="/long-distance-towing" class="hover:text-white transition">Long Distance Towing</a></li>
                        <li><a href="/" class="hover:text-white transition">Accident Recovery</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Service Areas</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="/" class="hover:text-white transition">Spokane</a></li>
                        <li><a href="/towing-spokane-valley" class="hover:text-white transition">Spokane Valley</a></li>
                        <li><a href="/towing-cheney" class="hover:text-white transition">Cheney</a></li>
                        <li><a href="/towing-liberty-lake" class="hover:text-white transition">Liberty Lake</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Contact</h4>
                    <p class="text-gray-400 mb-2">24/7 Emergency Service</p>
                    <a href="tel:+15097977999" class="text-xl font-semibold text-blue-400 hover:text-blue-300 transition">(509) 797-7999</a>
                    <div class="mt-4">
                        <a href="/" class="text-gray-400 hover:text-white transition">Get Instant Quote →</a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; {{ date('Y') }} Spokane Towing. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>