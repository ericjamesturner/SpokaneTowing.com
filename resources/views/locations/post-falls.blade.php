@extends('layouts.location-page')

@section('title', 'Post Falls Towing | 24/7 Tow Truck & Roadside Assistance')

@section('description', 'Post Falls, ID towing along I-90 & the Spokane River corridor. Emergency towing, roadside assistance & vehicle recovery. Available 24/7. Call (509) 797-7999')

@section('city', 'Post Falls, ID')

@section('content')
<p class="text-lg leading-relaxed">When you need reliable towing services in <strong>Post Falls, Idaho</strong>, Spokane Towing is your trusted partner. Located along the scenic <strong>Spokane River</strong> and <strong>I-90 corridor</strong>, Post Falls is a growing community that deserves dependable roadside assistance when vehicle emergencies occur.</p>

<div class="bg-blue-500/10 border-l-4 border-blue-500 p-4 my-6 rounded-r-xl">
    <p class="font-semibold text-white">📍 Located just 25 miles east of Spokane</p>
    <p class="text-gray-300">Our experienced team serves the entire Post Falls area, from the historic downtown district along Spokane Street to the newer residential developments and commercial areas. Whether you're traveling on I-90, exploring the Spokane River Gorge, or navigating local streets, we're ready to assist.</p>
</div>

<h3 class="text-2xl font-bold mt-8 mb-4">Post Falls Service Areas</h3>
<p class="mb-4">We provide comprehensive towing coverage throughout <strong>Post Falls</strong>, including:</p>

<div class="grid md:grid-cols-2 gap-4 mb-8">
    <ul class="space-y-2">
        <li class="flex items-start">
            <span class="text-orange-500 mr-2">▸</span>
            <span><strong>Downtown Post Falls</strong> historic district</span>
        </li>
        <li class="flex items-start">
            <span class="text-orange-500 mr-2">▸</span>
            <span><strong>Spokane Street</strong> business corridor</span>
        </li>
        <li class="flex items-start">
            <span class="text-orange-500 mr-2">▸</span>
            <span><strong>Post Falls Dam</strong> and river access areas</span>
        </li>
    </ul>
    <ul class="space-y-2">
        <li class="flex items-start">
            <span class="text-orange-500 mr-2">▸</span>
            <span>Residential neighborhoods off <strong>Poleline Road</strong></span>
        </li>
        <li class="flex items-start">
            <span class="text-orange-500 mr-2">▸</span>
            <span>Commercial districts along <strong>Seltice Way</strong></span>
        </li>
        <li class="flex items-start">
            <span class="text-orange-500 mr-2">▸</span>
            <span><strong>I-90 corridor</strong> through Post Falls</span>
        </li>
    </ul>
</div>

<h3 class="text-2xl font-bold mt-8 mb-4">Quick Response from Spokane</h3>
<div class="bg-green-500/10 rounded-xl p-6 mb-6 border border-green-500/30">
    <p class="text-lg font-semibold mb-2 text-white">⏱️ Response Time: <span class="text-green-400">35-50 minutes</span></p>
    <p class="text-gray-300">Our drivers know the quickest routes via <strong>I-90</strong> and local roads to reach you efficiently, whether you're stranded near Post Falls Dam or need assistance anywhere in the city.</p>
</div>

<p class="text-lg">From <strong>emergency accident recovery</strong> on I-90 to helping residents get their vehicles to trusted local mechanics, we handle all types of towing situations in <strong>Post Falls</strong> with professionalism and care.</p>
@endsection

@section('nearby')
    <a href="/towing-coeur-d-alene" class="bg-slate-800/50 border border-slate-700/50 rounded-xl px-6 py-3 text-gray-300 hover:text-white hover:border-red-500/50 transition">Coeur d'Alene Towing</a>
    <a href="/towing-hayden-id" class="bg-slate-800/50 border border-slate-700/50 rounded-xl px-6 py-3 text-gray-300 hover:text-white hover:border-red-500/50 transition">Hayden Towing</a>
    <a href="/towing-liberty-lake" class="bg-slate-800/50 border border-slate-700/50 rounded-xl px-6 py-3 text-gray-300 hover:text-white hover:border-red-500/50 transition">Liberty Lake Towing</a>
@endsection
