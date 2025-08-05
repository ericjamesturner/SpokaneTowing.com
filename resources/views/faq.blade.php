<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Frequently Asked Questions - Spokane Towing</title>
    
    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
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
        <div class="max-w-3xl mx-auto">
            <!-- FAQ Header -->
            <div class="bg-blue-50 border border-blue-200 rounded-lg p-6 mb-8">
                <div class="flex items-start">
                    <svg class="w-6 h-6 text-blue-600 mr-3 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <div>
                        <h1 class="text-2xl font-bold text-blue-900 mb-2">Frequently Asked Questions</h1>
                        <p class="text-blue-700">Find answers to common questions about our towing services in Spokane.</p>
                    </div>
                </div>
            </div>

            <!-- FAQ Content -->
            <div class="bg-white rounded-lg border border-gray-200 shadow-sm mb-8">
                <div class="p-6 border-b border-gray-200">
                    <h2 class="text-xl font-bold text-gray-900">Common Questions</h2>
                </div>
                
                <div class="p-6 space-y-6">
                    <!-- Pricing Questions -->
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-3">Pricing & Payment</h3>
                        <div class="space-y-4">
                            <div class="border-l-4 border-blue-500 pl-4">
                                <h4 class="font-medium text-gray-900 mb-2">How much does a tow cost?</h4>
                                <p class="text-gray-700">Our pricing includes a hook fee plus mileage. Local tows typically range from $75-$150 depending on distance. We provide upfront quotes before service.</p>
                            </div>
                            <div class="border-l-4 border-blue-500 pl-4">
                                <h4 class="font-medium text-gray-900 mb-2">What payment methods do you accept?</h4>
                                <p class="text-gray-700">We accept cash, credit cards, and debit cards. Payment is collected after the service is completed.</p>
                            </div>
                            <div class="border-l-4 border-blue-500 pl-4">
                                <h4 class="font-medium text-gray-900 mb-2">Are there any hidden fees?</h4>
                                <p class="text-gray-700">No, we provide transparent pricing upfront. The only additional charges would be for special circumstances like winching or off-road recovery, which we'll discuss before proceeding.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Service Hours -->
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-3">Service Hours & Availability</h3>
                        <div class="space-y-4">
                            <div class="border-l-4 border-green-500 pl-4">
                                <h4 class="font-medium text-gray-900 mb-2">What are your service hours?</h4>
                                <p class="text-gray-700">We provide 24/7 emergency towing services, 365 days a year. We're here whenever you need us, day or night.</p>
                            </div>
                            <div class="border-l-4 border-green-500 pl-4">
                                <h4 class="font-medium text-gray-900 mb-2">How quickly can you arrive?</h4>
                                <p class="text-gray-700">Our average response time is 20-30 minutes within Spokane city limits. We'll provide an estimated arrival time when you call.</p>
                            </div>
                            <div class="border-l-4 border-green-500 pl-4">
                                <h4 class="font-medium text-gray-900 mb-2">Do you provide roadside assistance?</h4>
                                <p class="text-gray-700">Yes, we offer jump starts, tire changes, lockout services, and fuel delivery in addition to towing services.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Coverage Areas -->
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-3">Coverage Areas</h3>
                        <div class="space-y-4">
                            <div class="border-l-4 border-orange-500 pl-4">
                                <h4 class="font-medium text-gray-900 mb-2">Where do you provide service?</h4>
                                <p class="text-gray-700">We serve Spokane and surrounding areas including Spokane Valley, Liberty Lake, Cheney, and Airway Heights. Long-distance tows are available upon request.</p>
                            </div>
                            <div class="border-l-4 border-orange-500 pl-4">
                                <h4 class="font-medium text-gray-900 mb-2">Do you tow to other cities?</h4>
                                <p class="text-gray-700">Yes, we can tow to other cities and states. Additional charges apply for long-distance tows, which we'll discuss upfront.</p>
                            </div>
                            <div class="border-l-4 border-orange-500 pl-4">
                                <h4 class="font-medium text-gray-900 mb-2">Do you service highways and rural areas?</h4>
                                <p class="text-gray-700">Absolutely. We provide service on all major highways around Spokane and can reach rural locations. Response times may vary for remote areas.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Vehicle Types -->
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-3">Vehicle Types & Special Situations</h3>
                        <div class="space-y-4">
                            <div class="border-l-4 border-purple-500 pl-4">
                                <h4 class="font-medium text-gray-900 mb-2">What types of vehicles can you tow?</h4>
                                <p class="text-gray-700">We can tow cars, trucks, SUVs, motorcycles, and light commercial vehicles. We have specialized equipment for different vehicle types.</p>
                            </div>
                            <div class="border-l-4 border-purple-500 pl-4">
                                <h4 class="font-medium text-gray-900 mb-2">Can you tow AWD or 4WD vehicles?</h4>
                                <p class="text-gray-700">Yes, we have flatbed trucks specifically for all-wheel drive and four-wheel drive vehicles to prevent drivetrain damage.</p>
                            </div>
                            <div class="border-l-4 border-purple-500 pl-4">
                                <h4 class="font-medium text-gray-900 mb-2">What if my car is stuck or in an accident?</h4>
                                <p class="text-gray-700">We provide winching and recovery services for stuck vehicles and can safely remove vehicles from accident scenes when cleared by authorities.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="bg-blue-50 rounded-lg p-6 mb-8">
                <h2 class="text-lg font-semibold text-gray-900 mb-3">Still have questions?</h2>
                <p class="text-gray-700 mb-4">Can't find the answer you're looking for? Our friendly dispatchers are available 24/7 to help.</p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        <span class="text-gray-700">(509) 797-7999</span>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span class="text-gray-700">24/7 Emergency Service</span>
                    </div>
                </div>
            </div>

            <!-- Actions -->
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="/" class="flex-1 bg-gray-200 text-gray-700 py-3 px-6 rounded-lg hover:bg-gray-300 transition font-semibold text-center">
                    Back to Home
                </a>
                <a href="tel:+15097977999" class="flex-1 bg-blue-600 text-white py-3 px-6 rounded-lg hover:bg-blue-700 transition font-semibold text-center">
                    Call Us Now: (509) 797-7999
                </a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white mt-16">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="text-center">
                <h3 class="text-lg font-semibold mb-4">Spokane Towing</h3>
                <p class="text-gray-400 mb-4">Professional 24/7 towing and roadside assistance in Spokane, WA</p>
                <div class="flex justify-center items-center space-x-6 text-sm text-gray-400">
                    <span>(509) 797-7999</span>
                    <span>•</span>
                    <span>24/7 Emergency Service</span>
                    <span>•</span>
                    <span>Licensed & Insured</span>
                </div>
                <div class="mt-4 pt-4 border-t border-gray-800 text-xs text-gray-500">
                    <p>&copy; {{ date('Y') }} Spokane Towing. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>