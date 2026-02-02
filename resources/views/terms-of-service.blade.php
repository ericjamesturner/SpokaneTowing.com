<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Terms of Service - Spokane Towing</title>
    <meta name="description" content="Terms of Service for Spokane Towing. Read our terms and conditions for using our towing and roadside assistance services.">
    <link rel="canonical" href="{{ url('/terms-of-service') }}">

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
                <h1 class="text-4xl font-bold mb-8">Terms of Service</h1>
                <p class="text-gray-400 mb-8">Last updated: {{ date('F j, Y') }}</p>

                <div class="prose prose-invert prose-lg max-w-none">
                    <h2 class="text-2xl font-semibold text-white mt-8 mb-4">Agreement to Terms</h2>
                    <p class="text-gray-300 mb-4">By accessing our website or using our towing and roadside assistance services, you agree to be bound by these Terms of Service. If you do not agree to these terms, please do not use our services.</p>

                    <h2 class="text-2xl font-semibold text-white mt-8 mb-4">Services</h2>
                    <p class="text-gray-300 mb-4">Spokane Towing provides towing and roadside assistance services in the Spokane, Washington area and surrounding regions. Our services include but are not limited to:</p>
                    <ul class="list-disc list-inside text-gray-300 mb-4 space-y-2">
                        <li>Emergency towing (24/7)</li>
                        <li>Flatbed towing</li>
                        <li>Heavy-duty towing</li>
                        <li>Roadside assistance (jump starts, tire changes, lockouts, fuel delivery)</li>
                        <li>Winch-out and recovery services</li>
                        <li>Long-distance towing</li>
                    </ul>

                    <h2 class="text-2xl font-semibold text-white mt-8 mb-4">Quotes and Pricing</h2>
                    <p class="text-gray-300 mb-4">Quotes provided through our website or over the phone are estimates based on the information provided. Final pricing may vary based on:</p>
                    <ul class="list-disc list-inside text-gray-300 mb-4 space-y-2">
                        <li>Actual distance traveled</li>
                        <li>Vehicle condition and accessibility</li>
                        <li>Time of service (regular hours vs. after-hours)</li>
                        <li>Additional services required</li>
                        <li>Road and weather conditions</li>
                    </ul>
                    <p class="text-gray-300 mb-4">We will communicate any significant changes to the quoted price before proceeding with service when possible.</p>

                    <h2 class="text-2xl font-semibold text-white mt-8 mb-4">Payment</h2>
                    <p class="text-gray-300 mb-4">Payment is due at the time of service unless prior arrangements have been made. We accept cash, major credit cards, and approved insurance claims. Additional fees may apply for declined payments or returned checks.</p>

                    <h2 class="text-2xl font-semibold text-white mt-8 mb-4">Vehicle Authorization</h2>
                    <p class="text-gray-300 mb-4">By requesting towing services, you represent that you are the vehicle owner or have authorization from the owner to request towing. You agree to provide valid identification and vehicle documentation upon request.</p>

                    <h2 class="text-2xl font-semibold text-white mt-8 mb-4">Liability</h2>
                    <p class="text-gray-300 mb-4">Spokane Towing carries appropriate insurance coverage for our operations. However:</p>
                    <ul class="list-disc list-inside text-gray-300 mb-4 space-y-2">
                        <li>We are not responsible for pre-existing damage to vehicles</li>
                        <li>We are not liable for personal items left in vehicles</li>
                        <li>Our liability is limited to the extent permitted by law</li>
                        <li>We recommend documenting your vehicle's condition before service</li>
                    </ul>

                    <h2 class="text-2xl font-semibold text-white mt-8 mb-4">Cancellation</h2>
                    <p class="text-gray-300 mb-4">If you need to cancel a service request, please notify us as soon as possible. Cancellation fees may apply if our driver has already been dispatched to your location.</p>

                    <h2 class="text-2xl font-semibold text-white mt-8 mb-4">SMS/Text Message Terms</h2>
                    <p class="text-gray-300 mb-4">By providing your phone number and submitting a quote request or booking, you expressly consent to receive text messages from Spokane Towing. These messages may include:</p>
                    <ul class="list-disc list-inside text-gray-300 mb-4 space-y-2">
                        <li>Quote confirmations and pricing information</li>
                        <li>Service booking confirmations</li>
                        <li>Driver dispatch and ETA updates</li>
                        <li>Driver arrival notifications</li>
                        <li>Service completion updates</li>
                        <li>Follow-up communications related to your service</li>
                    </ul>

                    <p class="text-gray-300 mb-4"><strong class="text-white">Message Frequency:</strong> Message frequency varies based on your service requests. You may receive 1-10 messages per service request.</p>

                    <p class="text-gray-300 mb-4"><strong class="text-white">Opt-Out:</strong> You can opt out of receiving text messages at any time by replying STOP to any message. After opting out, you will receive a confirmation message and no further texts will be sent. Note that opting out may affect our ability to provide service updates.</p>

                    <p class="text-gray-300 mb-4"><strong class="text-white">Help:</strong> Reply HELP to any message for assistance, or contact us at (509) 797-7999.</p>

                    <p class="text-gray-300 mb-4"><strong class="text-white">Message and Data Rates:</strong> Message and data rates may apply. Check with your mobile carrier for details about your text messaging plan.</p>

                    <p class="text-gray-300 mb-4"><strong class="text-white">Carrier Disclaimer:</strong> Carriers are not liable for delayed or undelivered messages. Message delivery is subject to effective transmission from your network operator.</p>

                    <p class="text-gray-300 mb-4"><strong class="text-white">Supported Carriers:</strong> Our SMS services are compatible with most major U.S. carriers including AT&T, Verizon, T-Mobile, Sprint, and others.</p>

                    <p class="text-gray-300 mb-4">Your consent to receive text messages is not a condition of purchasing any goods or services. You may request service by calling us directly at (509) 797-7999 if you prefer not to receive text messages.</p>

                    <h2 class="text-2xl font-semibold text-white mt-8 mb-4">Website Use</h2>
                    <p class="text-gray-300 mb-4">You agree to use our website only for lawful purposes. You may not:</p>
                    <ul class="list-disc list-inside text-gray-300 mb-4 space-y-2">
                        <li>Submit false or misleading information</li>
                        <li>Attempt to interfere with website operations</li>
                        <li>Use automated systems to access the website</li>
                        <li>Violate any applicable laws or regulations</li>
                    </ul>

                    <h2 class="text-2xl font-semibold text-white mt-8 mb-4">Dispute Resolution</h2>
                    <p class="text-gray-300 mb-4">Any disputes arising from our services will be resolved through good-faith negotiation. If a resolution cannot be reached, disputes will be subject to the laws of the State of Washington and resolved in Spokane County courts.</p>

                    <h2 class="text-2xl font-semibold text-white mt-8 mb-4">Changes to Terms</h2>
                    <p class="text-gray-300 mb-4">We reserve the right to modify these Terms of Service at any time. Changes will be effective immediately upon posting to our website. Continued use of our services constitutes acceptance of modified terms.</p>

                    <h2 class="text-2xl font-semibold text-white mt-8 mb-4">Contact Us</h2>
                    <p class="text-gray-300 mb-4">If you have questions about these Terms of Service, please contact us:</p>
                    <p class="text-gray-300 mb-4">
                        Phone: <a href="tel:+15097977999" class="text-red-500 hover:text-red-400">(509) 797-7999</a><br>
                        Spokane, WA
                    </p>
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
