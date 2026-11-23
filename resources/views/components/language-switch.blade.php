<div class="lang-switch">
    @foreach (config('platform.locales') as $locale)
        <a href="{{ route("home.{$locale}") }}" @class(['active' => app()->isLocale($locale)])>{{ strtoupper($locale) }}</a>
    @endforeach
</div>
