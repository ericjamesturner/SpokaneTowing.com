@extends('layouts.location-page')

@section('title', 'Greenacres Towing | 24/7 Tow Truck & Roadside Assistance')

@section('description', 'Greenacres, WA towing with 20-30 min response. Emergency towing, motorcycle towing, accident recovery & roadside assistance along I-90 & Sprague Ave. Call (509) 797-7999')

@section('city', 'Greenacres, WA')

@section('content')
<p class="text-lg leading-relaxed">When you need fast, reliable towing in <strong>Greenacres, Washington</strong>, Spokane Towing is minutes away. Located in the eastern <strong>Spokane Valley</strong> between Sullivan Road and Liberty Lake, Greenacres sits right on our home turf — our trucks pass through the area every day.</p>

<div class="bg-blue-500/10 border-l-4 border-blue-500 p-4 my-6 rounded-r-xl">
    <p class="font-semibold text-white">🚗 Fast response on the I-90 corridor</p>
    <p class="text-gray-300">Whether you break down on I-90 near the Barker Road exit, get stuck in traffic on Sprague Avenue, or need a tow from a neighborhood near Central Valley High School, we can reach you fast. Greenacres is one of our quickest response zones.</p>
</div>

<h3 class="text-2xl font-bold mt-8 mb-4">Greenacres Service Coverage</h3>
<p class="mb-4">We provide towing services throughout the <strong>Greenacres area</strong>, including:</p>

<div class="grid md:grid-cols-2 gap-4 mb-8">
    <ul class="space-y-2">
        <li class="flex items-start">
            <span class="text-orange-500 mr-2">▸</span>
            <span><strong>I-90 corridor</strong> at Barker Road and Harvard Road exits</span>
        </li>
        <li class="flex items-start">
            <span class="text-orange-500 mr-2">▸</span>
            <span><strong>Sprague Avenue</strong> and Appleway Boulevard</span>
        </li>
        <li class="flex items-start">
            <span class="text-orange-500 mr-2">▸</span>
            <span><strong>Barker Road corridor</strong> and new residential developments</span>
        </li>
    </ul>
    <ul class="space-y-2">
        <li class="flex items-start">
            <span class="text-orange-500 mr-2">▸</span>
            <span><strong>Greenacres neighborhoods</strong> and rural roads</span>
        </li>
        <li class="flex items-start">
            <span class="text-orange-500 mr-2">▸</span>
            <span>Areas near <strong>Central Valley schools</strong></span>
        </li>
        <li class="flex items-start">
            <span class="text-orange-500 mr-2">▸</span>
            <span>The <strong>Spokane River</strong> and Centennial Trail access areas</span>
        </li>
    </ul>
</div>

<h3 class="text-2xl font-bold mt-8 mb-4">Every Service, Right in Greenacres</h3>
<div class="bg-green-500/10 rounded-xl p-6 mb-6 border border-green-500/30">
    <p class="text-lg font-semibold mb-2 text-white">⏱️ Response Time: <span class="text-green-400">20-30 minutes</span></p>
    <p class="text-gray-300">Greenacres is in the heart of our Spokane Valley coverage area. We handle everything here: emergency towing, <a href="/motorcycle-towing" class="text-red-500 hover:underline">motorcycle towing</a>, accident recovery, <a href="/battery-jump-start" class="text-red-500 hover:underline">battery jump starts</a>, and <a href="/winch-out-recovery" class="text-red-500 hover:underline">winch-out service</a>.</p>
</div>

<p class="text-lg">From <strong>24 hour vehicle tows</strong> to specialized towing for motorcycles and low-clearance vehicles, our modern equipment and experienced operators serve the <strong>Greenacres area</strong> around the clock. No membership, no surge pricing — just fast help when you need it.</p>
@endsection

@section('nearby')
    <a href="/towing-spokane-valley" class="bg-slate-800/50 border border-slate-700/50 rounded-xl px-6 py-3 text-gray-300 hover:text-white hover:border-red-500/50 transition">Spokane Valley Towing</a>
    <a href="/towing-liberty-lake" class="bg-slate-800/50 border border-slate-700/50 rounded-xl px-6 py-3 text-gray-300 hover:text-white hover:border-red-500/50 transition">Liberty Lake Towing</a>
    <a href="/towing-post-falls" class="bg-slate-800/50 border border-slate-700/50 rounded-xl px-6 py-3 text-gray-300 hover:text-white hover:border-red-500/50 transition">Post Falls Towing</a>
@endsection
