@extends('layouts.service-page')

@section('title', 'Commercial Towing Spokane | Fleet & Business Vehicle Towing 24/7')

@section('description', 'Commercial towing services in Spokane for work trucks, vans, box trucks & fleets. Priority dispatch, direct billing & 24/7 response to minimize downtime. Call (509) 797-7999')

@section('service-type', 'Commercial Towing Service')

@section('hero-title', 'Commercial Towing Services in Spokane')

@section('hero-subtitle', 'When a work vehicle goes down, every hour costs money. Priority dispatch, direct billing, and 24/7 availability for Spokane businesses and fleets.')

@section('content')
<h2 class="text-3xl font-bold mb-8">Commercial Vehicle Towing for Spokane Businesses</h2>

<div class="prose prose-invert prose-lg max-w-none mb-12 prose-headings:text-white prose-p:text-gray-300 prose-li:text-gray-300 prose-strong:text-white prose-a:text-red-500 prose-a:no-underline hover:prose-a:underline">
    <p>A broken-down work vehicle isn't just an inconvenience — it's missed deliveries, idle crews, and unhappy customers. Spokane Towing provides <strong>commercial towing services</strong> throughout Spokane, WA and the Inland Northwest, built around one goal: getting your vehicle and your business moving again as fast as possible.</p>

    <h3 class="text-2xl font-semibold mt-8 mb-4">Commercial Vehicles We Tow</h3>
    <ul class="space-y-2">
        <li>Work trucks and service vehicles</li>
        <li>Cargo vans and sprinter vans</li>
        <li>Box trucks and delivery vehicles</li>
        <li>Contractor trucks with trailers and equipment</li>
        <li>Company cars and sales fleet vehicles</li>
        <li>Shuttle vans and small buses</li>
        <li>Landscaping and utility vehicles</li>
    </ul>
    <p>Need something bigger moved? Semi-trucks, tractor-trailers, and construction equipment are handled by our <a href="/heavy-duty-towing">heavy duty towing</a> division.</p>

    <h3 class="text-2xl font-semibold mt-8 mb-4">Fleet Services That Protect Your Uptime</h3>
    <ul class="space-y-2">
        <li><strong>Priority Dispatch:</strong> Fleet accounts jump the queue — your downtime clock matters</li>
        <li><strong>Direct Billing:</strong> Invoicing to your office, no driver credit cards required at the roadside</li>
        <li><strong>Volume Pricing:</strong> Discounted rates for businesses with multiple vehicles</li>
        <li><strong>One Number for Drivers:</strong> Your drivers call (509) 797-7999 and we handle the rest</li>
        <li><strong>Documentation:</strong> Reports and photos for your records and insurance claims</li>
        <li><strong>Insurance Coordination:</strong> We work with all major commercial insurance providers</li>
    </ul>

    <h3 class="text-2xl font-semibold mt-8 mb-4">More Than Just Towing</h3>
    <p>Most commercial calls don't actually need a tow. A delivery van with a <a href="/battery-jump-start">dead battery</a>, a work truck with a flat, a driver <a href="/lockout-flat-tire">locked out</a> at a job site — we handle commercial roadside assistance too, which often gets your vehicle back in service without a trip to the shop.</p>

    <p class="mt-8">Whether you run two vans or a forty-vehicle fleet in Spokane, a single breakdown shouldn't derail your day. Set up a commercial account once, and your drivers always have a number that answers 24/7.</p>
</div>

<h3 class="text-2xl font-semibold mt-8 mb-6">Commercial Towing FAQ</h3>
<div class="space-y-6 mb-12">
    <div class="bg-slate-800/50 rounded-xl p-6 border border-slate-700/50">
        <h4 class="text-lg font-semibold mb-2 text-white">How much does commercial towing cost in Spokane?</h4>
        <p class="text-gray-300">Commercial rates depend on vehicle size and distance. Standard work trucks and vans are priced like our regular tows starting at a $140 hook fee plus $6 per mile, with volume discounts for fleet accounts. Call (509) 797-7999 for a quote or to set up fleet pricing.</p>
    </div>
    <div class="bg-slate-800/50 rounded-xl p-6 border border-slate-700/50">
        <h4 class="text-lg font-semibold mb-2 text-white">Do you offer towing contracts for businesses?</h4>
        <p class="text-gray-300">Yes. We offer fleet service agreements with priority dispatch, direct billing, and volume pricing for Spokane-area businesses. There's no fee to set up an account.</p>
    </div>
    <div class="bg-slate-800/50 rounded-xl p-6 border border-slate-700/50">
        <h4 class="text-lg font-semibold mb-2 text-white">Can you tow a loaded work vehicle?</h4>
        <p class="text-gray-300">In most cases, yes. Let dispatch know the vehicle type and approximate load when you call so we send the right truck. For heavily loaded box trucks or vehicles with trailers, we may dispatch heavy duty equipment.</p>
    </div>
    <div class="bg-slate-800/50 rounded-xl p-6 border border-slate-700/50">
        <h4 class="text-lg font-semibold mb-2 text-white">How fast can you reach a broken-down company vehicle?</h4>
        <p class="text-gray-300">Average response is 20-30 minutes in the Spokane metro area, and fleet accounts get priority dispatch. We cover Spokane, Spokane Valley, the West Plains, and North Idaho.</p>
    </div>
</div>

<!-- CTA Box -->
<div class="bg-gradient-to-r from-orange-500 to-orange-600 rounded-2xl p-8 text-center relative overflow-hidden">
    <div class="absolute inset-0 bg-black/10"></div>
    <div class="relative">
        <h3 class="text-2xl font-bold mb-4 text-white">Work Vehicle Down?</h3>
        <p class="mb-6 text-white/90">Priority commercial dispatch is standing by 24/7</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="tel:+15097977999" class="bg-white text-orange-600 px-8 py-4 rounded-xl hover:bg-gray-100 transition font-bold text-lg shadow-lg">
                Call (509) 797-7999
            </a>
            <a href="/contact" class="bg-white/10 text-white px-8 py-4 rounded-xl hover:bg-white/20 transition font-semibold text-lg border border-white/30">
                Set Up a Fleet Account
            </a>
        </div>
    </div>
</div>
@endsection

@section('extra-sections')
@include('partials.coverage-area', ['title' => 'Commercial Towing Coverage Area', 'description' => 'We provide commercial towing and fleet services throughout the greater Spokane area, including:'])

<script type="application/ld+json">
{!! json_encode([
    "@@context" => "https://schema.org",
    "@@type" => "FAQPage",
    "mainEntity" => [
        [
            "@@type" => "Question",
            "name" => "How much does commercial towing cost in Spokane?",
            "acceptedAnswer" => [
                "@@type" => "Answer",
                "text" => "Commercial rates depend on vehicle size and distance. Standard work trucks and vans are priced like our regular tows starting at a $140 hook fee plus $6 per mile, with volume discounts for fleet accounts. Call (509) 797-7999 for a quote or to set up fleet pricing."
            ]
        ],
        [
            "@@type" => "Question",
            "name" => "Do you offer towing contracts for businesses?",
            "acceptedAnswer" => [
                "@@type" => "Answer",
                "text" => "Yes. We offer fleet service agreements with priority dispatch, direct billing, and volume pricing for Spokane-area businesses. There's no fee to set up an account."
            ]
        ],
        [
            "@@type" => "Question",
            "name" => "Can you tow a loaded work vehicle?",
            "acceptedAnswer" => [
                "@@type" => "Answer",
                "text" => "In most cases, yes. Let dispatch know the vehicle type and approximate load when you call so we send the right truck. For heavily loaded box trucks or vehicles with trailers, we may dispatch heavy duty equipment."
            ]
        ],
        [
            "@@type" => "Question",
            "name" => "How fast can you reach a broken-down company vehicle?",
            "acceptedAnswer" => [
                "@@type" => "Answer",
                "text" => "Average response is 20-30 minutes in the Spokane metro area, and fleet accounts get priority dispatch. We cover Spokane, Spokane Valley, the West Plains, and North Idaho."
            ]
        ]
    ]
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
</script>
@endsection
