<!doctype html>

<html lang="en" class=" layout-navbar-fixed layout-wide " dir="ltr" data-skin="default" data-bs-theme="light"
    data-assets-path="{{ asset('assets/template') }}/" data-template="front-pages">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="robots" content="noindex, nofollow" />
    <title>Dwi Damar Tirta</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('/assets/template/img/logo/logo dwi damar tirta.png') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('/assets/template/vendor/fonts/iconify-icons.css') }}" />

    <script src="{{ asset('/assets/template/vendor/libs/@algolia/autocomplete-js.js') }}"></script>

    <!-- Core CSS -->
    <!-- build:css assets/vendor/css/theme.css')}}  -->

    <link rel="stylesheet" href="{{ asset('/assets/template/vendor/libs/node-waves/node-waves.css') }}" />

    <link rel="stylesheet" href="{{ asset('/assets/template/vendor/libs/pickr/pickr-themes.css') }}" />

    <link rel="stylesheet" href="{{ asset('/assets/template/vendor/css/core.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/template/css/demo.css') }}" />

    <link rel="stylesheet" href="{{ asset('/assets/template/vendor/css/pages/front-page.css') }}" />

    <!-- Vendors CSS -->

    <!-- endbuild -->

    <link rel="stylesheet" href="{{ asset('/assets/template/vendor/libs/nouislider/nouislider.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/template/vendor/libs/swiper/swiper.css') }}" />

    <!-- Page CSS -->

    <link rel="stylesheet" href="{{ asset('/assets/template/vendor/css/pages/front-page-landing.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/template/vendor/css/pages/ui-carousel.css') }}" />

    <!-- Helpers -->
    <script src="{{ asset('/assets/template/vendor/js/helpers.js') }}"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js')}} in the <head> section -->

    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js')}}.  -->
    <script src="{{ asset('/assets/template/vendor/js/template-customizer.js') }}"></script>

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->

    <script src="{{ asset('/assets/template/js/front-config.js') }}"></script>

    @stack('styles')
</head>

<body>
    <script src="{{ asset('/assets/template/vendor/js/dropdown-hover.js') }}"></script>
    <script src="{{ asset('/assets/template/vendor/js/mega-dropdown.js') }}"></script>
    <!-- Navbar: Start -->
    @include('partials.navbar')
    <!-- Navbar: End -->

    <!-- Sections:Start -->

    <div data-bs-spy="scroll" class="scrollspy-example">
        @yield('content')

    </div>

    <!-- / Sections:End -->

    @include('partials.footer')

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/theme.js')}}  -->

    <script src="{{ asset('/assets/template/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('/assets/template/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('/assets/template/vendor/libs/node-waves/node-waves.js') }}"></script>

    <script src="{{ asset('/assets/template/vendor/libs/pickr/pickr.js') }}"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('/assets/template/vendor/libs/nouislider/nouislider.js') }}"></script>
    <script src="{{ asset('/assets/template/vendor/libs/swiper/swiper.js') }}"></script>

    <!-- Main JS -->

    <!-- <script src="{{ asset('/assets/template/js/front-main.js') }}"></script> -->

    <!-- Page JS -->
    <link rel="stylesheet" href="{{ asset('/assets/template/vendor/libs/swiper/swiper.css') }}" />

    @stack('scripts')
</body>

</html>
