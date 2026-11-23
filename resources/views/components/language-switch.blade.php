<div class="lang-switch">
    @foreach (config('platform.locales') as $locale)
        <a href="{{ request()->route('page') ? route("page.{$locale}", request()->route('page')) : route("home.{$locale}") }}" @class(['active' => app()->isLocale($locale)])>{{ strtoupper($locale) }}</a>
    @endforeach
</div>
