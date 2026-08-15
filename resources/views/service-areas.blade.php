<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Towing Service Areas | Spokane, Spokane Valley & North Idaho</title>
    <meta name="description" content="Spokane Towing serves Spokane County, the West Plains & North Idaho: Spokane Valley, Cheney, Deer Park, Coeur d'Alene, Post Falls & more. 24/7. Call (509) 797-7999">
    <link rel="canonical" href="{{ url('/service-areas') }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/service-areas') }}">
    <meta property="og:title" content="Towing Service Areas | Spokane, Spokane Valley & North Idaho">
    <meta property="og:description" content="Spokane Towing serves Spokane County, the West Plains & North Idaho: Spokane Valley, Cheney, Deer Park, Coeur d'Alene, Post Falls & more. 24/7. Call (509) 797-7999">
    <meta property="og:image" content="{{ url('/images/og-image.jpg') }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Towing Service Areas | Spokane, Spokane Valley & North Idaho">
    <meta name="twitter:description" content="24/7 towing across Spokane County, the West Plains & North Idaho. Call (509) 797-7999">
    <meta name="twitter:image" content="{{ url('/images/og-image.jpg') }}">

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <!-- Fonts -->
    @include('partials.fonts')

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @include('partials.schema-local-business')

    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://spokanetowing.com"
        },
        {
          "@@type": "ListItem",
          "position": 2,
          "name": "Service Areas",
          "item": "https://spokanetowing.com/service-areas"
        }
      ]
    }
    </script>
    @include('partials.clarity')
</head>
<body class="antialiased bg-black text-white">
    <!-- Header -->
    <header class="fixed top-0 w-full z-50">
        <div class="absolute inset-0 bg-slate-900/90 backdrop-blur-md border-b border-white/10"></div>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="flex justify-between items-center h-20">
                <a href="/">
                    <img src="/header-logo.webp" alt="Spokane Towing" class="h-20 w-auto">
                </a>
                <nav class="hidden md:flex items-center space-x-8">
                    <a href="/spokane-towing-services" class="text-gray-300 hover:text-white transition font-medium">Services</a>
                    <a href="/#quote" class="text-gray-300 hover:text-white transition font-medium">Get Quote</a>
                    <a href="/faq" class="text-gray-300 hover:text-white transition font-medium">FAQ</a>
                    <a href="tel:+15097977999" class="bg-gradient-to-r from-red-600 to-red-700 text-white px-6 py-3 rounded-xl hover:from-red-700 hover:to-red-800 transition font-semibold shadow-lg shadow-red-600/25 flex items-center space-x-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        <span>(509) 797-7999</span>
                    </a>
                </nav>
                <div class="md:hidden">
                    <a href="tel:+15097977999" class="bg-gradient-to-r from-red-600 to-red-700 text-white px-4 py-2 rounded-lg font-semibold text-sm flex items-center space-x-1">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        <span>Call Now</span>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="pt-56 pb-16 bg-slate-900">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center">
                <div class="inline-flex items-center space-x-2 bg-red-600/20 border border-red-600/30 rounded-full px-4 py-2 mb-6">
                    <svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <span class="text-red-400 text-sm font-medium">50+ Mile Coverage Radius</span>
                </div>
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Towing Service Areas</h1>
                <p class="text-xl text-gray-400">24/7 towing and roadside assistance across Spokane County, the West Plains, and North Idaho. Pick your area for local details and response times.</p>
            </div>
        </div>
    </section>

    <!-- Washington Areas -->
    <section class="py-16 bg-black">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-5xl mx-auto">
                <h2 class="text-3xl font-bold mb-8 text-white">Washington Service Areas</h2>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mb-16">
                    <a href="/" class="bg-slate-800/50 backdrop-blur-sm rounded-2xl p-6 border border-slate-700/50 hover:border-red-500/50 transition group">
                        <h3 class="text-xl font-bold text-white mb-2 group-hover:text-red-500 transition">Spokane</h3>
                        <p class="text-gray-400 text-sm">Our home base. Downtown, South Hill, North Side, and every neighborhood in between — 20-30 minute average response.</p>
                    </a>
                    <a href="/towing-spokane-valley" class="bg-slate-800/50 backdrop-blur-sm rounded-2xl p-6 border border-slate-700/50 hover:border-red-500/50 transition group">
                        <h3 class="text-xl font-bold text-white mb-2 group-hover:text-red-500 transition">Spokane Valley</h3>
                        <p class="text-gray-400 text-sm">Sprague Avenue, Sullivan Road, and the I-90 corridor. Millwood, Veradale, and Dishman included.</p>
                    </a>
                    <a href="/towing-greenacres" class="bg-slate-800/50 backdrop-blur-sm rounded-2xl p-6 border border-slate-700/50 hover:border-red-500/50 transition group">
                        <h3 class="text-xl font-bold text-white mb-2 group-hover:text-red-500 transition">Greenacres</h3>
                        <p class="text-gray-400 text-sm">Barker Road corridor and I-90 exits in the eastern Valley — one of our fastest response zones.</p>
                    </a>
                    <a href="/towing-liberty-lake" class="bg-slate-800/50 backdrop-blur-sm rounded-2xl p-6 border border-slate-700/50 hover:border-red-500/50 transition group">
                        <h3 class="text-xl font-bold text-white mb-2 group-hover:text-red-500 transition">Liberty Lake</h3>
                        <p class="text-gray-400 text-sm">The last stop before Idaho. Neighborhoods, tech corridor, and I-90 at the state line.</p>
                    </a>
                    <a href="/towing-cheney" class="bg-slate-800/50 backdrop-blur-sm rounded-2xl p-6 border border-slate-700/50 hover:border-red-500/50 transition group">
                        <h3 class="text-xl font-bold text-white mb-2 group-hover:text-red-500 transition">Cheney</h3>
                        <p class="text-gray-400 text-sm">EWU campus, downtown Cheney, and the SR-904 corridor on the West Plains.</p>
                    </a>
                    <a href="/towing-airway-heights" class="bg-slate-800/50 backdrop-blur-sm rounded-2xl p-6 border border-slate-700/50 hover:border-red-500/50 transition group">
                        <h3 class="text-xl font-bold text-white mb-2 group-hover:text-red-500 transition">Airway Heights</h3>
                        <p class="text-gray-400 text-sm">US-2 corridor, casino district, and the growing West Plains neighborhoods.</p>
                    </a>
                    <a href="/towing-medical-lake" class="bg-slate-800/50 backdrop-blur-sm rounded-2xl p-6 border border-slate-700/50 hover:border-red-500/50 transition group">
                        <h3 class="text-xl font-bold text-white mb-2 group-hover:text-red-500 transition">Medical Lake</h3>
                        <p class="text-gray-400 text-sm">SR-902, the lakes, and roads near Fairchild AFB on the southwest West Plains.</p>
                    </a>
                    <a href="/towing-deer-park" class="bg-slate-800/50 backdrop-blur-sm rounded-2xl p-6 border border-slate-700/50 hover:border-red-500/50 transition group">
                        <h3 class="text-xl font-bold text-white mb-2 group-hover:text-red-500 transition">Deer Park</h3>
                        <p class="text-gray-400 text-sm">The US-395 corridor and rural north Spokane County.</p>
                    </a>
                    <a href="/towing-colville" class="bg-slate-800/50 backdrop-blur-sm rounded-2xl p-6 border border-slate-700/50 hover:border-red-500/50 transition group">
                        <h3 class="text-xl font-bold text-white mb-2 group-hover:text-red-500 transition">Colville</h3>
                        <p class="text-gray-400 text-sm">Stevens County and the far north US-395 corridor — yes, we come this far.</p>
                    </a>
                </div>

                <h2 class="text-3xl font-bold mb-8 text-white">North Idaho Service Areas</h2>
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mb-16">
                    <a href="/towing-coeur-d-alene" class="bg-slate-800/50 backdrop-blur-sm rounded-2xl p-6 border border-slate-700/50 hover:border-red-500/50 transition group">
                        <h3 class="text-xl font-bold text-white mb-2 group-hover:text-red-500 transition">Coeur d'Alene</h3>
                        <p class="text-gray-400 text-sm">Downtown CdA, the lake, and I-90 through Kootenai County.</p>
                    </a>
                    <a href="/towing-post-falls" class="bg-slate-800/50 backdrop-blur-sm rounded-2xl p-6 border border-slate-700/50 hover:border-red-500/50 transition group">
                        <h3 class="text-xl font-bold text-white mb-2 group-hover:text-red-500 transition">Post Falls</h3>
                        <p class="text-gray-400 text-sm">The I-90 corridor between the state line and CdA.</p>
                    </a>
                    <a href="/towing-hayden-id" class="bg-slate-800/50 backdrop-blur-sm rounded-2xl p-6 border border-slate-700/50 hover:border-red-500/50 transition group">
                        <h3 class="text-xl font-bold text-white mb-2 group-hover:text-red-500 transition">Hayden</h3>
                        <p class="text-gray-400 text-sm">US-95 north of CdA, Hayden Lake, and surrounding areas.</p>
                    </a>
                    <a href="/towing-sandpoint" class="bg-slate-800/50 backdrop-blur-sm rounded-2xl p-6 border border-slate-700/50 hover:border-red-500/50 transition group">
                        <h3 class="text-xl font-bold text-white mb-2 group-hover:text-red-500 transition">Sandpoint</h3>
                        <p class="text-gray-400 text-sm">US-95 and Lake Pend Oreille country in Bonner County.</p>
                    </a>
                </div>

                <!-- Highways -->
                <div class="bg-slate-800/50 backdrop-blur-sm rounded-2xl p-8 border border-slate-700/50 mb-16">
                    <h2 class="text-2xl font-bold mb-4 text-white">Highway Coverage</h2>
                    <p class="text-gray-300 mb-6">Most emergency calls come from the highways. We respond to breakdowns and accidents on every major route in the region:</p>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 text-gray-300">
                        <div>• Interstate 90</div>
                        <div>• US Route 2</div>
                        <div>• US Route 95</div>
                        <div>• US Route 195</div>
                        <div>• US Route 395</div>
                        <div>• State Route 902</div>
                    </div>
                </div>

                <!-- Outside the map? -->
                <div class="text-center mb-8">
                    <p class="text-gray-300 text-lg mb-2">Don't see your town? Our coverage radius is 50+ miles from Spokane.</p>
                    <p class="text-gray-400">Call <a href="tel:+15097977999" class="text-red-500 hover:text-red-400 font-semibold">(509) 797-7999</a> — if we can reach you, we'll come get you.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-20 bg-slate-900">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-white">Stranded Somewhere on This Map?</h2>
                <p class="text-xl mb-8 text-gray-300">One call covers the whole region. Dispatch is standing by 24/7.</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="tel:+15097977999" class="bg-gradient-to-r from-red-600 to-red-700 text-white px-8 py-4 rounded-xl hover:from-red-700 hover:to-red-800 transition font-semibold text-lg shadow-lg shadow-red-600/25 flex items-center justify-center space-x-2">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        <span>Call (509) 797-7999</span>
                    </a>
                    <a href="/#quote" class="bg-white/10 backdrop-blur-sm text-white px-8 py-4 rounded-xl hover:bg-white/20 transition font-semibold text-lg border border-white/20">
                        Get Instant Quote
                    </a>
                </div>
            </div>
        </div>
    </section>

    @include('partials.site-footer')
</body>
</html>
