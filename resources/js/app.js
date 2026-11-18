import './quote-forms';

// Conversion events go to Clarity and to our own analytics (partials/analytics).
// Never attach customer input, addresses, phone numbers, quote IDs or URL
// parameters to these click events; identified details are sent only by the
// server after a real form submission.
const track = (name, props = {}) => {
    window.trackEvent?.(name, props);
};

const placementOf = (element) => {
    if (element.closest('header')) return 'header';
    if (element.closest('footer')) return 'footer';
    if (element.closest('[data-quote-form], #quote')) return 'quote';
    return 'content';
};

document.addEventListener('click', (event) => {
    const call = event.target.closest('a[href^="tel:"]');
    if (call) {
        window.clarity?.('event', 'call_click');
        track('Call Click', { placement: placementOf(call) });
    }
});

const startedForms = new WeakSet();
document.addEventListener('input', (event) => {
    const form = event.target.closest('[data-quote-form]');
    if (form && !startedForms.has(form)) {
        startedForms.add(form);
        window.clarity?.('event', 'quote_form_start');
        track('Quote Form Start');
    }
});

document.addEventListener('submit', (event) => {
    if (event.target.closest('[data-quote-form]')) {
        track('Quote Form Submit');
    }
});

const header = document.getElementById('main-header');
if (header) {
    window.addEventListener('scroll', () => {
        header.classList.toggle('py-2', window.scrollY > 100);
    }, { passive: true });
}
