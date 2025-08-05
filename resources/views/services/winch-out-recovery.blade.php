@extends('layouts.service-page')

@section('title', 'Winch Out Recovery Spokane | Off-Road Vehicle Recovery')

@section('description', 'Professional winch out and off-road recovery services in Spokane, WA. Stuck in snow, mud, or ditch? Our expert recovery team gets you out safely. Available 24/7. Call (509) 797-7999')

@section('hero-title', 'Winch Out & Off-Road Recovery Services')

@section('hero-subtitle', 'Stuck in snow, mud, or off the road? Our professional winch out and recovery services get your vehicle back on solid ground safely.')

@section('content')
<h2 class="text-3xl font-bold mb-8">Expert Vehicle Recovery Services</h2>

<div class="prose prose-lg max-w-none mb-12">
    <p>When your vehicle is stuck in a ditch, trapped in snow, or bogged down in mud, you need professional winch out and recovery services. Spokane Towing provides expert off-road recovery throughout Spokane, WA and surrounding areas. Our experienced team has the equipment and expertise to safely extract your vehicle from any challenging situation.</p>
    
    <h3 class="text-2xl font-semibold mt-8 mb-4">Our Recovery Services Include:</h3>
    <ul class="space-y-2">
        <li>Winch out services for stuck vehicles</li>
        <li>Snow and ice recovery</li>
        <li>Mud and sand extraction</li>
        <li>Ditch and embankment recovery</li>
        <li>Off-road vehicle recovery</li>
        <li>Accident scene recovery</li>
        <li>Rollover recovery</li>
        <li>Water recovery services</li>
    </ul>

    <h3 class="text-2xl font-semibold mt-8 mb-4">Common Recovery Situations:</h3>
    <ul class="space-y-2">
        <li><strong>Winter Weather:</strong> Stuck in snow or ice on Spokane roads</li>
        <li><strong>Off-Road Adventures:</strong> Vehicles stuck on trails or remote areas</li>
        <li><strong>Ditch Recovery:</strong> Vehicles that have slid off the road</li>
        <li><strong>Parking Lot Issues:</strong> Stuck in snow-covered parking lots</li>
        <li><strong>Construction Sites:</strong> Vehicles trapped in mud or soft ground</li>
        <li><strong>Steep Terrain:</strong> Recovery from hills and slopes</li>
    </ul>

    <h3 class="text-2xl font-semibold mt-8 mb-4">Why Choose Our Recovery Services?</h3>
    <ul class="space-y-2">
        <li><strong>Professional Equipment:</strong> Heavy-duty winches and recovery gear</li>
        <li><strong>Experienced Operators:</strong> Trained in safe recovery techniques</li>
        <li><strong>24/7 Availability:</strong> Emergency recovery services around the clock</li>
        <li><strong>Safety First:</strong> Proper rigging and safety procedures</li>
        <li><strong>Vehicle Protection:</strong> Careful techniques to prevent damage</li>
        <li><strong>All Terrain Capable:</strong> Can reach difficult locations</li>
        <li><strong>Fast Response:</strong> Quick arrival when you're stranded</li>
    </ul>

    <h3 class="text-2xl font-semibold mt-8 mb-4">Our Recovery Process:</h3>
    <ol class="space-y-2 list-decimal list-inside">
        <li><strong>Assessment:</strong> Evaluate the situation and plan the safest approach</li>
        <li><strong>Equipment Setup:</strong> Position recovery vehicle and rigging equipment</li>
        <li><strong>Safe Extraction:</strong> Use proper winching techniques to free your vehicle</li>
        <li><strong>Vehicle Check:</strong> Inspect for damage and ensure roadworthiness</li>
        <li><strong>Clean Up:</strong> Remove any debris and restore the area</li>
    </ol>

    <h3 class="text-2xl font-semibold mt-8 mb-4">Spokane Winter Recovery:</h3>
    <p>Spokane winters can be harsh, and getting stuck in snow is a common occurrence. Our team is experienced in winter recovery operations and understands the unique challenges of Spokane's winter weather conditions. We carry specialized equipment for ice and snow recovery.</p>

    <p class="mt-8">Don't risk damaging your vehicle or injuring yourself trying to get unstuck. Let Spokane Towing's professional recovery team handle the situation safely and efficiently. We have the experience and equipment to get you back on the road.</p>
</div>

<!-- CTA Box -->
<div class="bg-blue-50 rounded-lg p-8 text-center">
    <h3 class="text-2xl font-bold mb-4">Vehicle Stuck or Need Recovery?</h3>
    <p class="mb-6 text-gray-700">Professional winch out and recovery services available now</p>
    <a href="tel:+15097977999" class="bg-blue-600 text-white px-8 py-4 rounded-lg hover:bg-blue-700 transition font-semibold text-lg inline-block">
        Call (509) 797-7999
    </a>
</div>
@endsection

@section('extra-sections')
@include('partials.coverage-area', ['title' => 'Recovery Service Coverage Area', 'description' => 'Professional winch out and recovery services throughout the Spokane region:'])

<!-- Safety Information -->
<section class="py-20">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold mb-8 text-center">Recovery Safety & Equipment</h2>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h3 class="text-xl font-semibold mb-4">Safety Procedures</h3>
                    <ul class="space-y-2 text-gray-700">
                        <li>✓ Site assessment and hazard identification</li>
                        <li>✓ Proper rigging and anchor points</li>
                        <li>✓ Traffic control when needed</li>
                        <li>✓ Vehicle damage prevention</li>
                    </ul>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h3 class="text-xl font-semibold mb-4">Professional Equipment</h3>
                    <ul class="space-y-2 text-gray-700">
                        <li>✓ Heavy-duty winches</li>
                        <li>✓ Recovery straps and chains</li>
                        <li>✓ Snatch blocks and pulleys</li>
                        <li>✓ All-terrain vehicles</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection