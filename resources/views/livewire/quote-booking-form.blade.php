<div>
    <form wire:submit.prevent="submit" class="space-y-6">
        <!-- Customer Information -->
        <div>
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Customer Information</h3>
            <div class="space-y-4">
                <div>
                    <label for="customer_name" class="block text-sm font-medium text-gray-700 mb-2">
                        Your Name
                    </label>
                    <input 
                        type="text" 
                        id="customer_name"
                        wire:model.blur="customer_name"
                        placeholder="John Doe"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('customer_name') border-red-500 @enderror"
                    >
                    @error('customer_name') 
                        <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="customer_phone" class="block text-sm font-medium text-gray-700 mb-2">
                        Phone Number
                    </label>
                    <input 
                        type="tel" 
                        id="customer_phone"
                        wire:model.blur="customer_phone"
                        placeholder="(509) 797-7999"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('customer_phone') border-red-500 @enderror"
                    >
                    @error('customer_phone') 
                        <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="customer_email" class="block text-sm font-medium text-gray-700 mb-2">
                        Email Address
                    </label>
                    <input 
                        type="email" 
                        id="customer_email"
                        wire:model.blur="customer_email"
                        placeholder="john@example.com"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('customer_email') border-red-500 @enderror"
                    >
                    @error('customer_email') 
                        <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="home_address" class="block text-sm font-medium text-gray-700 mb-2">
                        Home Address
                    </label>
                    <input 
                        type="text" 
                        id="home_address"
                        wire:model.blur="home_address"
                        placeholder="Enter your home address"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('home_address') border-red-500 @enderror"
                    >
                    @error('home_address') 
                        <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>

        <!-- Vehicle Information -->
        <div>
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Vehicle Information</h3>
            <div class="space-y-4">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div>
                        <label for="vehicle_year" class="block text-sm font-medium text-gray-700 mb-2">
                            Year
                        </label>
                        <input 
                            type="number" 
                            id="vehicle_year"
                            wire:model.blur="vehicle_year"
                            placeholder="2020"
                            min="1900"
                            max="{{ date('Y') + 1 }}"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('vehicle_year') border-red-500 @enderror"
                        >
                        @error('vehicle_year') 
                            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label for="vehicle_make" class="block text-sm font-medium text-gray-700 mb-2">
                            Make
                        </label>
                        <input 
                            type="text" 
                            id="vehicle_make"
                            wire:model.blur="vehicle_make"
                            placeholder="Toyota"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('vehicle_make') border-red-500 @enderror"
                        >
                        @error('vehicle_make') 
                            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label for="vehicle_model" class="block text-sm font-medium text-gray-700 mb-2">
                            Model
                        </label>
                        <input 
                            type="text" 
                            id="vehicle_model"
                            wire:model.blur="vehicle_model"
                            placeholder="Camry"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('vehicle_model') border-red-500 @enderror"
                        >
                        @error('vehicle_model') 
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
                        wire:model.live="problem"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('problem') border-red-500 @enderror"
                    >
                        <option value="">Select a problem</option>
                        <option value="accident">Accident</option>
                        <option value="breakdown">Breakdown/Won't start</option>
                        <option value="flat_tire">Flat tire</option>
                        <option value="stuck">Stuck/Off-road</option>
                        <option value="other">Other</option>
                    </select>
                    @error('problem') 
                        <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>

                @if($problem === 'other')
                <div>
                    <label for="problem_other" class="block text-sm font-medium text-gray-700 mb-2">
                        Please describe the problem
                    </label>
                    <textarea 
                        id="problem_other"
                        wire:model.blur="problem_other"
                        rows="3"
                        placeholder="Describe the issue..."
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('problem_other') border-red-500 @enderror"
                    ></textarea>
                    @error('problem_other') 
                        <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>
                @endif
            </div>
        </div>

        <!-- Submit Buttons -->
        <div class="flex gap-4 pt-4">
            <button 
                type="submit"
                class="flex-1 bg-blue-600 text-white py-3 px-6 rounded-lg hover:bg-blue-700 transition font-semibold disabled:opacity-50"
                wire:loading.attr="disabled"
            >
                <span wire:loading.remove>Confirm Booking</span>
                <span wire:loading>Processing...</span>
            </button>
            <a 
                href="/"
                class="flex-1 bg-gray-200 text-gray-700 py-3 px-6 rounded-lg hover:bg-gray-300 transition font-semibold text-center"
            >
                Cancel
            </a>
        </div>
    </form>

    <!-- Data saving indicator -->
    <div 
        wire:loading 
        class="fixed bottom-4 right-4 bg-gray-800 text-white px-4 py-2 rounded-lg shadow-lg"
    >
        Saving...
    </div>
</div>

@push('scripts')
<script>
// Initialize Google Places Autocomplete for home address
function initializeAutocomplete() {
    const input = document.getElementById('home_address');
    if (input && typeof google !== 'undefined') {
        const autocomplete = new google.maps.places.Autocomplete(input, {
            types: ['geocode'],
            componentRestrictions: { country: 'us' }
        });

        // Update Livewire when place is selected
        autocomplete.addListener('place_changed', function() {
            const place = autocomplete.getPlace();
            if (place.formatted_address) {
                @this.set('home_address', place.formatted_address);
            }
        });
    }
}

// Initialize on page load and after Livewire updates
window.addEventListener('load', initializeAutocomplete);
document.addEventListener('livewire:navigated', initializeAutocomplete);
</script>
@endpush