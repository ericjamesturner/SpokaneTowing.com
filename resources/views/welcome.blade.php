<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Spokane Towing | 24/7 Tow Truck & Roadside Assistance</title>
    <meta name="description" content="Spokane Towing: 24/7 tow truck & roadside help across Spokane. Price confirmed before dispatch. Call (509) 797-7999 now.">
    <link rel="canonical" href="https://spokanetowing.com/">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://spokanetowing.com/">
    <meta property="og:title" content="Spokane Towing | 24/7 Tow Truck & Roadside Assistance">
    <meta property="og:description" content="Spokane Towing: 24/7 tow truck & roadside help across Spokane. Price confirmed before dispatch. Call (509) 797-7999 now.">
    <meta property="og:image" content="{{ url('/images/og-image.jpg') }}">
    <meta property="og:locale" content="en_US">
    <meta property="og:site_name" content="Spokane Towing">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="https://spokanetowing.com/">
    <meta name="twitter:title" content="Spokane Towing | 24/7 Tow Truck & Roadside Assistance">
    <meta name="twitter:description" content="Spokane Towing: 24/7 tow truck & roadside help across Spokane. Price confirmed before dispatch. Call (509) 797-7999 now.">
    <meta name="twitter:image" content="{{ url('/images/og-image.jpg') }}">

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <!-- Fonts -->
    @include('partials.fonts')

    @vite(['resources/css/website.css', 'resources/js/app.js'])

    <!-- Schema.org Structured Data -->
        @include('partials.schema-website')
    @include('partials.schema-organization')

    @php
        $homeFaqs = [
            ['q' => 'Is Spokane towing available 24/7?', 'a' => 'Yes. Call (509) 797-7999 any time, including nights, weekends and holidays, and a tow is arranged through a licensed and insured local operator.'],
            ['q' => 'How much does a tow in Spokane cost?', 'a' => 'Online estimates use a $140 hook fee plus $6 per mile with a $200 minimum, so most short in-town tows are $200. The exact price is confirmed on the phone before a truck is sent.'],
            ['q' => 'How long will the tow truck take?', 'a' => 'It depends on where you are, the time of day and the weather. You get an arrival estimate for your location on the call, before you agree to anything.'],
            ['q' => 'Can my AWD, lowered or damaged car be towed safely?', 'a' => 'Yes. Mention it when you call and a flatbed can be sent, which keeps all four wheels off the road.'],
            ['q' => 'Do I need a roadside membership?', 'a' => 'No. There is no membership or sign-up. You pay for the tow or roadside service you use.'],
            ['q' => 'Where can my car be towed to?', 'a' => 'Anywhere you choose: your mechanic, a dealership, a body shop or your home, in Spokane or farther away with long-distance towing.'],
        ];
    @endphp
    <script type="application/ld+json">
    {!! json_encode([
        '@@context' => 'https://schema.org',
        '@@type' => 'FAQPage',
        'mainEntity' => array_map(fn ($f) => ['@@type' => 'Question', 'name' => $f['q'], 'acceptedAnswer' => ['@@type' => 'Answer', 'text' => $f['a']]], $homeFaqs),
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>

    @include('partials.google-maps')

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
                    <img src="/images/header-logo-384.webp" srcset="/images/header-logo-384.webp 384w, /images/header-logo-640.webp 640w" sizes="(min-width: 1024px) 288px, (min-width: 640px) 256px, 192px" alt="Spokane Towing" width="640" height="130" class="h-auto w-48 sm:w-64 lg:w-72 max-w-full">
                </a>
                <nav class="hidden md:flex items-center space-x-8">
                    <a href="/spokane-towing-services" class="text-gray-300 hover:text-white transition font-medium">Services</a>
                    <a href="/quote" class="text-gray-300 hover:text-white transition font-medium">Get Quote</a>
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
            <img width="1536" height="1024"
                src="/images/hero-new.webp"
                alt="Professional towing service in Spokane"
                class="w-full h-full object-cover -scale-x-100"
                loading="eager" fetchpriority="high"
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
                        Spokane Towing:<br>
                        <span class="text-gradient">24/7 Tow Truck</span><br>
                        Service
                    </h1>

                    <p class="text-xl text-gray-300 mb-8 max-w-xl">
                        Need a tow truck in Spokane? One call arranges Spokane towing and roadside help for breakdowns, accidents, flat tires and dead batteries.
                        You get the price and an arrival estimate before a truck is sent. See <a href="/spokane-towing-services" class="text-red-400 hover:text-red-300 underline">Spokane towing services, prices and coverage</a>.
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
                            <span>Licensed &amp; Insured Local Operators</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Price Before Dispatch</span>
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

                        <form action="{{ route('quote.store') }}" method="POST" data-quote-form class="space-y-4">
                            @csrf
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
                                        name="name" aria-label="Your name" autocomplete="name" value="{{ old('name') }}"
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
                                        name="phone" aria-label="Phone number" autocomplete="tel" value="{{ old('phone') }}"
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
                                    name="from" aria-label="Pickup location" autocomplete="off" value="{{ old('from') }}"
                                    placeholder="Pickup location"
                                    class="w-full pl-12 pr-12 py-4 border border-gray-200 rounded-xl focus:ring-2 focus:ring-red-500 focus:border-transparent text-gray-900 bg-gray-50"
                                    minlength="5" required
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
                                    name="to" aria-label="Drop-off location" autocomplete="off" value="{{ old('to') }}"
                                    placeholder="Drop-off location"
                                    class="w-full pl-12 pr-12 py-4 border border-gray-200 rounded-xl focus:ring-2 focus:ring-red-500 focus:border-transparent text-gray-900 bg-gray-50"
                                    minlength="5" required
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

                <form action="{{ route('quote.store') }}" method="POST" data-quote-form class="space-y-4">
                    @csrf
                    <div class="grid grid-cols-2 gap-3">
                        <div class="relative">
                            <input
                                type="text"
                                id="mobile-name"
                                name="name" aria-label="Your name" autocomplete="name" value="{{ old('name') }}"
                                placeholder="Your name"
                                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-red-500 focus:border-transparent text-gray-900 bg-gray-50"
                                required
                            >
                        </div>
                        <div class="relative">
                            <input
                                type="tel"
                                id="mobile-phone"
                                name="phone" aria-label="Phone number" autocomplete="tel" value="{{ old('phone') }}"
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
                            name="from" aria-label="Pickup location" autocomplete="off" value="{{ old('from') }}"
                            placeholder="Pickup location"
                            class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-red-500 focus:border-transparent text-gray-900 bg-gray-50"
                            minlength="5" required
                        >
                    </div>

                    <div class="relative">
                        <input
                            type="text"
                            id="mobile-to-address"
                            name="to" aria-label="Drop-off location" autocomplete="off" value="{{ old('to') }}"
                            placeholder="Drop-off location"
                            class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-red-500 focus:border-transparent text-gray-900 bg-gray-50"
                            minlength="5" required
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
                <span class="inline-block text-red-500 font-semibold text-sm tracking-wider uppercase mb-4">Services</span>
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">
                    Towing and Tow Truck Services in Spokane
                </h2>
                <p class="text-xl text-gray-400 max-w-2xl mx-auto">
                    Find the right help for your vehicle: emergency towing, flatbed transport, roadside assistance and recovery
                </p>
            </div>

            <!-- Main Services Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto mb-16">
                <a href="/24-hour-towing" class="service-card relative overflow-hidden rounded-2xl border border-slate-700/50 hover:border-red-500/50 group">
                    <img width="1536" height="1024" src="/images/service-emergency-480.webp" srcset="/images/service-emergency-480.webp 480w, /images/service-emergency-800.webp 800w" sizes="(min-width: 1280px) 400px, (min-width: 768px) 45vw, 100vw" loading="lazy" decoding="async" alt="24 hour emergency towing service in Spokane" class="absolute inset-0 w-full h-full object-cover opacity-100 group-hover:opacity-100 group-hover:scale-105 transition-all duration-500">
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
                    <img width="1536" height="1024" src="/images/service-roadside-480.webp" srcset="/images/service-roadside-480.webp 480w, /images/service-roadside-800.webp 800w" sizes="(min-width: 1280px) 400px, (min-width: 768px) 45vw, 100vw" loading="lazy" decoding="async" alt="Roadside assistance service in Spokane" class="absolute inset-0 w-full h-full object-cover opacity-100 group-hover:opacity-100 group-hover:scale-105 transition-all duration-500">
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
                    <img width="1024" height="1024" src="/images/service-flatbed-480.webp" srcset="/images/service-flatbed-480.webp 480w, /images/service-flatbed-800.webp 800w" sizes="(min-width: 1280px) 400px, (min-width: 768px) 45vw, 100vw" loading="lazy" decoding="async" alt="Flatbed towing service in Spokane" class="absolute inset-0 w-full h-full object-cover opacity-100 group-hover:opacity-100 group-hover:scale-105 transition-all duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/50 to-transparent"></div>
                    <div class="relative p-8 pt-28">
                        <h3 class="text-xl font-bold text-white mb-3 drop-shadow-lg">Flatbed Towing</h3>
                        <p class="text-gray-300 mb-4">Safe transport for luxury, classic, and low-clearance vehicles on a flatbed, with no wheels on the road.</p>
                        <span class="text-red-500 font-semibold flex items-center group-hover:translate-x-2 transition-transform">
                            Learn More
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </span>
                    </div>
                </a>

                <a href="/lockout-flat-tire" class="service-card relative overflow-hidden rounded-2xl border border-slate-700/50 hover:border-red-500/50 group">
                    <img width="1536" height="1024" src="/images/service-lockout-480.webp" srcset="/images/service-lockout-480.webp 480w, /images/service-lockout-800.webp 800w" sizes="(min-width: 1280px) 400px, (min-width: 768px) 45vw, 100vw" loading="lazy" decoding="async" alt="Car lockout and flat tire service in Spokane" class="absolute inset-0 w-full h-full object-cover opacity-100 group-hover:opacity-100 group-hover:scale-105 transition-all duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/50 to-transparent"></div>
                    <div class="relative p-8 pt-28">
                        <h3 class="text-xl font-bold text-white mb-3 drop-shadow-lg">Lockout Service</h3>
                        <p class="text-gray-300 mb-4">Locked out or stuck with a flat? Get a local operator sent to help you get going.</p>
                        <span class="text-red-500 font-semibold flex items-center group-hover:translate-x-2 transition-transform">
                            Learn More
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </span>
                    </div>
                </a>

                <a href="/heavy-duty-towing" class="service-card relative overflow-hidden rounded-2xl border border-slate-700/50 hover:border-red-500/50 group">
                    <img width="1024" height="1024" src="/images/service-heavy-480.webp" srcset="/images/service-heavy-480.webp 480w, /images/service-heavy-800.webp 800w" sizes="(min-width: 1280px) 400px, (min-width: 768px) 45vw, 100vw" loading="lazy" decoding="async" alt="Heavy duty truck towing in Spokane" class="absolute inset-0 w-full h-full object-cover opacity-100 group-hover:opacity-100 group-hover:scale-105 transition-all duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/50 to-transparent"></div>
                    <div class="relative p-8 pt-28">
                        <h3 class="text-xl font-bold text-white mb-3 drop-shadow-lg">Heavy-Duty Towing</h3>
                        <p class="text-gray-300 mb-4">Box trucks, RVs, buses and other heavy vehicles, matched to a heavy-duty wrecker.</p>
                        <span class="text-red-500 font-semibold flex items-center group-hover:translate-x-2 transition-transform">
                            Learn More
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </span>
                    </div>
                </a>

                <a href="/winch-out-recovery" class="service-card relative overflow-hidden rounded-2xl border border-slate-700/50 hover:border-red-500/50 group">
                    <img width="1024" height="1024" src="/images/service-winch-480.webp" srcset="/images/service-winch-480.webp 480w, /images/service-winch-800.webp 800w" sizes="(min-width: 1280px) 400px, (min-width: 768px) 45vw, 100vw" loading="lazy" decoding="async" alt="Vehicle winch out and recovery service in Spokane" class="absolute inset-0 w-full h-full object-cover opacity-100 group-hover:opacity-100 group-hover:scale-105 transition-all duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/50 to-transparent"></div>
                    <div class="relative p-8 pt-28">
                        <h3 class="text-xl font-bold text-white mb-3 drop-shadow-lg">Winch-Out Recovery</h3>
                        <p class="text-gray-300 mb-4">Stuck in a ditch, mud, or snow? Get fast help with a winch-out or recovery.</p>
                        <span class="text-red-500 font-semibold flex items-center group-hover:translate-x-2 transition-transform">
                            Learn More
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </span>
                    </div>
                </a>

                <a href="/battery-jump-start" class="service-card relative overflow-hidden rounded-2xl border border-slate-700/50 hover:border-red-500/50 group">
                    <img width="1536" height="1024" src="/images/service-roadside-480.webp" srcset="/images/service-roadside-480.webp 480w, /images/service-roadside-800.webp 800w" sizes="(min-width: 1280px) 400px, (min-width: 768px) 45vw, 100vw" loading="lazy" decoding="async" alt="Car battery jump start service in Spokane" class="absolute inset-0 w-full h-full object-cover opacity-100 group-hover:opacity-100 group-hover:scale-105 transition-all duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/50 to-transparent"></div>
                    <div class="relative p-8 pt-28">
                        <h3 class="text-xl font-bold text-white mb-3 drop-shadow-lg">Battery Jump Start</h3>
                        <p class="text-gray-300 mb-4">Dead battery? Get a jump start arranged so you can drive to a shop or home.</p>
                        <span class="text-red-500 font-semibold flex items-center group-hover:translate-x-2 transition-transform">
                            Learn More
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </span>
                    </div>
                </a>

                <a href="/commercial-towing" class="service-card relative overflow-hidden rounded-2xl border border-slate-700/50 hover:border-red-500/50 group">
                    <img width="1024" height="1024" src="/images/service-heavy-480.webp" srcset="/images/service-heavy-480.webp 480w, /images/service-heavy-800.webp 800w" sizes="(min-width: 1280px) 400px, (min-width: 768px) 45vw, 100vw" loading="lazy" decoding="async" alt="Commercial and fleet vehicle towing in Spokane" class="absolute inset-0 w-full h-full object-cover opacity-100 group-hover:opacity-100 group-hover:scale-105 transition-all duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/50 to-transparent"></div>
                    <div class="relative p-8 pt-28">
                        <h3 class="text-xl font-bold text-white mb-3 drop-shadow-lg">Commercial Towing</h3>
                        <p class="text-gray-300 mb-4">Work trucks, vans and business vehicles, with towing arranged on one call.</p>
                        <span class="text-red-500 font-semibold flex items-center group-hover:translate-x-2 transition-transform">
                            Learn More
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </span>
                    </div>
                </a>

                <a href="/long-distance-towing" class="service-card relative overflow-hidden rounded-2xl border border-slate-700/50 hover:border-red-500/50 group">
                    <img width="1024" height="1024" src="/images/service-flatbed-480.webp" srcset="/images/service-flatbed-480.webp 480w, /images/service-flatbed-800.webp 800w" sizes="(min-width: 1280px) 400px, (min-width: 768px) 45vw, 100vw" loading="lazy" decoding="async" alt="Long distance towing and vehicle transport from Spokane" class="absolute inset-0 w-full h-full object-cover opacity-100 group-hover:opacity-100 group-hover:scale-105 transition-all duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/50 to-transparent"></div>
                    <div class="relative p-8 pt-28">
                        <h3 class="text-xl font-bold text-white mb-3 drop-shadow-lg">Long Distance Towing</h3>
                        <p class="text-gray-300 mb-4">Tows out of the Spokane area or across state lines, priced before you commit.</p>
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
                    <span>View All Spokane Towing Services</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- About / How it works -->
    <section class="py-20 bg-black">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-2xl md:text-3xl font-bold text-white mb-5">Spokane towing, arranged with one call</h2>
                <p class="text-lg md:text-xl text-gray-300 leading-relaxed mb-4">Spokane Towing is a 24/7 dispatch line for drivers who need a tow truck in Spokane, WA. Call <a href="tel:+15097977999" class="text-red-500 font-semibold hover:underline">(509) 797-7999</a> and the tow is arranged through licensed and insured local operators who work the Spokane area every day.</p>
                <p class="text-gray-300 leading-relaxed mb-6">Whether your car quit on the Maple Street Bridge, slid off a South Hill side street after the first snow, or won't start in a Northtown Mall parking lot, the call works the same way. You describe the problem, hear a price, and decide. Nothing is sent until you say yes. Need something specific? There are separate pages for <a href="/motorcycle-towing" class="text-red-500 hover:underline">motorcycle towing</a>, <a href="/flatbed-towing" class="text-red-500 hover:underline">flatbed towing</a> and <a href="/heavy-duty-towing" class="text-red-500 hover:underline">heavy-duty towing</a>.</p>

                <div class="mb-12 mt-14 pt-10 border-t border-slate-800">
                    <h2 class="text-2xl md:text-3xl font-bold mb-6 text-white">How calling for a tow works</h2>
                    <ol class="space-y-4 my-6">
                        <li class="flex gap-4"><span class="shrink-0 flex items-center justify-center w-8 h-8 rounded-full border border-red-500/50 text-red-400 text-sm font-bold">1</span><div class="pt-1"><p class="font-semibold text-white">Say where you are.</p><p class="text-gray-300 leading-relaxed mt-1">A cross street, business name, highway exit or mile marker. “I-90 eastbound past the Hamilton exit” is plenty.</p></div></li>
                        <li class="flex gap-4"><span class="shrink-0 flex items-center justify-center w-8 h-8 rounded-full border border-red-500/50 text-red-400 text-sm font-bold">2</span><div class="pt-1"><p class="font-semibold text-white">Describe the vehicle.</p><p class="text-gray-300 leading-relaxed mt-1">Make and model, whether it rolls and steers, and whether it is AWD, lowered or damaged. That decides if a flatbed is needed.</p></div></li>
                        <li class="flex gap-4"><span class="shrink-0 flex items-center justify-center w-8 h-8 rounded-full border border-red-500/50 text-red-400 text-sm font-bold">3</span><div class="pt-1"><p class="font-semibold text-white">Pick the drop-off.</p><p class="text-gray-300 leading-relaxed mt-1">Your mechanic, a dealership, a body shop or home. The distance sets the mileage part of the price.</p></div></li>
                        <li class="flex gap-4"><span class="shrink-0 flex items-center justify-center w-8 h-8 rounded-full border border-red-500/50 text-red-400 text-sm font-bold">4</span><div class="pt-1"><p class="font-semibold text-white">Hear the price and arrival estimate.</p><p class="text-gray-300 leading-relaxed mt-1">Both come before dispatch, and you can decline. Arrival depends on location, traffic and weather, so you get a real estimate for your spot rather than a promise.</p></div></li>
                    </ol>
                    <div class="bg-slate-900/70 border border-slate-800 border-l-4 border-l-red-500/60 rounded-lg p-5 my-6 text-gray-300 leading-relaxed"><strong class="text-white">Waiting on a highway?</strong> On I-90, US-395, US-2 or US-195, stay buckled with your hazards on, or wait well off the road behind a barrier. Never stand between your car and traffic.</div>
                </div>

                <div class="mb-12 bg-slate-800/50 backdrop-blur-sm p-8 rounded-2xl border border-slate-700/50">
                    <h2 class="text-2xl md:text-3xl font-bold mb-4 text-white">What a Spokane tow costs</h2>
                    <p class="text-gray-300 leading-relaxed mb-4">Online estimates use a <strong class="text-white">$140 hook fee plus $6 per mile, with a $200 minimum</strong>, so most short tows inside the city come in at $200. Winch-outs, heavy vehicles and difficult recoveries are quoted separately. You always hear the exact price on the phone first.</p>
                    <p class="text-gray-400 text-sm">See worked examples on the <a href="/towing-cost-spokane" class="text-red-500 hover:text-red-400 transition">Spokane towing cost</a> page, or price your route with the <a href="/quote" class="text-red-500 hover:text-red-400 transition">instant quote calculator</a>.</p>
                </div>

                <div class="grid md:grid-cols-2 gap-6 mb-4">
                    <a href="/accident-towing-spokane" class="block bg-slate-800/50 p-6 rounded-2xl border border-slate-700/50 hover:border-red-500/50 transition">
                        <h3 class="text-xl font-semibold text-white mb-2">Been in an accident?</h3>
                        <p class="text-gray-300 leading-relaxed">Get safe, call 911 if anyone is hurt, photograph the scene and get the other driver's insurance. Then read the <span class="text-red-500 font-semibold">accident towing guide</span> before choosing where the car goes.</p>
                    </a>
                    <a href="/towed-car-spokane" class="block bg-slate-800/50 p-6 rounded-2xl border border-slate-700/50 hover:border-red-500/50 transition">
                        <h3 class="text-xl font-semibold text-white mb-2">Car already towed?</h3>
                        <p class="text-gray-300 leading-relaxed">If your car vanished from a lot or street, it was likely impounded. The <span class="text-red-500 font-semibold">towed car guide</span> covers who to call, what to bring and how storage fees add up.</p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Areas -->
    <section class="py-20 bg-slate-950">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-2xl md:text-3xl font-bold text-white mb-5">Where Spokane towing is available</h2>
                <p class="text-gray-300 leading-relaxed mb-6">Calls are covered across the city of Spokane and the rest of Spokane County, plus North Idaho. In town that includes downtown, the South Hill, Browne's Addition, Hillyard, Shadle Park, Logan and the university district, Five Mile and Indian Trail. On the highways it covers I-90 from the West Plains to the Idaho line, US-395 and the North Spokane Corridor, US-2 toward Airway Heights, and US-195 toward Cheney.</p>
                <div class="grid sm:grid-cols-3 gap-4 text-sm">
                    <div class="bg-slate-900/70 border border-slate-800 rounded-xl p-5">
                        <p class="text-white font-semibold mb-3">Spokane Valley &amp; east</p>
                        <ul class="space-y-1.5 text-gray-400"><li><a href="/towing-spokane-valley" class="hover:text-red-500 transition">Spokane Valley</a></li><li><a href="/towing-greenacres" class="hover:text-red-500 transition">Greenacres</a></li><li><a href="/towing-liberty-lake" class="hover:text-red-500 transition">Liberty Lake</a></li></ul>
                    </div>
                    <div class="bg-slate-900/70 border border-slate-800 rounded-xl p-5">
                        <p class="text-white font-semibold mb-3">West Plains, south &amp; north</p>
                        <ul class="space-y-1.5 text-gray-400"><li><a href="/towing-airway-heights" class="hover:text-red-500 transition">Airway Heights</a></li><li><a href="/towing-medical-lake" class="hover:text-red-500 transition">Medical Lake</a></li><li><a href="/towing-cheney" class="hover:text-red-500 transition">Cheney</a></li><li><a href="/towing-deer-park" class="hover:text-red-500 transition">Deer Park</a></li><li><a href="/towing-colville" class="hover:text-red-500 transition">Colville</a></li></ul>
                    </div>
                    <div class="bg-slate-900/70 border border-slate-800 rounded-xl p-5">
                        <p class="text-white font-semibold mb-3">North Idaho</p>
                        <ul class="space-y-1.5 text-gray-400"><li><a href="/towing-coeur-d-alene" class="hover:text-red-500 transition">Coeur d'Alene</a></li><li><a href="/towing-post-falls" class="hover:text-red-500 transition">Post Falls</a></li><li><a href="/towing-hayden-id" class="hover:text-red-500 transition">Hayden</a></li><li><a href="/towing-rathdrum" class="hover:text-red-500 transition">Rathdrum</a></li><li><a href="/towing-sandpoint" class="hover:text-red-500 transition">Sandpoint</a></li></ul>
                    </div>
                </div>
                <p class="text-gray-400 text-sm mt-5">Full list on the <a href="/service-areas" class="text-red-500 hover:text-red-400 transition">service areas</a> page, and every service in one place on the <a href="/spokane-towing-services" class="text-red-500 hover:text-red-400 transition">towing services hub</a>.</p>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="py-20 bg-black">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-2xl md:text-3xl font-bold text-white mb-6">Spokane towing FAQ</h2>
                <div class="divide-y divide-slate-800 border-y border-slate-800">
                    @foreach ($homeFaqs as $faq)
                    <div class="py-5">
                        <h3 class="font-semibold text-white mb-2">{{ $faq['q'] }}</h3>
                        <p class="text-gray-300 leading-relaxed">{{ $faq['a'] }}</p>
                    </div>
                    @endforeach
                </div>
                <p class="text-gray-400 text-sm mt-5">More answers on the <a href="/faq" class="text-red-500 hover:text-red-400 transition">FAQ page</a>.</p>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-red-600 to-red-700 relative overflow-hidden">
        <div class="absolute inset-0 bg-black/10"></div>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                    Stuck in Spokane? Call Now.
                </h2>
                <p class="text-xl text-white/90 mb-8 max-w-2xl mx-auto">
                    Get a price and an arrival estimate on the phone, then decide.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="tel:+15097977999" class="bg-white text-red-600 px-8 py-4 rounded-xl hover:bg-gray-100 transition font-bold text-xl shadow-lg flex items-center justify-center space-x-2">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        <span>(509) 797-7999</span>
                    </a>
                    <a href="/quote" class="bg-transparent text-white px-8 py-4 rounded-xl hover:bg-white/10 transition font-semibold text-xl border-2 border-white flex items-center justify-center space-x-2">
                        <span>Get Online Quote</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    @include('partials.site-footer')


</body>
</html>
