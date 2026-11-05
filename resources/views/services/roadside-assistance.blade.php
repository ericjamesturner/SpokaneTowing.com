@extends('layouts.service-page')

@section('title', 'Spokane Roadside Assistance | 24/7 Jump Starts & Lockouts')
@section('description', 'Spokane roadside assistance 24/7: jump starts, lockouts, flat tires & fuel delivery. No membership. Price before dispatch. Call (509) 797-7999.')

@section('hero-title', 'Spokane Roadside Assistance')
@section('hero-subtitle', 'Jump starts, lockouts, flat tires and fuel delivery across Spokane, Spokane Valley and the West Plains. No membership required.')

@section('service-type', 'Roadside Assistance')

@push('schema')
<script type="application/ld+json">
{!! json_encode([
    "@@context" => "https://schema.org",
    "@@type" => "FAQPage",
    "mainEntity" => [
            ["@@type" => "Question", "name" => "How much does Spokane roadside assistance cost?", "acceptedAnswer" => ["@@type" => "Answer", "text" => "Pricing depends on the job: a jump start, lockout, flat tire change or fuel delivery each has its own rate. You hear the price on the phone before anyone is sent. Call (509) 797-7999 or use the online quote tool."]],
            ["@@type" => "Question", "name" => "How fast can roadside help reach me in Spokane?", "acceptedAnswer" => ["@@type" => "Answer", "text" => "Typical arrival in the Spokane metro area is about 20–30 minutes. Outlying spots, night calls and bad weather can take longer. You get an estimated arrival time when you call."]],
            ["@@type" => "Question", "name" => "Do I need a membership for Spokane roadside assistance?", "acceptedAnswer" => ["@@type" => "Answer", "text" => "No. Unlike AAA or other clubs, there is no membership or subscription. Call (509) 797-7999 anytime and we arrange help through a local roadside provider."]],
            ["@@type" => "Question", "name" => "Will roadside assistance replace my battery?", "acceptedAnswer" => ["@@type" => "Answer", "text" => "A jump start gets the car running and the technician can test the battery and charging system. If the battery needs replacement, they can get you to a local shop — driving or towed."]],
            ["@@type" => "Question", "name" => "Where does Spokane roadside assistance cover?", "acceptedAnswer" => ["@@type" => "Answer", "text" => "Help is available across Spokane, Spokane Valley, the West Plains and nearby cities, including stops on I-90, US-2, US-195 and US-395. Tell the dispatcher your cross street or highway exit."]]
    ]
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>
@endpush

@section('content')
<div class="not-prose">
<p class="text-lg md:text-xl text-gray-300 leading-relaxed mb-6">Need <strong class="text-white">Spokane roadside assistance</strong>? One call to <strong class="text-white">(509) 797-7999</strong> connects you with a local provider for jump starts, lockouts, flat tire changes and fuel delivery — day or night, no membership required.</p>
<p class="text-gray-300 leading-relaxed mb-4">Spokane Towing is a dispatch line. When you call, we arrange help through licensed and insured local operators who serve Spokane, Spokane Valley, Airway Heights, Cheney and the surrounding area. You get the price and an estimated arrival time before anyone is sent.</p>

<h2 class="text-2xl md:text-3xl font-bold text-white mt-14 mb-5 pt-10 border-t border-slate-800">Spokane roadside services we arrange</h2>
<div class="grid grid-cols-1 md:grid-cols-2 gap-4 my-6">
<div class="border border-slate-800 rounded-xl p-5">
<p class="font-semibold text-white mb-1"><a class="text-white hover:text-red-500 transition" href="/battery-jump-start">Battery jump start</a></p>
<p class="text-gray-300 leading-relaxed">Dead battery on a cold South Hill morning or after sitting at the airport? A jump start and on-the-spot battery check get you moving. Details on the <a class="text-red-500 font-semibold hover:underline" href="/battery-jump-start">jump start page</a>.</p>
</div>
<div class="border border-slate-800 rounded-xl p-5">
<p class="font-semibold text-white mb-1"><a class="text-white hover:text-red-500 transition" href="/lockout-flat-tire">Car lockout</a></p>
<p class="text-gray-300 leading-relaxed">Keys locked inside at the grocery store or downtown garage? Local technicians use professional tools to unlock the car without damage. See <a class="text-red-500 font-semibold hover:underline" href="/lockout-flat-tire">lockout help</a>.</p>
</div>
<div class="border border-slate-800 rounded-xl p-5">
<p class="font-semibold text-white mb-1"><a class="text-white hover:text-red-500 transition" href="/lockout-flat-tire">Flat tire change</a></p>
<p class="text-gray-300 leading-relaxed">Shoulder of I-90 or a side street in Hillyard — swapping a flat yourself is risky. A tech can mount your spare or arrange a short tow to a tire shop.</p>
</div>
<div class="border border-slate-800 rounded-xl p-5">
<p class="font-semibold text-white mb-1">Emergency fuel delivery</p>
<p class="text-gray-300 leading-relaxed">Ran out of gas on US-2 toward Airway Heights or near the Valley Mall? Enough fuel is delivered to reach the nearest station, for gasoline or diesel.</p>
</div>
</div>

<div class="bg-slate-900/70 border border-slate-800 border-l-4 border-l-red-500/60 rounded-lg p-5 my-6 text-gray-300 leading-relaxed">If the car will not start after a jump, or a flat leaves you without a usable spare, a tow may be the better option. See <a class="text-red-500 font-semibold hover:underline" href="/spokane-towing-services">Spokane towing services</a> and <a class="text-red-500 font-semibold hover:underline" href="/towing-cost-spokane">towing cost in Spokane</a>.</div>

<h2 class="text-2xl md:text-3xl font-bold text-white mt-14 mb-5 pt-10 border-t border-slate-800">How Spokane roadside assistance works</h2>
<ol class="space-y-4 my-6">
<li class="flex gap-4"><span class="shrink-0 flex items-center justify-center w-8 h-8 rounded-full border border-red-500/50 text-red-400 text-sm font-bold">1</span><div class="pt-1"><p class="font-semibold text-white">Call and say where you are.</p><p class="text-gray-300 leading-relaxed mt-1">A cross street, parking lot name or highway exit works — for example “I-90 eastbound near Freya” or “Division and Francis.”</p></div></li>
<li class="flex gap-4"><span class="shrink-0 flex items-center justify-center w-8 h-8 rounded-full border border-red-500/50 text-red-400 text-sm font-bold">2</span><div class="pt-1"><p class="font-semibold text-white">Describe the problem.</p><p class="text-gray-300 leading-relaxed mt-1">Dead battery, keys locked in, flat tire or empty tank. That decides which service is sent.</p></div></li>
<li class="flex gap-4"><span class="shrink-0 flex items-center justify-center w-8 h-8 rounded-full border border-red-500/50 text-red-400 text-sm font-bold">3</span><div class="pt-1"><p class="font-semibold text-white">Get a price and arrival estimate.</p><p class="text-gray-300 leading-relaxed mt-1">You hear both before anyone is dispatched, and you can say no.</p></div></li>
<li class="flex gap-4"><span class="shrink-0 flex items-center justify-center w-8 h-8 rounded-full border border-red-500/50 text-red-400 text-sm font-bold">4</span><div class="pt-1"><p class="font-semibold text-white">Stay safe while you wait.</p><p class="text-gray-300 leading-relaxed mt-1">On I-90, US-2, US-195 or US-395, stay buckled with hazards on, or wait well off the road behind a barrier.</p></div></li>
</ol>

<div class="my-12 border border-slate-800 bg-slate-900/70 rounded-xl p-6 flex flex-col sm:flex-row items-center justify-between gap-4"><div class="text-center sm:text-left"><p class="text-lg font-semibold text-white">Need Spokane roadside help now?</p><p class="text-gray-400 text-sm mt-1">24/7. No membership. Price confirmed before dispatch.</p></div><a href="tel:+15097977999" class="shrink-0 bg-gradient-to-r from-red-600 to-red-700 text-white px-6 py-3 rounded-xl hover:from-red-700 hover:to-red-800 transition font-semibold flex items-center gap-2"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg><span>(509) 797-7999</span></a></div>

<h2 class="text-2xl md:text-3xl font-bold text-white mt-0 mb-5 pt-10 border-t border-slate-800">Where Spokane roadside assistance covers</h2>
<p class="text-gray-300 leading-relaxed mb-4">Calls come from downtown, the South Hill, Northwest Spokane, Hillyard, the West Plains and Spokane Valley, plus highway shoulders on I-90, US-2, US-195 and the North Spokane Corridor (US-395). Nearby cities include <a class="text-red-500 font-semibold hover:underline" href="/towing-cheney">Cheney</a>, <a class="text-red-500 font-semibold hover:underline" href="/towing-airway-heights">Airway Heights</a>, <a class="text-red-500 font-semibold hover:underline" href="/towing-liberty-lake">Liberty Lake</a> and <a class="text-red-500 font-semibold hover:underline" href="/towing-spokane-valley">Spokane Valley</a>.</p>

<div class="grid grid-cols-1 sm:grid-cols-3 gap-4 my-6">
<div class="border border-slate-800 rounded-xl p-5"><p class="font-semibold text-white mb-1">No membership</p><p class="text-gray-300 leading-relaxed">Pay per call. No annual club fee.</p></div>
<div class="border border-slate-800 rounded-xl p-5"><p class="font-semibold text-white mb-1">24/7 dispatch</p><p class="text-gray-300 leading-relaxed">Nights, weekends and holidays included.</p></div>
<div class="border border-slate-800 rounded-xl p-5"><p class="font-semibold text-white mb-1">Upfront price</p><p class="text-gray-300 leading-relaxed">Confirmed on the phone before help is sent.</p></div>
</div>

<div class="bg-slate-900/70 border border-slate-800 border-l-4 border-l-amber-500/70 rounded-lg p-5 my-6 text-gray-300 leading-relaxed">Roadside help fixes the problem where you sit. If the car still will not drive, or you need it moved after a crash, see <a class="text-red-500 font-semibold hover:underline" href="/24-hour-towing">24 hour towing</a> or <a class="text-red-500 font-semibold hover:underline" href="/accident-towing-spokane">accident towing in Spokane</a>.</div>

<h2 class="text-2xl md:text-3xl font-bold text-white mt-14 mb-5 pt-10 border-t border-slate-800">Frequently Asked Questions</h2>
<div class="divide-y divide-slate-800 border-y border-slate-800">
<div class="py-5"><h3 class="text-lg font-semibold text-white mb-2">How much does Spokane roadside assistance cost?</h3><p class="text-gray-300 leading-relaxed">Pricing depends on the job: a jump start, lockout, flat tire change or fuel delivery each has its own rate. You hear the price on the phone before anyone is sent. Call (509) 797-7999 or use the <a class="text-red-500 font-semibold hover:underline" href="/quote">online quote tool</a>.</p></div>
<div class="py-5"><h3 class="text-lg font-semibold text-white mb-2">How fast can roadside help reach me in Spokane?</h3><p class="text-gray-300 leading-relaxed">Typical arrival in the Spokane metro area is about 20–30 minutes. Outlying spots, night calls and bad weather can take longer. You get an estimated arrival time when you call.</p></div>
<div class="py-5"><h3 class="text-lg font-semibold text-white mb-2">Do I need a membership for Spokane roadside assistance?</h3><p class="text-gray-300 leading-relaxed">No. Unlike AAA or other clubs, there is no membership or subscription. Call (509) 797-7999 anytime and we arrange help through a local roadside provider.</p></div>
<div class="py-5"><h3 class="text-lg font-semibold text-white mb-2">Will roadside assistance replace my battery?</h3><p class="text-gray-300 leading-relaxed">A jump start gets the car running and the technician can test the battery and charging system. If the battery needs replacement, they can get you to a local shop — driving or towed. More on the <a class="text-red-500 font-semibold hover:underline" href="/battery-jump-start">battery jump start</a> page.</p></div>
<div class="py-5"><h3 class="text-lg font-semibold text-white mb-2">Where does Spokane roadside assistance cover?</h3><p class="text-gray-300 leading-relaxed">Help is available across Spokane, Spokane Valley, the West Plains and nearby cities, including stops on I-90, US-2, US-195 and US-395. Tell the dispatcher your cross street or highway exit.</p></div>
</div>

<div class="bg-gradient-to-r from-red-600 to-red-700 rounded-2xl p-8 text-center mt-12"><h3 class="text-2xl font-bold mb-4 text-white">Need Spokane Roadside Assistance?</h3><p class="mb-6 text-white/90">Jump starts, lockouts, flat tires and fuel — 24/7, no membership.</p><a href="tel:+15097977999" class="bg-white text-red-600 px-8 py-4 rounded-xl hover:bg-gray-100 transition font-bold text-lg inline-block shadow-lg">Call (509) 797-7999</a></div>
</div>
@endsection

@section('extra-sections')
@include('partials.coverage-area', ['title' => 'Spokane Roadside Assistance Coverage', 'description' => 'Roadside help is arranged throughout the greater Spokane area, including:'])
@endsection
