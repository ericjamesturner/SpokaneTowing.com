// Livewire keeps the head between pages and caches the old body for Back navigation.
// Resolve the current account on each visit, including a browser history restore.
(() => {
    const key = document.currentScript.dataset.widget;
    if (!key || !/^[0-9a-f-]{36}$/i.test(key)) return;

    const accountKey = 'spokane.chat.account.' + key;
    let account;
    let visit;
    let embed;
    function leave() {
        visit?.abort();
        visit = null;
        embed?.remove();
        document.querySelector('gbpn-website-chat[data-widget="' + key + '"]')?.remove();
    }
    async function enter() {
        if (visit) return;
        const controller = new AbortController();
        visit = controller;
        try {
            const response = await fetch('/website-chat/identity', {
                headers: {Accept: 'application/json'}, cache: 'no-store', signal: controller.signal,
            });
            if (!response.ok) throw new Error('Chat unavailable');
            const session = await response.json();
            if (controller.signal.aborted) return;
            account = session.account ?? 'guest';
            try { localStorage.setItem(accountKey, account); } catch { /* Optional across tabs. */ }
            embed = document.createElement('script');
            embed.src = 'https://app.gbpn.com/website-chat.js';
            embed.async = true;
            embed.dataset.widget = key;
            if (session.identity) embed.dataset.identity = session.identity;
            document.body.append(embed);
        } catch {
            if (visit === controller) visit = null;
        }
    }

    document.addEventListener('livewire:navigating', leave);
    document.addEventListener('livewire:navigated', enter);
    // A login or logout in another tab also changes this tab's site session.
    window.addEventListener('storage', event => {
        if (event.key === accountKey && account !== event.newValue) {
            leave();
            enter();
        }
    });
    window.addEventListener('pagehide', leave);
    window.addEventListener('pageshow', enter);
    window.addEventListener('online', enter);
    enter();
})();
