<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Towing Quote in Spokane | Spokane Towing</title>
    <meta name="description" content="Get a towing estimate in Spokane with your pickup and drop-off locations. Available 24/7. Call (509) 797-7999 to confirm your price and arrange a tow.">
    <link rel="canonical" href="{{ route('quote.start') }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Towing Quote in Spokane | Spokane Towing">
    <meta property="og:description" content="Enter your pickup and drop-off locations for a towing estimate, or call (509) 797-7999 for help now.">
    <meta property="og:url" content="{{ route('quote.start') }}">
    <meta property="og:image" content="{{ url('/images/og-image.jpg') }}">
    <link rel="icon" href="/favicon.ico" sizes="any">
    @include('partials.fonts')
    @vite(['resources/css/website.css', 'resources/js/app.js'])
    @include('partials.google-maps')
    @include('partials.schema-organization')
    @include('partials.schema-breadcrumb', ['items' => [
        ['name' => 'Home', 'url' => url('/')],
        ['name' => 'Towing Quote', 'url' => route('quote.start')],
    ]])
    @include('partials.clarity')
</head>
<body class="antialiased bg-black text-white">
    @include('partials.site-header')
    <main class="pt-20">
        @include('partials.quote-section', ['standalone' => true])
        <section class="bg-slate-900 pb-16">
            <div class="max-w-3xl mx-auto px-6 text-gray-300 space-y-4">
                <h2 class="text-2xl font-bold text-white">Arranging your tow</h2>
                <p>Enter the vehicle's pickup location and where you want it taken. An address or a nearby business helps us find the route. Call with your vehicle type, whether it rolls and steers, and any access restrictions so the right equipment can be arranged.</p>
                <p>The online estimate uses the route distance. Call to confirm the final price, availability and arrival time. For a breakdown that needs immediate attention, call <a href="tel:+15097977999" class="text-red-400 underline">(509) 797-7999</a>.</p>
                <p>Need a <a href="/battery-jump-start" class="text-red-400 underline">battery jump start</a> or <a href="/lockout-flat-tire" class="text-red-400 underline">help with a flat tire</a> instead? Call for roadside assistance. View our <a href="/service-areas" class="text-red-400 underline">Spokane and North Idaho coverage</a>.</p>
            </div>
        </section>
    </main>
    @include('partials.site-footer')
</body>
</html>
