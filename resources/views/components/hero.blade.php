<main class="hero">
    <div class="hero-slides" data-interval="5000">
        @foreach (config('platform.hero.slides') as $slide)
            <div @class(['hero-slide', 'active' => $loop->first]) style="background-image: url('{{ asset($slide) }}')"></div>
        @endforeach
    </div>

    <div class="hero-inner">
        <div class="hero-top">
            <div class="hero-copy">
                <a class="hero-badge" href="#">
                    <i class="fa fa-file-signature"></i>
                    {{ __('home.hero.badge') }}
                </a>

                <div class="hero-heading">
                    <h1 class="hero-title">{{ __('home.hero.title') }}</h1>
                </div>

                <p class="hero-lead">{{ __('home.hero.lead') }}</p>
            </div>

            <div class="video-box">
                <button class="video-card" type="button">
                    <img class="video-card-poster" src="{{ asset('images/video-poster.jpg') }}" alt="">
                    <span class="video-card-play"><i class="fa fa-play"></i></span>
                    <span class="video-card-caption">
                        <i class="fa fa-circle-play"></i>
                        {{ __('home.hero.video') }}
                    </span>
                </button>
            </div>
        </div>

        {{ $slot }}
    </div>
</main>
