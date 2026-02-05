<div>
    <form wire:submit.prevent="submit" class="space-y-5">
        <!-- Honeypot field - hidden from users, bots will fill this -->
        <div class="hidden" aria-hidden="true">
            <label for="website">Leave this field empty</label>
            <input
                type="text"
                id="website"
                name="website"
                wire:model="website"
                tabindex="-1"
                autocomplete="off"
            >
        </div>

        <!-- Name -->
        <div>
            <label for="name" class="block text-sm font-medium text-gray-300 mb-2">
                Your Name <span class="text-red-500">*</span>
            </label>
            <input
                type="text"
                id="name"
                wire:model.blur="name"
                placeholder="John Doe"
                class="w-full px-4 py-3 bg-slate-800/50 border border-slate-700 rounded-xl text-white placeholder-gray-500 focus:ring-2 focus:ring-red-500 focus:border-transparent transition @error('name') border-red-500 @enderror"
            >
            @error('name')
                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
            @enderror
        </div>

        <!-- Email -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-300 mb-2">
                Email Address <span class="text-red-500">*</span>
            </label>
            <input
                type="email"
                id="email"
                wire:model.blur="email"
                placeholder="john@example.com"
                class="w-full px-4 py-3 bg-slate-800/50 border border-slate-700 rounded-xl text-white placeholder-gray-500 focus:ring-2 focus:ring-red-500 focus:border-transparent transition @error('email') border-red-500 @enderror"
            >
            @error('email')
                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
            @enderror
        </div>

        <!-- Phone (Optional) -->
        <div>
            <label for="phone" class="block text-sm font-medium text-gray-300 mb-2">
                Phone Number <span class="text-gray-500">(optional)</span>
            </label>
            <input
                type="tel"
                id="phone"
                wire:model.blur="phone"
                placeholder="(509) 797-7999"
                class="w-full px-4 py-3 bg-slate-800/50 border border-slate-700 rounded-xl text-white placeholder-gray-500 focus:ring-2 focus:ring-red-500 focus:border-transparent transition @error('phone') border-red-500 @enderror"
            >
            @error('phone')
                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
            @enderror
        </div>

        <!-- Subject -->
        <div>
            <label for="subject" class="block text-sm font-medium text-gray-300 mb-2">
                Subject <span class="text-red-500">*</span>
            </label>
            <input
                type="text"
                id="subject"
                wire:model.blur="subject"
                placeholder="How can we help you?"
                class="w-full px-4 py-3 bg-slate-800/50 border border-slate-700 rounded-xl text-white placeholder-gray-500 focus:ring-2 focus:ring-red-500 focus:border-transparent transition @error('subject') border-red-500 @enderror"
            >
            @error('subject')
                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
            @enderror
        </div>

        <!-- Message -->
        <div>
            <label for="message" class="block text-sm font-medium text-gray-300 mb-2">
                Message <span class="text-red-500">*</span>
            </label>
            <textarea
                id="message"
                wire:model.blur="message"
                rows="5"
                placeholder="Tell us more about your inquiry..."
                class="w-full px-4 py-3 bg-slate-800/50 border border-slate-700 rounded-xl text-white placeholder-gray-500 focus:ring-2 focus:ring-red-500 focus:border-transparent transition resize-none @error('message') border-red-500 @enderror"
            ></textarea>
            @error('message')
                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
            @enderror
        </div>

        <!-- Submit Button -->
        <div class="pt-2">
            <button
                type="submit"
                class="w-full bg-gradient-to-r from-red-600 to-red-700 text-white py-4 px-6 rounded-xl hover:from-red-700 hover:to-red-800 transition font-semibold shadow-lg shadow-red-600/25 disabled:opacity-50 disabled:cursor-not-allowed"
                wire:loading.attr="disabled"
            >
                <span wire:loading.remove class="flex items-center justify-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    Send Message
                </span>
                <span wire:loading class="flex items-center justify-center gap-2">
                    <svg class="animate-spin h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    Sending...
                </span>
            </button>
        </div>
    </form>
</div>
