<x-layout :title="__('home.title')">
    <x-navbar />

    <x-hero>
        <section class="hero-section">
            <div class="hero-section-inner">
                <h2 class="section-label"><span>{{ __('home.entities.heading') }}</span></h2>

                <div class="entity-grid d-flex flex-wrap justify-content-center align-items-stretch">
                    @foreach ($entities as $entity)
                        <x-entity-card :entity="$entity" />
                    @endforeach
                </div>
            </div>
        </section>

        <section class="hero-section">
            <div class="hero-section-inner is-wide">
                <h2 class="services-heading">{{ __('home.services.heading') }}</h2>

                <div class="row row-cols-2 row-cols-sm-3 row-cols-xl-6 service-grid">
                    @foreach ($services as $service)
                        <div class="col">
                            <x-service-chip :service="$service" />
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </x-hero>

    <x-partners :partners="$partners" />

    <x-contact-bar />
</x-layout>
