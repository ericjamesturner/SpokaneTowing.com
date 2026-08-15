@extends('layouts.service-page')

@section('title', 'Motorcycle Towing Spokane | Safe Flatbed Motorcycle Transport')

@section('description', 'Motorcycle towing in Spokane with soft straps, wheel chocks & flatbed transport — no damage to your bike. Cruisers, sport bikes & trikes. Available 24/7. Call (509) 797-7999')

@section('service-type', 'Motorcycle Towing Service')

@section('hero-title', 'Motorcycle Towing in Spokane')

@section('hero-subtitle', 'Your bike deserves better than a chain and a prayer. Flatbed transport with soft straps and wheel chocks, from riders who know what a dropped bike costs.')

@section('content')
<h2 class="text-3xl font-bold mb-8">Motorcycle Towing Done Right</h2>

<div class="prose prose-invert prose-lg max-w-none mb-12 prose-headings:text-white prose-p:text-gray-300 prose-li:text-gray-300 prose-strong:text-white prose-a:text-red-500 prose-a:no-underline hover:prose-a:underline">
    <p>A breakdown on two wheels is a different problem than a breakdown on four. Most tow trucks aren't set up to move a motorcycle safely, and the wrong equipment can scratch a tank, bend a rotor, or drop the bike outright. Spokane Towing provides dedicated <strong>motorcycle towing throughout Spokane, WA</strong> using <a href="/flatbed-towing">flatbed equipment</a>, soft tie-down straps, and wheel chocks — the way a bike should be moved.</p>

    <h3 class="text-2xl font-semibold mt-8 mb-4">Motorcycles We Transport</h3>
    <ul class="space-y-2">
        <li>Cruisers and touring bikes (Harley-Davidson, Indian, Gold Wing)</li>
        <li>Sport bikes and supersports</li>
        <li>Dual-sport and adventure bikes</li>
        <li>Dirt bikes and off-road motorcycles</li>
        <li>Trikes and three-wheelers (Can-Am, Harley Tri Glide)</li>
        <li>Scooters and mopeds</li>
        <li>Custom and vintage motorcycles</li>
    </ul>

    <h3 class="text-2xl font-semibold mt-8 mb-4">How We Protect Your Bike</h3>
    <ul class="space-y-2">
        <li><strong>Flatbed transport:</strong> Your motorcycle rides on the deck, never dragged on its wheels</li>
        <li><strong>Soft straps:</strong> No metal hooks on your bars, forks, or bodywork</li>
        <li><strong>Wheel chocks:</strong> The front wheel is secured so the bike can't shift in transit</li>
        <li><strong>Proper compression:</strong> Suspension is compressed correctly so straps stay tight without bottoming out</li>
        <li><strong>Careful loading:</strong> Slow, controlled loading — even for bikes that won't run or roll</li>
    </ul>

    <h3 class="text-2xl font-semibold mt-8 mb-4">When Riders Call Us</h3>
    <ul class="space-y-2">
        <li>Breakdowns on I-90, US-2, US-195, and rural riding roads</li>
        <li><a href="/battery-jump-start">Dead battery</a> after a stop — motorcycles are jump-startable too</li>
        <li>Flat tire with no plug kit or no way to ride it out</li>
        <li>Accident recovery, including transport to the shop of your choice</li>
        <li>Buying or selling a bike that doesn't run</li>
        <li>Moving a bike to or from winter storage</li>
    </ul>

    <p class="mt-8">We serve riders throughout Spokane, Spokane Valley, Greenacres, and North Idaho — including the riding roads where breakdowns actually happen, not just the city grid. Available 24/7, because bikes don't break down on a schedule.</p>
</div>

<!-- CTA Box -->
<div class="bg-gradient-to-r from-orange-500 to-orange-600 rounded-2xl p-8 text-center relative overflow-hidden">
    <div class="absolute inset-0 bg-black/10"></div>
    <div class="relative">
        <h3 class="text-2xl font-bold mb-4 text-white">Bike Down? We've Got It.</h3>
        <p class="mb-6 text-white/90">Flatbed motorcycle transport, 24 hours a day</p>
        <a href="tel:+15097977999" class="bg-white text-orange-600 px-8 py-4 rounded-xl hover:bg-gray-100 transition font-bold text-lg inline-block shadow-lg">
            Call (509) 797-7999
        </a>
    </div>
</div>
@endsection

@section('extra-sections')
@include('partials.coverage-area', ['title' => 'Motorcycle Towing Coverage Area', 'description' => 'We provide motorcycle towing throughout the greater Spokane area, including:'])
@endsection
