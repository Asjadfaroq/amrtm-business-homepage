<main class="hero">
    <div class="hero-slides carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="6000" data-bs-pause="false" data-bs-touch="false">
        <div class="carousel-inner">
            @foreach (config('platform.hero.slides') as $slide)
                <div @class(['carousel-item', 'active' => $loop->first]) style="background-image: url('{{ asset($slide) }}')"></div>
            @endforeach
        </div>
    </div>

    <div class="hero-shade"></div>

    <div class="hero-inner">
        <div class="hero-top">
            <div class="hero-copy">
                <div class="hero-headline">
                    <h1 class="hero-title">{{ __('home.hero.title') }}</h1>

                    <a class="hero-badge" href="#">
                        <i class="fa fa-file-signature"></i>
                        {{ __('home.hero.badge') }}
                    </a>
                </div>

                <p class="hero-lead">{{ __('home.hero.lead') }}</p>
            </div>

            <button class="video-card" type="button">
                <img class="video-card-poster" src="{{ asset('images/video-poster.jpg') }}" alt="">
                <span class="video-card-play"><i class="fa fa-play"></i></span>
                <span class="video-card-caption">
                    <i class="fa fa-circle-play"></i>
                    {{ __('home.hero.video') }}
                </span>
            </button>
        </div>

        {{ $slot }}
    </div>
</main>
