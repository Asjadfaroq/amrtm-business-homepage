<nav class="site-nav">
    <div class="site-nav-inner">
        <a class="brand" href="{{ route('home.'.app()->getLocale()) }}">
            <img class="brand-mark" src="{{ asset('images/logo.png') }}" alt="">
            <span class="brand-text">
                <span class="brand-name">{{ __('home.brand.name') }}</span>
                <span class="brand-tagline">{{ __('home.brand.tagline') }}</span>
            </span>
        </a>

        <ul class="nav-links collapse" id="nav-menu">
            @foreach (config('platform.navigation') as $item)
                <li>
                    <a href="{{ $item === 'home' ? route('home.'.app()->getLocale()) : route('page.'.app()->getLocale(), $item) }}" @class(['active' => $item === (request()->route('page') ?? 'home')])>{{ __("home.nav.{$item}") }}</a>
                </li>
            @endforeach
        </ul>

        <div class="nav-actions">
            <x-language-switch />

            <a class="btn-nav btn-nav-outline" href="#">
                <i class="fa fa-right-to-bracket"></i>
                <span>{{ __('home.actions.sign_in') }}</span>
            </a>

            <a class="btn-nav btn-nav-solid" href="#">
                <i class="fa fa-user-plus"></i>
                <span>{{ __('home.actions.register') }}</span>
            </a>

            <a class="btn-nav btn-nav-soft" href="#">
                <i class="fa fa-building"></i>
                <span>{{ __('home.actions.join') }}</span>
            </a>

            <button class="nav-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#nav-menu" aria-controls="nav-menu" aria-expanded="false" aria-label="{{ __('home.nav.menu') }}">
                <i class="fa fa-bars"></i>
            </button>
        </div>
    </div>
</nav>
