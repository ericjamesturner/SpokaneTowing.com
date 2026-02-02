@extends('layouts.service-page')

@section('title', 'Car Lockout & Flat Tire Service Spokane | Fast Response')

@section('description', 'Locked out of your car or have a flat tire in Spokane? Our professional lockout and flat tire services are available 24/7. Fast response, fair pricing. Call (509) 797-7999')

@section('hero-title', 'Car Lockout & Flat Tire Service in Spokane')

@section('hero-subtitle', 'Locked out or have a flat tire? Our professional roadside assistance gets you back on the road quickly and safely.')

@section('content')
<h2 class="text-3xl font-bold mb-8">Professional Lockout & Flat Tire Services</h2>

<div class="prose prose-invert prose-lg max-w-none mb-12 prose-headings:text-white prose-p:text-gray-300 prose-li:text-gray-300 prose-strong:text-white">
    <p>Getting locked out of your car or dealing with a flat tire can happen to anyone at any time. When you're stranded in Spokane, WA, you need reliable roadside assistance that responds quickly and gets the job done right. Spokane Towing provides professional car lockout services and flat tire assistance throughout the greater Spokane area.</p>
    
    <h3 class="text-2xl font-semibold mt-8 mb-4">Our Lockout Services Include:</h3>
    <ul class="space-y-2">
        <li>Emergency car lockout assistance</li>
        <li>Key extraction from locked vehicles</li>
        <li>Trunk lockout service</li>
        <li>Ignition key issues</li>
        <li>Safe, damage-free entry methods</li>
        <li>All vehicle makes and models</li>
    </ul>

    <h3 class="text-2xl font-semibold mt-8 mb-4">Our Flat Tire Services Include:</h3>
    <ul class="space-y-2">
        <li>Tire changing and replacement</li>
        <li>Spare tire installation</li>
        <li>Tire repair when possible</li>
        <li>Emergency tire service</li>
        <li>Roadside tire assistance</li>
        <li>Mobile tire service</li>
    </ul>

    <h3 class="text-2xl font-semibold mt-8 mb-4">Why Choose Spokane Towing for Lockouts & Flat Tires?</h3>
    <ul class="space-y-2">
        <li><strong>Quick Response:</strong> Average arrival time of 20-30 minutes</li>
        <li><strong>24/7 Availability:</strong> Emergency assistance any time of day or night</li>
        <li><strong>Professional Tools:</strong> Specialized equipment for safe vehicle entry</li>
        <li><strong>Experienced Technicians:</strong> Trained professionals who won't damage your vehicle</li>
        <li><strong>All Vehicle Types:</strong> Cars, trucks, SUVs, and commercial vehicles</li>
        <li><strong>Fair Pricing:</strong> Transparent rates with no hidden fees</li>
    </ul>

    <p class="mt-8">Don't let a lockout or flat tire ruin your day. Our experienced team in Spokane is equipped with the latest tools and techniques to handle any lockout situation or tire emergency safely and efficiently. We serve all areas of Spokane, Spokane Valley, and surrounding communities.</p>
</div>

<!-- CTA Box -->
<div class="bg-gradient-to-r from-orange-500 to-orange-600 rounded-2xl p-8 text-center relative overflow-hidden">
    <div class="absolute inset-0 bg-black/10"></div>
    <div class="relative">
        <h3 class="text-2xl font-bold mb-4 text-white">Locked Out or Have a Flat Tire?</h3>
        <p class="mb-6 text-white/90">Get fast, professional assistance - we're available 24/7</p>
        <a href="tel:+15097977999" class="bg-white text-orange-600 px-8 py-4 rounded-xl hover:bg-gray-100 transition font-bold text-lg inline-block shadow-lg">
            Call (509) 797-7999
        </a>
    </div>
</div>
@endsection

@section('extra-sections')
@include('partials.coverage-area', ['title' => 'Lockout & Flat Tire Service Coverage Area', 'description' => 'We provide emergency lockout and flat tire services throughout the greater Spokane area, including:'])
@endsection