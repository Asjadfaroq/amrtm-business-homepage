@props(['entity'])

<a class="entity-card tone-{{ $entity->tone }}" href="#">
    <span class="entity-card-icon"><i class="bi bi-{{ $entity->icon }}"></i></span>
    <h3 class="entity-card-title">{{ $entity->name }}</h3>
    <span class="entity-card-arrow"><i class="bi bi-arrow-right icon-directional"></i></span>
</a>
