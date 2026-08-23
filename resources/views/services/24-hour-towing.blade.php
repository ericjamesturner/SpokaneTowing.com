@extends('layouts.service-page')

@section('title', '24 Hour Towing Spokane | Fast Emergency Tow Truck Service')

@section('description', 'Need a tow truck now? 24/7 emergency towing in Spokane with 20-30 min response times. Accident recovery, breakdowns & more. Call (509) 797-7999')

@section('hero-title', '24 Hour Emergency Towing in Spokane')

@section('hero-subtitle', 'Available now with fast response times. Professional emergency towing services when you need them most.')

@section('content')
<h2 class="text-3xl font-bold mb-8">Emergency Towing Available 24/7</h2>

<div class="prose prose-invert prose-lg max-w-none mb-12 prose-headings:text-white prose-p:text-gray-300 prose-li:text-gray-300 prose-strong:text-white">
    <p>When your vehicle breaks down at 2 AM or you're stranded on the highway after an accident, you need a reliable 24 hour towing and <strong>wrecker service</strong> in Spokane that you can count on. Spokane Towing provides round-the-clock emergency towing services throughout Spokane, WA and surrounding areas.</p>

    <h3 class="text-2xl font-semibold mt-8 mb-4">Our 24 Hour Towing Services Include:</h3>
    <ul class="space-y-2">
        <li>Emergency accident recovery and wrecker service</li>
        <li>Breakdown towing</li>
        <li><a href="/winch-out-recovery">Off-road and winch-out recovery</a></li>
        <li>Highway emergency response</li>
        <li>Vehicle transport to repair shops</li>
        <li>Insurance-approved towing</li>
        <li><a href="/roadside-assistance">Roadside assistance</a> — <a href="/battery-jump-start">jump starts</a>, fuel, and tire changes when a tow isn't needed</li>
    </ul>

    <h3 class="text-2xl font-semibold mt-8 mb-4">Why Choose Our 24 Hour Towing?</h3>
    <ul class="space-y-2">
        <li><strong>Fast Response:</strong> Average arrival time of 20-30 minutes</li>
        <li><strong>Always Available:</strong> 365 days a year, including holidays</li>
        <li><strong>Professional Drivers:</strong> Trained and experienced operators</li>
        <li><strong>Modern Equipment:</strong> Well-maintained tow trucks for safe transport</li>
        <li><strong>Fair Pricing:</strong> No surge pricing during emergencies</li>
    </ul>
</div>

<h3 class="text-2xl font-semibold mt-8 mb-6">24 Hour Towing FAQ</h3>
<div class="space-y-6 mb-12">
    <div class="bg-slate-800/50 rounded-xl p-6 border border-slate-700/50">
        <h4 class="text-lg font-semibold mb-2 text-white">How much does emergency towing cost in Spokane?</h4>
        <p class="text-gray-300">Our towing is a $140 hook fee plus $6 per mile, with a $200 minimum. Use our online quote tool for exact pricing based on your pickup and drop-off locations. No surge pricing during emergencies.</p>
    </div>
    <div class="bg-slate-800/50 rounded-xl p-6 border border-slate-700/50">
        <h4 class="text-lg font-semibold mb-2 text-white">How quickly can a tow truck get to me?</h4>
        <p class="text-gray-300">Our average response time is 20-30 minutes in the Spokane metro area. We dispatch the nearest available truck to your location for the fastest possible response, even late at night.</p>
    </div>
    <div class="bg-slate-800/50 rounded-xl p-6 border border-slate-700/50">
        <h4 class="text-lg font-semibold mb-2 text-white">Do you charge more for nighttime or holiday towing?</h4>
        <p class="text-gray-300">No. Our rates are the same 24/7, 365 days a year. We never charge extra for nights, weekends, or holidays. The price you're quoted is the price you pay.</p>
    </div>
    <div class="bg-slate-800/50 rounded-xl p-6 border border-slate-700/50">
        <h4 class="text-lg font-semibold mb-2 text-white">What should I do while waiting for the tow truck?</h4>
        <p class="text-gray-300">Stay safe by turning on your hazard lights, moving to the shoulder if possible, and staying inside your vehicle if you're on a busy road. Our dispatcher will keep you updated on the driver's ETA.</p>
    </div>
</div>

<!-- CTA Box -->
<div class="bg-gradient-to-r from-orange-500 to-orange-600 rounded-2xl p-8 text-center relative overflow-hidden">
    <div class="absolute inset-0 bg-black/10"></div>
    <div class="relative">
        <h3 class="text-2xl font-bold mb-4 text-white">Need Emergency Towing Right Now?</h3>
        <p class="mb-6 text-white/90">Don't wait - our dispatchers are standing by 24/7</p>
        <a href="tel:+15097977999" class="bg-white text-orange-600 px-8 py-4 rounded-xl hover:bg-gray-100 transition font-bold text-lg inline-block shadow-lg">
            Call (509) 797-7999
        </a>
    </div>
</div>
@endsection

@section('extra-sections')
@include('partials.coverage-area', ['title' => '24 Hour Towing Coverage Area', 'description' => 'We provide emergency towing services throughout the greater Spokane area, including:'])

<script type="application/ld+json">
{!! json_encode([
    "@@context" => "https://schema.org",
    "@@type" => "FAQPage",
    "mainEntity" => [
        [
            "@@type" => "Question",
            "name" => "How much does emergency towing cost in Spokane?",
            "acceptedAnswer" => [
                "@@type" => "Answer",
                "text" => "Our towing is a $140 hook fee plus $6 per mile, with a $200 minimum. Use our online quote tool for exact pricing based on your pickup and drop-off locations. No surge pricing during emergencies."
            ]
        ],
        [
            "@@type" => "Question",
            "name" => "How quickly can a tow truck get to me?",
            "acceptedAnswer" => [
                "@@type" => "Answer",
                "text" => "Our average response time is 20-30 minutes in the Spokane metro area. We dispatch the nearest available truck to your location for the fastest possible response, even late at night."
            ]
        ],
        [
            "@@type" => "Question",
            "name" => "Do you charge more for nighttime or holiday towing?",
            "acceptedAnswer" => [
                "@@type" => "Answer",
                "text" => "No. Our rates are the same 24/7, 365 days a year. We never charge extra for nights, weekends, or holidays. The price you're quoted is the price you pay."
            ]
        ],
        [
            "@@type" => "Question",
            "name" => "What should I do while waiting for the tow truck?",
            "acceptedAnswer" => [
                "@@type" => "Answer",
                "text" => "Stay safe by turning on your hazard lights, moving to the shoulder if possible, and staying inside your vehicle if you're on a busy road. Our dispatcher will keep you updated on the driver's ETA."
            ]
        ]
    ]
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
</script>
@endsection