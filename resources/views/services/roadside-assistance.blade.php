@extends('layouts.service-page')

@section('title', 'Roadside Assistance Spokane | Jump Starts, Lockouts & More 24/7')
@section('description', 'Need roadside assistance in Spokane? Jump starts, fuel delivery, flat tire changes & lockout service. 20-30 min response, available 24/7. Call (509) 797-7999')

@section('hero-title', 'Roadside Assistance in Spokane')
@section('hero-subtitle', 'Jump starts, fuel delivery, lockouts, and flat tire service. Fast, reliable help when you need it.')

@section('content')
    <h2 class="text-3xl font-bold mb-8">Professional Roadside Assistance Services</h2>
    
    <div class="prose prose-invert prose-lg max-w-none mb-12 prose-headings:text-white prose-p:text-gray-300 prose-li:text-gray-300 prose-strong:text-white">
        <p>Don't let a dead battery, empty gas tank, or locked car ruin your day. Spokane Towing provides comprehensive roadside assistance throughout Spokane, WA and surrounding areas. Our trained technicians arrive quickly with the tools and expertise to get you back on the road.</p>
        
        <h3 class="text-2xl font-semibold mt-8 mb-4">Our Roadside Assistance Services</h3>
        
        <div class="grid md:grid-cols-2 gap-8 my-8">
            <div>
                <h4 class="text-xl font-semibold mb-3">Jump Start Service</h4>
                <p>Dead battery? We'll jump start your vehicle and test your charging system. If your battery needs replacement, we can recommend trusted local shops.</p>
            </div>
            
            <div>
                <h4 class="text-xl font-semibold mb-3">Fuel Delivery</h4>
                <p>Ran out of gas? We'll deliver enough fuel to get you to the nearest gas station. Available for gasoline and diesel vehicles.</p>
            </div>
            
            <div>
                <h4 class="text-xl font-semibold mb-3">Lockout Service</h4>
                <p>Locked your keys in the car? Our technicians use professional tools to safely unlock your vehicle without damage.</p>
            </div>
            
            <div>
                <h4 class="text-xl font-semibold mb-3">Flat Tire Assistance</h4>
                <p>We'll change your flat tire with your spare or tow you to a tire shop if needed. Don't risk your safety changing a tire on a busy road.</p>
            </div>
        </div>

        <h3 class="text-2xl font-semibold mt-8 mb-4">Why Choose Our Roadside Assistance?</h3>
        <ul class="space-y-2">
            <li><strong>Fast Response:</strong> Average arrival time of 20-30 minutes</li>
            <li><strong>24/7 Availability:</strong> Day or night, weekends and holidays</li>
            <li><strong>Professional Service:</strong> Trained and courteous technicians</li>
            <li><strong>Fair Pricing:</strong> Transparent rates with no hidden fees</li>
            <li><strong>Wide Coverage:</strong> Service throughout Spokane and beyond</li>
        </ul>
    </div>

    <h3 class="text-2xl font-semibold mt-12 mb-6">Roadside Assistance FAQ</h3>
    <div class="space-y-6 mb-12">
        <div class="bg-slate-800/50 rounded-xl p-6 border border-slate-700/50">
            <h4 class="text-lg font-semibold mb-2 text-white">How much does roadside assistance cost in Spokane?</h4>
            <p class="text-gray-300">Roadside assistance pricing varies by service. Jump starts, lockouts, and flat tire changes are affordable with transparent pricing. Call (509) 797-7999 for a quote or use our online quote tool for instant pricing.</p>
        </div>
        <div class="bg-slate-800/50 rounded-xl p-6 border border-slate-700/50">
            <h4 class="text-lg font-semibold mb-2 text-white">How fast can you get to me for roadside assistance?</h4>
            <p class="text-gray-300">Our average response time is 20-30 minutes in the Spokane metro area. We have drivers positioned throughout Spokane, Spokane Valley, and surrounding areas for the fastest possible response.</p>
        </div>
        <div class="bg-slate-800/50 rounded-xl p-6 border border-slate-700/50">
            <h4 class="text-lg font-semibold mb-2 text-white">Do I need a membership for roadside assistance?</h4>
            <p class="text-gray-300">No membership required. Unlike AAA or other clubs, you can call us anytime for immediate roadside assistance with no subscription fees. Just call (509) 797-7999 and we'll dispatch a technician.</p>
        </div>
        <div class="bg-slate-800/50 rounded-xl p-6 border border-slate-700/50">
            <h4 class="text-lg font-semibold mb-2 text-white">Will roadside assistance replace my battery?</h4>
            <p class="text-gray-300">We provide jump start service to get your vehicle running. If your battery needs replacement, we can recommend trusted local auto shops. Our technicians will test your charging system to help diagnose the issue.</p>
        </div>
    </div>

    <!-- CTA Box -->
    <div class="bg-gradient-to-r from-orange-500 to-orange-600 rounded-2xl p-8 text-center relative overflow-hidden">
        <div class="absolute inset-0 bg-black/10"></div>
        <div class="relative">
            <h3 class="text-2xl font-bold mb-4 text-white">Need Roadside Assistance Now?</h3>
            <p class="mb-6 text-white/90">Our technicians are ready to help you 24/7</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="tel:+15097977999" class="bg-white text-orange-600 px-8 py-4 rounded-xl hover:bg-gray-100 transition font-bold text-lg shadow-lg">
                    Call (509) 797-7999
                </a>
                <a href="/#quote" class="bg-white/10 text-white px-8 py-4 rounded-xl hover:bg-white/20 transition font-semibold text-lg border border-white/30">
                    Get Instant Quote
                </a>
            </div>
        </div>
    </div>
@endsection

@section('extra-sections')
@include('partials.coverage-area', ['title' => 'Roadside Assistance Coverage Area', 'description' => 'We provide roadside assistance throughout the greater Spokane area, including:'])

<script type="application/ld+json">
{!! json_encode([
    "@@context" => "https://schema.org",
    "@@type" => "FAQPage",
    "mainEntity" => [
        [
            "@@type" => "Question",
            "name" => "How much does roadside assistance cost in Spokane?",
            "acceptedAnswer" => [
                "@@type" => "Answer",
                "text" => "Roadside assistance pricing varies by service. Jump starts, lockouts, and flat tire changes are affordable with transparent pricing. Call (509) 797-7999 for a quote or use our online quote tool for instant pricing."
            ]
        ],
        [
            "@@type" => "Question",
            "name" => "How fast can you get to me for roadside assistance?",
            "acceptedAnswer" => [
                "@@type" => "Answer",
                "text" => "Our average response time is 20-30 minutes in the Spokane metro area. We have drivers positioned throughout Spokane, Spokane Valley, and surrounding areas for the fastest possible response."
            ]
        ],
        [
            "@@type" => "Question",
            "name" => "Do I need a membership for roadside assistance?",
            "acceptedAnswer" => [
                "@@type" => "Answer",
                "text" => "No membership required. Unlike AAA or other clubs, you can call us anytime for immediate roadside assistance with no subscription fees. Just call (509) 797-7999 and we'll dispatch a technician."
            ]
        ],
        [
            "@@type" => "Question",
            "name" => "Will roadside assistance replace my battery?",
            "acceptedAnswer" => [
                "@@type" => "Answer",
                "text" => "We provide jump start service to get your vehicle running. If your battery needs replacement, we can recommend trusted local auto shops. Our technicians will test your charging system to help diagnose the issue."
            ]
        ]
    ]
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
</script>
@endsection