{{-- First-party analytics: pageviews, outbound clicks, conversions and identified visitors.
     Controllers flash `analytics` => ['event' => ..., 'props' => [...], 'user' => [...]] on the
     redirect after a real conversion; it is emitted once on the next page and never again. --}}
@php
    $analyticsSite = config('services.analytics.site');
    $analytics = session('analytics', []);
    $analyticsUser = array_filter($analytics['user'] ?? [], fn ($value) => filled($value));
@endphp
@if ($analyticsSite)
    <script defer data-site="{{ $analyticsSite }}" data-outbound src="{{ config('services.analytics.script') }}"></script>
    @if (! empty($analytics['event']) || $analyticsUser)
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                if (typeof window.trackEvent !== 'function') return;
                @if ($analyticsUser)
                    window.trackEvent.identify(@json($analyticsUser));
                @endif
                @if (! empty($analytics['event']))
                    window.trackEvent(@json($analytics['event']), @json((object) ($analytics['props'] ?? [])));
                @endif
            });
        </script>
    @endif
@endif
