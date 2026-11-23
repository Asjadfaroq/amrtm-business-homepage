const toggle = document.querySelector('.nav-toggle');
const menu = document.getElementById('mobile-menu');

if (toggle && menu) {
    const setOpen = (open) => {
        menu.hidden = !open;
        toggle.setAttribute('aria-expanded', String(open));
    };

    toggle.addEventListener('click', () => setOpen(menu.hidden));

    menu.addEventListener('click', (event) => {
        if (event.target.closest('.mobile-menu-item')) {
            setOpen(false);
        }
    });
}
