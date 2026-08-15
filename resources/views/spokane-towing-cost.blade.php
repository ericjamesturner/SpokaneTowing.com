@extends('layouts.service-page')

@section('title', 'Towing Cost in Spokane | $140 Hook + $6/Mile, No Hidden Fees')

@section('description', 'How much does towing cost in Spokane? $140 hook fee + $6/mile, most local tows run $170-$230. No surge pricing, no hidden fees. Get an exact quote online in 60 seconds.')

@section('service-type', 'Towing Service')

@section('hero-title', 'How Much Does Towing Cost in Spokane?')

@section('hero-subtitle', 'Straight answers with real numbers: $140 hook fee plus $6 per mile. Most local tows run $170-$230. Same price day, night, weekends, and holidays.')

@section('content')
<h2 class="text-3xl font-bold mb-8">Spokane Towing Rates, Published</h2>

<div class="prose prose-invert prose-lg max-w-none mb-12 prose-headings:text-white prose-p:text-gray-300 prose-li:text-gray-300 prose-strong:text-white prose-a:text-red-500 prose-a:no-underline hover:prose-a:underline">
    <p>Most towing companies make you call to find out what a tow costs. We'd rather just tell you. Here is exactly how our pricing works in Spokane — and you can get an exact price for your specific tow with our <a href="/#quote">instant online quote calculator</a> before you ever pick up the phone.</p>
</div>

<!-- Rate Card -->
<div class="grid md:grid-cols-3 gap-6 mb-12">
    <div class="bg-slate-800/50 backdrop-blur-sm p-8 rounded-2xl border border-slate-700/50 text-center">
        <div class="text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-red-600 to-red-500 mb-2">$140</div>
        <div class="text-white font-semibold mb-1">Hook Fee</div>
        <div class="text-gray-400 text-sm">Covers dispatch, hookup, and loading your vehicle</div>
    </div>
    <div class="bg-slate-800/50 backdrop-blur-sm p-8 rounded-2xl border border-slate-700/50 text-center">
        <div class="text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-red-600 to-red-500 mb-2">$6</div>
        <div class="text-white font-semibold mb-1">Per Mile</div>
        <div class="text-gray-400 text-sm">Measured from pickup to drop-off — not from our lot</div>
    </div>
    <div class="bg-slate-800/50 backdrop-blur-sm p-8 rounded-2xl border border-slate-700/50 text-center">
        <div class="text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-red-600 to-red-500 mb-2">$0</div>
        <div class="text-white font-semibold mb-1">Surge Pricing</div>
        <div class="text-gray-400 text-sm">Nights, weekends, and holidays cost the same</div>
    </div>
</div>

<div class="prose prose-invert prose-lg max-w-none mb-12 prose-headings:text-white prose-p:text-gray-300 prose-li:text-gray-300 prose-strong:text-white prose-a:text-red-500 prose-a:no-underline hover:prose-a:underline">
    <h3 class="text-2xl font-semibold mt-8 mb-4">What a Typical Tow Costs</h3>
    <ul class="space-y-2">
        <li><strong>Short local tow (5 miles):</strong> around $170 — for example, downtown Spokane to a nearby repair shop</li>
        <li><strong>Average local tow (10-15 miles):</strong> $200-$230 — for example, Spokane Valley to North Spokane</li>
        <li><strong>Longer regional tow (25+ miles):</strong> $290 and up — for example, Cheney to Coeur d'Alene</li>
    </ul>
    <p>For exact pricing on your route, use the <a href="/#quote">online quote calculator</a> — enter your pickup and drop-off locations and it does the math for you in about 60 seconds.</p>

    <h3 class="text-2xl font-semibold mt-8 mb-4">What Can Add to the Cost</h3>
    <p>A few situations take extra equipment or time, and we always discuss the price before starting work:</p>
    <ul class="space-y-2">
        <li><strong><a href="/winch-out-recovery">Winch-out and recovery</a>:</strong> Pulling a vehicle out of a ditch, snow bank, or mud before it can be towed</li>
        <li><strong><a href="/heavy-duty-towing">Heavy duty vehicles</a>:</strong> Semis, box trucks, RVs, and buses require larger equipment and are quoted per job</li>
        <li><strong><a href="/long-distance-towing">Long distance transport</a>:</strong> Out-of-region and interstate tows are quoted as a flat rate up front</li>
    </ul>

    <h3 class="text-2xl font-semibold mt-8 mb-4">Roadside Services Cost Less Than a Tow</h3>
    <p>If your car will run once the immediate problem is fixed, you probably don't need a tow at all. <a href="/battery-jump-start">Jump starts</a>, <a href="/lockout-flat-tire">lockouts, flat tire changes</a>, and fuel delivery are all cheaper than towing — tell dispatch what happened and we'll send the service that actually solves it.</p>

    <h3 class="text-2xl font-semibold mt-8 mb-4">Searching for "Cheap Towing in Spokane"?</h3>
    <p>Fair enough — nobody budgets for a tow. Here's our honest advice: be careful with rock-bottom phone quotes. The classic move is a low teaser price that grows with "fees" once your car is already on the truck. Our price is published, the quote you get is the price you pay, and there are no surprises at drop-off. That's what cheap towing should actually mean: <strong>no games, no surge pricing, no hidden fees</strong>.</p>

    <h3 class="text-2xl font-semibold mt-8 mb-4">Will Insurance Cover My Tow?</h3>
    <p>Often, yes. Many auto policies include towing or roadside coverage, and if your car is towed after an accident, towing is usually part of the claim. We work with all major insurance companies and provide the receipts and documentation you need for reimbursement.</p>
</div>

<h3 class="text-2xl font-semibold mt-8 mb-6">Towing Cost FAQ</h3>
<div class="space-y-6 mb-12">
    <div class="bg-slate-800/50 rounded-xl p-6 border border-slate-700/50">
        <h4 class="text-lg font-semibold mb-2 text-white">How much does it cost to tow a car in Spokane?</h4>
        <p class="text-gray-300">Our rate is a $140 hook fee plus $6 per mile. Most local tows in Spokane come out between $170 and $230. Use our online quote calculator for an exact price on your route.</p>
    </div>
    <div class="bg-slate-800/50 rounded-xl p-6 border border-slate-700/50">
        <h4 class="text-lg font-semibold mb-2 text-white">Do you charge more at night or on weekends?</h4>
        <p class="text-gray-300">No. Our rates are identical 24/7, 365 days a year. A 3 AM tow costs the same as a 3 PM tow.</p>
    </div>
    <div class="bg-slate-800/50 rounded-xl p-6 border border-slate-700/50">
        <h4 class="text-lg font-semibold mb-2 text-white">Are there any hidden fees?</h4>
        <p class="text-gray-300">No. The only additional charges are for special circumstances like winching a vehicle out of a ditch, and we discuss those with you before any work begins.</p>
    </div>
    <div class="bg-slate-800/50 rounded-xl p-6 border border-slate-700/50">
        <h4 class="text-lg font-semibold mb-2 text-white">How do I get an exact quote?</h4>
        <p class="text-gray-300">Use the instant quote calculator on our homepage — enter your pickup and drop-off locations and get an exact price in about 60 seconds. Or call (509) 797-7999 and dispatch will quote you over the phone.</p>
    </div>
</div>

<!-- CTA Box -->
<div class="bg-gradient-to-r from-orange-500 to-orange-600 rounded-2xl p-8 text-center relative overflow-hidden">
    <div class="absolute inset-0 bg-black/10"></div>
    <div class="relative">
        <h3 class="text-2xl font-bold mb-4 text-white">Get Your Exact Price in 60 Seconds</h3>
        <p class="mb-6 text-white/90">No phone call required — the calculator quotes your exact route</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="/#quote" class="bg-white text-orange-600 px-8 py-4 rounded-xl hover:bg-gray-100 transition font-bold text-lg shadow-lg">
                Get Instant Quote
            </a>
            <a href="tel:+15097977999" class="bg-white/10 text-white px-8 py-4 rounded-xl hover:bg-white/20 transition font-semibold text-lg border border-white/30">
                Call (509) 797-7999
            </a>
        </div>
    </div>
</div>
@endsection

@section('extra-sections')
<script type="application/ld+json">
{!! json_encode([
    "@@context" => "https://schema.org",
    "@@type" => "FAQPage",
    "mainEntity" => [
        [
            "@@type" => "Question",
            "name" => "How much does it cost to tow a car in Spokane?",
            "acceptedAnswer" => [
                "@@type" => "Answer",
                "text" => "Our rate is a $140 hook fee plus $6 per mile. Most local tows in Spokane come out between $170 and $230. Use our online quote calculator for an exact price on your route."
            ]
        ],
        [
            "@@type" => "Question",
            "name" => "Do you charge more at night or on weekends?",
            "acceptedAnswer" => [
                "@@type" => "Answer",
                "text" => "No. Our rates are identical 24/7, 365 days a year. A 3 AM tow costs the same as a 3 PM tow."
            ]
        ],
        [
            "@@type" => "Question",
            "name" => "Are there any hidden fees?",
            "acceptedAnswer" => [
                "@@type" => "Answer",
                "text" => "No. The only additional charges are for special circumstances like winching a vehicle out of a ditch, and we discuss those with you before any work begins."
            ]
        ],
        [
            "@@type" => "Question",
            "name" => "How do I get an exact quote?",
            "acceptedAnswer" => [
                "@@type" => "Answer",
                "text" => "Use the instant quote calculator on our homepage — enter your pickup and drop-off locations and get an exact price in about 60 seconds. Or call (509) 797-7999 and dispatch will quote you over the phone."
            ]
        ]
    ]
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
</script>
@endsection
