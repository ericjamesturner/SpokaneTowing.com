<div class="w-full max-w-2xl mx-auto">
    @if (session()->has('success'))
        <div class="mb-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    @if (!$showBookingForm)
        <!-- Quote Form -->
        <form wire:submit.prevent="calculateQuote" class="space-y-6">
            <div>
                <label for="fromAddress" class="block text-sm font-medium text-gray-700 mb-2">
                    Pickup Location
                </label>
                <div class="relative">
                    <input 
                        type="hidden" 
                        id="fromAddress"
                        wire:model="fromAddress"
                    >
                    <gmp-place-autocomplete
                        id="fromAutocomplete"
                        placeholder="Enter pickup address or place name"
                        class="w-full"
                    ></gmp-place-autocomplete>
                    <button 
                        type="button"
                        onclick="detectLocation('from')"
                        class="absolute right-2 top-1/2 -translate-y-1/2 p-2 text-gray-500 hover:text-blue-600 transition z-10"
                        title="Use my location"
                    >
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </button>
                </div>
                @error('fromAddress') 
                    <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="toAddress" class="block text-sm font-medium text-gray-700 mb-2">
                    Drop-off Location
                </label>
                <div class="relative">
                    <input 
                        type="hidden" 
                        id="toAddress"
                        wire:model="toAddress"
                    >
                    <gmp-place-autocomplete
                        id="toAutocomplete"
                        placeholder="Enter destination address or place name"
                        class="w-full"
                    ></gmp-place-autocomplete>
                    <button 
                        type="button"
                        onclick="detectLocation('to')"
                        class="absolute right-2 top-1/2 -translate-y-1/2 p-2 text-gray-500 hover:text-blue-600 transition z-10"
                        title="Use my location"
                    >
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </button>
                </div>
                @error('toAddress') 
                    <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                @enderror
            </div>

            <button 
                type="submit"
                wire:loading.attr="disabled"
                class="w-full bg-blue-600 text-white py-3 px-6 rounded-lg hover:bg-blue-700 transition font-semibold text-lg disabled:opacity-50 disabled:cursor-not-allowed"
            >
                <span wire:loading.remove>Get Instant Quote</span>
                <span wire:loading>Calculating...</span>
            </button>
            
            <!-- Debug: Show current values -->
            <div class="mt-2 text-xs text-gray-500">
                From: <span wire:model="fromAddress">{{ $fromAddress }}</span> | 
                To: <span wire:model="toAddress">{{ $toAddress }}</span>
            </div>
        </form>

        @if ($error)
            <div class="mt-6 p-4 bg-red-100 border border-red-400 text-red-700 rounded-lg">
                {{ $error }}
            </div>
        @endif

        @if ($quote)
            <!-- Quote Display -->
            <div class="mt-8 space-y-6">
                <!-- Map Display -->
                <div id="map" class="w-full h-96 rounded-lg border border-gray-200"></div>
                
                <!-- Quote Details -->
                <div class="p-6 bg-gray-50 rounded-lg border border-gray-200">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Your Quote</h3>
                    
                    <div class="space-y-3 mb-6">
                        <div class="flex justify-between text-gray-700">
                            <span>Distance:</span>
                            <span class="font-medium">{{ $quote['distance'] }} miles</span>
                        </div>
                        <div class="flex justify-between text-gray-700">
                            <span>Estimated Time:</span>
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
                async function initQuoteMap() {
                    try {
                        // Import required libraries
                        const { Map } = await google.maps.importLibrary("maps");
                        const { DirectionsService, DirectionsRenderer } = await google.maps.importLibrary("routes");
                        
                        const mapElement = document.getElementById('map');
                        if (!mapElement) return;
                        
                        const directionsService = new DirectionsService();
                        const directionsRenderer = new DirectionsRenderer({
                            polylineOptions: {
                                strokeColor: '#2563eb',
                                strokeWeight: 5
                            }
                        });
                        
                        const map = new Map(mapElement, {
                            zoom: 10,
                            center: { lat: 47.6588, lng: -117.4260 }, // Spokane center
                            mapTypeControl: false,
                            streetViewControl: false,
                            mapId: 'DEMO_MAP_ID' // Optional, for cloud styling
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
                            } else {
                                console.error('Directions request failed:', status);
                            }
                        });
                    } catch (e) {
                        console.error('Map initialization failed:', e);
                    }
                }

                // Initialize map when component loads
                document.addEventListener('DOMContentLoaded', () => {
                    if (document.getElementById('map')) {
                        initQuoteMap();
                    }
                });

                // Re-initialize on Livewire updates
                document.addEventListener('livewire:initialized', () => {
                    Livewire.on('quote-calculated', () => {
                        setTimeout(() => {
                            initQuoteMap();
                        }, 100);
                    });
                });
            </script>
        @endif
    @else
        <!-- Booking Form -->
        <div class="space-y-6">
            <h3 class="text-xl font-bold text-gray-900">Complete Your Booking</h3>
            
            <div class="p-4 bg-blue-50 rounded-lg">
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

<style>
    gmp-place-autocomplete {
        width: 100%;
    }
    gmp-place-autocomplete input {
        width: 100%;
        padding: 0.75rem 3rem 0.75rem 1rem;
        border: 1px solid #d1d5db;
        border-radius: 0.5rem;
        font-size: 1rem;
    }
    gmp-place-autocomplete input:focus {
        outline: none;
        border-color: #3b82f6;
        box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Set up PlaceAutocomplete elements
        const fromAutocomplete = document.getElementById('fromAutocomplete');
        const toAutocomplete = document.getElementById('toAutocomplete');
        
        // Configure options
        if (fromAutocomplete) {
            fromAutocomplete.componentRestrictions = { country: 'us' };
            fromAutocomplete.locationBias = {
                center: { lat: 47.6588, lng: -117.4260 },
                radius: 50000
            };
        }
        
        if (toAutocomplete) {
            toAutocomplete.componentRestrictions = { country: 'us' };
        }
        
        // Handle place selection
        if (fromAutocomplete) {
            fromAutocomplete.addEventListener('gmp-placeselect', async (event) => {
                const place = event.place;
                if (place) {
                    await place.fetchFields(['formattedAddress', 'displayName']);
                    const address = place.formattedAddress || place.displayName;
                    if (address) {
                        document.getElementById('fromAddress').value = address;
                        @this.set('fromAddress', address);
                    }
                }
            });
        }
        
        if (toAutocomplete) {
            toAutocomplete.addEventListener('gmp-placeselect', async (event) => {
                const place = event.place;
                if (place) {
                    await place.fetchFields(['formattedAddress', 'displayName']);
                    const address = place.formattedAddress || place.displayName;
                    if (address) {
                        document.getElementById('toAddress').value = address;
                        @this.set('toAddress', address);
                    }
                }
            });
        }
    });
    
    async function initAutocomplete() {
        try {
            // Load the Places library using the new async pattern
            const { PlaceAutocompleteElement } = await google.maps.importLibrary("places");
            
            // Create the autocomplete elements
            const fromOptions = {
                types: ['address'],
                componentRestrictions: { country: 'us' },
                locationBias: {
                    center: { lat: 47.6588, lng: -117.4260 },
                    radius: 50000 // 50km radius around Spokane
                }
            };
            
            const toOptions = {
                types: ['address'],
                componentRestrictions: { country: 'us' }
            };
            
            // Create PlaceAutocompleteElement instances
            autocompleteFrom = new PlaceAutocompleteElement(fromOptions);
            autocompleteTo = new PlaceAutocompleteElement(toOptions);
            
            // Style the elements to match the input fields
            const inputStyles = 'width: 100%; padding: 0.75rem 3rem 0.75rem 1rem; border: 1px solid #d1d5db; border-radius: 0.5rem; font-size: 1rem;';
            autocompleteFrom.style.cssText = inputStyles;
            autocompleteTo.style.cssText = inputStyles;
            
            // Set placeholders
            const fromInput = autocompleteFrom.querySelector('input');
            const toInput = autocompleteTo.querySelector('input');
            if (fromInput) fromInput.placeholder = 'Enter pickup address';
            if (toInput) toInput.placeholder = 'Enter destination address';
            
            // Add to containers
            document.getElementById('fromAddressContainer').appendChild(autocompleteFrom);
            document.getElementById('toAddressContainer').appendChild(autocompleteTo);
            
            // Also sync manual typing in the autocomplete inputs
            if (fromInput) {
                fromInput.addEventListener('input', (e) => {
                    const value = e.target.value;
                    document.getElementById('fromAddress').value = value;
                    @this.set('fromAddress', value);
                });
                fromInput.addEventListener('blur', (e) => {
                    const value = e.target.value;
                    document.getElementById('fromAddress').value = value;
                    @this.set('fromAddress', value);
                });
            }
            if (toInput) {
                toInput.addEventListener('input', (e) => {
                    const value = e.target.value;
                    document.getElementById('toAddress').value = value;
                    @this.set('toAddress', value);
                });
                toInput.addEventListener('blur', (e) => {
                    const value = e.target.value;
                    document.getElementById('toAddress').value = value;
                    @this.set('toAddress', value);
                });
            }
            
            // Handle place selection
            autocompleteFrom.addEventListener('gmp-placeselect', async (event) => {
                event.stopPropagation();
                const place = event.place;
                if (place) {
                    await place.fetchFields(['formattedAddress']);
                    if (place.formattedAddress) {
                        // Update both the hidden input and Livewire
                        document.getElementById('fromAddress').value = place.formattedAddress;
                        @this.set('fromAddress', place.formattedAddress);
                        // Also update the visible input
                        if (fromInput) fromInput.value = place.formattedAddress;
                    }
                }
            });
            
            autocompleteTo.addEventListener('gmp-placeselect', async (event) => {
                event.stopPropagation();
                const place = event.place;
                if (place) {
                    await place.fetchFields(['formattedAddress']);
                    if (place.formattedAddress) {
                        // Update both the hidden input and Livewire
                        document.getElementById('toAddress').value = place.formattedAddress;
                        @this.set('toAddress', place.formattedAddress);
                        // Also update the visible input
                        if (toInput) toInput.value = place.formattedAddress;
                    }
                }
            });
            
            // Listen for Livewire updates to sync the values
            Livewire.hook('message.processed', (message, component) => {
                if (component.fingerprint.name === 'quote-calculator') {
                    const fromValue = @this.get('fromAddress');
                    const toValue = @this.get('toAddress');
                    
                    if (fromInput && fromValue && fromInput.value !== fromValue) {
                        fromInput.value = fromValue;
                    }
                    if (toInput && toValue && toInput.value !== toValue) {
                        toInput.value = toValue;
                    }
                }
            });
            
        } catch (e) {
            console.log('Falling back to standard inputs:', e);
            // Show the original inputs if PlaceAutocompleteElement fails
            showStandardInputs();
        }
    }
    
    function showStandardInputs() {
        document.getElementById('fromAddress').style.display = 'block';
        document.getElementById('toAddress').style.display = 'block';
        document.getElementById('fromAddressContainer').style.display = 'none';
        document.getElementById('toAddressContainer').style.display = 'none';
    }
    
    // Initialize when page loads
    document.addEventListener('DOMContentLoaded', () => {
        if (window.google && window.google.maps) {
            initPlaceAutocomplete();
        } else {
            // Wait for Google Maps to be available
            const checkInterval = setInterval(() => {
                if (window.google && window.google.maps) {
                    clearInterval(checkInterval);
                    initPlaceAutocomplete();
                }
            }, 100);
        }
    });
    
    async function initPlaceAutocomplete() {
        try {
            const { PlaceAutocompleteElement } = await google.maps.importLibrary("places");
            
            // Hide original inputs
            document.getElementById('fromAddress').style.position = 'absolute';
            document.getElementById('fromAddress').style.left = '-9999px';
            document.getElementById('toAddress').style.position = 'absolute';
            document.getElementById('toAddress').style.left = '-9999px';
            
            // Create PlaceAutocompleteElement for from address
            const fromAutocomplete = new PlaceAutocompleteElement({
                componentRestrictions: { country: 'us' },
                locationBias: {
                    center: { lat: 47.6588, lng: -117.4260 },
                    radius: 50000
                }
            });
            
            // Create PlaceAutocompleteElement for to address
            const toAutocomplete = new PlaceAutocompleteElement({
                componentRestrictions: { country: 'us' }
            });
            
            // Style them to match original inputs
            const styleElement = (element) => {
                element.style.width = '100%';
                const input = element.querySelector('input');
                if (input) {
                    input.style.width = '100%';
                    input.style.padding = '0.75rem 3rem 0.75rem 1rem';
                    input.style.border = '1px solid #d1d5db';
                    input.style.borderRadius = '0.5rem';
                    input.style.fontSize = '1rem';
                    input.style.outline = 'none';
                    input.addEventListener('focus', () => {
                        input.style.borderColor = '#3b82f6';
                        input.style.boxShadow = '0 0 0 3px rgba(59, 130, 246, 0.1)';
                    });
                    input.addEventListener('blur', () => {
                        input.style.borderColor = '#d1d5db';
                        input.style.boxShadow = 'none';
                    });
                }
            };
            
            styleElement(fromAutocomplete);
            styleElement(toAutocomplete);
            
            // Set placeholders
            const fromInput = fromAutocomplete.querySelector('input');
            const toInput = toAutocomplete.querySelector('input');
            if (fromInput) fromInput.placeholder = 'Enter pickup address or place name';
            if (toInput) toInput.placeholder = 'Enter destination address or place name';
            
            // Add to containers
            document.getElementById('fromAddressContainer').appendChild(fromAutocomplete);
            document.getElementById('toAddressContainer').appendChild(toAutocomplete);
            
            // Handle place selection
            fromAutocomplete.addEventListener('gmp-placeselect', async (event) => {
                const place = event.place;
                if (place && place.id) {
                    await place.fetchFields(['displayName', 'formattedAddress']);
                    const address = place.formattedAddress || place.displayName;
                    if (address) {
                        // Update Livewire directly
                        @this.set('fromAddress', address);
                        // Also update the visible input
                        if (fromInput) fromInput.value = address;
                    }
                }
            });
            
            toAutocomplete.addEventListener('gmp-placeselect', async (event) => {
                const place = event.place;
                if (place && place.id) {
                    await place.fetchFields(['displayName', 'formattedAddress']);
                    const address = place.formattedAddress || place.displayName;
                    if (address) {
                        // Update Livewire directly
                        @this.set('toAddress', address);
                        // Also update the visible input
                        if (toInput) toInput.value = address;
                    }
                }
            });
            
            // Sync manual typing
            if (fromInput) {
                fromInput.addEventListener('input', (e) => {
                    @this.set('fromAddress', e.target.value);
                });
            }
            if (toInput) {
                toInput.addEventListener('input', (e) => {
                    @this.set('toAddress', e.target.value);
                });
            }
            
        } catch (e) {
            console.log('PlaceAutocompleteElement failed, showing standard inputs:', e);
            // Show original inputs as fallback
            document.getElementById('fromAddress').style.position = 'static';
            document.getElementById('fromAddress').style.left = 'auto';
            document.getElementById('toAddress').style.position = 'static';
            document.getElementById('toAddress').style.left = 'auto';
            document.getElementById('fromAddressContainer').style.display = 'none';
            document.getElementById('toAddressContainer').style.display = 'none';
        }
    }
    
    async function detectLocation(field) {
        if (navigator.geolocation) {
            try {
                // Import geocoding library
                const { Geocoder } = await google.maps.importLibrary("geocoding");
                
                // Show loading state
                const input = document.getElementById(field + 'Address');
                const originalPlaceholder = input.placeholder;
                input.placeholder = 'Getting your location...';
                
                navigator.geolocation.getCurrentPosition(
                    async (position) => {
                        const lat = position.coords.latitude;
                        const lng = position.coords.longitude;
                        
                        // Reverse geocode to get address
                        const geocoder = new Geocoder();
                        const response = await geocoder.geocode({
                            location: { lat: lat, lng: lng }
                        });
                        
                        if (response.results && response.results[0]) {
                            const address = response.results[0].formatted_address;
                            // Update hidden input
                            const hiddenInput = document.getElementById(field + 'Address');
                            if (hiddenInput) {
                                hiddenInput.value = address;
                                hiddenInput.dispatchEvent(new Event('input', { bubbles: true }));
                            }
                            // Update visible PlaceAutocompleteElement input
                            const container = document.getElementById(field + 'AddressContainer');
                            if (container) {
                                const visibleInput = container.querySelector('input');
                                if (visibleInput) {
                                    visibleInput.value = address;
                                }
                            }
                        }
                        input.placeholder = originalPlaceholder;
                    },
                    (error) => {
                        console.error('Error getting location:', error);
                        alert('Unable to get your location. Please enter address manually.');
                        input.placeholder = originalPlaceholder;
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