@props(['service'])

<a class="service-chip" href="#" style="--chip-color: {{ $service->color }}">
    <span class="service-chip-icon"><i class="bi bi-{{ $service->icon }}"></i></span>
    <span class="service-chip-title">{{ $service->name }}</span>
</a>
