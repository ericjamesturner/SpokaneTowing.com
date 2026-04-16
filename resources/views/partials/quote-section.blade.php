<!-- Quote Section -->
<section class="py-20 bg-slate-900">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto">
            <div class="text-center mb-10">
                <span class="inline-block text-orange-500 font-semibold text-sm tracking-wider uppercase mb-4">Get Started</span>
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-2">
                    Get an Instant Quote
                </h2>
                <p class="text-xl text-gray-400">
                    Calculate your towing cost in seconds
                </p>
            </div>

            <div class="bg-slate-800/50 backdrop-blur-sm rounded-2xl p-8 border border-slate-700/50">
                <form action="{{ route('quote.store') }}" method="POST" class="space-y-6">
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
                                name="name"
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
                                name="phone"
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
                            name="from"
                            placeholder="Pickup location"
                            class="w-full pl-12 pr-12 py-4 bg-slate-900/50 border border-slate-600 rounded-xl focus:ring-2 focus:ring-orange-500 focus:border-transparent text-white placeholder-gray-500"
                            required
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
                            name="to"
                            placeholder="Drop-off location"
                            class="w-full pl-12 pr-12 py-4 bg-slate-900/50 border border-slate-600 rounded-xl focus:ring-2 focus:ring-orange-500 focus:border-transparent text-white placeholder-gray-500"
                            required
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
                </form>
            </div>

            <script>
                let fromAutocomplete, toAutocomplete;

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

                        // Options for autocomplete
                        const options = {
                            bounds: bounds,
                            componentRestrictions: { country: "us" },
                            fields: ["formatted_address", "geometry", "name"],
                            strictBounds: true,
                            types: ["geocode", "establishment"],
                            origin: spokaneCenter
                        };

                        // Initialize autocomplete for both inputs
                        const fromInput = document.getElementById('from-address');
                        const toInput = document.getElementById('to-address');
                        if (fromInput) fromAutocomplete = new Autocomplete(fromInput, options);
                        if (toInput) toAutocomplete = new Autocomplete(toInput, options);
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
            </script>

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
