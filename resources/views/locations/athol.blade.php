@extends('layouts.location-page')

@section('title', 'Athol Towing | 24/7 Tow Truck & Roadside Assistance')

@section('description', 'Athol, ID towing on US-95 & SR-54 near Silverwood Theme Park & Farragut State Park. Emergency towing, RV towing & roadside assistance 24/7. Call (509) 797-7999')

@section('city', 'Athol, ID')

@section('content')
<p class="text-lg leading-relaxed">When your vehicle breaks down in <strong>Athol, Idaho</strong>, Spokane Towing gets to you. Athol sits on the busy <strong>US-95 corridor</strong> between Hayden and Sandpoint, at the SR-54 junction that carries thousands of visitors to <strong>Silverwood Theme Park</strong> and <strong>Farragut State Park</strong> every summer day.</p>

<div class="bg-blue-500/10 border-l-4 border-blue-500 p-4 my-6 rounded-r-xl">
    <p class="font-semibold text-white">🎢 Silverwood & Farragut traffic covered</p>
    <p class="text-gray-300">A breakdown on a theme park day trip is miserable — a hot parking lot, tired kids, and a long way from home. We tow visitors back to Spokane, Coeur d'Alene, or wherever home is, and we handle the RVs and trailers that fill US-95 all summer.</p>
</div>

<h3 class="text-2xl font-bold mt-8 mb-4">Athol Service Coverage</h3>
<p class="mb-4">We provide towing services throughout the <strong>Athol area</strong>, including:</p>

<div class="grid md:grid-cols-2 gap-4 mb-8">
    <ul class="space-y-2">
        <li class="flex items-start">
            <span class="text-orange-500 mr-2">▸</span>
            <span><strong>US-95 corridor</strong> between Hayden and Sandpoint</span>
        </li>
        <li class="flex items-start">
            <span class="text-orange-500 mr-2">▸</span>
            <span><strong>Silverwood Theme Park</strong> and Boulder Beach parking areas</span>
        </li>
        <li class="flex items-start">
            <span class="text-orange-500 mr-2">▸</span>
            <span><strong>SR-54</strong> east to Farragut State Park and Bayview</span>
        </li>
    </ul>
    <ul class="space-y-2">
        <li class="flex items-start">
            <span class="text-orange-500 mr-2">▸</span>
            <span><strong>Downtown Athol</strong> and residential streets</span>
        </li>
        <li class="flex items-start">
            <span class="text-orange-500 mr-2">▸</span>
            <span><strong>Lake Pend Oreille</strong> access roads near Bayview</span>
        </li>
        <li class="flex items-start">
            <span class="text-orange-500 mr-2">▸</span>
            <span><strong>Rural roads</strong> across the northern Rathdrum Prairie</span>
        </li>
    </ul>
</div>

<h3 class="text-2xl font-bold mt-8 mb-4">Highway & Vacation Traffic Expertise</h3>
<div class="bg-green-500/10 rounded-xl p-6 mb-6 border border-green-500/30">
    <p class="text-lg font-semibold mb-2 text-white">⏱️ Response Time: <span class="text-green-400">45-60 minutes</span></p>
    <p class="text-gray-300">Athol is about 45 miles from Spokane on the US-95 corridor we already run daily between Hayden and Sandpoint. Summer weekends get busy — call as soon as you're safely stopped and we'll dispatch the nearest truck.</p>
</div>

<p class="text-lg">We handle <strong>car, RV, and trailer breakdowns</strong> on US-95, <a href="/motorcycle-towing" class="text-red-500 hover:underline">motorcycle towing</a> for riders touring North Idaho, <a href="/battery-jump-start" class="text-red-500 hover:underline">jump starts</a> in the Silverwood lot, and <a href="/winch-out-recovery" class="text-red-500 hover:underline">winch-outs</a> on forest and lake roads. Available 24/7, every season.</p>
@endsection

@section('nearby')
    <a href="/towing-hayden-id" class="bg-slate-800/50 border border-slate-700/50 rounded-xl px-6 py-3 text-gray-300 hover:text-white hover:border-red-500/50 transition">Hayden Towing</a>
    <a href="/towing-sandpoint" class="bg-slate-800/50 border border-slate-700/50 rounded-xl px-6 py-3 text-gray-300 hover:text-white hover:border-red-500/50 transition">Sandpoint Towing</a>
    <a href="/towing-spirit-lake" class="bg-slate-800/50 border border-slate-700/50 rounded-xl px-6 py-3 text-gray-300 hover:text-white hover:border-red-500/50 transition">Spirit Lake Towing</a>
@endsection
