<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Spokane Towing | 24/7 Emergency Towing & Roadside Assistance</title>
    <meta name="description" content="Spokane's trusted 24/7 towing company. Emergency towing, roadside assistance, flatbed transport & heavy duty recovery. 20-30 min response. Call (509) 797-7999">
    <link rel="canonical" href="{{ url('/') }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:title" content="Spokane Towing | 24/7 Emergency Towing & Roadside Assistance">
    <meta property="og:description" content="Spokane's trusted 24/7 towing company. Emergency towing, roadside assistance, flatbed transport & heavy duty recovery. 20-30 min response. Call (509) 797-7999">
    <meta property="og:image" content="{{ url('/images/og-image.jpg') }}">
    <meta property="og:locale" content="en_US">
    <meta property="og:site_name" content="Spokane Towing">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ url('/') }}">
    <meta name="twitter:title" content="Spokane Towing | 24/7 Emergency Towing & Roadside Assistance">
    <meta name="twitter:description" content="Spokane's trusted 24/7 towing company. Emergency towing, roadside assistance, flatbed transport & heavy duty recovery. 20-30 min response. Call (509) 797-7999">
    <meta name="twitter:image" content="{{ url('/images/og-image.jpg') }}">

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <!-- Fonts -->
    @include('partials.fonts')

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Schema.org Structured Data -->
    @include('partials.schema-local-business')
    @include('partials.schema-website')
    @include('partials.schema-organization')
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

    @include('partials.clarity')

    <style>
        .hero-gradient {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.75) 0%, rgba(30, 41, 59, 0.65) 50%, rgba(15, 23, 42, 0.55) 100%);
        }
        .quote-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(12px);
        }
        .service-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .service-card:hover {
            transform: translateY(-8px);
        }
        .glow-orange {
            box-shadow: 0 0 40px rgba(249, 115, 22, 0.3);
        }
        .text-gradient {
            background: linear-gradient(135deg, #f97316 0%, #fb923c 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        @keyframes pulse-glow {
            0%, 100% { box-shadow: 0 0 20px rgba(249, 115, 22, 0.4); }
            50% { box-shadow: 0 0 40px rgba(249, 115, 22, 0.6); }
        }
        .pulse-glow {
            animation: pulse-glow 2s ease-in-out infinite;
        }
    </style>
</head>
<body class="antialiased bg-black text-white">
    <!-- Header -->
    <header class="fixed top-0 w-full z-50 transition-all duration-300" id="main-header">
        <div class="absolute inset-0 bg-slate-900/90 backdrop-blur-md border-b border-white/10"></div>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="flex justify-between items-center h-20">
                <a href="/">
                    <img src="/header-logo.webp" alt="Spokane Towing" class="h-20 w-auto">
                </a>
                <nav class="hidden md:flex items-center space-x-8">
                    <a href="/spokane-towing-services" class="text-gray-300 hover:text-white transition font-medium">Services</a>
                    <a href="#quote" class="text-gray-300 hover:text-white transition font-medium">Get Quote</a>
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
    <section class="relative min-h-screen flex items-center pt-20">
        <div class="absolute inset-0">
            <img
                src="/images/hero-new.webp"
                alt="Professional towing service in Spokane"
                class="w-full h-full object-cover -scale-x-100"
                loading="eager"
            >
            <div class="hero-gradient absolute inset-0"></div>
        </div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="text-center lg:text-left">
                    <div class="inline-flex items-center space-x-2 bg-red-600/20 border border-red-600/30 rounded-full px-4 py-2 mb-6">
                        <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>
                        <span class="text-red-300 text-sm font-medium">Available 24/7 - Dispatching Now</span>
                    </div>

                    <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold mb-6 leading-tight">
                        Fast & Reliable<br>
                        <span class="text-gradient">Towing Service</span><br>
                        in Spokane
                    </h1>

                    <p class="text-xl text-gray-300 mb-8 max-w-xl">
                        Professional towing and roadside assistance when you need it most.
                        Our expert team arrives in 20-30 minutes, ready to help.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start mb-8">
                        <a href="tel:+15097977999" class="bg-gradient-to-r from-red-600 to-red-700 text-white px-8 py-4 rounded-xl hover:from-red-700 hover:to-red-800 transition font-semibold text-lg shadow-lg shadow-red-600/25 flex items-center justify-center space-x-2 pulse-glow">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            <span>Call (509) 797-7999</span>
                        </a>
                    </div>

                    <!-- Trust Badges -->
                    <div class="flex flex-wrap gap-6 justify-center lg:justify-start text-sm text-gray-400">
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Licensed & Insured</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>20-30 Min Response</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>No Hidden Fees</span>
                        </div>
                    </div>
                </div>

                <!-- Quick Quote Card -->
                <div class="hidden lg:block">
                    <div class="quote-card rounded-3xl p-8 shadow-2xl border border-white/20">
                        <h2 class="text-2xl font-bold text-white mb-2">Get an Instant Quote</h2>
                        <p class="text-gray-300 mb-6">Calculate your towing cost in seconds</p>

                        <form action="{{ route('quote') }}" method="GET" class="space-y-4">
                            <div class="grid grid-cols-2 gap-3">
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                    </div>
                                    <input
                                        type="text"
                                        id="hero-name"
                                        name="name"
                                        placeholder="Your name"
                                        class="w-full pl-12 pr-4 py-4 border border-gray-200 rounded-xl focus:ring-2 focus:ring-red-500 focus:border-transparent text-gray-900 bg-gray-50"
                                        required
                                    >
                                </div>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                        </svg>
                                    </div>
                                    <input
                                        type="tel"
                                        id="hero-phone"
                                        name="phone"
                                        placeholder="Phone number"
                                        class="w-full pl-12 pr-4 py-4 border border-gray-200 rounded-xl focus:ring-2 focus:ring-red-500 focus:border-transparent text-gray-900 bg-gray-50"
                                        required
                                    >
                                </div>
                            </div>

                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <input
                                    type="text"
                                    id="hero-from-address"
                                    name="from"
                                    placeholder="Pickup location"
                                    class="w-full pl-12 pr-12 py-4 border border-gray-200 rounded-xl focus:ring-2 focus:ring-red-500 focus:border-transparent text-gray-900 bg-gray-50"
                                    required
                                >
                                <button
                                    type="button"
                                    onclick="detectLocation('hero-from-address')"
                                    class="absolute right-3 top-1/2 -translate-y-1/2 p-2 text-gray-400 hover:text-red-500 transition"
                                    title="Use my location"
                                >
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </button>
                            </div>

                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <input
                                    type="text"
                                    id="hero-to-address"
                                    name="to"
                                    placeholder="Drop-off location"
                                    class="w-full pl-12 pr-12 py-4 border border-gray-200 rounded-xl focus:ring-2 focus:ring-red-500 focus:border-transparent text-gray-900 bg-gray-50"
                                    required
                                >
                                <button
                                    type="button"
                                    onclick="detectLocation('hero-to-address')"
                                    class="absolute right-3 top-1/2 -translate-y-1/2 p-2 text-gray-400 hover:text-red-500 transition"
                                    title="Use my location"
                                >
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </button>
                            </div>

                            <button
                                type="submit"
                                class="w-full bg-gradient-to-r from-red-600 to-red-700 text-white py-4 px-6 rounded-xl hover:from-red-700 hover:to-red-800 transition font-semibold text-lg shadow-lg shadow-red-600/25"
                            >
                                Get Instant Quote
                            </button>
                        </form>

                        <p class="mt-4 text-gray-400 text-xs text-center leading-relaxed">
                            By submitting, you agree to our <a href="/terms-of-service" class="text-red-400 hover:text-red-300 underline">Terms</a> and <a href="/privacy-policy" class="text-red-400 hover:text-red-300 underline">Privacy Policy</a>, and consent to receive calls/texts about your quote.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll indicator -->
        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce">
            <svg class="w-6 h-6 text-white/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
            </svg>
        </div>
    </section>

    <!-- Mobile Quote Section -->
    <section id="quote" class="lg:hidden py-16 bg-slate-900">
        <div class="container mx-auto px-4 sm:px-6">
            <div class="quote-card rounded-2xl p-6 shadow-2xl">
                <h2 class="text-2xl font-bold text-white mb-2 text-center">Get an Instant Quote</h2>
                <p class="text-gray-300 mb-6 text-center">Calculate your towing cost in seconds</p>

                <form action="{{ route('quote') }}" method="GET" class="space-y-4">
                    <div class="grid grid-cols-2 gap-3">
                        <div class="relative">
                            <input
                                type="text"
                                id="mobile-name"
                                name="name"
                                placeholder="Your name"
                                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-red-500 focus:border-transparent text-gray-900 bg-gray-50"
                                required
                            >
                        </div>
                        <div class="relative">
                            <input
                                type="tel"
                                id="mobile-phone"
                                name="phone"
                                placeholder="Phone number"
                                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-red-500 focus:border-transparent text-gray-900 bg-gray-50"
                                required
                            >
                        </div>
                    </div>

                    <div class="relative">
                        <input
                            type="text"
                            id="mobile-from-address"
                            name="from"
                            placeholder="Pickup location"
                            class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-red-500 focus:border-transparent text-gray-900 bg-gray-50"
                            required
                        >
                    </div>

                    <div class="relative">
                        <input
                            type="text"
                            id="mobile-to-address"
                            name="to"
                            placeholder="Drop-off location"
                            class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-red-500 focus:border-transparent text-gray-900 bg-gray-50"
                            required
                        >
                    </div>

                    <button
                        type="submit"
                        class="w-full bg-gradient-to-r from-red-600 to-red-700 text-white py-3 px-6 rounded-xl hover:from-red-700 hover:to-red-800 transition font-semibold text-lg"
                    >
                        Get Instant Quote
                    </button>
                </form>
                <p class="mt-4 text-gray-400 text-xs text-center leading-relaxed">
                    By submitting, you agree to our <a href="/terms-of-service" class="text-red-400 hover:text-red-300 underline">Terms</a> and <a href="/privacy-policy" class="text-red-400 hover:text-red-300 underline">Privacy Policy</a>, and consent to receive calls/texts about your quote.
                </p>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-24 bg-slate-900">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="inline-block text-red-500 font-semibold text-sm tracking-wider uppercase mb-4">What We Offer</span>
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">
                    Professional Towing Services
                </h2>
                <p class="text-xl text-gray-400 max-w-2xl mx-auto">
                    From emergency roadside assistance to heavy-duty towing, we've got you covered
                </p>
            </div>

            <!-- Main Services Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto mb-16">
                <a href="/24-hour-towing" class="service-card relative overflow-hidden rounded-2xl border border-slate-700/50 hover:border-red-500/50 group">
                    <img src="/images/service-emergency.webp" alt="24 hour emergency towing service in Spokane" class="absolute inset-0 w-full h-full object-cover opacity-100 group-hover:opacity-100 group-hover:scale-105 transition-all duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/50 to-transparent"></div>
                    <div class="relative p-8 pt-28">
                        <h3 class="text-xl font-bold text-white mb-3 drop-shadow-lg">24/7 Emergency Towing</h3>
                        <p class="text-gray-300 mb-4">Available around the clock for breakdowns, accidents, and vehicle recovery anywhere in Spokane.</p>
                        <span class="text-red-500 font-semibold flex items-center group-hover:translate-x-2 transition-transform">
                            Learn More
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </span>
                    </div>
                </a>

                <a href="/roadside-assistance" class="service-card relative overflow-hidden rounded-2xl border border-slate-700/50 hover:border-red-500/50 group">
                    <img src="/images/service-roadside.webp" alt="Roadside assistance service in Spokane" class="absolute inset-0 w-full h-full object-cover opacity-100 group-hover:opacity-100 group-hover:scale-105 transition-all duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/50 to-transparent"></div>
                    <div class="relative p-8 pt-28">
                        <h3 class="text-xl font-bold text-white mb-3 drop-shadow-lg">Roadside Assistance</h3>
                        <p class="text-gray-300 mb-4">Jump starts, fuel delivery, and emergency help when you're stranded on the road.</p>
                        <span class="text-red-500 font-semibold flex items-center group-hover:translate-x-2 transition-transform">
                            Learn More
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </span>
                    </div>
                </a>

                <a href="/flatbed-towing" class="service-card relative overflow-hidden rounded-2xl border border-slate-700/50 hover:border-red-500/50 group">
                    <img src="/images/service-flatbed.webp" alt="Flatbed towing service in Spokane" class="absolute inset-0 w-full h-full object-cover opacity-100 group-hover:opacity-100 group-hover:scale-105 transition-all duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/50 to-transparent"></div>
                    <div class="relative p-8 pt-28">
                        <h3 class="text-xl font-bold text-white mb-3 drop-shadow-lg">Flatbed Towing</h3>
                        <p class="text-gray-300 mb-4">Safe transport for luxury, classic, and low-clearance vehicles on our modern flatbeds.</p>
                        <span class="text-red-500 font-semibold flex items-center group-hover:translate-x-2 transition-transform">
                            Learn More
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </span>
                    </div>
                </a>

                <a href="/lockout-flat-tire" class="service-card relative overflow-hidden rounded-2xl border border-slate-700/50 hover:border-red-500/50 group">
                    <img src="/images/service-lockout.webp" alt="Car lockout and flat tire service in Spokane" class="absolute inset-0 w-full h-full object-cover opacity-100 group-hover:opacity-100 group-hover:scale-105 transition-all duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/50 to-transparent"></div>
                    <div class="relative p-8 pt-28">
                        <h3 class="text-xl font-bold text-white mb-3 drop-shadow-lg">Lockout Service</h3>
                        <p class="text-gray-300 mb-4">Locked out of your car? We'll get you back in quickly and safely without damage.</p>
                        <span class="text-red-500 font-semibold flex items-center group-hover:translate-x-2 transition-transform">
                            Learn More
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </span>
                    </div>
                </a>

                <a href="/heavy-duty-towing" class="service-card relative overflow-hidden rounded-2xl border border-slate-700/50 hover:border-red-500/50 group">
                    <img src="/images/service-heavy.webp" alt="Heavy duty truck towing in Spokane" class="absolute inset-0 w-full h-full object-cover opacity-100 group-hover:opacity-100 group-hover:scale-105 transition-all duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/50 to-transparent"></div>
                    <div class="relative p-8 pt-28">
                        <h3 class="text-xl font-bold text-white mb-3 drop-shadow-lg">Heavy-Duty Towing</h3>
                        <p class="text-gray-300 mb-4">Commercial trucks, RVs, and heavy equipment - we have the power to move it all.</p>
                        <span class="text-red-500 font-semibold flex items-center group-hover:translate-x-2 transition-transform">
                            Learn More
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </span>
                    </div>
                </a>

                <a href="/winch-out-recovery" class="service-card relative overflow-hidden rounded-2xl border border-slate-700/50 hover:border-red-500/50 group">
                    <img src="/images/service-winch.webp" alt="Vehicle winch out and recovery service in Spokane" class="absolute inset-0 w-full h-full object-cover opacity-100 group-hover:opacity-100 group-hover:scale-105 transition-all duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/50 to-transparent"></div>
                    <div class="relative p-8 pt-28">
                        <h3 class="text-xl font-bold text-white mb-3 drop-shadow-lg">Winch-Out Recovery</h3>
                        <p class="text-gray-300 mb-4">Stuck in a ditch, mud, or snow? Our powerful winch will get you out fast.</p>
                        <span class="text-red-500 font-semibold flex items-center group-hover:translate-x-2 transition-transform">
                            Learn More
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </span>
                    </div>
                </a>
            </div>

            <!-- View All Services -->
            <div class="text-center">
                <a href="/spokane-towing-services" class="inline-flex items-center space-x-2 text-red-500 hover:text-red-400 font-semibold text-lg transition">
                    <span>View All Services</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-24 bg-slate-950 relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,<svg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"><g fill=\"none\" fill-rule=\"evenodd\"><g fill=\"%23ffffff\" fill-opacity=\"0.4\"><path d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/></g></g></svg>')"></div>
        </div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="text-center mb-16">
                <span class="inline-block text-red-500 font-semibold text-sm tracking-wider uppercase mb-4">Why Us</span>
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">
                    The Spokane Towing Difference
                </h2>
                <p class="text-xl text-gray-400 max-w-2xl mx-auto">
                    When you're stranded, you need a towing company you can trust
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-6xl mx-auto">
                <div class="text-center p-6">
                    <div class="w-20 h-20 bg-gradient-to-br from-red-600/20 to-red-700/20 rounded-full flex items-center justify-center mx-auto mb-6 border border-red-600/30">
                        <svg class="w-10 h-10 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Fast Response</h3>
                    <p class="text-gray-400">Average arrival time of 20-30 minutes. We know every minute counts.</p>
                </div>

                <div class="text-center p-6">
                    <div class="w-20 h-20 bg-gradient-to-br from-red-600/20 to-red-700/20 rounded-full flex items-center justify-center mx-auto mb-6 border border-red-600/30">
                        <svg class="w-10 h-10 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Fully Insured</h3>
                    <p class="text-gray-400">Licensed, bonded, and insured for your complete peace of mind.</p>
                </div>

                <div class="text-center p-6">
                    <div class="w-20 h-20 bg-gradient-to-br from-red-600/20 to-red-700/20 rounded-full flex items-center justify-center mx-auto mb-6 border border-red-600/30">
                        <svg class="w-10 h-10 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Expert Team</h3>
                    <p class="text-gray-400">Experienced, professional drivers who treat your vehicle with care.</p>
                </div>

                <div class="text-center p-6">
                    <div class="w-20 h-20 bg-gradient-to-br from-red-600/20 to-red-700/20 rounded-full flex items-center justify-center mx-auto mb-6 border border-red-600/30">
                        <svg class="w-10 h-10 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Fair Pricing</h3>
                    <p class="text-gray-400">Transparent, competitive rates with no hidden fees or surprises.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-red-600 to-red-700 relative overflow-hidden">
        <div class="absolute inset-0 bg-black/10"></div>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                    Stranded? We're On Our Way.
                </h2>
                <p class="text-xl text-white/90 mb-8 max-w-2xl mx-auto">
                    Don't wait on the side of the road. Call now and we'll dispatch a truck immediately.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="tel:+15097977999" class="bg-white text-red-600 px-8 py-4 rounded-xl hover:bg-gray-100 transition font-bold text-xl shadow-lg flex items-center justify-center space-x-2">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        <span>(509) 797-7999</span>
                    </a>
                    <a href="#quote" class="bg-transparent text-white px-8 py-4 rounded-xl hover:bg-white/10 transition font-semibold text-xl border-2 border-white flex items-center justify-center space-x-2">
                        <span>Get Online Quote</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Areas Section -->
    <section id="contact" class="py-24 bg-slate-900">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="inline-block text-red-500 font-semibold text-sm tracking-wider uppercase mb-4">Coverage</span>
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">
                    Serving Spokane & Beyond
                </h2>
                <p class="text-xl text-gray-400 max-w-2xl mx-auto">
                    Fast, reliable towing throughout the Inland Northwest
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-6xl mx-auto">
                <div>
                    <h3 class="text-lg font-bold text-white mb-4 flex items-center">
                        <span class="w-2 h-2 bg-red-500 rounded-full mr-2"></span>
                        Washington
                    </h3>
                    <ul class="space-y-2">
                        <li><a href="/" class="text-gray-400 hover:text-red-500 transition">Spokane</a></li>
                        <li><a href="/towing-spokane-valley" class="text-gray-400 hover:text-red-500 transition">Spokane Valley</a></li>
                        <li><a href="/towing-cheney" class="text-gray-400 hover:text-red-500 transition">Cheney</a></li>
                        <li><a href="/towing-deer-park" class="text-gray-400 hover:text-red-500 transition">Deer Park</a></li>
                        <li><a href="/towing-airway-heights" class="text-gray-400 hover:text-red-500 transition">Airway Heights</a></li>
                        <li><a href="/towing-liberty-lake" class="text-gray-400 hover:text-red-500 transition">Liberty Lake</a></li>
                        <li><a href="/towing-colville" class="text-gray-400 hover:text-red-500 transition">Colville</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-bold text-white mb-4 flex items-center">
                        <span class="w-2 h-2 bg-red-500 rounded-full mr-2"></span>
                        Idaho
                    </h3>
                    <ul class="space-y-2">
                        <li><a href="/towing-coeur-d-alene" class="text-gray-400 hover:text-red-500 transition">Coeur d'Alene</a></li>
                        <li><a href="/towing-post-falls" class="text-gray-400 hover:text-red-500 transition">Post Falls</a></li>
                        <li><a href="/towing-hayden-id" class="text-gray-400 hover:text-red-500 transition">Hayden</a></li>
                        <li><a href="/towing-sandpoint" class="text-gray-400 hover:text-red-500 transition">Sandpoint</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-bold text-white mb-4 flex items-center">
                        <span class="w-2 h-2 bg-red-500 rounded-full mr-2"></span>
                        Contact Us
                    </h3>
                    <div class="space-y-4">
                        <div>
                            <p class="text-gray-500 text-sm mb-1">24/7 Emergency Line</p>
                            <a href="tel:+15097977999" class="text-2xl font-bold text-red-500 hover:text-red-400 transition">(509) 797-7999</a>
                        </div>
                        <div>
                            <p class="text-gray-500 text-sm mb-1">Service Hours</p>
                            <p class="text-white font-medium">24 Hours / 7 Days</p>
                            <p class="text-gray-400">365 Days a Year</p>
                        </div>
                    </div>
                </div>

                <div>
                    <h3 class="text-lg font-bold text-white mb-4 flex items-center">
                        <span class="w-2 h-2 bg-red-500 rounded-full mr-2"></span>
                        Quick Links
                    </h3>
                    <ul class="space-y-2">
                        <li><a href="/spokane-towing-services" class="text-gray-400 hover:text-red-500 transition">All Services</a></li>
                        <li><a href="/faq" class="text-gray-400 hover:text-red-500 transition">FAQ</a></li>
                        <li><a href="#quote" class="text-gray-400 hover:text-red-500 transition">Get a Quote</a></li>
                        <li><a href="/24-hour-towing" class="text-gray-400 hover:text-red-500 transition">Emergency Towing</a></li>
                        <li><a href="/roadside-assistance" class="text-gray-400 hover:text-red-500 transition">Roadside Assistance</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-slate-950 border-t border-slate-800">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="flex items-center space-x-3 mb-6 md:mb-0">
                    <img src="/header-logo.webp" alt="Spokane Towing" class="h-14 w-auto">
                </div>

                <div class="flex flex-wrap justify-center gap-6 mb-6 md:mb-0">
                    <a href="/spokane-towing-services" class="text-gray-400 hover:text-white transition">Services</a>
                    <a href="/faq" class="text-gray-400 hover:text-white transition">FAQ</a>
                    <a href="#quote" class="text-gray-400 hover:text-white transition">Get Quote</a>
                    <a href="/contact" class="text-gray-400 hover:text-white transition">Contact</a>
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

    <script>
        let fromAutocomplete, toAutocomplete, heroFromAutocomplete, heroToAutocomplete;

        // Initialize autocomplete when libraries are loaded
        document.addEventListener('DOMContentLoaded', async () => {
            try {
                const { Autocomplete } = await google.maps.importLibrary("places");

                // Define bounds for 100 miles around Spokane
                const spokaneCenter = new google.maps.LatLng(47.6588, -117.4260);
                const bounds = new google.maps.LatLngBounds(
                    new google.maps.LatLng(46.2088, -118.8760),
                    new google.maps.LatLng(49.1088, -116.0760)
                );

                const options = {
                    bounds: bounds,
                    componentRestrictions: { country: "us" },
                    fields: ["formatted_address", "geometry", "name"],
                    strictBounds: true,
                    types: ["geocode", "establishment"],
                    origin: spokaneCenter
                };

                // Hero form autocomplete (desktop)
                const heroFromInput = document.getElementById('hero-from-address');
                const heroToInput = document.getElementById('hero-to-address');
                if (heroFromInput) heroFromAutocomplete = new Autocomplete(heroFromInput, options);
                if (heroToInput) heroToAutocomplete = new Autocomplete(heroToInput, options);

                // Mobile form autocomplete
                const mobileFromInput = document.getElementById('mobile-from-address');
                const mobileToInput = document.getElementById('mobile-to-address');
                if (mobileFromInput) fromAutocomplete = new Autocomplete(mobileFromInput, options);
                if (mobileToInput) toAutocomplete = new Autocomplete(mobileToInput, options);
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

        // Header scroll effect
        const header = document.getElementById('main-header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 100) {
                header.classList.add('py-2');
            } else {
                header.classList.remove('py-2');
            }
        });
    </script>
</body>
</html>
