<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Complete Your Booking - Spokane Towing</title>
    <meta name="description" content="Complete your towing service booking with Spokane Towing.">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @include('partials.clarity')
</head>
<body class="bg-gray-50">
<div class="min-h-screen bg-gray-50 py-12">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-6">
            <a href="/" class="text-blue-600 hover:text-blue-800 flex items-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Back to Home
            </a>
        </div>

        <!-- Quote Summary -->
        <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm mb-6">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">Your Quote Summary</h2>
            
            <div class="grid md:grid-cols-2 gap-4 mb-4">
                <div>
                    <p class="text-sm text-gray-600">Quote Number</p>
                    <p class="font-semibold">{{ $quote->quote_number }}</p>
                </div>
                <div>
                    <p class="text-sm text-gray-600">Total Price</p>
                    <p class="text-2xl font-bold text-blue-600">${{ number_format($quote->total, 2) }}</p>
                </div>
            </div>
            
            <div class="border-t pt-4 space-y-2">
                <div class="flex justify-between">
                    <span class="text-gray-600">From:</span>
                    <span class="text-gray-900">{{ $quote->from_address }}</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-gray-600">To:</span>
                    <span class="text-gray-900">{{ $quote->to_address }}</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-gray-600">Distance:</span>
                    <span class="text-gray-900">{{ $quote->distance }} miles</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-gray-600">Arrival Time:</span>
                    <span class="text-gray-900">20-30 minutes</span>
                </div>
            </div>
        </div>

        <!-- Booking Form -->
        <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Complete Your Booking</h2>
            
            <form action="{{ route('quote.book.submit', $quote) }}" method="POST" class="space-y-6">
                @csrf
                
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
                                name="customer_name"
                                value="{{ old('customer_name') }}"
                                placeholder="John Doe"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('customer_name') border-red-500 @enderror"
                                required
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
                                name="customer_phone"
                                value="{{ old('customer_phone') }}"
                                placeholder="(509) 797-7999"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('customer_phone') border-red-500 @enderror"
                                required
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
                                name="customer_email"
                                value="{{ old('customer_email') }}"
                                placeholder="john@example.com"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('customer_email') border-red-500 @enderror"
                                required
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
                                name="home_address"
                                value="{{ old('home_address') }}"
                                placeholder="Enter your home address"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('home_address') border-red-500 @enderror"
                                required
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
                                    name="vehicle_year"
                                    value="{{ old('vehicle_year') }}"
                                    placeholder="2020"
                                    min="1900"
                                    max="{{ date('Y') + 1 }}"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('vehicle_year') border-red-500 @enderror"
                                    required
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
                                    name="vehicle_make"
                                    value="{{ old('vehicle_make') }}"
                                    placeholder="Toyota"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('vehicle_make') border-red-500 @enderror"
                                    required
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
                                    name="vehicle_model"
                                    value="{{ old('vehicle_model') }}"
                                    placeholder="Camry"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('vehicle_model') border-red-500 @enderror"
                                    required
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
                                name="problem"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('problem') border-red-500 @enderror"
                                required
                                onchange="toggleOtherField(this)"
                            >
                                <option value="">Select a problem</option>
                                <option value="accident" {{ old('problem') == 'accident' ? 'selected' : '' }}>Accident</option>
                                <option value="breakdown" {{ old('problem') == 'breakdown' ? 'selected' : '' }}>Breakdown/Won't start</option>
                                <option value="flat_tire" {{ old('problem') == 'flat_tire' ? 'selected' : '' }}>Flat tire</option>
                                <option value="stuck" {{ old('problem') == 'stuck' ? 'selected' : '' }}>Stuck/Off-road</option>
                                <option value="other" {{ old('problem') == 'other' ? 'selected' : '' }}>Other</option>
                            </select>
                            @error('problem') 
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <div id="other-problem-field" class="{{ old('problem') == 'other' ? '' : 'hidden' }}">
                            <label for="problem_other" class="block text-sm font-medium text-gray-700 mb-2">
                                Please describe the problem
                            </label>
                            <textarea 
                                id="problem_other"
                                name="problem_other"
                                rows="3"
                                placeholder="Describe the issue..."
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('problem_other') border-red-500 @enderror"
                            >{{ old('problem_other') }}</textarea>
                            @error('problem_other') 
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Submit Buttons -->
                <div class="flex gap-4 pt-4">
                    <button 
                        type="submit"
                        class="flex-1 bg-blue-600 text-white py-3 px-6 rounded-lg hover:bg-blue-700 transition font-semibold"
                    >
                        Confirm Booking
                    </button>
                    <a 
                        href="/"
                        class="flex-1 bg-gray-200 text-gray-700 py-3 px-6 rounded-lg hover:bg-gray-300 transition font-semibold text-center"
                    >
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
function toggleOtherField(select) {
    const otherField = document.getElementById('other-problem-field');
    if (select.value === 'other') {
        otherField.classList.remove('hidden');
    } else {
        otherField.classList.add('hidden');
    }
}

// Initialize Google Places Autocomplete for home address
window.initMap = function() {
    const input = document.getElementById('home_address');
    const autocomplete = new google.maps.places.Autocomplete(input, {
        types: ['geocode'],
        componentRestrictions: { country: 'us' }
    });
}
</script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key={{ config('towing.google_maps.api_key') }}&libraries=places&callback=initMap"></script>
</body>
</html>