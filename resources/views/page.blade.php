<x-layout :title="__('home.nav.'.$page).' | '.__('home.brand.name')">
    <x-navbar />

    <main class="page-placeholder">
        <h1>{{ __("home.nav.{$page}") }}</h1>
        <p>{{ __('home.page.notice') }}</p>
        <a class="btn-nav btn-nav-solid" href="{{ route('home.'.app()->getLocale()) }}">{{ __('home.page.back') }}</a>
    </main>

    <x-contact-bar />
</x-layout>
