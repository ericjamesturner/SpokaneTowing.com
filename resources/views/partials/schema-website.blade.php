<script type="application/ld+json">
{!! json_encode([
    "@@context" => "https://schema.org",
    "@@type" => "WebSite",
    "url" => "https://spokanetowing.com",
    "name" => "Spokane Towing",
    "description" => "24/7 Professional Towing Services in Spokane, WA. Fast response times, fair pricing. Emergency towing, roadside assistance, flatbed towing and more.",
    "potentialAction" => [
        "@@type" => "SearchAction",
        "target" => [
            "@@type" => "EntryPoint",
            "urlTemplate" => "https://spokanetowing.com/quote?from={from_address}&to={to_address}"
        ],
        "query-input" => "required name=from_address"
    ]
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
</script>