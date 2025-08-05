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
    @elseif ($quote)
        <div class="space-y-6">
            @if (!$showBookingForm)
            <!-- Quote Summary -->
            <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm text-center">
                <h2 class="text-xl font-bold text-gray-700 mb-2">We can be there in 20-30 mins for</h2>
                <div class="text-5xl font-bold text-blue-600 mb-4">
                    ${{ number_format($quote['total'], 2) }}
                </div>
                @if ($quote['isMinimum'])
                    <p class="text-sm text-gray-500 mb-4">*Minimum service charge applied</p>
                @endif
                
                <div class="flex gap-4 mb-6">
                    <button 
                        wire:click="$set('showBookingForm', true)"
                        onclick="setTimeout(initializeHomeAddressAutocomplete, 100)"
                        wire:loading.attr="disabled"
                        wire:loading.class="opacity-50"
                        class="flex-1 bg-blue-600 text-white py-3 px-6 rounded-lg hover:bg-blue-700 transition font-semibold"
                    >
                        <span wire:loading.remove>Book This Tow</span>
                        <span wire:loading>Loading...</span>
                    </button>
                    <a 
                        href="tel:+15097977999"
                        class="flex-1 bg-white text-blue-600 py-3 px-6 rounded-lg hover:bg-gray-50 transition font-semibold border-2 border-blue-600 text-center"
                    >
                        Call to Book
                    </a>
                </div>
                
                <button 
                    onclick="toggleDetails()"
                    class="text-blue-600 hover:text-blue-700 font-medium flex items-center gap-2 mx-auto"
                >
                    <span id="details-text">Show Details</span>
                    <svg id="details-icon" class="w-4 h-4 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                
                <!-- Expandable Details -->
                <div id="quote-details" class="hidden mt-6 text-left">
                    <div class="border-t pt-6">
                        <div class="grid md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <h3 class="text-sm font-medium text-gray-500 mb-1">From:</h3>
                                <p class="text-gray-900">{{ $fromAddress }}</p>
                            </div>
                            <div>
                                <h3 class="text-sm font-medium text-gray-500 mb-1">To:</h3>
                                <p class="text-gray-900">{{ $toAddress }}</p>
                            </div>
                        </div>
                        
                        <div class="space-y-4">
                            <div class="flex flex-col sm:flex-row sm:justify-between gap-1">
                                <span class="text-gray-700">Distance:</span>
                                <span class="font-medium text-gray-900">{{ $quote['distance'] }} miles</span>
                            </div>
                            <div class="flex flex-col sm:flex-row sm:justify-between gap-1">
                                <span class="text-gray-700">Time for us to arrive:</span>
                                <span class="font-medium text-gray-900">20-30 mins</span>
                            </div>
                            <div class="flex flex-col sm:flex-row sm:justify-between gap-1">
                                <span class="text-gray-700">Time for the tow:</span>
                                <span class="font-medium text-gray-900">{{ $quote['duration'] }} mins</span>
                            </div>
                            <div class="border-t pt-4 space-y-3">
                                <div class="flex flex-col sm:flex-row sm:justify-between gap-1">
                                    <span class="text-gray-700">Hook Fee:</span>
                                    <span class="font-medium text-gray-900">${{ number_format($quote['hookFee'], 2) }}</span>
                                </div>
                                <div class="flex flex-col sm:flex-row sm:justify-between gap-1">
                                    <span class="text-gray-700">Mileage <span class="text-sm">({{ $quote['distance'] }} mi × ${{ number_format(config('towing.pricing.per_mile'), 2) }})</span>:</span>
                                    <span class="font-medium text-gray-900">${{ number_format($quote['mileageCharge'], 2) }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Map Display -->
            <div id="map" class="w-full h-96 rounded-lg border border-gray-200"></div>
            @else
                <!-- Booking Form -->
                <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Complete Your Booking</h2>
                    

                    <form wire:submit.prevent="bookTow" class="space-y-4">
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

                        <div>
                            <label for="home-address" class="block text-sm font-medium text-gray-700 mb-2">
                                Home Address
                            </label>
                            <input 
                                type="text" 
                                id="home-address"
                                wire:model="homeAddress"
                                placeholder="Enter your home address"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-base"
                            >
                            @error('homeAddress') 
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="grid grid-cols-3 gap-4">
                            <div>
                                <label for="vehicleYear" class="block text-sm font-medium text-gray-700 mb-2">
                                    Year
                                </label>
                                <input 
                                    type="number" 
                                    id="vehicleYear"
                                    wire:model="vehicleYear"
                                    placeholder="2020"
                                    min="1900"
                                    max="{{ date('Y') + 1 }}"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                >
                                @error('vehicleYear') 
                                    <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                            
                            <div>
                                <label for="vehicleMake" class="block text-sm font-medium text-gray-700 mb-2">
                                    Make
                                </label>
                                <input 
                                    type="text" 
                                    id="vehicleMake"
                                    wire:model="vehicleMake"
                                    placeholder="Toyota"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                >
                                @error('vehicleMake') 
                                    <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                            
                            <div>
                                <label for="vehicleModel" class="block text-sm font-medium text-gray-700 mb-2">
                                    Model
                                </label>
                                <input 
                                    type="text" 
                                    id="vehicleModel"
                                    wire:model="vehicleModel"
                                    placeholder="Camry"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                >
                                @error('vehicleModel') 
                                    <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="problem" class="block text-sm font-medium text-gray-700 mb-2">
                                What's the problem?
                            </label>
                            <select 
                                id="problem"
                                wire:model="problem"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            >
                                <option value="">Select problem</option>
                                <option value="Engine Problem">Engine Problem</option>
                                <option value="Transmission Problem">Transmission Problem</option>
                                <option value="Won't Start">Won't Start</option>
                                <option value="Won't Move">Just Won't Move</option>
                                <option value="Accident">Accident</option>
                                <option value="Flat Tire">Flat Tire</option>
                                <option value="Out of Gas">Out of Gas</option>
                                <option value="Locked Out">Locked Out</option>
                                <option value="other">Other</option>
                            </select>
                            @error('problem') 
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        @if($problem === 'other')
                        <div>
                            <label for="problemOther" class="block text-sm font-medium text-gray-700 mb-2">
                                Please describe the problem
                            </label>
                            <textarea 
                                id="problemOther"
                                wire:model="problemOther"
                                rows="3"
                                placeholder="Describe the issue..."
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            ></textarea>
                            @error('problemOther') 
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                        @endif

                        <div class="p-4 bg-gray-50 rounded-lg mb-4 text-sm text-gray-700">
                            <p class="mb-2">
                                By clicking "Confirm Booking", you agree to:
                            </p>
                            <ul class="space-y-1 ml-4">
                                <li>• Pay the quoted towing fee of <strong>${{ number_format($quote['total'], 2) }}</strong></li>
                                <li>• Receive SMS text messages regarding your tow service</li>
                                <li>• Our terms of service and payment policies</li>
                            </ul>
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
            @endif {{-- End of $showBookingForm check --}}
        </div>
        
        <script>
            function toggleDetails() {
                const details = document.getElementById('quote-details');
                const text = document.getElementById('details-text');
                const icon = document.getElementById('details-icon');
                
                if (details.classList.contains('hidden')) {
                    details.classList.remove('hidden');
                    text.textContent = 'Hide Details';
                    icon.style.transform = 'rotate(180deg)';
                } else {
                    details.classList.add('hidden');
                    text.textContent = 'Show Details';
                    icon.style.transform = 'rotate(0deg)';
                }
            }
            
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
            
            // Initialize autocomplete for home address when booking form is shown
            window.initializeHomeAddressAutocomplete = async function() {
                // Wait a bit for the form to be rendered
                await new Promise(resolve => setTimeout(resolve, 500));
                
                try {
                    const { Autocomplete } = await google.maps.importLibrary("places");
                    
                    const homeAddressInput = document.getElementById('home-address');
                    if (homeAddressInput && !homeAddressInput.hasAttribute('data-autocomplete')) {
                        const spokaneCenter = new google.maps.LatLng(47.6588, -117.4260);
                        const bounds = new google.maps.LatLngBounds(
                            new google.maps.LatLng(46.2088, -118.8760),
                            new google.maps.LatLng(49.1088, -116.0760)
                        );
                        
                        const homeAutocomplete = new Autocomplete(homeAddressInput, {
                            bounds: bounds,
                            componentRestrictions: { country: "us" },
                            fields: ["formatted_address"],
                            strictBounds: true,
                            types: ["geocode"],
                            origin: spokaneCenter
                        });
                        
                        homeAutocomplete.addListener('place_changed', function() {
                            const place = homeAutocomplete.getPlace();
                            if (place.formatted_address) {
                                @this.set('homeAddress', place.formatted_address);
                            }
                        });
                        
                        homeAddressInput.setAttribute('data-autocomplete', 'true');
                    }
                } catch (e) {
                    console.error('Failed to initialize home address autocomplete:', e);
                }
            }
        </script>
    @endif
</div> 
