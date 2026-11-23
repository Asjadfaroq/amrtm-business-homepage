@props(['partners'])

<section class="partners">
    <h2 class="partners-label">{{ __('home.partners.heading') }}</h2>

    <div class="partners-viewport">
        <div class="partners-track">
            @foreach (range(1, 8) as $copy)
                @foreach ($partners as $partner)
                    <span class="partner">
                        <i class="fa fa-{{ $partner->icon }}"></i>
                        {{ $partner->name }}
                    </span>
                @endforeach
            @endforeach
        </div>
    </div>
</section>
