@extends('layouts.location-page')

@section('title', 'Rathdrum Towing | 24/7 Tow Truck & Roadside Assistance')

@section('description', 'Rathdrum, ID towing services on SR-41 & SR-53. Emergency towing, roadside assistance & winter recovery for the Rathdrum Prairie. Available 24/7. Call (509) 797-7999')

@section('city', 'Rathdrum, ID')

@section('content')
<p class="text-lg leading-relaxed">When you need dependable towing in <strong>Rathdrum, Idaho</strong>, Spokane Towing is ready around the clock. Rathdrum is one of the fastest-growing towns in <strong>Kootenai County</strong>, and its two state highways — <strong>SR-41 and SR-53</strong> — carry more commuter traffic every year. More traffic means more breakdowns, and we cover all of it.</p>

<div class="bg-blue-500/10 border-l-4 border-blue-500 p-4 my-6 rounded-r-xl">
    <p class="font-semibold text-white">🛣️ Covering the Rathdrum Prairie</p>
    <p class="text-gray-300">Whether you're commuting to Post Falls or Coeur d'Alene on SR-41, cutting over to Hauser on SR-53, or stranded on a prairie back road, our drivers know the area and reach you fast.</p>
</div>

<h3 class="text-2xl font-bold mt-8 mb-4">Rathdrum Service Coverage</h3>
<p class="mb-4">We provide towing services throughout the <strong>Rathdrum area</strong>, including:</p>

<div class="grid md:grid-cols-2 gap-4 mb-8">
    <ul class="space-y-2">
        <li class="flex items-start">
            <span class="text-orange-500 mr-2">▸</span>
            <span><strong>SR-41 corridor</strong> between Post Falls and Spirit Lake</span>
        </li>
        <li class="flex items-start">
            <span class="text-orange-500 mr-2">▸</span>
            <span><strong>SR-53</strong> toward Hauser and the Washington state line</span>
        </li>
        <li class="flex items-start">
            <span class="text-orange-500 mr-2">▸</span>
            <span><strong>Downtown Rathdrum</strong> and Main Street</span>
        </li>
    </ul>
    <ul class="space-y-2">
        <li class="flex items-start">
            <span class="text-orange-500 mr-2">▸</span>
            <span><strong>New residential developments</strong> across the prairie</span>
        </li>
        <li class="flex items-start">
            <span class="text-orange-500 mr-2">▸</span>
            <span>Areas near <strong>Lakeland High School</strong> and city parks</span>
        </li>
        <li class="flex items-start">
            <span class="text-orange-500 mr-2">▸</span>
            <span><strong>Rural prairie roads</strong> and farm properties</span>
        </li>
    </ul>
</div>

<h3 class="text-2xl font-bold mt-8 mb-4">North Idaho Coverage, Spokane Speed</h3>
<div class="bg-green-500/10 rounded-xl p-6 mb-6 border border-green-500/30">
    <p class="text-lg font-semibold mb-2 text-white">⏱️ Response Time: <span class="text-green-400">35-50 minutes</span></p>
    <p class="text-gray-300">Rathdrum sits about 35 miles east of Spokane, and our trucks already work the Post Falls and Hayden corridor daily — so a Rathdrum call rarely starts from far away.</p>
</div>

<p class="text-lg">From <strong>commuter breakdowns</strong> on SR-41 to <a href="/winch-out-recovery" class="text-red-500 hover:underline">winter ditch recoveries</a> on prairie roads, we handle it all — including <a href="/battery-jump-start" class="text-red-500 hover:underline">jump starts</a>, <a href="/lockout-flat-tire" class="text-red-500 hover:underline">lockouts, and flat tires</a>. Available 24/7, no membership required.</p>
@endsection

@section('nearby')
    <a href="/towing-post-falls" class="bg-slate-800/50 border border-slate-700/50 rounded-xl px-6 py-3 text-gray-300 hover:text-white hover:border-red-500/50 transition">Post Falls Towing</a>
    <a href="/towing-hayden-id" class="bg-slate-800/50 border border-slate-700/50 rounded-xl px-6 py-3 text-gray-300 hover:text-white hover:border-red-500/50 transition">Hayden Towing</a>
    <a href="/towing-spirit-lake" class="bg-slate-800/50 border border-slate-700/50 rounded-xl px-6 py-3 text-gray-300 hover:text-white hover:border-red-500/50 transition">Spirit Lake Towing</a>
@endsection
