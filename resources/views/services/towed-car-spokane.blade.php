@extends('layouts.service-page')

@section('title', 'Car Towed in Spokane? How to Find It & Get It Back')

@section('description', 'Car towed in Spokane? Call Crime Check (509) 456-2233 to find it, then how to get it back, your rights under WA law, and how to contest a tow.')

@section('hero-title', 'Car Towed in Spokane? How to Find It and Get It Back')

@section('hero-subtitle', 'Who to call, what to bring, and your rights under Washington law, from official City of Spokane and state sources.')

@section('service-type', 'Towed Vehicle Help')

@push('schema')
<script type="application/ld+json">
{!! json_encode([
    "@@context" => "https://schema.org",
    "@@type" => "FAQPage",
    "mainEntity" => [
            ["@@type" => "Question", "name" => "How do I find out if my car was towed in Spokane?", "acceptedAnswer" => ["@@type" => "Answer", "text" => "Call Crime Check, the Spokane-area non-emergency police line, at (509) 456-2233. They can tell you whether the car was reported towed or impounded and which tow company has it, or take a stolen-vehicle report. If it was on a state highway, contact the Washington State Patrol."]],
            ["@@type" => "Question", "name" => "Where is the Spokane impound lot?", "acceptedAnswer" => ["@@type" => "Answer", "text" => "There is no single impound lot. Vehicles are held at the yard of the tow company that towed them. Crime Check (509-456-2233), the sign at the private lot, or the mailed impound notice will tell you which company and where. Vehicles held by SPD as evidence are handled through the SPD Property and Evidence Facility (509-625-4130, appointment required)."]],
            ["@@type" => "Question", "name" => "Does Spokane Towing have my car?", "acceptedAnswer" => ["@@type" => "Answer", "text" => "No. Spokane Towing does not run an impound lot or hold towed vehicles. We connect people with a partner tow company for towing they request."]],
            ["@@type" => "Question", "name" => "How long do I have to contest a tow in Washington?", "acceptedAnswer" => ["@@type" => "Answer", "text" => "Your written hearing request must reach the court within 10 days of the date you redeemed or tried to redeem the vehicle, and more than five days before any auction date (RCW 46.55.120). For City of Spokane impounds, file with the Spokane Municipal Court clerk; the court lists a \$73 filing fee."]],
            ["@@type" => "Question", "name" => "Can I get my stuff out of a towed car?", "acceptedAnswer" => ["@@type" => "Answer", "text" => "Washington law says the tow operator will store personal belongings found in the vehicle at no cost if the owner or agent comes to retrieve them and signs a personal belongings storage request form before the auction date. Call the tow company to arrange it."]]
    ]
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>
@endpush

@section('content')
<p>If your car is gone from where you parked it in Spokane, call <strong>Crime Check at (509) 456-2233</strong> first. It is the non-emergency police line for the Spokane area, and it can tell you whether your car was reported towed or impounded and which tow company has it, or take a stolen-vehicle report if it was not towed.</p>

<p class="text-sm"><em>Note: Spokane Towing does not run an impound lot and does not hold towed vehicles. This is a plain-language guide using official City of Spokane and Washington State sources, linked below. Rules and numbers can change, so check the source page if anything is unclear.</em></p>

<h2 class="text-3xl font-bold mt-12 mb-6">Step 1: Find out who has your car</h2>
<ul>
    <li><strong>Towed in the Spokane area (street, private lot, or police tow):</strong> call Crime Check, (509) 456-2233. Under Washington law (<a href="https://app.leg.wa.gov/RCW/default.aspx?cite=46.55.100" rel="nofollow noopener" target="_blank">RCW 46.55.100</a>), a tow company that impounds a vehicle from private property has to report it to the local police agency, so the police usually know where it went.</li>
    <li><strong>Towed from a private parking lot:</strong> look at the signs at the lot entrance. In Washington, nonresidential private lots that tow within 24 hours must post signs showing when vehicles can be towed and the tow company’s name, phone number and address (<a href="https://app.leg.wa.gov/RCW/default.aspx?cite=46.55.070" rel="nofollow noopener" target="_blank">RCW 46.55.070</a>). Take a photo of the sign.</li>
    <li><strong>Towed from I-90 or a state highway:</strong> the Washington State Patrol says to contact the local WSP office or your local law enforcement agency to find out which tow company has the car (<a href="https://wsp.wa.gov/i-want-to/frequently-asked-questions/" rel="nofollow noopener" target="_blank">WSP FAQ</a>). On most state roads an abandoned car can be impounded after 24 hours, or right away if it is a hazard or blocking traffic or snowplows.</li>
    <li><strong>Check your mail.</strong> The tow company must mail the registered and legal owners a notice within 24 hours of an impound, with its name, address, phone number and who authorized the tow (<a href="https://app.leg.wa.gov/RCW/default.aspx?cite=46.55.110" rel="nofollow noopener" target="_blank">RCW 46.55.110</a>).</li>
</ul>

<h2 class="text-3xl font-bold mt-12 mb-6">Step 2: Get your car back</h2>
<p>Once you know which tow company has it, call them directly before going. Ask:</p>
<ul>
    <li>Their yard address and the hours you can pick up</li>
    <li>The total owed today, and how much storage is added each day</li>
    <li>Which payment methods they accept</li>
    <li>What ID and paperwork to bring (usually a photo ID plus registration or title)</li>
    <li>Whether there is a police or court hold on the vehicle</li>
</ul>
<p><strong>Move fast.</strong> Storage fees build up daily, and unclaimed vehicles can eventually be sold at auction.</p>
<p><strong>If SPD itself is holding the vehicle</strong> (for example as evidence), the City says to call the SPD Property &amp; Evidence Facility at (509) 625-4130 to schedule an appointment and bring a government-issued photo ID (<a href="https://my.spokanecity.org/police/get-help/recover-property/" rel="nofollow noopener" target="_blank">City of Spokane: Recover Property</a>).</p>
<p><strong>If there is a court hold:</strong> the City notes that for a 30, 60 or 90-day hold after a Driving While License Suspended 3rd Degree citation, you must pay outstanding court fees, fines and penalties before the court authorizes release.</p>

<h2 class="text-3xl font-bold mt-12 mb-6">Your personal belongings</h2>
<p>Washington law requires the impound notice to tell you that the tow operator will store personal belongings found in the vehicle at no cost if you, as the owner or agent, come to retrieve them and sign a personal belongings storage request form before the auction date (RCW 46.55.110). If you cannot afford to redeem the car right away, ask about getting your belongings out.</p>

<h2 class="text-3xl font-bold mt-12 mb-6">Step 3: If you think the tow was wrong</h2>
<p>You can ask a court to decide whether the impound was proper and whether the towing and storage charges matched the posted rates (<a href="https://app.leg.wa.gov/rcw/default.aspx?cite=46.55.120" rel="nofollow noopener" target="_blank">RCW 46.55.120</a>):</p>
<ul>
    <li>The tow company has to give you a hearing request form when you redeem, or try to redeem, the vehicle.</li>
    <li>The written request must reach the court <strong>within 10 days</strong> of that date. Miss it and you lose the right to a hearing.</li>
    <li>For impounds authorized by the City of Spokane, file with the <a href="https://my.spokanecity.org/courts/municipal-court/towing-and-impounds/" rel="nofollow noopener" target="_blank">Spokane Municipal Court</a> clerk. The court’s page lists a $73 filing fee and asks for the completed form and your redemption receipt. Other impounds go to district court.</li>
    <li>Filing does not release the car. Storage keeps adding up until the hearing, so many people pay, get the car back, then file.</li>
    <li>If the court finds the impound was improper, the owner does not owe the towing and storage fees.</li>
</ul>
<p>Bring evidence: photos of where you parked, the signs (or the lack of them), your receipt, and the notice you received.</p>

<h2 class="text-3xl font-bold mt-12 mb-6">Need the car moved after you get it back?</h2>
<p>If the car will not start after sitting in a yard, has a dead battery, or you would rather not drive it, we can connect you with a local partner tow company to take it to your home or mechanic. Online estimates use a <strong>$140 hook fee plus $6 per mile, with a $200 minimum</strong>; see <a href="/towing-cost-spokane">Spokane towing cost</a> for examples, or the full list of <a href="/spokane-towing-services">Spokane towing services</a>.</p>
<h2 class="text-3xl font-bold mb-6 mt-12">Frequently Asked Questions</h2>
<h3 class="text-xl font-semibold mt-6 mb-2">How do I find out if my car was towed in Spokane?</h3>
<p>Call Crime Check, the Spokane-area non-emergency police line, at (509) 456-2233. They can tell you whether the car was reported towed or impounded and which tow company has it, or take a stolen-vehicle report. If it was on a state highway, contact the Washington State Patrol.</p>
<h3 class="text-xl font-semibold mt-6 mb-2">Where is the Spokane impound lot?</h3>
<p>There is no single impound lot. Vehicles are held at the yard of the tow company that towed them. Crime Check (509-456-2233), the sign at the private lot, or the mailed impound notice will tell you which company and where. Vehicles held by SPD as evidence are handled through the SPD Property and Evidence Facility (509-625-4130, appointment required).</p>
<h3 class="text-xl font-semibold mt-6 mb-2">Does Spokane Towing have my car?</h3>
<p>No. Spokane Towing does not run an impound lot or hold towed vehicles. We connect people with a partner tow company for towing they request.</p>
<h3 class="text-xl font-semibold mt-6 mb-2">How long do I have to contest a tow in Washington?</h3>
<p>Your written hearing request must reach the court within 10 days of the date you redeemed or tried to redeem the vehicle, and more than five days before any auction date (RCW 46.55.120). For City of Spokane impounds, file with the Spokane Municipal Court clerk; the court lists a $73 filing fee.</p>
<h3 class="text-xl font-semibold mt-6 mb-2">Can I get my stuff out of a towed car?</h3>
<p>Washington law says the tow operator will store personal belongings found in the vehicle at no cost if the owner or agent comes to retrieve them and signs a personal belongings storage request form before the auction date. Call the tow company to arrange it.</p>

<div class="not-prose bg-gradient-to-r from-red-600 to-red-700 rounded-2xl p-8 text-center mt-12">
    <h3 class="text-2xl font-bold mb-4 text-white">Need Your Car Moved After Pickup?</h3>
    <p class="mb-6 text-white/90">We connect you with a local partner tow company. Price confirmed before dispatch.</p>
    <a href="tel:+15097977999" class="bg-white text-red-600 px-8 py-4 rounded-xl hover:bg-gray-100 transition font-bold text-lg inline-block shadow-lg">Call (509) 797-7999</a>
</div>

@endsection
