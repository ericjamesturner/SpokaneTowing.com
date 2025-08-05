<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>24 Hour Emergency Towing Spokane | Available Now</title>
    <meta name="description" content="Need 24 hour towing in Spokane? We're available now with fast response times. Emergency towing services throughout Spokane, WA. Call (509) 797-7999">
    
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
    <section class="pt-16 bg-gradient-to-b from-gray-900 to-gray-800 text-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">
                    24 Hour Emergency Towing in Spokane
                </h1>
                <p class="text-xl mb-8 text-gray-300">
                    Available now with fast response times. Professional emergency towing services when you need them most.
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
                <h2 class="text-3xl font-bold mb-8">Emergency Towing Available 24/7</h2>
                
                <div class="prose prose-lg max-w-none mb-12">
                    <p>When your vehicle breaks down at 2 AM or you're stranded on the highway after an accident, you need a reliable 24 hour towing service in Spokane that you can count on. Spokane Towing provides round-the-clock emergency towing services throughout Spokane, WA and surrounding areas.</p>
                    
                    <h3 class="text-2xl font-semibold mt-8 mb-4">Our 24 Hour Towing Services Include:</h3>
                    <ul class="space-y-2">
                        <li>Emergency accident recovery</li>
                        <li>Breakdown towing</li>
                        <li>Off-road recovery</li>
                        <li>Highway emergency response</li>
                        <li>Vehicle transport to repair shops</li>
                        <li>Insurance-approved towing</li>
                    </ul>

                    <h3 class="text-2xl font-semibold mt-8 mb-4">Why Choose Our 24 Hour Towing?</h3>
                    <ul class="space-y-2">
                        <li><strong>Fast Response:</strong> Average arrival time of 20-30 minutes</li>
                        <li><strong>Always Available:</strong> 365 days a year, including holidays</li>
                        <li><strong>Professional Drivers:</strong> Trained and experienced operators</li>
                        <li><strong>Modern Equipment:</strong> Well-maintained tow trucks for safe transport</li>
                        <li><strong>Fair Pricing:</strong> No surge pricing during emergencies</li>
                    </ul>
                </div>

                <!-- CTA Box -->
                <div class="bg-blue-50 rounded-lg p-8 text-center">
                    <h3 class="text-2xl font-bold mb-4">Need Emergency Towing Right Now?</h3>
                    <p class="mb-6 text-gray-700">Don't wait - our dispatchers are standing by 24/7</p>
                    <a href="tel:+15097977999" class="bg-blue-600 text-white px-8 py-4 rounded-lg hover:bg-blue-700 transition font-semibold text-lg inline-block">
                        Call (509) 797-7999
                    </a>
                </div>
            </div>
        </div>
    </section>

    @include('partials.coverage-area', ['title' => '24 Hour Towing Coverage Area', 'description' => 'We provide emergency towing services throughout the greater Spokane area, including:'])

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