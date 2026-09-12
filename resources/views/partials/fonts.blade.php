{{-- Inline tiny font declarations to avoid an extra render-blocking stylesheet. --}}
<link rel="preload" href="/fonts/inter-700.woff2" as="font" type="font/woff2" crossorigin>
<style>
/* Inter Font - Self-hosted for better performance */
@font-face {
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-display: optional;
    src: url('/fonts/inter-400.woff2') format('woff2');
}

@font-face {
    font-family: 'Inter';
    font-style: normal;
    font-weight: 500;
    font-display: optional;
    src: url('/fonts/inter-500.woff2') format('woff2');
}

@font-face {
    font-family: 'Inter';
    font-style: normal;
    font-weight: 600;
    font-display: optional;
    src: url('/fonts/inter-600.woff2') format('woff2');
}

@font-face {
    font-family: 'Inter';
    font-style: normal;
    font-weight: 700;
    font-display: optional;
    src: url('/fonts/inter-700.woff2') format('woff2');
}

/* Preload hint for critical font weights */
body {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
}
</style>
