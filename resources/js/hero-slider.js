const slider = document.querySelector('.hero-slides');
const slides = slider ? [...slider.querySelectorAll('.hero-slide')] : [];

if (slides.length > 1) {
    let current = 0;

    setInterval(() => {
        slides[current].classList.remove('active');
        current = (current + 1) % slides.length;
        slides[current].classList.add('active');
    }, Number(slider.dataset.interval));
}
