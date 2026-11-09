document.addEventListener('DOMContentLoaded', () => {
    const menuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    if (!menuButton || !mobileMenu) {
        return;
    }

    function closeMenu() {
        mobileMenu.classList.add('hidden');
        menuButton.setAttribute('aria-expanded', 'false');
        menuButton.setAttribute('aria-label', 'Buka menu navigasi');
        menuButton.textContent = '☰';
    }

    function toggleMenu() {
        const isOpen =
            menuButton.getAttribute('aria-expanded') === 'true';

        if (isOpen) {
            closeMenu();
            return;
        }

        mobileMenu.classList.remove('hidden');
        menuButton.setAttribute('aria-expanded', 'true');
        menuButton.setAttribute('aria-label', 'Tutup menu navigasi');
        menuButton.textContent = '✕';
    }

    menuButton.addEventListener('click', toggleMenu);

    mobileMenu.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', closeMenu);
    });

    window.addEventListener('resize', () => {
        if (window.innerWidth >= 1024) {
            closeMenu();
        }
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') {
            closeMenu();
        }
    });
});