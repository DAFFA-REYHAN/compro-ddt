<nav class="navbar-custom" aria-label="Navigasi utama">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">

            {{-- Logo --}}
            <a href="{{ url('/') }}" class="navbar-brand-custom">
                <img src="{{ asset('assets/template/img/logo/logo dwi damar tirta.webp') }}" alt="PT Dwi Damar Tirta">
                <span class="d-none d-md-inline">Dwi Damar Tirta</span>
                <span class="d-md-none">DDT</span>
            </a>

            {{-- NAV LINKS DESKTOP --}}
            <ul class="nav-links d-none d-lg-flex" id="navLinksDesktop">

                {{-- Beranda --}}
                <li class="nav-link-item">
                    <a href="{{ url('/') }}" class="nav-link-custom {{ Request::is('/') ? 'active' : '' }}">
                        <i class="iconbase ti tabler-home" aria-hidden="true"></i>
                        {{ __('nav.home') }}
                    </a>
                </li>

                {{-- Profil (Dropdown) --}}
                <li class="nav-link-item has-dropdown">
                    <a href="{{ url('/profil/tentang-kami') }}"
                        class="nav-link-custom {{ Request::is('profil*') ? 'active' : '' }}">
                        <i class="iconbase ti tabler-user-circle" aria-hidden="true"></i>
                        {{ __('nav.profile') }}
                        <i class="iconbase ti tabler-chevron-down" style="font-size:0.85rem;" aria-hidden="true"></i>
                    </a>
                    <div class="dropdown-menu-custom">
                        <a href="{{ url('/profil/tentang-kami') }}" class="dropdown-item-custom">
                            <i class="iconbase ti tabler-info-circle text-primary" aria-hidden="true"></i>
                            {{ __('nav.about') }}
                        </a>
                        <a href="{{ url('/profil/visi-misi') }}" class="dropdown-item-custom">
                            <i class="iconbase ti tabler-target-arrow text-success" aria-hidden="true"></i>
                            {{ __('nav.vissionMission') }}
                        </a>
                        <a href="{{ url('/profil/struktur-organisasi') }}" class="dropdown-item-custom">
                            <i class="iconbase ti tabler-hierarchy-3 text-warning" aria-hidden="true"></i>
                            {{ __('nav.structureOrganization') }}
                        </a>
                    </div>
                </li>

                {{-- Pengolahan (Dropdown) --}}
                <li class="nav-link-item has-dropdown">
                    <a href="{{ url('/pengolahan') }}"
                        class="nav-link-custom {{ Request::is('pengolahan*') ? 'active' : '' }}">
                        <i class="iconbase ti tabler-recycle" aria-hidden="true"></i>
                        {{ __('nav.service') }}
                        <i class="iconbase ti tabler-chevron-down" style="font-size:0.85rem;" aria-hidden="true"></i>
                    </a>
                    <div class="dropdown-menu-custom">
                        <a href="{{ url('/layanan-kami') }}" class="dropdown-item-custom">
                            <i class="iconbase ti tabler-settings-cog text-primary" aria-hidden="true"></i>
                            {{ __('nav.service') }}
                        </a>
                        <a href="{{ url('/fasilitas') }}" class="dropdown-item-custom">
                            <i class="iconbase ti tabler-building-factory-2 text-success" aria-hidden="true"></i>
                            {{ __('nav.facility') }}
                        </a>
                    </div>
                </li>

                {{-- Dokumen (Dropdown) --}}
                <li class="nav-link-item has-dropdown">
                    <a href="{{ url('/dokumen/legal') }}"
                        class="nav-link-custom {{ Request::is('dokumen*') ? 'active' : '' }}">
                        <i class="iconbase ti tabler-file-certificate" aria-hidden="true"></i>
                        {{ __('nav.document') }}
                        <i class="iconbase ti tabler-chevron-down" style="font-size:0.85rem;" aria-hidden="true"></i>
                    </a>
                    <div class="dropdown-menu-custom">
                        <a href="{{ url('/dokumen/legal') }}" class="dropdown-item-custom">
                            <i class="iconbase ti tabler-shield-check text-success" aria-hidden="true"></i>
                            {{ __('nav.legal') }}
                        </a>
                        <a href="{{ url('/dokumen/rekomendasi') }}" class="dropdown-item-custom">
                            <i class="iconbase ti tabler-file-description text-primary" aria-hidden="true"></i>
                            {{ __('nav.recomendation') }}
                        </a>
                        <a href="{{ url('/dokumen/kerjasama') }}" class="dropdown-item-custom">
                            <i class="iconbase ti tabler-heart-handshake text-info" aria-hidden="true"></i>
                            {{ __('nav.partnership') }}
                        </a>
                        <a href="{{ url('/dokumen/asuransi') }}" class="dropdown-item-custom">
                            <i class="iconbase ti tabler-shield-half text-warning" aria-hidden="true"></i>
                            {{ __('nav.insurence') }}
                        </a>
                        <a href="{{ url('/dokumen/prestasi') }}" class="dropdown-item-custom">
                            <i class="iconbase ti tabler-trophy text-danger" aria-hidden="true"></i>
                            {{ __('nav.achievment') }}
                        </a>
                    </div>
                </li>

                {{-- Gallery --}}
                <li class="nav-link-item">
                    <a href="{{ url('/gallery') }}"
                        class="nav-link-custom {{ Request::is('gallery') ? 'active' : '' }}">
                        <i class="iconbase ti tabler-library-photo" aria-hidden="true"></i>
                        {{ __('nav.gallery') }}
                    </a>
                </li>

                {{-- Language Switcher (Desktop) --}}
                @php $locale = app()->getLocale(); @endphp
                <li class="nav-link-item has-dropdown">
                    <button type="button" class="nav-link-custom nav-link-button">
                        @if ($locale === 'en')
                            <img src="{{ asset('assets/template/img/language/ENG.png') }}" alt="English"
                                style="width:20px;height:auto;border-radius:3px;">
                        @else
                            <img src="{{ asset('assets/template/img/language/IND.png') }}" alt="Bahasa Indonesia"
                                style="width:20px;height:auto;border-radius:3px;">
                        @endif
                        <i class="iconbase ti tabler-chevron-down" style="font-size:0.85rem;" aria-hidden="true"></i>
                    </button>
                    <div class="dropdown-menu-custom">
                        <a href="{{ route('set-locale', 'id') }}" class="dropdown-item-custom">
                            <img src="{{ asset('assets/template/img/language/IND.png') }}" alt="Bahasa Indonesia"
                                style="width:20px;height:auto;border-radius:3px;">
                            <span>Indonesia</span>
                        </a>
                        <a href="{{ route('set-locale', 'en') }}" class="dropdown-item-custom">
                            <img src="{{ asset('assets/template/img/language/ENG.png') }}" alt="English"
                                style="width:20px;height:auto;border-radius:3px;">
                            <span>English</span>
                        </a>
                    </div>
                </li>

                {{-- Hubungi Kami (CTA) --}}
                <li class="nav-link-item">
                    <a href="{{ url('/kontak-kami') }}" class="btn-nav-cta">
                        <i class="iconbase ti tabler-phone" aria-hidden="true"></i>
                        {{ __('nav.contact') }}
                    </a>
                </li>
            </ul>

            {{-- TOGGLE MOBILE --}}
            <button class="mobile-menu-toggle d-lg-none" id="mobileMenuToggle" type="button"
                aria-label="Buka navigasi">
                <span></span><span></span><span></span>
            </button>
        </div>
    </div>
</nav>

{{-- SIDEBAR MOBILE --}}
<div class="mobile-sidebar" id="mobileSidebar" aria-hidden="true">
    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <div class="sidebar-content">
        {{-- Header --}}
        <div class="sidebar-header">
            <img src="{{ asset('assets/template/img/logo/logo dwi damar tirta.webp') }}" alt="PT Dwi Damar Tirta">
            <h5 class="mb-0 text-white">Dwi Damar Tirta</h5>
            <button class="sidebar-close" id="sidebarClose" type="button" aria-label="Tutup menu">
                <i class="iconbase ti tabler-x" aria-hidden="true"></i>
            </button>
        </div>

        {{-- Menu --}}
        <ul class="sidebar-menu">

            {{-- Beranda --}}
            <li>
                <a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">
                    <i class="iconbase ti tabler-home" aria-hidden="true"></i>
                    <span>{{ __('nav.home') }}</span>
                </a>
            </li>

            {{-- Profil --}}
            <li class="has-submenu">
                <button type="button" class="menu-toggle {{ Request::is('profil*') ? 'active' : '' }}">
                    <i class="iconbase ti tabler-user-circle" aria-hidden="true"></i>
                    <span class="ms-2">{{ __('nav.profile') }}</span>
                    <span class="arrow-icon">
                        <i class="iconbase ti tabler-chevron-right" aria-hidden="true"></i>
                    </span>
                </button>
                <ul class="submenu">
                    <li>
                        <a href="{{ url('/profil/tentang-kami') }}">
                            {{ __('nav.about') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/profil/visi-misi') }}">
                            {{ __('nav.vissionMission') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/profil/struktur-organisasi') }}">
                            {{ __('nav.structureOrganization') }}
                        </a>
                    </li>
                </ul>
            </li>

            {{-- Pengolahan --}}
            <li class="has-submenu">
                <button type="button" class="menu-toggle {{ Request::is('pengolahan*') ? 'active' : '' }}">
                    <i class="iconbase ti tabler-recycle" aria-hidden="true"></i>
                    <span class="ms-2">{{ __('nav.service') }}</span>
                    <span class="arrow-icon">
                        <i class="iconbase ti tabler-chevron-right" aria-hidden="true"></i>
                    </span>
                </button>
                <ul class="submenu">
                    <li>
                        <a href="{{ url('/layanan-kami') }}">
                            {{ __('nav.service') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/fasilitas') }}">
                            {{ __('nav.facility') }}
                        </a>
                    </li>
                </ul>
            </li>

            {{-- Dokumen --}}
            <li class="has-submenu">
                <button type="button" class="menu-toggle {{ Request::is('dokumen*') ? 'active' : '' }}">
                    <i class="iconbase ti tabler-file-certificate" aria-hidden="true"></i>
                    <span class="ms-2">{{ __('nav.document') }}</span>
                    <span class="arrow-icon">
                        <i class="iconbase ti tabler-chevron-right" aria-hidden="true"></i>
                    </span>
                </button>
                <ul class="submenu">
                    <li>
                        <a href="{{ url('/dokumen/legal') }}">
                            {{ __('nav.legal') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/dokumen/rekomendasi') }}">
                            {{ __('nav.recomendation') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/dokumen/kerjasama') }}">
                            {{ __('nav.partnership') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/dokumen/asuransi') }}">
                            {{ __('nav.insurence') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/dokumen/prestasi') }}">
                            {{ __('nav.achievment') }}
                        </a>
                    </li>
                </ul>
            </li>

            {{-- Gallery --}}
            <li>
                <a href="{{ url('/gallery') }}" class="{{ Request::is('gallery') ? 'active' : '' }}">
                    <i class="iconbase ti tabler-library-photo" aria-hidden="true"></i>
                    <span>{{ __('nav.gallery') }}</span>
                </a>
            </li>

            {{-- Language Switcher (Mobile) --}}
            <li>
                <span class="text-muted small px-4">Language:</span>
                <div class="d-flex align-items-center justify-content-start px-4 py-2 gap-2">
                    <a href="{{ route('set-locale', 'id') }}"
                        class="badge rounded-pill d-flex align-items-center gap-1
               {{ app()->getLocale() === 'id' ? 'bg-primary text-white' : 'bg-light text-dark' }}">
                        <img src="{{ asset('assets/template/img/language/IND.png') }}" alt="Bahasa Indonesia"
                            style="width:18px;height:auto;border-radius:3px;">
                        ID
                    </a>
                    <a href="{{ route('set-locale', 'en') }}"
                        class="badge rounded-pill d-flex align-items-center gap-1
               {{ app()->getLocale() === 'en' ? 'bg-primary text-white' : 'bg-light text-dark' }}">
                        <img src="{{ asset('assets/template/img/language/ENG.png') }}" alt="English"
                            style="width:18px;height:auto;border-radius:3px;">
                        EN
                    </a>
                </div>
            </li>

            {{-- Hubungi Kami --}}
            <li>
                <a href="{{ url('/kontak-kami') }}" class="btn-cta-mobile">
                    <i class="iconbase ti tabler-phone" aria-hidden="true"></i>
                    <span>{{ __('nav.contact') }}</span>
                </a>
            </li>
        </ul>
    </div>
</div>
