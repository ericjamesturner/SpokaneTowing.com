@if ($widget = config('services.website_chat.widget'))
    <script defer src="{{ asset('spokane-website-chat.js') }}" data-widget="{{ $widget }}"></script>
@endif
