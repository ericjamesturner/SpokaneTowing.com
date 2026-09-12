import './quote-forms';

// Use the existing Clarity connection. Never attach customer input, addresses,
// phone numbers, quote IDs or URL parameters to conversion events.
document.addEventListener('click', (event) => {
    if (event.target.closest('a[href^="tel:"]')) {
        window.clarity?.('event', 'call_click');
    }
});

const startedForms = new WeakSet();
document.addEventListener('input', (event) => {
    const form = event.target.closest('[data-quote-form]');
    if (form && !startedForms.has(form)) {
        startedForms.add(form);
        window.clarity?.('event', 'quote_form_start');
    }
});

const header = document.getElementById('main-header');
if (header) {
    window.addEventListener('scroll', () => {
        header.classList.toggle('py-2', window.scrollY > 100);
    }, { passive: true });
}
