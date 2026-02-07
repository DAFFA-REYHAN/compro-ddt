<nav class="navbar-custom">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            {{-- Logo --}}
            <a href="{{ url('/') }}" class="navbar-brand-custom">
                <img src="{{ asset('assets/template/img/logo/logo dwi damar tirta.png') }}" alt="PT Dwi Damar Tirta">
                <span class="d-none d-md-inline">PT Dwi Damar Tirta</span>
                <span class="d-md-none">DDT</span>
            </a>

            {{-- NAV LINKS DESKTOP --}}
            <ul class="nav-links d-none d-lg-flex" id="navLinksDesktop">
                {{-- Beranda --}}
                <li class="nav-link-item">
                    <a href="{{ url('/') }}" class="nav-link-custom {{ Request::is('/') ? 'active' : '' }}">
                        <i class="iconbase ti tabler-home"></i> Beranda
                    </a>
                </li>

                {{-- Profil (Dropdown) --}}
                <li class="nav-link-item has-dropdown">
                    <a href="{{ url('/') }}" class="nav-link-custom {{ Request::is('profil*') ? 'active' : '' }}">
                        <i class="iconbase ti tabler-user-circle"></i>
                        Profil
                        <i class="iconbase ti tabler-chevron-down" style="font-size:0.85rem;"></i>
                    </a>
                    <div class="dropdown-menu-custom">
                        <a href="{{ url('/profil/tentang-kami') }}" class="dropdown-item-custom">
                            <i class="iconbase ti tabler-info-circle text-primary"></i>
                            Tentang Perusahaan
                        </a>
                        <a href="{{ url('/profil/visi-misi') }}" class="dropdown-item-custom">
                            <i class="iconbase ti tabler-target-arrow text-success"></i>
                            Visi & Misi
                        </a>
                        <a href="{{ url('/profil/struktur-organisasi') }}" class="dropdown-item-custom">
                            <i class="iconbase ti tabler-hierarchy-3 text-warning"></i>
                            Struktur Organisasi
                        </a>
                    </div>
                </li>

                {{-- Pengolahan (Dropdown) --}}
                <li class="nav-link-item has-dropdown">
                    <a href="{{ url('/pengolahan') }}"
                        class="nav-link-custom {{ Request::is('pengolahan*') ? 'active' : '' }}">
                        <i class="iconbase ti tabler-recycle"></i>
                        Pengolahan
                        <i class="iconbase ti tabler-chevron-down" style="font-size:0.85rem;"></i>
                    </a>
                    <div class="dropdown-menu-custom">
                        <a href="{{ url('/pengolahan/proses') }}" class="dropdown-item-custom">
                            <i class="iconbase ti tabler-settings-cog text-primary"></i>
                            Proses Pekerjaan
                        </a>
                        <a href="{{ url('/pengolahan/fasilitas') }}" class="dropdown-item-custom">
                            <i class="iconbase ti tabler-building-factory-2 text-success"></i>
                            Fasilitas & Armada
                        </a>
                        <a href="{{ url('/pengolahan/jenis-limbah') }}" class="dropdown-item-custom">
                            <i class="iconbase ti tabler-barrel text-danger"></i>
                            Jenis Limbah B3 & Non B3
                        </a>
                    </div>
                </li>

                {{-- Dokumen (Dropdown) - DIPERBAIKI --}}
                <li class="nav-link-item has-dropdown">
                    <a href="" class="nav-link-custom {{ Request::is('dokumen*') ? 'active' : '' }}">
                        <i class="iconbase ti tabler-file-certificate"></i>
                        Dokumen
                        <i class="iconbase ti tabler-chevron-down" style="font-size:0.85rem;"></i>
                    </a>
                    <div class="dropdown-menu-custom">
                        <a href="{{ url('/dokumen/legal') }}" class="dropdown-item-custom">
                            <i class="iconbase ti tabler-shield-check text-success"></i>
                            Legal & Perizinan
                        </a>
                        <a href="{{ url('/dokumen/rekomendasi') }}" class="dropdown-item-custom">
                            <i class="iconbase ti tabler-file-description text-primary"></i>
                            Rekomendasi
                        </a>
                        <a href="{{ url('/dokumen/kerjasama') }}" class="dropdown-item-custom">
                            <i class="iconbase ti tabler-handshake text-info"></i>
                            Kerja Sama
                        </a>
                        <a href="{{ url('/dokumen/asuransi') }}" class="dropdown-item-custom">
                            <i class="iconbase ti tabler-file-shield text-warning"></i>
                            Asuransi
                        </a>
                        <a href="{{ url('/dokumen/prestasi') }}" class="dropdown-item-custom">
                            <i class="iconbase ti tabler-trophy text-danger"></i>
                            Prestasi
                        </a>
                    </div>
                </li>

                {{-- Hubungi Kami (CTA) --}}
                <li class="nav-link-item">
                    <a href="{{ url('/kontak-kami') }}" class="btn-nav-cta">
                        <i class="iconbase ti tabler-phone"></i>
                        Hubungi Kami
                    </a>
                </li>
            </ul>

            {{-- TOGGLE MOBILE --}}
            <button class="mobile-menu-toggle d-lg-none" id="mobileMenuToggle" aria-label="Toggle navigation">
                <span></span><span></span><span></span>
            </button>
        </div>
    </div>
</nav>

{{-- SIDEBAR MOBILE --}}
<div class="mobile-sidebar" id="mobileSidebar">
    <div class="sidebar-overlay" id="sidebarOverlay"></div>
    <div class="sidebar-content">
        {{-- Logo di sidebar --}}
        <div class="sidebar-header">
            <img src="{{ asset('assets/template/img/logo/logo dwi damar tirta.png') }}" alt="PT Dwi Damar Tirta">
            <h5 class="mb-0">PT Dwi Damar Tirta</h5>
            <button class="sidebar-close" id="sidebarClose">
                <i class="iconbase ti tabler-x"></i>
            </button>
        </div>

        {{-- Menu sidebar --}}
        <ul class="sidebar-menu">
            <li>
                <a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">
                    <i class="iconbase ti tabler-home"></i>
                    <span>Beranda</span>
                </a>
            </li>

            <li class="has-submenu">
                <a href="javascript:void(0)" class="menu-toggle {{ Request::is('profil*') ? 'active' : '' }}">
                    <i class="iconbase ti tabler-user-circle"></i>
                    <span>Profil</span>
                    <span class="arrow-icon">›</span>
                </a>
                <ul class="submenu">
                    <li><a href="{{ url('/profil/tentang') }}">Tentang Perusahaan</a></li>
                    <li><a href="{{ url('/profil/visi-misi') }}">Visi & Misi</a></li>
                    <li><a href="{{ url('/profil/struktur') }}">Struktur Organisasi</a></li>
                </ul>
            </li>

            <li class="has-submenu">
                <a href="javascript:void(0)" class="menu-toggle {{ Request::is('pengolahan*') ? 'active' : '' }}">
                    <i class="iconbase ti tabler-recycle"></i>
                    <span>Pengolahan</span>
                    <span class="arrow-icon">›</span>
                </a>
                <ul class="submenu">
                    <li><a href="{{ url('/pengolahan/proses') }}">Proses Pekerjaan</a></li>
                    <li><a href="{{ url('/pengolahan/fasilitas') }}">Fasilitas & Armada</a></li>
                    <li><a href="{{ url('/pengolahan/jenis-limbah') }}">Jenis Limbah B3 & Non B3</a></li>
                </ul>
            </li>

            <li class="has-submenu">
                <a href="javascript:void(0)" class="menu-toggle {{ Request::is('dokumen*') ? 'active' : '' }}">
                    <i class="iconbase ti tabler-file-certificate"></i>
                    <span>Dokumen</span>
                    <span class="arrow-icon">›</span>
                </a>
                <ul class="submenu">
                    <li><a href="{{ url('/dokumen/legal') }}">Legal & Perizinan</a></li>
                    <li><a href="{{ url('/dokumen/rekomendasi') }}">Rekomendasi</a></li>
                    <li><a href="{{ url('/dokumen/kerjasama') }}">Kerja Sama</a></li>
                    <li><a href="{{ url('/dokumen/asuransi') }}">Asuransi</a></li>
                    <li><a href="{{ url('/dokumen/prestasi') }}">Prestasi</a></li>
                </ul>
            </li>

            <li>
                <a href="{{ url('/kontak-kami') }}" class="btn-cta-mobile">
                    <i class="iconbase ti tabler-phone"></i>
                    <span>Hubungi Kami</span>
                </a>
            </li>
        </ul>
    </div>
</div>

<style>
    :root {
        --primary-color: #003d99;
        --primary-light: #0F78ED;
    }

    /* ====== NAVBAR BASE ====== */
    .navbar-custom {
        background: linear-gradient(90deg, #003d99, #0F78ED);
        box-shadow: 0 2px 20px rgba(0, 0, 0, 0.18);
        padding: 0.75rem 0;
        transition: all 0.3s ease;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1000;
    }

    .navbar-custom.scrolled {
        padding: 0.5rem 0;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.25);
    }

    .navbar-brand-custom {
        display: flex;
        align-items: center;
        font-weight: 700;
        font-size: 1.5rem;
        color: #ffffff;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .navbar-brand-custom:hover {
        color: #f5f7ff;
        transform: scale(1.05);
    }

    .navbar-brand-custom img {
        height: 45px;
        margin-right: 0.75rem;
        transition: all 0.3s ease;
    }

    .navbar-custom.scrolled .navbar-brand-custom img {
        height: 40px;
    }

    /* ====== DESKTOP NAV ====== */
    .nav-links {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .nav-link-item {
        position: relative;
    }

    .nav-link-custom {
        color: #f5f7ff;
        text-decoration: none;
        padding: 0.75rem 1.25rem;
        font-weight: 500;
        font-size: 0.95rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        border-radius: 8px;
        transition: all 0.3s ease;
        position: relative;
        cursor: pointer;
    }

    .nav-link-custom:hover {
        color: #ffffff;
        background: rgba(255, 255, 255, 0.12);
    }

    .nav-link-custom.active {
        color: #ffffff;
        background: rgba(0, 0, 0, 0.15);
    }

    .dropdown-menu-custom {
        position: absolute;
        top: 100%;
        left: 0;
        background: #ffffff;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
        border-radius: 12px;
        padding: 0.5rem;
        min-width: 220px;
        opacity: 0;
        visibility: hidden;
        transform: translateY(10px);
        transition: all 0.25s ease;
        margin-top: 0.5rem;
        z-index: 1001;
    }

    @media (min-width: 992px) {
        .nav-link-item.has-dropdown:hover>.dropdown-menu-custom {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
    }

    .dropdown-item-custom {
        color: #2c3e50;
        text-decoration: none;
        padding: 0.65rem 1rem;
        display: flex;
        align-items: center;
        gap: 0.75rem;
        border-radius: 8px;
        transition: all 0.2s ease;
        font-size: 0.9rem;
    }

    .dropdown-item-custom:hover {
        background: rgba(0, 61, 153, 0.08);
        color: #003d99;
        padding-left: 1.25rem;
    }

    .btn-nav-cta {
        background: #FFD700;
        color: #003d99;
        padding: 0.65rem 1.5rem;
        border-radius: 8px;
        font-weight: 500;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        transition: all 0.3s ease;
    }

    .btn-nav-cta:hover {
        background: #ffcc33;
        color: #002a66;
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
    }

    /* ====== MOBILE TOGGLE ====== */
    .mobile-menu-toggle {
        background: none;
        border: 2px solid #ffffff;
        padding: 0.5rem;
        border-radius: 8px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .mobile-menu-toggle:hover {
        background: rgba(255, 255, 255, 0.15);
    }

    .mobile-menu-toggle span {
        display: block;
        width: 25px;
        height: 3px;
        background: #ffffff;
        margin: 4px 0;
        transition: all 0.3s ease;
        border-radius: 2px;
    }

    .mobile-menu-toggle.active span:nth-child(1) {
        transform: rotate(45deg) translate(6px, 6px);
    }

    .mobile-menu-toggle.active span:nth-child(2) {
        opacity: 0;
    }

    .mobile-menu-toggle.active span:nth-child(3) {
        transform: rotate(-45deg) translate(6px, -6px);
    }

    /* ====== MOBILE SIDEBAR ====== */
    .mobile-sidebar {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1100;
        pointer-events: none;
    }

    .mobile-sidebar.active {
        pointer-events: all;
    }

    .sidebar-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .mobile-sidebar.active .sidebar-overlay {
        opacity: 1;
    }

    .sidebar-content {
        position: absolute;
        top: 0;
        left: 0;
        width: 280px;
        height: 100%;
        background: #ffffff;
        box-shadow: 4px 0 20px rgba(0, 0, 0, 0.1);
        transform: translateX(-100%);
        transition: transform 0.3s ease;
        overflow-y: auto;
    }

    .mobile-sidebar.active .sidebar-content {
        transform: translateX(0);
    }

    .sidebar-header {
        background: linear-gradient(135deg, #003d99, #0F78ED);
        padding: 1.5rem 1rem;
        color: #ffffff;
        position: relative;
        text-align: center;
    }

    .sidebar-header img {
        height: 50px;
        margin-bottom: 0.5rem;
    }

    .sidebar-header h5 {
        font-size: 1rem;
        font-weight: 600;
    }

    .sidebar-close {
        position: absolute;
        top: 1rem;
        right: 1rem;
        background: rgba(255, 255, 255, 0.2);
        border: none;
        color: #ffffff;
        width: 32px;
        height: 32px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .sidebar-close:hover {
        background: rgba(255, 255, 255, 0.3);
    }

    .sidebar-menu {
        list-style: none;
        padding: 1rem 0;
        margin: 0;
    }

    .sidebar-menu li a {
        display: flex;
        align-items: center;
        padding: 0.85rem 1.5rem;
        color: #2c3e50;
        text-decoration: none;
        transition: all 0.3s ease;
        font-size: 0.95rem;
        position: relative;
    }

    .sidebar-menu li a i:first-child {
        margin-right: 0.75rem;
        font-size: 1.2rem;
        flex-shrink: 0;
    }

    .sidebar-menu li a span:not(.arrow-icon) {
        flex: 1;
    }

    .sidebar-menu li a:hover {
        background: rgba(0, 61, 153, 0.08);
        color: #003d99;
    }

    .sidebar-menu li a.active {
        background: rgba(0, 61, 153, 0.12);
        color: #003d99;
        font-weight: 600;
    }

    .sidebar-menu .has-submenu .menu-toggle {
        justify-content: space-between;
    }

    .sidebar-menu .has-submenu .arrow-icon {
        margin-left: auto;
        font-size: 1.5rem;
        font-weight: 300;
        transition: transform 0.3s ease;
        flex-shrink: 0;
        color: #6c757d;
        line-height: 1;
    }

    .sidebar-menu .has-submenu.open .arrow-icon {
        transform: rotate(90deg);
    }

    .sidebar-menu .has-submenu.open .menu-toggle {
        background: rgba(0, 61, 153, 0.08);
        color: #003d99;
    }

    .sidebar-menu .submenu {
        list-style: none;
        padding: 0;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease;
        background: #f8f9fa;
    }

    .sidebar-menu .has-submenu.open .submenu {
        max-height: 600px;
    }

    .sidebar-menu .submenu li a {
        padding-left: 3.5rem;
        font-size: 0.9rem;
        color: #5a6c7d;
    }

    .sidebar-menu .submenu li a:hover {
        background: rgba(0, 61, 153, 0.06);
        color: #003d99;
    }

    .btn-cta-mobile {
        background: #FFD700 !important;
        color: #003d99 !important;
        font-weight: 600;
        border-radius: 8px;
        margin: 1rem 1.5rem;
        padding: 0.85rem 1.5rem !important;
        justify-content: center;
    }

    .btn-cta-mobile:hover {
        background: #ffcc33 !important;
    }

    /* Body offset */
    body {
        padding-top: 70px;
    }

    @media (max-width: 991px) {
        body {
            padding-top: 70px;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const navbar = document.querySelector('.navbar-custom');
        const mobileMenuToggle = document.getElementById('mobileMenuToggle');
        const mobileSidebar = document.getElementById('mobileSidebar');
        const sidebarClose = document.getElementById('sidebarClose');
        const sidebarOverlay = document.getElementById('sidebarOverlay');

        // Scroll effect
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) navbar.classList.add('scrolled');
            else navbar.classList.remove('scrolled');
        });

        // Open sidebar
        if (mobileMenuToggle) {
            mobileMenuToggle.addEventListener('click', () => {
                mobileSidebar.classList.add('active');
                mobileMenuToggle.classList.add('active');
                document.body.style.overflow = 'hidden';
            });
        }

        // Close sidebar
        function closeSidebar() {
            mobileSidebar.classList.remove('active');
            mobileMenuToggle.classList.remove('active');
            document.body.style.overflow = '';
        }

        if (sidebarClose) sidebarClose.addEventListener('click', closeSidebar);
        if (sidebarOverlay) sidebarOverlay.addEventListener('click', closeSidebar);

        // Submenu toggle
        document.querySelectorAll('.sidebar-menu .has-submenu .menu-toggle').forEach(toggle => {
            toggle.addEventListener('click', function(e) {
                e.preventDefault();
                const parent = this.closest('.has-submenu');
                const allSubmenus = document.querySelectorAll('.sidebar-menu .has-submenu');

                allSubmenus.forEach(submenu => {
                    if (submenu !== parent) submenu.classList.remove('open');
                });

                parent.classList.toggle('open');
            });
        });

        // Close sidebar on link click
        document.querySelectorAll('.sidebar-menu a:not(.menu-toggle)').forEach(link => {
            link.addEventListener('click', closeSidebar);
        });
    });
</script>
