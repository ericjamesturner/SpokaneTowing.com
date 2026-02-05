<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>@yield('title') | Spokane Towing</title>
    <meta name="description" content="@yield('description')">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title') | Spokane Towing">
    <meta property="og:description" content="@yield('description')">
    <meta property="og:image" content="{{ url('/images/og-image.jpg') }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title') | Spokane Towing">
    <meta name="twitter:description" content="@yield('description')">
    <meta name="twitter:image" content="{{ url('/images/og-image.jpg') }}">

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <!-- Fonts -->
    @include('partials.fonts')

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
    @endif
    @include('partials.schema-local-business')

    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@type": "ServiceArea",
      "name": "Towing Services in @yield('city')",
      "description": "@yield('description')",
      "url": "{{ url()->current() }}",
      "provider": {
        "@@id": "https://spokanetowing.com/#business"
      },
      "areaServed": {
        "@@type": "City",
        "name": "@yield('city')"
      },
      "hasOfferCatalog": {
        "@@type": "OfferCatalog",
        "name": "Towing Services in @yield('city')",
        "itemListElement": [
          {
            "@@type": "Offer",
            "itemOffered": {
              "@@type": "Service",
              "name": "Emergency Towing",
              "description": "24/7 emergency towing service in @yield('city')"
            }
          },
          {
            "@@type": "Offer",
            "itemOffered": {
              "@@type": "Service",
              "name": "Roadside Assistance",
              "description": "Jump starts, fuel delivery, and lockout service in @yield('city')"
            }
          }
        ]
      }
    }
    </script>

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
          "name": "Locations",
          "item": "https://spokanetowing.com/#locations"
        },
        {
          "@@type": "ListItem",
          "position": 3,
          "name": "@yield('city')",
          "item": "{{ url()->current() }}"
        }
      ]
    }
    </script>
    @include('partials.clarity')

    <style>
        .text-gradient {
            background: linear-gradient(135deg, #dc2626 0%, #ef4444 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>
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
            <div class="max-w-4xl mx-auto text-center">
                <div class="inline-flex items-center space-x-2 bg-red-600/20 border border-red-600/30 rounded-full px-4 py-2 mb-6">
                    <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>
                    <span class="text-red-400 text-sm font-medium">Serving @yield('city') 24/7</span>
                </div>

                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">
                    Towing in <span class="text-gradient">@yield('city')</span>
                </h1>
                <p class="text-xl mb-8 text-gray-300 max-w-2xl mx-auto">
                    Professional towing and roadside assistance serving @yield('city') and surrounding areas
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="tel:+15097977999" class="bg-gradient-to-r from-red-600 to-red-700 text-white px-8 py-4 rounded-xl hover:from-red-700 hover:to-red-800 transition font-semibold text-lg shadow-lg shadow-red-600/25 flex items-center justify-center space-x-2">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        <span>Call for Service in @yield('city')</span>
                    </a>
                    <a href="/#quote" class="bg-white/10 backdrop-blur-sm text-white px-8 py-4 rounded-xl hover:bg-white/20 transition font-semibold text-lg border border-white/20">
                        Get Instant Quote
                    </a>
                </div>
                <p class="mt-6 text-gray-400 flex items-center justify-center space-x-2">
                    <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Fast response times to @yield('city')</span>
                </p>
            </div>
        </div>
    </section>

    <!-- Service Details -->
    <section class="py-20 bg-black">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl font-bold mb-8 text-white">Towing Services in @yield('city')</h2>

                <div class="prose prose-invert prose-lg max-w-none mb-12 prose-headings:text-white prose-p:text-gray-300 prose-li:text-gray-300 prose-strong:text-white prose-a:text-red-500 prose-a:no-underline hover:prose-a:underline">
                    @yield('content')
                </div>

                <h3 class="text-2xl font-semibold mb-6 text-white">Services Available in @yield('city')</h3>
                <div class="grid md:grid-cols-2 gap-6 bg-slate-800/50 backdrop-blur-sm rounded-2xl p-8 border border-slate-700/50 mb-12">
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-red-500 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <a href="/24-hour-towing" class="text-gray-300 hover:text-red-500 transition">24 Hour Emergency Towing</a>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-red-500 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <a href="/roadside-assistance" class="text-gray-300 hover:text-red-500 transition">Roadside Assistance</a>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-red-500 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <a href="/roadside-assistance" class="text-gray-300 hover:text-red-500 transition">Jump Starts</a>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-red-500 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <a href="/roadside-assistance" class="text-gray-300 hover:text-red-500 transition">Fuel Delivery</a>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-red-500 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <a href="/lockout-flat-tire" class="text-gray-300 hover:text-red-500 transition">Lockout Service</a>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-red-500 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <a href="/lockout-flat-tire" class="text-gray-300 hover:text-red-500 transition">Flat Tire Changes</a>
                        </li>
                    </ul>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-red-500 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <a href="/flatbed-towing" class="text-gray-300 hover:text-red-500 transition">Flatbed Towing</a>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-red-500 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <a href="/24-hour-towing" class="text-gray-300 hover:text-red-500 transition">Motorcycle Towing</a>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-red-500 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <a href="/long-distance-towing" class="text-gray-300 hover:text-red-500 transition">Long Distance Towing</a>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-red-500 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <a href="/heavy-duty-towing" class="text-gray-300 hover:text-red-500 transition">Heavy Duty Towing</a>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-red-500 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <a href="/winch-out-recovery" class="text-gray-300 hover:text-red-500 transition">Winch Out Service</a>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-red-500 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <a href="/24-hour-towing" class="text-gray-300 hover:text-red-500 transition">Accident Recovery</a>
                        </li>
                    </ul>
                </div>

                <!-- CTA Box -->
                <div class="bg-gradient-to-r from-red-600 to-red-700 rounded-2xl p-8 text-center relative overflow-hidden">
                    <div class="absolute inset-0 bg-black/10"></div>
                    <div class="relative">
                        <h3 class="text-2xl font-bold mb-4 text-white">Need Towing in @yield('city')?</h3>
                        <p class="mb-6 text-white/90">We're ready to help 24/7 with fast response times</p>
                        <a href="tel:+15097977999" class="bg-white text-red-700 px-8 py-4 rounded-xl hover:bg-gray-100 transition font-bold text-lg inline-flex items-center space-x-2 shadow-lg">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            <span>(509) 797-7999</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @yield('extra-sections')

    <!-- Quote Section -->
    @include('partials.quote-section')

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
                    <a href="/contact" class="text-gray-400 hover:text-white transition">Contact</a>
                    <a href="/privacy-policy" class="text-gray-400 hover:text-white transition">Privacy</a>
                    <a href="/terms-of-service" class="text-gray-400 hover:text-white transition">Terms</a>
                </div>

                <div class="text-gray-500 text-sm">
                    Licensed & Insured | Serving @yield('city') Since 2010
                </div>
            </div>

            <div class="mt-8 pt-8 border-t border-slate-800 text-center text-gray-500 text-sm">
                &copy; {{ date('Y') }} Spokane Towing. All rights reserved.
            </div>
        </div>
    </footer>
</body>
</html>
