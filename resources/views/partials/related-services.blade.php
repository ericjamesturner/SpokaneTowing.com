<!-- Related Services -->
@php
    $allServices = [
        '/24-hour-towing' => '24 Hour Emergency Towing',
        '/roadside-assistance' => 'Roadside Assistance',
        '/battery-jump-start' => 'Battery Jump Start',
        '/lockout-flat-tire' => 'Lockout & Flat Tire Service',
        '/flatbed-towing' => 'Flatbed Towing',
        '/heavy-duty-towing' => 'Heavy Duty Towing',
        '/commercial-towing' => 'Commercial Towing',
        '/motorcycle-towing' => 'Motorcycle Towing',
        '/winch-out-recovery' => 'Winch Out & Recovery',
        '/long-distance-towing' => 'Long Distance Towing',
        '/spokane-towing-cost' => 'Towing Cost & Rates',
    ];
    $currentPath = '/' . ltrim(request()->path(), '/');
@endphp
<section class="py-20 bg-black border-t border-slate-800/50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold mb-8 text-center text-white">More Towing & Roadside Services</h2>
            <div class="flex flex-wrap justify-center gap-4">
                @foreach($allServices as $url => $label)
                    @if($url !== $currentPath)
                        <a href="{{ $url }}" class="bg-slate-800/50 border border-slate-700/50 rounded-xl px-6 py-3 text-gray-300 hover:text-white hover:border-red-500/50 transition">{{ $label }}</a>
                    @endif
                @endforeach
            </div>
            <p class="text-center mt-8">
                <a href="/spokane-towing-services" class="text-red-500 hover:text-red-400 font-semibold transition">View all Spokane towing services →</a>
            </p>
        </div>
    </div>
</section>
