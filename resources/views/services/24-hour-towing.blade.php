@extends('layouts.service-page')

@section('title', '24 Hour Emergency Towing Spokane | Available Now')

@section('description', 'Need 24 hour towing in Spokane? We\'re available now with fast response times. Emergency towing services throughout Spokane, WA. Call (509) 797-7999')

@section('hero-title', '24 Hour Emergency Towing in Spokane')

@section('hero-subtitle', 'Available now with fast response times. Professional emergency towing services when you need them most.')

@section('content')
<h2 class="text-3xl font-bold mb-8">Emergency Towing Available 24/7</h2>

<div class="prose prose-lg max-w-none mb-12">
    <p>When your vehicle breaks down at 2 AM or you're stranded on the highway after an accident, you need a reliable 24 hour towing service in Spokane that you can count on. Spokane Towing provides round-the-clock emergency towing services throughout Spokane, WA and surrounding areas.</p>
    
    <h3 class="text-2xl font-semibold mt-8 mb-4">Our 24 Hour Towing Services Include:</h3>
    <ul class="space-y-2">
        <li>Emergency accident recovery</li>
        <li>Breakdown towing</li>
        <li>Off-road recovery</li>
        <li>Highway emergency response</li>
        <li>Vehicle transport to repair shops</li>
        <li>Insurance-approved towing</li>
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

<!-- CTA Box -->
<div class="bg-blue-50 rounded-lg p-8 text-center">
    <h3 class="text-2xl font-bold mb-4">Need Emergency Towing Right Now?</h3>
    <p class="mb-6 text-gray-700">Don't wait - our dispatchers are standing by 24/7</p>
    <a href="tel:+15097977999" class="bg-blue-600 text-white px-8 py-4 rounded-lg hover:bg-blue-700 transition font-semibold text-lg inline-block">
        Call (509) 797-7999
    </a>
</div>
@endsection

@section('extra-sections')
@include('partials.coverage-area', ['title' => '24 Hour Towing Coverage Area', 'description' => 'We provide emergency towing services throughout the greater Spokane area, including:'])
@endsection