@extends('layouts.location-page')

@section('title', 'Medical Lake Towing | 24/7 Tow Truck & Roadside Assistance')

@section('description', 'Medical Lake, WA emergency towing & roadside assistance on the West Plains. Fast response to I-90, SR-902 & near Fairchild AFB. Available 24/7. Call (509) 797-7999')

@section('city', 'Medical Lake, WA')

@section('content')
<p class="text-lg leading-relaxed">When your vehicle breaks down in <strong>Medical Lake, Washington</strong>, Spokane Towing has you covered. Located on the <strong>West Plains</strong> southwest of Spokane, Medical Lake drivers count on us for emergency towing on SR-902, I-90, and the rural roads around the lakes.</p>

<div class="bg-blue-500/10 border-l-4 border-blue-500 p-4 my-6 rounded-r-xl">
    <p class="font-semibold text-white">🛣️ West Plains coverage, around the clock</p>
    <p class="text-gray-300">We regularly serve the West Plains corridor between Airway Heights, Cheney, and Medical Lake. Whether you're commuting to Fairchild Air Force Base, headed to I-90, or stranded near one of the lakes, our drivers know the fastest routes to reach you.</p>
</div>

<h3 class="text-2xl font-bold mt-8 mb-4">Medical Lake Service Coverage</h3>
<p class="mb-4">We provide towing services throughout the <strong>Medical Lake area</strong>, including:</p>

<div class="grid md:grid-cols-2 gap-4 mb-8">
    <ul class="space-y-2">
        <li class="flex items-start">
            <span class="text-orange-500 mr-2">▸</span>
            <span><strong>State Route 902</strong> between I-90 and downtown Medical Lake</span>
        </li>
        <li class="flex items-start">
            <span class="text-orange-500 mr-2">▸</span>
            <span><strong>I-90 corridor</strong> at the Medical Lake and Salnave Road exits</span>
        </li>
        <li class="flex items-start">
            <span class="text-orange-500 mr-2">▸</span>
            <span>Roads near <strong>Fairchild Air Force Base</strong></span>
        </li>
    </ul>
    <ul class="space-y-2">
        <li class="flex items-start">
            <span class="text-orange-500 mr-2">▸</span>
            <span><strong>Downtown Medical Lake</strong> and residential streets</span>
        </li>
        <li class="flex items-start">
            <span class="text-orange-500 mr-2">▸</span>
            <span><strong>Medical Lake and Silver Lake</strong> recreation areas</span>
        </li>
        <li class="flex items-start">
            <span class="text-orange-500 mr-2">▸</span>
            <span><strong>Rural West Plains roads</strong> and farm properties</span>
        </li>
    </ul>
</div>

<h3 class="text-2xl font-bold mt-8 mb-4">West Plains Expertise</h3>
<div class="bg-green-500/10 rounded-xl p-6 mb-6 border border-green-500/30">
    <p class="text-lg font-semibold mb-2 text-white">⏱️ Response Time: <span class="text-green-400">25-35 minutes</span></p>
    <p class="text-gray-300">Medical Lake is about 15 miles from downtown Spokane. Our drivers know the West Plains roads in every season — including winter, when SR-902 and the rural roads around the lakes get icy and <a href="/winch-out-recovery" class="text-red-500 hover:underline">ditch recoveries</a> spike.</p>
</div>

<p class="text-lg">We handle everything from <strong>highway breakdowns</strong> on I-90 to <a href="/battery-jump-start" class="text-red-500 hover:underline">dead batteries</a> in your driveway. Our modern equipment and experienced operators ensure safe, professional service anywhere in the <strong>Medical Lake area</strong>, 24 hours a day.</p>
@endsection

@section('nearby')
    <a href="/towing-airway-heights" class="bg-slate-800/50 border border-slate-700/50 rounded-xl px-6 py-3 text-gray-300 hover:text-white hover:border-red-500/50 transition">Airway Heights Towing</a>
    <a href="/towing-cheney" class="bg-slate-800/50 border border-slate-700/50 rounded-xl px-6 py-3 text-gray-300 hover:text-white hover:border-red-500/50 transition">Cheney Towing</a>
    <a href="/" class="bg-slate-800/50 border border-slate-700/50 rounded-xl px-6 py-3 text-gray-300 hover:text-white hover:border-red-500/50 transition">Spokane Towing</a>
@endsection
