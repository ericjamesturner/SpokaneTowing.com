@extends('layouts.service-page')

@section('title', 'Flatbed Towing Spokane | Safe Vehicle Transport')

@section('description', 'Professional flatbed towing services in Spokane, WA. Safe transport for luxury cars, motorcycles, and damaged vehicles. Available 24/7 with fast response. Call (509) 797-7999')

@section('hero-title', 'Professional Flatbed Towing in Spokane')

@section('hero-subtitle', 'Safe, secure flatbed transport for your vehicle. Perfect for luxury cars, low-clearance vehicles, and damaged automobiles.')

@section('content')
<h2 class="text-3xl font-bold mb-8">Premium Flatbed Towing Services</h2>

<div class="prose prose-lg max-w-none mb-12">
    <p>When your vehicle needs the safest possible transport, flatbed towing is the gold standard. Spokane Towing provides professional flatbed towing services throughout Spokane, WA and surrounding areas. Our modern flatbed trucks ensure your vehicle is transported securely without any wheel contact with the road.</p>
    
    <h3 class="text-2xl font-semibold mt-8 mb-4">Our Flatbed Towing Services Include:</h3>
    <ul class="space-y-2">
        <li>Luxury vehicle transport</li>
        <li>Classic and vintage car towing</li>
        <li>Low-clearance vehicle transport</li>
        <li>Motorcycle towing</li>
        <li>Accident vehicle recovery</li>
        <li>Long-distance flatbed transport</li>
        <li>Exotic car towing</li>
        <li>All-wheel drive vehicle transport</li>
    </ul>

    <h3 class="text-2xl font-semibold mt-8 mb-4">Benefits of Flatbed Towing:</h3>
    <ul class="space-y-2">
        <li><strong>Maximum Protection:</strong> Your vehicle never touches the ground during transport</li>
        <li><strong>Prevents Damage:</strong> No wear on tires, transmission, or drivetrain</li>
        <li><strong>All-Weather Safe:</strong> Secure transport regardless of road conditions</li>
        <li><strong>Versatile:</strong> Can transport vehicles that can't be towed conventionally</li>
        <li><strong>Professional Loading:</strong> Experienced operators use proper tie-down techniques</li>
    </ul>

    <h3 class="text-2xl font-semibold mt-8 mb-4">Why Choose Spokane Towing for Flatbed Service?</h3>
    <ul class="space-y-2">
        <li><strong>Modern Fleet:</strong> Well-maintained flatbed trucks with hydraulic systems</li>
        <li><strong>Experienced Operators:</strong> Trained professionals who handle your vehicle with care</li>
        <li><strong>Fast Response:</strong> Available 24/7 with average arrival time of 20-30 minutes</li>
        <li><strong>Fully Insured:</strong> Complete coverage for your peace of mind</li>
        <li><strong>Competitive Rates:</strong> Fair pricing for premium flatbed service</li>
        <li><strong>Local Expertise:</strong> Familiar with Spokane roads and traffic patterns</li>
    </ul>

    <h3 class="text-2xl font-semibold mt-8 mb-4">When to Choose Flatbed Towing:</h3>
    <ul class="space-y-2">
        <li>Luxury or exotic vehicles</li>
        <li>All-wheel or four-wheel drive vehicles</li>
        <li>Vehicles with transmission problems</li>
        <li>Low-clearance sports cars</li>
        <li>Motorcycles and ATVs</li>
        <li>Severely damaged vehicles</li>
        <li>Long-distance transport</li>
    </ul>

    <p class="mt-8">Trust Spokane Towing for professional flatbed towing services that prioritize the safety and security of your vehicle. Our experienced team understands the importance of proper vehicle handling and uses the latest equipment to ensure damage-free transport.</p>
</div>

<!-- CTA Box -->
<div class="bg-blue-50 rounded-lg p-8 text-center">
    <h3 class="text-2xl font-bold mb-4">Need Safe Flatbed Towing?</h3>
    <p class="mb-6 text-gray-700">Protect your investment with professional flatbed transport</p>
    <a href="tel:+15097977999" class="bg-blue-600 text-white px-8 py-4 rounded-lg hover:bg-blue-700 transition font-semibold text-lg inline-block">
        Call (509) 797-7999
    </a>
</div>
@endsection

@section('extra-sections')
@include('partials.coverage-area', ['title' => 'Flatbed Towing Service Coverage', 'description' => 'Professional flatbed towing available throughout the Spokane area:'])
@endsection