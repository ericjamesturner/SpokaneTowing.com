<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Privacy Policy - Spokane Towing</title>
    <meta name="description" content="Privacy Policy for Spokane Towing. Learn how we collect, use, and protect your personal information.">
    <link rel="canonical" href="{{ url('/privacy-policy') }}">

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    @include('partials.fonts')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @include('partials.clarity')
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

    <!-- Content -->
    <section class="pt-32 pb-16 bg-black">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto">
                <h1 class="text-4xl font-bold mb-8">Privacy Policy</h1>
                <p class="text-gray-400 mb-8">Last updated: {{ date('F j, Y') }}</p>

                <div class="prose prose-invert prose-lg max-w-none">
                    <h2 class="text-2xl font-semibold text-white mt-8 mb-4">Introduction</h2>
                    <p class="text-gray-300 mb-4">Spokane Towing ("we," "our," or "us") respects your privacy and is committed to protecting your personal information. This Privacy Policy explains how we collect, use, and safeguard your information when you use our website and services.</p>

                    <h2 class="text-2xl font-semibold text-white mt-8 mb-4">Information We Collect</h2>
                    <p class="text-gray-300 mb-4">We may collect the following types of information:</p>
                    <ul class="list-disc list-inside text-gray-300 mb-4 space-y-2">
                        <li><strong class="text-white">Contact Information:</strong> Name, phone number, email address when you request a quote or service</li>
                        <li><strong class="text-white">Location Information:</strong> Pickup and drop-off addresses for towing services</li>
                        <li><strong class="text-white">Vehicle Information:</strong> Make, model, year, and condition of vehicles for service quotes</li>
                        <li><strong class="text-white">Usage Data:</strong> Information about how you interact with our website, including IP address, browser type, and pages visited</li>
                    </ul>

                    <h2 class="text-2xl font-semibold text-white mt-8 mb-4">How We Use Your Information</h2>
                    <p class="text-gray-300 mb-4">We use the information we collect to:</p>
                    <ul class="list-disc list-inside text-gray-300 mb-4 space-y-2">
                        <li>Provide towing and roadside assistance services</li>
                        <li>Generate accurate quotes for our services</li>
                        <li>Communicate with you about your service requests</li>
                        <li>Improve our website and services</li>
                        <li>Comply with legal obligations</li>
                    </ul>

                    <h2 class="text-2xl font-semibold text-white mt-8 mb-4">Information Sharing</h2>
                    <p class="text-gray-300 mb-4">We do not sell your personal information. We may share your information with:</p>
                    <ul class="list-disc list-inside text-gray-300 mb-4 space-y-2">
                        <li>Our drivers and staff to provide requested services</li>
                        <li>Payment processors to complete transactions</li>
                        <li>Law enforcement when required by law</li>
                    </ul>

                    <h2 class="text-2xl font-semibold text-white mt-8 mb-4">Cookies and Tracking</h2>
                    <p class="text-gray-300 mb-4">Our website uses cookies and similar technologies to improve your experience and analyze website traffic. You can control cookie preferences through your browser settings.</p>

                    <h2 class="text-2xl font-semibold text-white mt-8 mb-4">Data Security</h2>
                    <p class="text-gray-300 mb-4">We implement appropriate security measures to protect your personal information. However, no method of transmission over the internet is 100% secure.</p>

                    <h2 class="text-2xl font-semibold text-white mt-8 mb-4">Your Rights</h2>
                    <p class="text-gray-300 mb-4">You have the right to:</p>
                    <ul class="list-disc list-inside text-gray-300 mb-4 space-y-2">
                        <li>Request access to your personal information</li>
                        <li>Request correction of inaccurate information</li>
                        <li>Request deletion of your information</li>
                        <li>Opt out of marketing communications</li>
                    </ul>

                    <h2 class="text-2xl font-semibold text-white mt-8 mb-4">Contact Us</h2>
                    <p class="text-gray-300 mb-4">If you have questions about this Privacy Policy, please contact us:</p>
                    <p class="text-gray-300 mb-4">
                        Phone: <a href="tel:+15097977999" class="text-red-500 hover:text-red-400">(509) 797-7999</a><br>
                        Spokane, WA
                    </p>

                    <h2 class="text-2xl font-semibold text-white mt-8 mb-4">Changes to This Policy</h2>
                    <p class="text-gray-300 mb-4">We may update this Privacy Policy from time to time. We will notify you of any changes by posting the new policy on this page.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black border-t border-slate-800">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="flex items-center space-x-3 mb-6 md:mb-0">
                    <img src="/header-logo.webp" alt="Spokane Towing" class="h-14 w-auto">
                </div>

                <div class="flex flex-wrap justify-center gap-6 mb-6 md:mb-0">
                    <a href="/spokane-towing-services" class="text-gray-400 hover:text-white transition">Services</a>
                    <a href="/faq" class="text-gray-400 hover:text-white transition">FAQ</a>
                    <a href="/#quote" class="text-gray-400 hover:text-white transition">Get Quote</a>
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
</body>
</html>
