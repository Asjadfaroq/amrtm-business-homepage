<x-layout :title="__('home.title')">
    <x-navbar />

    <x-hero>
        <section class="hero-entities">
            <h2 class="section-label">{{ __('home.entities.heading') }}</h2>

            <div class="platform-container">
                <div class="row row-cols-3 row-cols-xl-5 g-2 g-xl-3 justify-content-center">
                    @foreach ($entities as $entity)
                        <div class="col">
                            <x-entity-card :entity="$entity" />
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="hero-services">
            <h2 class="services-heading">{{ __('home.services.heading') }}</h2>

            <div class="services-container">
                <div class="row row-cols-2 row-cols-md-3 row-cols-xl-6">
                    @foreach ($services as $service)
                        <div class="col">
                            <x-service-chip :service="$service" />
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </x-hero>
</x-layout>
