@extends('layouts.service-page')

@section('title', 'Car Battery Jump Start Spokane | Battery Roadside Assistance 24/7')

@section('description', 'Dead battery in Spokane? Battery jump start service with 20-30 min response, free charging system test & no membership required. Available 24/7. Call (509) 797-7999')

@section('service-type', 'Battery Jump Start Service')

@section('hero-title', 'Car Battery Jump Start Service in Spokane')

@section('hero-subtitle', 'Dead battery? We come to you with professional jump start equipment, test your charging system, and get you moving again — usually in under 30 minutes.')

@section('content')
<h2 class="text-3xl font-bold mb-8">Battery Roadside Assistance, No Membership Required</h2>

<div class="prose prose-invert prose-lg max-w-none mb-12 prose-headings:text-white prose-p:text-gray-300 prose-li:text-gray-300 prose-strong:text-white prose-a:text-red-500 prose-a:no-underline hover:prose-a:underline">
    <p>A dead battery never picks a good time. Whether your car won't start in your driveway before work, in a parking garage downtown, or in a grocery store lot in Spokane Valley, Spokane Towing provides fast <strong>battery jump start service</strong> throughout Spokane and the surrounding area — 24 hours a day, with no membership or subscription required.</p>

    <h3 class="text-2xl font-semibold mt-8 mb-4">What Our Battery Service Includes</h3>
    <ul class="space-y-2">
        <li><strong>Professional jump start</strong> using commercial-grade equipment that is safe for modern vehicles and sensitive electronics</li>
        <li><strong>Battery and charging system check</strong> so you know whether the battery will hold a charge or die again tomorrow</li>
        <li><strong>Alternator assessment</strong> — if the alternator is the real problem, a jump start alone won't fix it, and we'll tell you</li>
        <li><strong>All vehicle types</strong> — cars, trucks, SUVs, motorcycles, and diesel vehicles</li>
        <li><strong>Hybrid and start-stop vehicles</strong> handled with the correct procedures</li>
    </ul>

    <h3 class="text-2xl font-semibold mt-8 mb-4">Need a Battery Replacement?</h3>
    <p>If the test shows your battery is done, a jump start will only get you so far. We'll give you a straight answer and your options: drive directly to a nearby auto parts store or repair shop while the engine is running, or have us <a href="/24-hour-towing">tow your vehicle</a> straight there so you're not gambling on another dead battery at the next stop. We work with trusted local shops across Spokane and can recommend one close to you.</p>

    <h3 class="text-2xl font-semibold mt-8 mb-4">Why Spokane Drivers Call Us for Jump Starts</h3>
    <ul class="space-y-2">
        <li><strong>Fast Response:</strong> Average arrival time of 20-30 minutes in the Spokane metro area</li>
        <li><strong>24/7 Availability:</strong> Cold winter mornings, late nights, weekends, and holidays</li>
        <li><strong>No Membership:</strong> Unlike AAA, there's no annual fee — you pay only when you need us</li>
        <li><strong>Honest Diagnosis:</strong> We tell you if it's the battery, the alternator, or just a dome light left on</li>
        <li><strong>Backed by a Tow Truck:</strong> If a jump won't do it, the tow is already there — no second call, no second wait</li>
    </ul>

    <p class="mt-8">Spokane winters are hard on batteries — cold snaps below freezing are the single most common cause of no-start mornings here. If your battery is more than 4-5 years old and struggled this morning, get it tested before it strands you. Need more than a jump? We also provide <a href="/roadside-assistance">full roadside assistance</a>, including <a href="/lockout-flat-tire">lockout and flat tire service</a> and fuel delivery.</p>
</div>

<h3 class="text-2xl font-semibold mt-8 mb-6">Battery Jump Start FAQ</h3>
<div class="space-y-6 mb-12">
    <div class="bg-slate-800/50 rounded-xl p-6 border border-slate-700/50">
        <h4 class="text-lg font-semibold mb-2 text-white">How much does a jump start cost in Spokane?</h4>
        <p class="text-gray-300">Jump starts are one of our most affordable services, with transparent flat pricing and no membership fees. Call (509) 797-7999 for an exact quote — the price we quote is the price you pay, day or night.</p>
    </div>
    <div class="bg-slate-800/50 rounded-xl p-6 border border-slate-700/50">
        <h4 class="text-lg font-semibold mb-2 text-white">How fast can you get to me for a dead battery?</h4>
        <p class="text-gray-300">Our average response time is 20-30 minutes in Spokane and Spokane Valley. Outlying areas like Cheney, Deer Park, and Post Falls typically take 30-45 minutes.</p>
    </div>
    <div class="bg-slate-800/50 rounded-xl p-6 border border-slate-700/50">
        <h4 class="text-lg font-semibold mb-2 text-white">Will you replace my car battery on the spot?</h4>
        <p class="text-gray-300">We provide jump starts and battery testing at your location. If your battery needs replacement, we'll get your vehicle running or tow it to a nearby shop that stocks the right battery — often the cheapest and fastest way to get a new one installed.</p>
    </div>
    <div class="bg-slate-800/50 rounded-xl p-6 border border-slate-700/50">
        <h4 class="text-lg font-semibold mb-2 text-white">Is jump starting safe for newer cars with electronics?</h4>
        <p class="text-gray-300">Yes — when done correctly. Our technicians use professional equipment with surge protection and follow manufacturer procedures, which protects the sensitive electronics in modern vehicles. This is exactly the situation where a bad jump from a stranger's cables can cause expensive damage.</p>
    </div>
</div>

<!-- CTA Box -->
<div class="bg-gradient-to-r from-orange-500 to-orange-600 rounded-2xl p-8 text-center relative overflow-hidden">
    <div class="absolute inset-0 bg-black/10"></div>
    <div class="relative">
        <h3 class="text-2xl font-bold mb-4 text-white">Dead Battery Right Now?</h3>
        <p class="mb-6 text-white/90">A technician can be on the way in minutes — 24/7</p>
        <a href="tel:+15097977999" class="bg-white text-orange-600 px-8 py-4 rounded-xl hover:bg-gray-100 transition font-bold text-lg inline-block shadow-lg">
            Call (509) 797-7999
        </a>
    </div>
</div>
@endsection

@section('extra-sections')
@include('partials.coverage-area', ['title' => 'Battery Jump Start Coverage Area', 'description' => 'We provide battery jump start and roadside battery assistance throughout the greater Spokane area, including:'])

<script type="application/ld+json">
{!! json_encode([
    "@@context" => "https://schema.org",
    "@@type" => "FAQPage",
    "mainEntity" => [
        [
            "@@type" => "Question",
            "name" => "How much does a jump start cost in Spokane?",
            "acceptedAnswer" => [
                "@@type" => "Answer",
                "text" => "Jump starts are one of our most affordable services, with transparent flat pricing and no membership fees. Call (509) 797-7999 for an exact quote — the price we quote is the price you pay, day or night."
            ]
        ],
        [
            "@@type" => "Question",
            "name" => "How fast can you get to me for a dead battery?",
            "acceptedAnswer" => [
                "@@type" => "Answer",
                "text" => "Our average response time is 20-30 minutes in Spokane and Spokane Valley. Outlying areas like Cheney, Deer Park, and Post Falls typically take 30-45 minutes."
            ]
        ],
        [
            "@@type" => "Question",
            "name" => "Will you replace my car battery on the spot?",
            "acceptedAnswer" => [
                "@@type" => "Answer",
                "text" => "We provide jump starts and battery testing at your location. If your battery needs replacement, we'll get your vehicle running or tow it to a nearby shop that stocks the right battery — often the cheapest and fastest way to get a new one installed."
            ]
        ],
        [
            "@@type" => "Question",
            "name" => "Is jump starting safe for newer cars with electronics?",
            "acceptedAnswer" => [
                "@@type" => "Answer",
                "text" => "Yes — when done correctly. Our technicians use professional equipment with surge protection and follow manufacturer procedures, which protects the sensitive electronics in modern vehicles."
            ]
        ]
    ]
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
</script>
@endsection
