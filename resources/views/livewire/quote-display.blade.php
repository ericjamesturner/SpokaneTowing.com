<div>
    @if (session()->has('success'))
        <div class="mb-6 p-4 bg-green-500/20 border border-green-500/30 text-green-400 rounded-xl">
            {{ session('success') }}
        </div>
    @endif

    <div class="mb-6">
        <a href="/" class="text-orange-500 hover:text-orange-400 flex items-center gap-2 transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            Back to Home
        </a>
    </div>

    @if ($loading)
        <div class="flex flex-col items-center justify-center py-16">
            <div class="animate-spin rounded-full h-16 w-16 border-4 border-orange-500/30 border-t-orange-500"></div>
            <p class="mt-6 text-gray-400 text-lg">Calculating your quote...</p>
        </div>
    @elseif ($error)
        <div class="bg-slate-800/50 backdrop-blur-sm rounded-2xl p-8 border border-red-500/30">
            <div class="flex items-start space-x-4">
                <div class="w-12 h-12 bg-red-500/20 rounded-xl flex items-center justify-center flex-shrink-0">
                    <svg class="w-6 h-6 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                    </svg>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-white mb-2">Unable to Calculate Quote</h3>
                    <p class="text-gray-400">{{ $error }}</p>
                </div>
            </div>
            <div class="mt-6 flex gap-4">
                <a href="/" class="bg-gradient-to-r from-orange-500 to-orange-600 text-white py-3 px-6 rounded-xl hover:from-orange-600 hover:to-orange-700 transition font-semibold">
                    Try Again
                </a>
                <a href="tel:+15097977999" class="bg-white/10 text-white py-3 px-6 rounded-xl hover:bg-white/20 transition font-semibold border border-white/20">
                    Call Instead
                </a>
            </div>
        </div>
    @elseif ($quote)
        <div class="space-y-6">
            <!-- Quote Summary -->
            <div class="bg-slate-800/50 backdrop-blur-sm rounded-2xl p-8 border border-slate-700/50 text-center">
                <div class="inline-flex items-center space-x-2 bg-green-500/20 border border-green-500/30 rounded-full px-4 py-2 mb-6">
                    <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>
                    <span class="text-green-400 text-sm font-medium">Drivers Available Now</span>
                </div>

                <h2 class="text-xl font-bold text-gray-300 mb-4">We can be there in 20-30 mins for</h2>
                <div class="text-6xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-orange-500 to-orange-400 mb-2">
                    ${{ number_format($quote['total'], 2) }}
                </div>
                <p class="text-sm text-gray-500 mb-4">(including WA sales tax)</p>
                @if ($quote['isMinimum'])
                    <p class="text-sm text-gray-500 mb-4">*Minimum service charge applied</p>
                @endif

                <div class="flex flex-col sm:flex-row gap-4 mb-8">
                    <button
                        wire:click="showBookingForm"
                        type="button"
                        class="flex-1 bg-gradient-to-r from-orange-500 to-orange-600 text-white py-4 px-6 rounded-xl hover:from-orange-600 hover:to-orange-700 transition font-semibold text-lg shadow-lg shadow-orange-500/25"
                    >
                        Book This Tow
                    </button>
                    <a
                        href="tel:+15097977999"
                        class="flex-1 bg-white/10 text-white py-4 px-6 rounded-xl hover:bg-white/20 transition font-semibold text-lg border border-white/20 text-center"
                    >
                        Call to Book
                    </a>
                </div>

                <button
                    onclick="toggleDetails()"
                    class="text-orange-500 hover:text-orange-400 font-medium flex items-center gap-2 mx-auto transition"
                >
                    <span id="details-text">Show Details</span>
                    <svg id="details-icon" class="w-4 h-4 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>

                <!-- Expandable Details -->
                <div id="quote-details" class="hidden mt-8 text-left">
                    <div class="border-t border-slate-700 pt-6">
                        <div class="grid md:grid-cols-2 gap-6 mb-6">
                            <div class="bg-slate-900/50 rounded-xl p-4">
                                <h3 class="text-sm font-medium text-gray-500 mb-1">Pickup Location</h3>
                                <p class="text-white">{{ $fromAddress }}</p>
                            </div>
                            <div class="bg-slate-900/50 rounded-xl p-4">
                                <h3 class="text-sm font-medium text-gray-500 mb-1">Drop-off Location</h3>
                                <p class="text-white">{{ $toAddress }}</p>
                            </div>
                        </div>

                        <div class="space-y-4 bg-slate-900/50 rounded-xl p-4">
                            <div class="flex flex-col sm:flex-row sm:justify-between gap-1">
                                <span class="text-gray-400">Distance:</span>
                                <span class="font-medium text-white">{{ $quote['distance'] }} miles</span>
                            </div>
                            <div class="flex flex-col sm:flex-row sm:justify-between gap-1">
                                <span class="text-gray-400">Time for us to arrive:</span>
                                <span class="font-medium text-white">20-30 mins</span>
                            </div>
                            <div class="flex flex-col sm:flex-row sm:justify-between gap-1">
                                <span class="text-gray-400">Time for the tow:</span>
                                <span class="font-medium text-white">{{ $quote['duration'] }} mins</span>
                            </div>
                            <div class="border-t border-slate-700 pt-4 space-y-3">
                                <div class="flex flex-col sm:flex-row sm:justify-between gap-1">
                                    <span class="text-gray-400">Hook Fee:</span>
                                    <span class="font-medium text-white">${{ number_format($quote['hookFee'], 2) }}</span>
                                </div>
                                <div class="flex flex-col sm:flex-row sm:justify-between gap-1">
                                    <span class="text-gray-400">Mileage <span class="text-sm">({{ $quote['distance'] }} mi × ${{ number_format(config('towing.pricing.per_mile'), 2) }})</span>:</span>
                                    <span class="font-medium text-white">${{ number_format($quote['mileageCharge'], 2) }}</span>
                                </div>
                                @php
                                    $subtotal = $quote['hookFee'] + $quote['mileageCharge'];
                                    $tax = $quote['total'] - $subtotal;
                                @endphp
                                <div class="flex flex-col sm:flex-row sm:justify-between gap-1 pt-3 border-t border-slate-700">
                                    <span class="text-gray-400">Subtotal:</span>
                                    <span class="font-medium text-white">${{ number_format($subtotal, 2) }}</span>
                                </div>
                                <div class="flex flex-col sm:flex-row sm:justify-between gap-1">
                                    <span class="text-gray-400">WA Sales Tax <span class="text-sm">({{ number_format(config('towing.pricing.tax_rate') * 100, 1) }}%)</span>:</span>
                                    <span class="font-medium text-white">${{ number_format($tax, 2) }}</span>
                                </div>
                                <div class="flex flex-col sm:flex-row sm:justify-between gap-1 pt-3 border-t border-slate-700">
                                    <span class="text-white font-semibold">Total:</span>
                                    <span class="font-bold text-orange-500 text-lg">${{ number_format($quote['total'], 2) }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Map Display -->
            <div id="map" class="w-full h-96 rounded-2xl border border-slate-700/50 overflow-hidden"></div>
        </div>

        <script>
            function toggleDetails() {
                const details = document.getElementById('quote-details');
                const text = document.getElementById('details-text');
                const icon = document.getElementById('details-icon');

                if (details.classList.contains('hidden')) {
                    details.classList.remove('hidden');
                    text.textContent = 'Hide Details';
                    icon.classList.add('rotate-180');
                } else {
                    details.classList.add('hidden');
                    text.textContent = 'Show Details';
                    icon.classList.remove('rotate-180');
                }
            }

            // Initialize map
            window.addEventListener('load', async function() {
                try {
                    const { Map } = await google.maps.importLibrary("maps");
                    const { DirectionsService, DirectionsRenderer } = await google.maps.importLibrary("routes");

                    // Initialize map centered on Spokane
                    const map = new Map(document.getElementById("map"), {
                        zoom: 10,
                        center: { lat: 47.6588, lng: -117.4260 },
                        mapTypeControl: false,
                        streetViewControl: false,
                        styles: [
                            { elementType: "geometry", stylers: [{ color: "#242f3e" }] },
                            { elementType: "labels.text.stroke", stylers: [{ color: "#242f3e" }] },
                            { elementType: "labels.text.fill", stylers: [{ color: "#746855" }] },
                            { featureType: "road", elementType: "geometry", stylers: [{ color: "#38414e" }] },
                            { featureType: "road", elementType: "geometry.stroke", stylers: [{ color: "#212a37" }] },
                            { featureType: "water", elementType: "geometry", stylers: [{ color: "#17263c" }] },
                        ]
                    });

                    const directionsService = new DirectionsService();
                    const directionsRenderer = new DirectionsRenderer({
                        suppressMarkers: false,
                        polylineOptions: {
                            strokeColor: "#f97316",
                            strokeWeight: 5
                        }
                    });

                    directionsRenderer.setMap(map);

                    // Calculate and display route
                    directionsService.route({
                        origin: @js($fromAddress),
                        destination: @js($toAddress),
                        travelMode: google.maps.TravelMode.DRIVING,
                    }, (result, status) => {
                        if (status === "OK") {
                            directionsRenderer.setDirections(result);
                        }
                    });
                } catch (e) {
                    console.error('Map initialization failed:', e);
                }
            });
        </script>
    @endif
</div>
