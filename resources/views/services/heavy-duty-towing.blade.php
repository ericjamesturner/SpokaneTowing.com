@extends('layouts.service-page')

@section('title', 'Heavy Duty Towing Spokane | Commercial Vehicle Recovery')

@section('description', 'Professional heavy duty towing and commercial vehicle recovery in Spokane, WA. Trucks, buses, RVs, and commercial equipment. Available 24/7. Call (509) 797-7999')

@section('hero-title', 'Heavy Duty Towing & Commercial Recovery')

@section('hero-subtitle', 'Professional heavy duty towing for trucks, buses, RVs, and commercial vehicles. When you need serious towing power, we deliver.')

@section('content')
<h2 class="text-3xl font-bold mb-8">Heavy Duty Towing Specialists</h2>

<div class="prose prose-lg max-w-none mb-12">
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

<!-- CTA Box -->
<div class="bg-blue-50 rounded-lg p-8 text-center">
    <h3 class="text-2xl font-bold mb-4">Need Heavy Duty Towing Now?</h3>
    <p class="mb-6 text-gray-700">Commercial vehicle breakdown? We're standing by 24/7</p>
    <a href="tel:+15097977999" class="bg-blue-600 text-white px-8 py-4 rounded-lg hover:bg-blue-700 transition font-semibold text-lg inline-block">
        Call (509) 797-7999
    </a>
</div>
@endsection

@section('extra-sections')
@include('partials.coverage-area', ['title' => 'Heavy Duty Towing Coverage', 'description' => 'Professional heavy duty towing services throughout the greater Spokane region:'])

<!-- Commercial Features -->
<section class="py-20">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold mb-8 text-center">Commercial Towing Features</h2>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h3 class="text-xl font-semibold mb-4">Fleet Services</h3>
                    <ul class="space-y-2 text-gray-700">
                        <li>✓ Priority dispatch</li>
                        <li>✓ Volume discounts</li>
                        <li>✓ Direct billing</li>
                        <li>✓ 24/7 availability</li>
                    </ul>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h3 class="text-xl font-semibold mb-4">Safety & Compliance</h3>
                    <ul class="space-y-2 text-gray-700">
                        <li>✓ DOT compliant operations</li>
                        <li>✓ Proper traffic control</li>
                        <li>✓ Insurance coordination</li>
                        <li>✓ Safety documentation</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection