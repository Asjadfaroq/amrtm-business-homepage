<nav class="site-nav">
    <a class="brand" href="{{ route('home.'.app()->getLocale()) }}">
        <img class="brand-mark" src="{{ asset('images/logo.svg') }}" alt="">
        <span class="brand-text">
            <span class="brand-name">{{ __('home.brand.name') }}</span>
            <span class="brand-tagline">{{ __('home.brand.tagline') }}</span>
        </span>
    </a>

    <ul class="nav-links collapse d-xl-flex" id="nav-menu">
        @foreach (config('platform.navigation') as $item)
            <li>
                <a href="#" @class(['active' => $loop->first])>{{ __("home.nav.{$item}") }}</a>
            </li>
        @endforeach
    </ul>

    <div class="nav-actions">
        <x-language-switch />

        <a class="btn-nav btn-nav-outline" href="#">
            <i class="bi bi-box-arrow-in-right icon-directional"></i>
            <span>{{ __('home.actions.sign_in') }}</span>
        </a>

        <a class="btn-nav btn-nav-solid" href="#">
            <i class="bi bi-person-plus-fill"></i>
            <span>{{ __('home.actions.register') }}</span>
        </a>

        <a class="btn-nav btn-nav-soft" href="#">
            <i class="bi bi-building-fill"></i>
            <span>{{ __('home.actions.join') }}</span>
        </a>

        <button class="nav-toggle d-xl-none" type="button" data-bs-toggle="collapse" data-bs-target="#nav-menu" aria-controls="nav-menu" aria-expanded="false" aria-label="{{ __('home.nav.menu') }}">
            <i class="bi bi-list"></i>
        </button>
    </div>
</nav>
