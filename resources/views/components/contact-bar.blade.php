<footer class="contact-bar">
    <span class="contact-label">{{ __('home.contact.office') }}</span>

    <a class="contact-phone" href="tel:+{{ config('platform.contact.phone') }}">
        <i class="fa fa-phone"></i>
        <span dir="ltr">{{ config('platform.contact.phone') }}</span>
    </a>

    <a class="contact-whatsapp" href="https://wa.me/{{ config('platform.contact.whatsapp') }}">
        <i class="fa-brands fa-whatsapp"></i>
        {{ __('home.contact.whatsapp') }}
    </a>
</footer>
