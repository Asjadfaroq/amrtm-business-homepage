@props(['service'])

<a class="service-chip" href="#" style="--from: {{ $service->color }}; --to: {{ $service->color_end }}">
    <span class="service-chip-icon"><i class="fa fa-{{ $service->icon }}"></i></span>
    <span class="service-chip-title">{{ $service->name }}</span>
</a>
