<div class="mobile-menu" id="mobile-menu" hidden>
    @foreach (config('platform.mobile_navigation') as $item)
        <a class="mobile-menu-item" href="{{ $item['link'] ? ($item['page'] ? route('page.'.app()->getLocale(), $item['page']) : route('home.'.app()->getLocale())) : '#' }}">
            <i class="fa fa-{{ $item['icon'] }}"></i>
            <span>{{ __("home.{$item['label']}") }}</span>
        </a>
    @endforeach
</div>
