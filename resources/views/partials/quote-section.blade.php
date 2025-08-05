<!-- Quote Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-900 mb-2">
                Get an Instant Quote
            </h2>
            <p class="text-xl text-center text-gray-600 mb-10">
                Calculate your towing cost in seconds
            </p>
            
            <form action="{{ route('quote') }}" method="GET" class="space-y-6 max-w-2xl mx-auto">
                <div>
                    <div class="relative">
                        <input
                            type="text"
                            id="from-address"
                            name="from"
                            placeholder="Pickup location"
                            class="w-full px-4 py-3 pr-12 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-base"
                            required
                        >
                        <button 
                            type="button"
                            onclick="detectLocation('from-address')"
                            class="absolute right-2 top-1/2 -translate-y-1/2 p-2 text-gray-500 hover:text-blue-600 transition"
                            title="Use my location"
                        >
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                
                <div>
                    <div class="relative">
                        <input
                            type="text"
                            id="to-address"
                            name="to"
                            placeholder="Drop-off location"
                            class="w-full px-4 py-3 pr-12 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-base"
                            required
                        >
                        <button 
                            type="button"
                            onclick="detectLocation('to-address')"
                            class="absolute right-2 top-1/2 -translate-y-1/2 p-2 text-gray-500 hover:text-blue-600 transition"
                            title="Use my location"
                        >
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                
                <button 
                    type="submit"
                    class="w-full bg-blue-600 text-white py-3 px-6 rounded-lg hover:bg-blue-700 transition font-semibold text-lg"
                >
                    Get Instant Quote
                </button>
            </form>
            
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
                        fromAutocomplete = new Autocomplete(
                            document.getElementById('from-address'),
                            options
                        );
                        
                        toAutocomplete = new Autocomplete(
                            document.getElementById('to-address'),
                            options
                        );
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
                <p class="text-gray-600 mb-4">Open 24/7 — Fast Response Guaranteed</p>
                <div class="bg-blue-600 text-white rounded-lg p-6 inline-block">
                    <p class="text-lg mb-2">Call Now for Immediate Service</p>
                    <a href="tel:+15097977999" class="text-3xl font-bold hover:underline">
                        (509) 797-7999
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>