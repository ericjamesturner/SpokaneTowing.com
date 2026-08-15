@extends('layouts.location-page')

@section('title', 'Cheney Towing | 24/7 Service Near EWU Campus')

@section('description', 'Cheney, WA towing serving EWU students & residents. Emergency towing, roadside assistance, jump starts & lockout service. Fast response, available 24/7. Call (509) 797-7999')

@section('city', 'Cheney, WA')

@section('content')
<p class="text-lg leading-relaxed">When you need reliable towing services in <strong>Cheney, Washington</strong>, Spokane Towing is your trusted partner. Home to <strong>Eastern Washington University</strong> and a vibrant community, Cheney relies on our dependable towing and roadside assistance services for students, faculty, and local residents alike.</p>

<div class="bg-blue-500/10 border-l-4 border-blue-500 p-4 my-6 rounded-r-xl">
    <p class="font-semibold text-white">🏫 Serving the Eastern Washington University community</p>
    <p class="text-gray-300">Located southwest of Spokane along State Route 904, Cheney presents unique towing challenges with its hilly terrain and busy campus area. Our experienced drivers are familiar with the area's layout, from the university campus to residential neighborhoods and the historic downtown district.</p>
</div>

<h3 class="text-2xl font-bold mt-8 mb-4">Cheney Area Coverage</h3>
<p class="mb-4">Our comprehensive towing services cover all of <strong>Cheney</strong>, including:</p>

<div class="grid md:grid-cols-2 gap-4 mb-8">
    <ul class="space-y-2">
        <li class="flex items-start">
            <span class="text-orange-500 mr-2">▸</span>
            <span><strong>Eastern Washington University</strong> campus and surrounding areas</span>
        </li>
        <li class="flex items-start">
            <span class="text-orange-500 mr-2">▸</span>
            <span><strong>Downtown Cheney</strong> business district</span>
        </li>
        <li class="flex items-start">
            <span class="text-orange-500 mr-2">▸</span>
            <span><strong>Student housing areas</strong> and residential neighborhoods</span>
        </li>
    </ul>
    <ul class="space-y-2">
        <li class="flex items-start">
            <span class="text-orange-500 mr-2">▸</span>
            <span><strong>State Route 904</strong> corridor</span>
        </li>
        <li class="flex items-start">
            <span class="text-orange-500 mr-2">▸</span>
            <span><strong>Cheney-Spangle Road</strong> area</span>
        </li>
        <li class="flex items-start">
            <span class="text-orange-500 mr-2">▸</span>
            <span><strong>Medical Lake Road</strong> and connecting routes</span>
        </li>
    </ul>
</div>

<h3 class="text-2xl font-bold mt-8 mb-4">University-Friendly Service</h3>
<div class="bg-green-500/10 rounded-xl p-6 mb-6 border border-green-500/30">
    <p class="text-lg font-semibold mb-2 text-white">⏱️ Response Time: <span class="text-green-400">30-40 minutes</span></p>
    <p class="text-gray-300">We understand the unique needs of the university community and provide student-friendly service with competitive rates. We're familiar with campus parking regulations and access routes.</p>
</div>

<p class="text-lg">Whether you need help with a breakdown near the <strong>PUB</strong>, assistance getting to a repair shop in Spokane, or <strong>emergency towing</strong> after an accident on SR-904, our team provides professional, courteous service to the <strong>Cheney community</strong>.</p>
@endsection

@section('nearby')
    <a href="/towing-airway-heights" class="bg-slate-800/50 border border-slate-700/50 rounded-xl px-6 py-3 text-gray-300 hover:text-white hover:border-red-500/50 transition">Airway Heights Towing</a>
    <a href="/towing-medical-lake" class="bg-slate-800/50 border border-slate-700/50 rounded-xl px-6 py-3 text-gray-300 hover:text-white hover:border-red-500/50 transition">Medical Lake Towing</a>
    <a href="/" class="bg-slate-800/50 border border-slate-700/50 rounded-xl px-6 py-3 text-gray-300 hover:text-white hover:border-red-500/50 transition">Spokane Towing</a>
@endsection
