@extends('layouts.location-page')

@section('title', 'Spirit Lake Towing | 24/7 Tow Truck & Roadside Assistance')

@section('description', 'Spirit Lake, ID towing at the north end of SR-41. Emergency towing, winter recovery & roadside assistance for town, lake & forest roads. 24/7. Call (509) 797-7999')

@section('city', 'Spirit Lake, ID')

@section('content')
<p class="text-lg leading-relaxed">When you need a tow in <strong>Spirit Lake, Idaho</strong>, Spokane Towing answers 24/7. Spirit Lake sits at the north end of <strong>SR-41</strong> in Kootenai County, where the Rathdrum Prairie meets the timber — a beautiful place to live and a bad place to be stranded without help.</p>

<div class="bg-blue-500/10 border-l-4 border-blue-500 p-4 my-6 rounded-r-xl">
    <p class="font-semibold text-white">🌲 Small town, full coverage</p>
    <p class="text-gray-300">Big towing companies overlook towns like Spirit Lake. We don't. Our trucks already work the SR-41 corridor through Rathdrum, so the north end of the line gets the same 24/7 service as downtown Coeur d'Alene.</p>
</div>

<h3 class="text-2xl font-bold mt-8 mb-4">Spirit Lake Service Coverage</h3>
<p class="mb-4">We provide towing services throughout the <strong>Spirit Lake area</strong>, including:</p>

<div class="grid md:grid-cols-2 gap-4 mb-8">
    <ul class="space-y-2">
        <li class="flex items-start">
            <span class="text-orange-500 mr-2">▸</span>
            <span><strong>SR-41</strong> between Rathdrum and Spirit Lake</span>
        </li>
        <li class="flex items-start">
            <span class="text-orange-500 mr-2">▸</span>
            <span><strong>Downtown Spirit Lake</strong> and Maine Street</span>
        </li>
        <li class="flex items-start">
            <span class="text-orange-500 mr-2">▸</span>
            <span><strong>Spirit Lake shoreline</strong> and boat launch access roads</span>
        </li>
    </ul>
    <ul class="space-y-2">
        <li class="flex items-start">
            <span class="text-orange-500 mr-2">▸</span>
            <span>Roads toward <strong>Blanchard and Twin Lakes</strong></span>
        </li>
        <li class="flex items-start">
            <span class="text-orange-500 mr-2">▸</span>
            <span><strong>Forest and mountain roads</strong> north of town</span>
        </li>
        <li class="flex items-start">
            <span class="text-orange-500 mr-2">▸</span>
            <span><strong>Rural properties</strong> across the north prairie</span>
        </li>
    </ul>
</div>

<h3 class="text-2xl font-bold mt-8 mb-4">Built for North Idaho Winters</h3>
<div class="bg-green-500/10 rounded-xl p-6 mb-6 border border-green-500/30">
    <p class="text-lg font-semibold mb-2 text-white">⏱️ Response Time: <span class="text-green-400">45-60 minutes</span></p>
    <p class="text-gray-300">Spirit Lake is about 40 miles from Spokane. Winters here are longer and snowier than in town — our drivers run SR-41 in every condition, and <a href="/winch-out-recovery" class="text-red-500 hover:underline">snow bank and ditch recoveries</a> are routine work for us, not a specialty call.</p>
</div>

<p class="text-lg">We handle everything from <strong>highway breakdowns</strong> on SR-41 to <a href="/battery-jump-start" class="text-red-500 hover:underline">dead batteries</a> on cold mornings and recoveries on forest roads. Modern equipment, experienced operators, and honest pricing — 24 hours a day in the <strong>Spirit Lake area</strong>.</p>
@endsection

@section('nearby')
    <a href="/towing-rathdrum" class="bg-slate-800/50 border border-slate-700/50 rounded-xl px-6 py-3 text-gray-300 hover:text-white hover:border-red-500/50 transition">Rathdrum Towing</a>
    <a href="/towing-athol" class="bg-slate-800/50 border border-slate-700/50 rounded-xl px-6 py-3 text-gray-300 hover:text-white hover:border-red-500/50 transition">Athol Towing</a>
    <a href="/towing-sandpoint" class="bg-slate-800/50 border border-slate-700/50 rounded-xl px-6 py-3 text-gray-300 hover:text-white hover:border-red-500/50 transition">Sandpoint Towing</a>
@endsection
