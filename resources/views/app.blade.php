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

    @stack('scripts')
</body>

</html>
