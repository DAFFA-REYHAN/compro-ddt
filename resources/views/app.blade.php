<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="layout-navbar-fixed layout-wide" dir="ltr"
    data-skin="default" data-bs-theme="light" data-assets-path="{{ asset('assets/template') }}/"
    data-template="front-pages">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    {{-- Robots: default index/follow, bisa di-override --}}
    <meta name="robots" content="@yield('meta_robots', 'index, follow')" />

    <title>@yield('title', 'Dwi Damar Tirta - Pengelolaan Limbah B3')</title>

    <meta name="description" content="@yield('meta_description', 'Dwi Damar Tirta melayani pengangkutan dan pengelolaan limbah B3 di Batam dan Kepulauan Riau.')" />

    {{-- Canonical URL --}}
    <link rel="canonical" href="@yield('canonical', url()->current())" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('/assets/template/img/logo/logo dwi damar tirta.png') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('/assets/template/vendor/fonts/iconify-icons.css') }}" />

    <!-- Core CSS -->

    <link rel="stylesheet" href="{{ asset('/assets/template/vendor/libs/node-waves/node-waves.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/template/vendor/libs/pickr/pickr-themes.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/template/vendor/css/core.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/template/css/demo.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/template/vendor/css/pages/front-page.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/css/navbar.css') }}" />



    <!-- Vendors CSS -->
    <!-- <link rel="stylesheet" href="{{ asset('/assets/template/vendor/libs/nouislider/nouislider.css') }}" /> -->
    <link rel="stylesheet" href="{{ asset('/assets/template/vendor/libs/swiper/swiper.css') }}" />

    <!-- Page CSS -->
    @stack('styles')
    <!-- <link rel="stylesheet" href="{{ asset('/assets/template/vendor/css/pages/front-page-landing.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/template/vendor/css/pages/ui-carousel.css') }}" /> -->

    <!-- Helpers -->
    <script src="{{ asset('/assets/template/vendor/js/helpers.js') }}"></script>
    <script src="{{ asset('/assets/template/vendor/js/template-customizer.js') }}"></script>
    <script src="{{ asset('/assets/template/js/front-config.js') }}"></script>

    {{-- Slot untuk schema / OG / JSON-LD tambahan per halaman --}}
    @stack('head')


</head>

<body>
    <!-- <script src="{{ asset('/assets/template/vendor/js/dropdown-hover.js') }}"></script> -->
    <!-- <script src="{{ asset('/assets/template/vendor/js/mega-dropdown.js') }}"></script> -->

    @include('partials.navbar')

    <div data-bs-spy="scroll" class="scrollspy-example">
        @yield('content')
    </div>

    @include('partials.footer')

    <!-- Core JS -->
    <script src="{{ asset('/assets/template/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('/assets/template/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('/assets/js/app.js') }}"></script>
    <script src="{{ asset('/assets/js/navbar.js') }}"></script>
    <!-- <script src="{{ asset('/assets/template/vendor/libs/node-waves/node-waves.js') }}"></script> -->
    <script src="{{ asset('/assets/template/vendor/libs/pickr/pickr.js') }}"></script>

    <!-- Vendors JS -->
    <!-- <script src="{{ asset('/assets/template/vendor/libs/nouislider/nouislider.js') }}"></script> -->
    <!-- <script src="{{ asset('/assets/template/vendor/libs/swiper/swiper.js') }}"></script> -->



    {{-- Floating CTA & Scroll Top --}}
    <style>
        .floating-actions {
            position: fixed;
            right: 1.25rem;
            bottom: 1.25rem;
            display: flex;
            align-items: flex-end;
            gap: 0.5rem;
            z-index: 1080;
            opacity: 0;
            visibility: hidden;
            transition: opacity .18s ease, visibility .18s ease;
        }

        /* Tombol utama Hubungi Kami */
        .fab-main {
            width: 4rem;
            height: 4rem;
            border-radius: 999px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: #25D366;
            color: #fff;
            border: none;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25);
            cursor: pointer;
        }

        .fab-main i {
            font-size: 1.5rem;
            padding: 0px    ;
        }

        /* Menu Hubungi Kami */
        .fab-wrapper {
            position: relative;
        }

        .fab-menu {
            position: absolute;
            right: 0;
            bottom: 3.4rem;
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            gap: 0.35rem;
            opacity: 0;
            visibility: hidden;
            transform: translateY(6px);
            transition: opacity .18s ease, visibility .18s ease, transform .18s ease;
        }

        .fab-menu.open {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .fab-item {
            display: inline-flex;
            align-items: center;
            border-radius: 999px;
            background: #ffffff;
            color: #111827;
            font-size: .85rem;
            padding: .3rem .75rem;
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.18);
            border: none;
            cursor: pointer;
            white-space: nowrap;
        }

        .fab-item i {
            font-size: 1.25rem;
            margin-left: 0.45rem;
        }

        .fab-label {
            font-size: .8rem;
        }

        /* Tombol scroll top sendiri */
        .btn-scroll-top {
            width: 2.6rem;
            height: 2.6rem;
            border-radius: 999px;
            border: none;
            background: #0d6efd;
            color: #fff;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.22);
            cursor: pointer;
            opacity: 0;
            visibility: hidden;
            transform: translateY(6px);
            transition: opacity .18s ease, visibility .18s ease, transform .18s ease;
        }

        .btn-scroll-top.show {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .btn-scroll-top i {
            font-size: 1.3rem;
        }

        @media (max-width: 575.98px) {
            .floating-actions {
                right: 1rem;
                bottom: 1rem;
                gap: 0.4rem;
            }
        }
    </style>

    <div class="floating-actions" id="floatingActions">
        {{-- Tombol scroll top (terpisah) --}}
        <button type="button" class="btn-scroll-top" id="btnScrollTop" aria-label="Kembali ke atas">
            <i class="iconbase ti tabler-arrow-up"></i>
        </button>

        {{-- Hubungi Kami --}}
        <div class="fab-wrapper">
            <div class="fab-menu" id="fabMenu">
                <button type="button" class="fab-item"
                    onclick="window.open('https://wa.me/628116933777?text=Halo%20Dwi%20Damar%20Tirta,%20saya%20ingin%20bertanya%20tentang%20layanan.','_blank')">
                    <span class="fab-label">WhatsApp</span>
                    <i class="iconbase ti tabler-brand-whatsapp" style="color:#25D366;"></i>
                </button>
                <button type="button" class="fab-item"
                    onclick="window.location.href='mailto:info@dwidamartirta.co.id?subject=Permintaan%20Informasi%20Layanan'">
                    <span class="fab-label">Email</span>
                    <i class="iconbase ti tabler-mail"></i>
                </button>
                <button type="button" class="fab-item" onclick="window.location.href='{{ route('contact') }}'">
                    <span class="fab-label">Get Quotation</span>
                    <i class="iconbase ti tabler-file-text"></i>
                </button>
            </div>

            <button type="button" class="fab-main btn-lg" id="btnFabMain" aria-label="Hubungi kami">
                <i class="iconbase ti tabler-phone"></i>
            </button>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const floating = document.getElementById('floatingActions');
            const btnFabMain = document.getElementById('btnFabMain');
            const fabMenu = document.getElementById('fabMenu');
            const fabScrollTop = document.getElementById('btnScrollTop');
            const heroSection = document.getElementById('hero');

            let triggerOffset = 200;
            if (heroSection) {
                triggerOffset = heroSection.offsetTop + heroSection.offsetHeight;
            }

            // Tampilkan / sembunyikan floating berdasarkan scroll
            window.addEventListener('scroll', function() {
                if (window.scrollY > triggerOffset) {
                    floating.style.opacity = '1';
                    floating.style.visibility = 'visible';
                    fabScrollTop.classList.add('show');
                } else {
                    floating.style.opacity = '0';
                    floating.style.visibility = 'hidden';
                    fabScrollTop.classList.remove('show');
                    fabMenu.classList.remove('open');
                    btnFabMain.innerHTML = '<i class="iconbase ti tabler-phone"></i>';
                }
            });

            // Toggle menu Hubungi Kami
            let isOpen = false;
            btnFabMain.addEventListener('click', function() {
                isOpen = !isOpen;
                fabMenu.classList.toggle('open', isOpen);
                btnFabMain.innerHTML = isOpen ?
                    '<i class="iconbase ti tabler-x"></i>' :
                    '<i class="iconbase ti tabler-phone"></i>';
            });

            // Scroll top
            fabScrollTop.addEventListener('click', function() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });

            // Klik di luar => tutup menu
            document.addEventListener('click', function(e) {
                if (!e.target.closest('.floating-actions')) {
                    isOpen = false;
                    fabMenu.classList.remove('open');
                    btnFabMain.innerHTML = '<i class="iconbase ti tabler-phone"></i>';
                }
            });
        });
    </script>






    @stack('scripts')
</body>

</html>
