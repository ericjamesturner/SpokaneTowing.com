<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>@yield('title') | Spokane Towing</title>
    <meta name="description" content="@yield('description')">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title') | Spokane Towing">
    <meta property="og:description" content="@yield('description')">
    <meta property="og:image" content="https://spokanetowing.com/images/towing-service.jpg">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="@yield('title') | Spokane Towing">
    <meta property="twitter:description" content="@yield('description')">
    <meta property="twitter:image" content="https://spokanetowing.com/images/towing-service.jpg">
    
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
      "@@type": "Service",
      "serviceType": "@yield('service-type', 'Towing Service')",
      "provider": {
        "@@id": "https://spokanetowing.com/#business"
      },
      "name": "@yield('hero-title')",
      "description": "@yield('description')",
      "url": "{{ url()->current() }}",
      "areaServed": [
        {
          "@@type": "City",
          "name": "Spokane"
        },
        {
          "@@type": "City", 
          "name": "Coeur d'Alene"
        },
        {
          "@@type": "City",
          "name": "Post Falls"
        }
      ],
      "availableChannel": {
        "@@type": "ServiceChannel",
        "serviceUrl": "{{ url()->current() }}",
        "servicePhone": "+15097977999",
        "availableLanguage": "English"
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
          "name": "@yield('hero-title')",
          "item": "{{ url()->current() }}"
        }
      ]
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
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">
                    @yield('hero-title')
                </h1>
                <p class="text-xl mb-8 text-gray-300">
                    @yield('hero-subtitle')
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="tel:+15097977999" class="bg-blue-600 text-white px-8 py-4 rounded-lg hover:bg-blue-700 transition font-semibold text-lg shadow-lg">
                        Call for Immediate Service
                    </a>
                    <a href="/#quote" class="bg-white text-gray-900 px-8 py-4 rounded-lg hover:bg-gray-100 transition font-semibold text-lg">
                        Get Instant Quote
                    </a>
                </div>
                <p class="mt-6 text-gray-400">Average arrival time: 20-30 minutes</p>
            </div>
        </div>
    </section>

    <!-- Service Details -->
    <section class="py-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto">
                @yield('content')
            </div>
        </div>
    </section>

    @yield('extra-sections')

    <!-- Quote Section -->
    @include('partials.quote-section')

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-8">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <p class="text-gray-400">Licensed & Insured | Serving Spokane Since 2010</p>
            </div>
        </div>
    </footer>
</body>
</html>