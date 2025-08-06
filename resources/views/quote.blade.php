<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Your Towing Quote - Spokane Towing</title>
    <meta name="description" content="Get an instant towing quote for Spokane and surrounding areas. Transparent pricing with no hidden fees. Available 24/7.">
    <link rel="canonical" href="{{ url('/quote') }}">
    
    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <!-- Fonts -->
    @include('partials.fonts')

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    
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
                v: "weekly"
            });
        </script>
    @endif
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
        <div class="max-w-4xl mx-auto">
            @livewire('quote-display', [
                'fromAddress' => request('from'),
                'toAddress' => request('to')
            ])
        </div>
    </div>
    @livewireScripts
</body>
</html>