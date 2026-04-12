@extends('layouts.service-page')

@section('title', 'Heavy Duty Towing Spokane | Commercial & Semi Truck Towing 24/7')

@section('description', 'Heavy duty towing for semis, trucks, buses, RVs & commercial vehicles in Spokane. Professional recovery with specialized equipment, available 24/7. Call (509) 797-7999')

@section('hero-title', 'Heavy Duty Towing & Commercial Recovery')

@section('hero-subtitle', 'Professional heavy duty towing for trucks, buses, RVs, and commercial vehicles. When you need serious towing power, we deliver.')

@section('content')
<h2 class="text-3xl font-bold mb-8">Heavy Duty Towing Specialists</h2>

<div class="prose prose-invert prose-lg max-w-none mb-12 prose-headings:text-white prose-p:text-gray-300 prose-li:text-gray-300 prose-strong:text-white">
    <p>When standard tow trucks aren't enough, Spokane Towing provides heavy duty towing services for large vehicles and commercial equipment. Our powerful heavy duty tow trucks and experienced operators can handle the biggest towing challenges in Spokane, WA and throughout the region.</p>
    
    <h3 class="text-2xl font-semibold mt-8 mb-4">Heavy Duty Vehicles We Tow:</h3>
    <ul class="space-y-2">
        <li>Semi-trucks and tractor-trailers</li>
        <li>Large commercial trucks</li>
        <li>Delivery trucks and box trucks</li>
        <li>City buses and coach buses</li>
        <li>RVs and motorhomes</li>
        <li>Construction equipment</li>
        <li>Agricultural machinery</li>
        <li>Emergency vehicles</li>
        <li>Large SUVs and pickup trucks</li>
    </ul>

    <h3 class="text-2xl font-semibold mt-8 mb-4">Our Heavy Duty Services Include:</h3>
    <ul class="space-y-2">
        <li>Emergency breakdown recovery</li>
        <li>Accident recovery and cleanup</li>
        <li>Load shifts and cargo securement</li>
        <li>Off-road recovery</li>
        <li>Equipment transport</li>
        <li>Commercial vehicle relocation</li>
        <li>Fleet towing services</li>
        <li>Insurance claim assistance</li>
    </ul>

    <h3 class="text-2xl font-semibold mt-8 mb-4">Why Choose Our Heavy Duty Towing?</h3>
    <ul class="space-y-2">
        <li><strong>Powerful Equipment:</strong> Heavy duty tow trucks capable of handling any load</li>
        <li><strong>Experienced Operators:</strong> Certified professionals with commercial towing expertise</li>
        <li><strong>24/7 Availability:</strong> Emergency commercial towing around the clock</li>
        <li><strong>Fast Response:</strong> Priority dispatch for commercial vehicles</li>
        <li><strong>Safety First:</strong> Proper traffic control and safety procedures</li>
        <li><strong>Insurance Approved:</strong> Work with all major commercial insurance providers</li>
        <li><strong>DOT Compliance:</strong> Familiar with commercial vehicle regulations</li>
    </ul>

    <h3 class="text-2xl font-semibold mt-8 mb-4">Commercial Fleet Services:</h3>
    <p>We understand that commercial vehicle downtime costs money. That's why we offer priority service for businesses and fleet operators in the Spokane area. Our commercial towing services include:</p>
    <ul class="space-y-2">
        <li>Priority dispatch for fleet customers</li>
        <li>Volume pricing for multiple vehicles</li>
        <li>Direct billing and invoicing</li>
        <li>Regular service agreements</li>
        <li>Emergency contact programs</li>
    </ul>

    <p class="mt-8">Don't let a breakdown shut down your business operations. Spokane Towing's heavy duty towing services get your commercial vehicles back on the road quickly and safely. We have the equipment, expertise, and availability to handle any heavy duty towing situation.</p>
</div>

<h3 class="text-2xl font-semibold mt-8 mb-6">Heavy Duty Towing FAQ</h3>
<div class="space-y-6 mb-12">
    <div class="bg-slate-800/50 rounded-xl p-6 border border-slate-700/50">
        <h4 class="text-lg font-semibold mb-2 text-white">Can you tow a semi truck or tractor-trailer?</h4>
        <p class="text-gray-300">Yes, we have heavy duty tow trucks equipped to handle semis, tractor-trailers, box trucks, buses, RVs, and other large commercial vehicles. Our operators are experienced with all types of heavy equipment.</p>
    </div>
    <div class="bg-slate-800/50 rounded-xl p-6 border border-slate-700/50">
        <h4 class="text-lg font-semibold mb-2 text-white">How much does heavy duty towing cost?</h4>
        <p class="text-gray-300">Heavy duty towing pricing depends on the vehicle size, weight, and distance. Call (509) 797-7999 for a quote. We offer competitive commercial rates and fleet discounts with no hidden fees.</p>
    </div>
    <div class="bg-slate-800/50 rounded-xl p-6 border border-slate-700/50">
        <h4 class="text-lg font-semibold mb-2 text-white">Do you work with commercial insurance companies?</h4>
        <p class="text-gray-300">Yes, we work with all major commercial insurance providers. We can coordinate directly with your insurance company and provide all required documentation for claims.</p>
    </div>
    <div class="bg-slate-800/50 rounded-xl p-6 border border-slate-700/50">
        <h4 class="text-lg font-semibold mb-2 text-white">Do you offer fleet towing contracts?</h4>
        <p class="text-gray-300">Yes, we offer fleet service agreements with priority dispatch, volume pricing, and direct billing for businesses in the Spokane area. Contact us to set up a commercial account.</p>
    </div>
</div>

<!-- CTA Box -->
<div class="bg-gradient-to-r from-orange-500 to-orange-600 rounded-2xl p-8 text-center relative overflow-hidden">
    <div class="absolute inset-0 bg-black/10"></div>
    <div class="relative">
        <h3 class="text-2xl font-bold mb-4 text-white">Need Heavy Duty Towing Now?</h3>
        <p class="mb-6 text-white/90">Commercial vehicle breakdown? We're standing by 24/7</p>
        <a href="tel:+15097977999" class="bg-white text-orange-600 px-8 py-4 rounded-xl hover:bg-gray-100 transition font-bold text-lg inline-block shadow-lg">
            Call (509) 797-7999
        </a>
    </div>
</div>
@endsection

@section('extra-sections')
@include('partials.coverage-area', ['title' => 'Heavy Duty Towing Coverage', 'description' => 'Professional heavy duty towing services throughout the greater Spokane region:'])

<!-- Commercial Features -->
<section class="py-20 bg-slate-900">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold mb-8 text-center text-white">Commercial Towing Features</h2>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-slate-800/50 backdrop-blur-sm rounded-2xl p-6 border border-slate-700/50">
                    <h3 class="text-xl font-semibold mb-4 text-white">Fleet Services</h3>
                    <ul class="space-y-2 text-gray-300">
                        <li class="flex items-center"><span class="text-orange-500 mr-2">✓</span> Priority dispatch</li>
                        <li class="flex items-center"><span class="text-orange-500 mr-2">✓</span> Volume discounts</li>
                        <li class="flex items-center"><span class="text-orange-500 mr-2">✓</span> Direct billing</li>
                        <li class="flex items-center"><span class="text-orange-500 mr-2">✓</span> 24/7 availability</li>
                    </ul>
                </div>
                <div class="bg-slate-800/50 backdrop-blur-sm rounded-2xl p-6 border border-slate-700/50">
                    <h3 class="text-xl font-semibold mb-4 text-white">Safety & Compliance</h3>
                    <ul class="space-y-2 text-gray-300">
                        <li class="flex items-center"><span class="text-orange-500 mr-2">✓</span> DOT compliant operations</li>
                        <li class="flex items-center"><span class="text-orange-500 mr-2">✓</span> Proper traffic control</li>
                        <li class="flex items-center"><span class="text-orange-500 mr-2">✓</span> Insurance coordination</li>
                        <li class="flex items-center"><span class="text-orange-500 mr-2">✓</span> Safety documentation</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="application/ld+json">
{!! json_encode([
    "@@context" => "https://schema.org",
    "@@type" => "FAQPage",
    "mainEntity" => [
        [
            "@@type" => "Question",
            "name" => "Can you tow a semi truck or tractor-trailer?",
            "acceptedAnswer" => [
                "@@type" => "Answer",
                "text" => "Yes, we have heavy duty tow trucks equipped to handle semis, tractor-trailers, box trucks, buses, RVs, and other large commercial vehicles. Our operators are experienced with all types of heavy equipment."
            ]
        ],
        [
            "@@type" => "Question",
            "name" => "How much does heavy duty towing cost?",
            "acceptedAnswer" => [
                "@@type" => "Answer",
                "text" => "Heavy duty towing pricing depends on the vehicle size, weight, and distance. Call (509) 797-7999 for a quote. We offer competitive commercial rates and fleet discounts with no hidden fees."
            ]
        ],
        [
            "@@type" => "Question",
            "name" => "Do you work with commercial insurance companies?",
            "acceptedAnswer" => [
                "@@type" => "Answer",
                "text" => "Yes, we work with all major commercial insurance providers. We can coordinate directly with your insurance company and provide all required documentation for claims."
            ]
        ],
        [
            "@@type" => "Question",
            "name" => "Do you offer fleet towing contracts?",
            "acceptedAnswer" => [
                "@@type" => "Answer",
                "text" => "Yes, we offer fleet service agreements with priority dispatch, volume pricing, and direct billing for businesses in the Spokane area. Contact us to set up a commercial account."
            ]
        ]
    ]
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
</script>
@endsection