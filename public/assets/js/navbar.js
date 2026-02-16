document.addEventListener('DOMContentLoaded', () => {
    const navbar = document.querySelector('.navbar-custom');
    const mobileMenuToggle = document.getElementById('mobileMenuToggle');
    const mobileSidebar = document.getElementById('mobileSidebar');
    const sidebarClose = document.getElementById('sidebarClose');
    const sidebarOverlay = document.getElementById('sidebarOverlay');

    // Scroll effect navbar
    if (navbar) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    }

    // Fungsi buka/tutup sidebar
    const openSidebar = () => {
        if (!mobileSidebar || !mobileMenuToggle) return;
        mobileSidebar.classList.add('active');
        mobileMenuToggle.classList.add('active');
        document.body.style.overflow = 'hidden';
    };

    const closeSidebar = () => {
        if (!mobileSidebar || !mobileMenuToggle) return;
        mobileSidebar.classList.remove('active');
        mobileMenuToggle.classList.remove('active');
        document.body.style.overflow = '';
    };

    // Toggle tombol hamburger
    if (mobileMenuToggle && mobileSidebar) {
        mobileMenuToggle.addEventListener('click', openSidebar);
    }

    if (sidebarClose) {
        sidebarClose.addEventListener('click', closeSidebar);
    }

    if (sidebarOverlay) {
        sidebarOverlay.addEventListener('click', closeSidebar);
    }

    // Submenu toggle (klik pada .menu-toggle)
    const submenuToggles = document.querySelectorAll('.sidebar-menu .has-submenu .menu-toggle');

    submenuToggles.forEach(toggle => {
        toggle.addEventListener('click', e => {
            e.preventDefault();

            const parent = toggle.closest('.has-submenu');
            if (!parent) return;

            // Tutup submenu lain
            document.querySelectorAll('.sidebar-menu .has-submenu').forEach(item => {
                if (item !== parent) item.classList.remove('open');
            });

            // Toggle submenu ini
            parent.classList.toggle('open');
        });
    });

    // Tutup sidebar saat klik link biasa (bukan .menu-toggle)
    const sidebarLinks = document.querySelectorAll('.sidebar-menu a:not(.menu-toggle)');

    sidebarLinks.forEach(link => {
        link.addEventListener('click', closeSidebar);
    });
});
