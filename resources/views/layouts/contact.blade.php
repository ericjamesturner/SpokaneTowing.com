<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>{{ $title ?? 'Contact Us - Spokane Towing' }}</title>
    <meta name="description" content="{{ $description ?? 'Contact Spokane Towing for questions about our towing and roadside assistance services in Spokane, WA.' }}">
    <link rel="canonical" href="{{ url('/contact') }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/contact') }}">
    <meta property="og:title" content="Contact Us - Spokane Towing">
    <meta property="og:description" content="Get in touch with Spokane Towing. We're here to help with all your towing and roadside assistance questions.">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Contact Us - Spokane Towing">
    <meta name="twitter:description" content="Get in touch with Spokane Towing. We're here to help with all your towing and roadside assistance questions.">

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <!-- Fonts -->
    @include('partials.fonts')

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @include('partials.clarity')
    @livewireStyles
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
    <section class="pt-32 pb-12 bg-slate-900">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center">
                <div class="inline-flex items-center space-x-2 bg-red-600/20 border border-red-600/30 rounded-full px-4 py-2 mb-6">
                    <svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    <span class="text-red-400 text-sm font-medium">Get In Touch</span>
                </div>
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Contact Us</h1>
                <p class="text-xl text-gray-400">Have a question or need assistance? We're here to help.</p>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="py-16 bg-black">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto">
                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Contact Info Cards -->
                    <div class="space-y-6">
                        <!-- Call Us -->
                        <div class="bg-slate-900/50 border border-slate-800 rounded-2xl p-6">
                            <div class="w-12 h-12 bg-red-600/20 rounded-xl flex items-center justify-center mb-4">
                                <svg class="w-6 h-6 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-white mb-2">Call Us</h3>
                            <a href="tel:+15097977999" class="text-red-500 hover:text-red-400 text-lg font-medium">(509) 797-7999</a>
                            <p class="text-gray-500 text-sm mt-1">Available 24/7</p>
                        </div>

                        <!-- Service Area -->
                        <div class="bg-slate-900/50 border border-slate-800 rounded-2xl p-6">
                            <div class="w-12 h-12 bg-red-600/20 rounded-xl flex items-center justify-center mb-4">
                                <svg class="w-6 h-6 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-white mb-2">Service Area</h3>
                            <p class="text-gray-400">Spokane & Surrounding Areas</p>
                            <p class="text-gray-500 text-sm mt-1">Within 100 miles of Spokane, WA</p>
                        </div>

                        <!-- Response Time -->
                        <div class="bg-slate-900/50 border border-slate-800 rounded-2xl p-6">
                            <div class="w-12 h-12 bg-red-600/20 rounded-xl flex items-center justify-center mb-4">
                                <svg class="w-6 h-6 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-white mb-2">Fast Response</h3>
                            <p class="text-gray-400">20-30 minute arrival</p>
                            <p class="text-gray-500 text-sm mt-1">In most service areas</p>
                        </div>
                    </div>

                    <!-- Contact Form -->
                    <div class="md:col-span-2">
                        <div class="bg-slate-900/50 border border-slate-800 rounded-2xl p-6 sm:p-8">
                            <h2 class="text-2xl font-bold text-white mb-2">Send Us a Message</h2>
                            <p class="text-gray-400 mb-6">Fill out the form below and we'll get back to you as soon as possible.</p>
                            {{ $slot }}
                        </div>
                    </div>
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
                    <a href="/#quote" class="text-gray-400 hover:text-white transition">Get Quote</a>
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

    @livewireScripts
</body>
</html>
