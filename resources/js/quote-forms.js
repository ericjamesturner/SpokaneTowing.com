// Keep address lookup off the critical rendering path. Plain addresses still work
// when Maps is unavailable, and geolocation is requested only by its button.
const initialized = new WeakSet();
let placesPromise;

export async function enhanceQuoteForm(form) {
    if (!window.google?.maps?.importLibrary) return;

    try {
        placesPromise ??= window.google.maps.importLibrary('places');
        const { Autocomplete } = await placesPromise;
        for (const input of form.querySelectorAll('input[name="from"], input[name="to"]')) {
            if (initialized.has(input)) continue;
            new Autocomplete(input, {
                bounds: { south: 46.2088, west: -118.8760, north: 49.1088, east: -116.0760 },
                componentRestrictions: { country: 'us' },
                fields: ['formatted_address'],
                strictBounds: false,
            });
            initialized.add(input);
        }
    } catch {
        placesPromise = undefined;
        // A Maps failure must never prevent manual entry or a normal form POST.
    }
}

document.addEventListener('focusin', (event) => {
    const form = event.target.closest('[data-quote-form]');
    if (form) enhanceQuoteForm(form);
});

document.addEventListener('pointerdown', (event) => {
    const form = event.target.closest('[data-quote-form]');
    if (form) enhanceQuoteForm(form);
}, { passive: true });

// Handle autofocus / restored focus before the module finished loading.
const activeForm = document.activeElement?.closest('[data-quote-form]');
if (activeForm) enhanceQuoteForm(activeForm);

window.detectLocation = async (fieldId) => {
    const input = document.getElementById(fieldId);
    if (!input) return;
    const manualEntry = () => {
        window.alert('Unable to find your location. Please enter your address manually.');
        input.focus();
    };
    if (!navigator.geolocation || !window.google?.maps?.importLibrary) {
        manualEntry();
        return;
    }
    navigator.geolocation.getCurrentPosition(async ({ coords }) => {
        try {
            const { Geocoder } = await window.google.maps.importLibrary('geocoding');
            const response = await new Geocoder().geocode({
                location: { lat: coords.latitude, lng: coords.longitude },
            });
            const address = response.results?.[0]?.formatted_address;
            if (!address) return manualEntry();
            input.value = address;
            input.dispatchEvent(new Event('input', { bubbles: true }));
            input.dispatchEvent(new Event('change', { bubbles: true }));
        } catch {
            manualEntry();
        }
    }, manualEntry, { timeout: 10000, maximumAge: 60000 });
};
