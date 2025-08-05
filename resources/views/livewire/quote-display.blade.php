<div>
    @if (session()->has('success'))
        <div class="mb-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    <div class="mb-6">
        <a href="/" class="text-blue-600 hover:text-blue-800 flex items-center gap-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            Back to Home
        </a>
    </div>

    <h1 class="text-3xl font-bold text-gray-900 mb-8">Your Towing Quote</h1>

    @if ($loading)
        <div class="text-center py-12">
            <div class="inline-block animate-spin rounded-full h-12 w-12 border-b-2 border-blue-600"></div>
            <p class="mt-4 text-gray-600">Calculating your quote...</p>
        </div>
    @elseif ($error)
        <div class="p-6 bg-red-100 border border-red-400 text-red-700 rounded-lg">
            {{ $error }}
        </div>
        <div class="mt-6">
            <a href="/" class="bg-blue-600 text-white py-3 px-6 rounded-lg hover:bg-blue-700 transition font-semibold inline-block">
                Try Again
            </a>
        </div>
    @elseif ($quote && !$showBookingForm)
        <div class="space-y-6">
            <!-- Map Display -->
            <div id="map" class="w-full h-96 rounded-lg border border-gray-200"></div>
            
            <!-- Quote Details -->
            <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm">
                <div class="grid md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <h3 class="text-sm font-medium text-gray-500 mb-1">From</h3>
                        <p class="text-gray-900">{{ $fromAddress }}</p>
                    </div>
                    <div>
                        <h3 class="text-sm font-medium text-gray-500 mb-1">To</h3>
                        <p class="text-gray-900">{{ $toAddress }}</p>
                    </div>
                </div>
                
                <div class="space-y-3 mb-6">
                    <div class="flex justify-between text-gray-700">
                        <span>Distance:</span>
                        <span class="font-medium">{{ $quote['distance'] }} miles</span>
                    </div>
                    <div class="flex justify-between text-gray-700">
                        <span>Estimated time for us to arrive to you:</span>
                        <span class="font-medium">20-30 minutes</span>
                    </div>
                    <div class="flex justify-between text-gray-700">
                        <span>Estimated time for the actual tow:</span>
                        <span class="font-medium">{{ $quote['duration'] }} minutes</span>
                    </div>
                    <div class="border-t pt-3">
                        <div class="flex justify-between text-gray-700">
                            <span>Hook Fee:</span>
                            <span class="font-medium">${{ number_format($quote['hookFee'], 2) }}</span>
                        </div>
                        <div class="flex justify-between text-gray-700">
                            <span>Mileage ({{ $quote['distance'] }} mi × ${{ number_format(config('towing.pricing.per_mile'), 2) }}):</span>
                            <span class="font-medium">${{ number_format($quote['mileageCharge'], 2) }}</span>
                        </div>
                    </div>
                    <div class="border-t pt-3">
                        <div class="flex justify-between text-xl font-bold text-gray-900">
                            <span>Total:</span>
                            <span>${{ number_format($quote['total'], 2) }}</span>
                        </div>
                        @if ($quote['isMinimum'])
                            <p class="text-sm text-gray-500 mt-1">*Minimum service charge applied</p>
                        @endif
                    </div>
                </div>

                <div class="flex gap-4">
                    <button 
                        wire:click="showBookingForm"
                        class="flex-1 bg-blue-600 text-white py-3 px-6 rounded-lg hover:bg-blue-700 transition font-semibold"
                    >
                        Book This Tow
                    </button>
                    <a 
                        href="tel:+15097977999"
                        class="flex-1 bg-white text-blue-600 py-3 px-6 rounded-lg hover:bg-gray-50 transition font-semibold border-2 border-blue-600 text-center"
                    >
                        Call to Book
                    </a>
                </div>
            </div>
        </div>
        
        <script>
            document.addEventListener('DOMContentLoaded', async () => {
                try {
                    const { Map } = await google.maps.importLibrary("maps");
                    const { DirectionsService, DirectionsRenderer } = await google.maps.importLibrary("routes");
                    
                    const directionsService = new DirectionsService();
                    const directionsRenderer = new DirectionsRenderer({
                        polylineOptions: {
                            strokeColor: '#2563eb',
                            strokeWeight: 5
                        }
                    });
                    
                    const map = new Map(document.getElementById('map'), {
                        zoom: 10,
                        center: { lat: 47.6588, lng: -117.4260 },
                        mapTypeControl: false,
                        streetViewControl: false,
                        mapId: 'DEMO_MAP_ID'
                    });
                    
                    directionsRenderer.setMap(map);
                    
                    const request = {
                        origin: '{{ $fromAddress }}',
                        destination: '{{ $toAddress }}',
                        travelMode: google.maps.TravelMode.DRIVING
                    };
                    
                    directionsService.route(request, (result, status) => {
                        if (status === 'OK') {
                            directionsRenderer.setDirections(result);
                        }
                    });
                } catch (e) {
                    console.error('Map initialization failed:', e);
                }
            });
        </script>
    @elseif ($showBookingForm)
        <!-- Booking Form -->
        <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Complete Your Booking</h2>
            
            <div class="p-4 bg-blue-50 rounded-lg mb-6">
                <p class="text-sm text-blue-800">
                    <strong>Quote Total:</strong> ${{ number_format($quote['total'], 2) }} 
                    ({{ $quote['distance'] }} miles, ~{{ $quote['duration'] }} minutes)
                </p>
            </div>

            <form wire:submit.prevent="bookTow" class="space-y-4">
                <div>
                    <label for="vehicleType" class="block text-sm font-medium text-gray-700 mb-2">
                        Vehicle Type
                    </label>
                    <select 
                        id="vehicleType"
                        wire:model="vehicleType"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                    >
                        <option value="">Select vehicle type</option>
                        <option value="car">Car/Sedan</option>
                        <option value="suv">SUV</option>
                        <option value="truck">Pickup Truck</option>
                        <option value="van">Van</option>
                        <option value="motorcycle">Motorcycle</option>
                        <option value="other">Other</option>
                    </select>
                    @error('vehicleType') 
                        <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="towReason" class="block text-sm font-medium text-gray-700 mb-2">
                        Reason for Tow
                    </label>
                    <select 
                        id="towReason"
                        wire:model="towReason"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                    >
                        <option value="">Select reason</option>
                        <option value="breakdown">Mechanical Breakdown</option>
                        <option value="accident">Accident</option>
                        <option value="flat">Flat Tire</option>
                        <option value="battery">Dead Battery</option>
                        <option value="locked">Locked Out</option>
                        <option value="fuel">Out of Fuel</option>
                        <option value="other">Other</option>
                    </select>
                    @error('towReason') 
                        <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="customerName" class="block text-sm font-medium text-gray-700 mb-2">
                        Your Name
                    </label>
                    <input 
                        type="text" 
                        id="customerName"
                        wire:model="customerName"
                        placeholder="John Doe"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                    >
                    @error('customerName') 
                        <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="customerPhone" class="block text-sm font-medium text-gray-700 mb-2">
                        Phone Number
                    </label>
                    <input 
                        type="tel" 
                        id="customerPhone"
                        wire:model="customerPhone"
                        placeholder="(509) 797-7999"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                    >
                    @error('customerPhone') 
                        <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="customerEmail" class="block text-sm font-medium text-gray-700 mb-2">
                        Email Address
                    </label>
                    <input 
                        type="email" 
                        id="customerEmail"
                        wire:model="customerEmail"
                        placeholder="john@example.com"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                    >
                    @error('customerEmail') 
                        <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex gap-4">
                    <button 
                        type="submit"
                        class="flex-1 bg-blue-600 text-white py-3 px-6 rounded-lg hover:bg-blue-700 transition font-semibold"
                    >
                        Confirm Booking
                    </button>
                    <button 
                        type="button"
                        wire:click="cancelBooking"
                        class="flex-1 bg-gray-200 text-gray-700 py-3 px-6 rounded-lg hover:bg-gray-300 transition font-semibold"
                    >
                        Cancel
                    </button>
                </div>
            </form>
        </div>
    @endif
</div>