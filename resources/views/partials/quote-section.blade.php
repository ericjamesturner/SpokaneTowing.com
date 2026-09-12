<!-- Quote Section -->
<section id="quote" class="py-12 sm:py-16 bg-slate-900">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto">
            <div class="text-center mb-10">
                <span class="inline-block text-orange-500 font-semibold text-sm tracking-wider uppercase mb-4">Get Started</span>
                @if($standalone ?? false)
                    <h1 class="text-3xl md:text-4xl font-bold text-white mb-2">Get a Towing Quote in Spokane</h1>
                @else
                    <h2 class="text-3xl md:text-4xl font-bold text-white mb-2">Get an Instant Quote</h2>
                @endif
                <p class="text-xl text-gray-400">
                    Enter your pickup and drop-off locations for an estimate
                </p>
            </div>

            @if($errors->any())
                <div role="alert" class="mb-6 rounded-xl border border-red-400 bg-red-950 p-4 text-white">
                    <p class="font-semibold">Please check your details:</p>
                    <ul class="mt-2 list-disc pl-5">@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
                </div>
            @endif
            <div class="bg-slate-800/50 backdrop-blur-sm rounded-2xl p-8 border border-slate-700/50">
                <form action="{{ route('quote.store') }}" method="POST" data-quote-form class="space-y-6">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <input
                                type="text"
                                id="customer-name"
                                name="name" aria-label="Your name" autocomplete="name" value="{{ old('name') }}"
                                placeholder="Your name"
                                class="w-full pl-12 pr-4 py-4 bg-slate-900/50 border border-slate-600 rounded-xl focus:ring-2 focus:ring-orange-500 focus:border-transparent text-white placeholder-gray-500"
                                required
                            >
                        </div>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <input
                                type="tel"
                                id="customer-phone"
                                name="phone" aria-label="Phone number" autocomplete="tel" value="{{ old('phone') }}"
                                placeholder="Phone number"
                                class="w-full pl-12 pr-4 py-4 bg-slate-900/50 border border-slate-600 rounded-xl focus:ring-2 focus:ring-orange-500 focus:border-transparent text-white placeholder-gray-500"
                                required
                            >
                        </div>
                    </div>

                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <input
                            type="text"
                            id="from-address"
                            name="from" aria-label="Pickup location" autocomplete="off" value="{{ old('from') }}"
                            placeholder="Pickup location"
                            class="w-full pl-12 pr-12 py-4 bg-slate-900/50 border border-slate-600 rounded-xl focus:ring-2 focus:ring-orange-500 focus:border-transparent text-white placeholder-gray-500"
                            minlength="5" required
                        >
                        <button
                            type="button"
                            onclick="detectLocation('from-address')"
                            class="absolute right-3 top-1/2 -translate-y-1/2 p-2 text-gray-500 hover:text-orange-500 transition"
                            title="Use my location"
                        >
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </button>
                    </div>

                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <input
                            type="text"
                            id="to-address"
                            name="to" aria-label="Drop-off location" autocomplete="off" value="{{ old('to') }}"
                            placeholder="Drop-off location"
                            class="w-full pl-12 pr-12 py-4 bg-slate-900/50 border border-slate-600 rounded-xl focus:ring-2 focus:ring-orange-500 focus:border-transparent text-white placeholder-gray-500"
                            minlength="5" required
                        >
                        <button
                            type="button"
                            onclick="detectLocation('to-address')"
                            class="absolute right-3 top-1/2 -translate-y-1/2 p-2 text-gray-500 hover:text-orange-500 transition"
                            title="Use my location"
                        >
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </button>
                    </div>

                    <button
                        type="submit"
                        class="w-full bg-gradient-to-r from-orange-500 to-orange-600 text-white py-4 px-6 rounded-xl hover:from-orange-600 hover:to-orange-700 transition font-semibold text-lg shadow-lg shadow-orange-500/25"
                    >
                        Get Instant Quote
                    </button>
                    <p class="text-center text-gray-500 text-sm mt-4">
                        Quotes are estimates. Call <a href="tel:+15097977999" class="text-orange-500 hover:text-orange-400 font-medium">(509) 797-7999</a> to lock in your price.
                    </p>
                    <p class="text-center text-gray-400 text-xs leading-relaxed">
                        By submitting, you agree to our <a href="/terms-of-service" class="underline">Terms</a> and <a href="/privacy-policy" class="underline">Privacy Policy</a>, and consent to calls/texts about your quote.
                    </p>
                </form>
            </div>


            <div class="mt-12 text-center">
                <p class="text-gray-400 mb-6">Open 24/7 - Fast Response Guaranteed</p>
                <a href="tel:+15097977999" class="inline-flex items-center space-x-3 bg-gradient-to-r from-orange-500 to-orange-600 text-white rounded-xl px-8 py-4 font-semibold text-lg shadow-lg shadow-orange-500/25 hover:from-orange-600 hover:to-orange-700 transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                    </svg>
                    <span>(509) 797-7999</span>
                </a>
            </div>
        </div>
    </div>
</section>
