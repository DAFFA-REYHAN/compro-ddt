@extends('app')
@section('title', 'Dokumen')

@section('content')
    <section class="container py-5 py-md-6">
        <div class="mb-4 text-center">
            <span class="badge rounded-pill bg-label-primary text-uppercase small mb-2">
                {{ __('document.badge') }}
            </span>
            <h2 class="fw-bold mb-2">{{ __('document.heading') }}</h2>
            <p class="text-muted mb-0">
                {{ __('document.subheading') }}
            </p>
        </div>

        <div class="row row-cols-1 row-cols-lg-2">
            {{-- Legal & Perizinan --}}
            <div class="col mb-2">
                <div class="card">
                    <div class="card-header mb-2 pb-2 text-center">
                        <h4>
                            <i class="icon-base icon-base ti tabler-file-certificate me-2"></i>
                            {{ __('document.legal_title') }}
                        </h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">

                            <li class="list-group-item">
                                <div class="d-flex align-items-center">
                                    <i class="icon-base icon-base ti tabler-check me-3 text-success"></i>
                                    <div class="d-flex flex-column">
                                        <span class="fw-bold">
                                            {{ __('document.legal_1_title') }}
                                        </span>
                                        <small class="text-muted">
                                            {{ __('document.legal_1_number') }}
                                        </small>
                                    </div>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="d-flex align-items-center">
                                    <i class="icon-base icon-base ti tabler-check me-3 text-success"></i>
                                    <div class="d-flex flex-column">
                                        <span class="fw-bold">
                                            {{ __('document.legal_2_title') }}
                                        </span>
                                        <small class="text-muted">
                                            {{ __('document.legal_2_number') }}
                                        </small>
                                    </div>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="d-flex align-items-center">
                                    <i class="icon-base icon-base ti tabler-check me-3 text-success"></i>
                                    <div class="d-flex flex-column">
                                        <span class="fw-bold">
                                            {{ __('document.legal_3_title') }}
                                        </span>
                                        <small class="text-muted">
                                            {{ __('document.legal_3_issuer') }}
                                        </small>
                                        <small class="text-muted">
                                            {{ __('document.legal_3_number') }}
                                        </small>
                                    </div>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="d-flex align-items-center">
                                    <i class="icon-base icon-base ti tabler-check me-3 text-success"></i>
                                    <div class="d-flex flex-column">
                                        <span class="fw-bold">
                                            {{ __('document.legal_4_title') }}
                                        </span>
                                        <small class="text-muted">
                                            {{ __('document.legal_4_issuer') }}
                                        </small>
                                        <small class="text-muted">
                                            {{ __('document.legal_4_number') }}
                                        </small>
                                    </div>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="d-flex align-items-center">
                                    <i class="icon-base icon-base ti tabler-check me-3 text-success"></i>
                                    <div class="d-flex flex-column">
                                        <span class="fw-bold">
                                            {!! __('document.legal_5_title') !!}
                                        </span>
                                        <small class="text-muted">
                                            {{ __('document.legal_5_issuer') }}
                                        </small>
                                        <small class="text-muted">
                                            {{ __('document.legal_5_number') }}
                                        </small>
                                    </div>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="d-flex align-items-center">
                                    <i class="icon-base icon-base ti tabler-check me-3 text-success"></i>
                                    <div class="d-flex flex-column">
                                        <span class="fw-bold">
                                            {!! __('document.legal_6_title') !!}
                                        </span>
                                        <small class="text-muted">
                                            {{ __('document.legal_6_issuer') }}
                                        </small>
                                        <small class="text-muted">
                                            {{ __('document.legal_6_number') }}
                                        </small>
                                    </div>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="d-flex align-items-center">
                                    <i class="icon-base icon-base ti tabler-check me-3 text-success"></i>
                                    <div class="d-flex flex-column">
                                        <span class="fw-bold">
                                            {{ __('document.legal_7_title') }}
                                        </span>
                                        <small class="text-muted">
                                            {{ __('document.legal_7_issuer') }}
                                        </small>
                                        <small class="text-muted">
                                            {{ __('document.legal_7_number') }}
                                        </small>
                                    </div>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="d-flex align-items-center">
                                    <i class="icon-base icon-base ti tabler-check me-3 text-success"></i>
                                    <div class="d-flex flex-column">
                                        <span class="fw-bold">
                                            {{ __('document.legal_8_title') }}
                                        </span>
                                        <small class="text-muted">
                                            {{ __('document.legal_8_issuer') }}
                                        </small>
                                        <small class="text-muted">
                                            {{ __('document.legal_8_number') }}
                                        </small>
                                    </div>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="d-flex align-items-center">
                                    <i class="icon-base icon-base ti tabler-check me-3 text-success"></i>
                                    <div class="d-flex flex-column">
                                        <span class="fw-bold">
                                            {{ __('document.legal_9_title') }}
                                        </span>
                                        <small>
                                            <a href="/fasilitas" class="btn btn-sm btn-outline-success">
                                                {{ __('document.legal_9_button') }}
                                            </a>
                                        </small>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

            {{-- Asuransi + Kerja Sama --}}
            <div class="col">
                <div class="card">
                    <div class="card-header mb-2 pb-2 text-center">
                        <h4>
                            <i class="icon-base icon-base ti tabler-shield-half me-2"></i>
                            {{ __('document.insurance_title') }}
                        </h4>
                    </div>
                    <div class="card-body">
                        <p class="text-small text-muted" style="text-align: justify;">
                            {!! __('document.insurance_text') !!}
                        </p>
                        <div class="text-center">
                            <img src="{{ asset('assets/template/img/dokumen/ddt-asuransi.png') }}"
                                alt="{{ __('document.insurance_img_alt') }}" class="img-fluid" style="max-width: 200px;">
                        </div>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-header mb-2 pb-2 text-center">
                        <h4>
                            <i class="icon-base icon-base ti tabler-heart-handshake me-2"></i>
                            {{ __('document.partnership_title') }}
                        </h4>
                    </div>
                    <div class="card-body">
                        <p class="text-small text-muted" style="text-align: justify;">
                            {{ __('document.partnership_text') }}
                        </p>
                        <ul class="list-group">
                            <li class="list-group-item d-flex align-items-center">
                                <i class="icon-base icon-base ti tabler-users-group text-primary me-2"></i>
                                {{ __('document.partner_1') }}
                            </li>
                            <li class="list-group-item d-flex align-items-center">
                                <i class="icon-base icon-base ti tabler-users-group text-primary me-2"></i>
                                {{ __('document.partner_2') }}
                            </li>
                            <li class="list-group-item d-flex align-items-center">
                                <i class="icon-base icon-base ti tabler-users-group text-primary me-2"></i>
                                {{ __('document.partner_3') }}
                            </li>
                            <li class="list-group-item d-flex align-items-center">
                                <i class="icon-base icon-base ti tabler-users-group text-primary me-2"></i>
                                {{ __('document.partner_4') }}
                            </li>
                            <li class="list-group-item d-flex align-items-center">
                                <i class="icon-base icon-base ti tabler-users-group text-primary me-2"></i>
                                {{ __('document.partner_5') }}
                            </li>
                            <li class="list-group-item d-flex align-items-center">
                                <i class="icon-base icon-base ti tabler-users-group text-primary me-2"></i>
                                {{ __('document.partner_6') }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        {{-- Prestasi --}}
        <div class="border mt-5 rounded rounded-lg p-2">
            <div class="mb-2 mt-5 text-center">
                <h3>
                    <i class="icon-base icon-base ti tabler-file-certificate me-2"></i>
                    {{ __('document.achievement_title') }}
                </h3>
                <p class="text-muted text-small">
                    {{ __('document.achievement_subtitle') }}
                </p>
            </div>

            <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-3 prestasi-gallery">
                <div class="col">
                    <div class="card h-100 text-center">
                        <a href="{{ asset('assets/template/img/achievments/achievement-01a.jpg') }}"
                            class="prestasi-item d-block">
                            <img src="{{ asset('assets/template/img/achievments/achievement-01a.jpg') }}"
                                class="card-img-top p-3 img-fluid" alt="{{ __('document.achv_1_alt') }}"
                                style="max-width: 150px;">
                        </a>
                        <div class="card-body">
                            <h6 class="fw-bold">
                                {{ __('document.achv_1_title') }}
                            </h6>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 text-center">
                        <a href="{{ asset('assets/template/img/achievments/achievement-01b.jpg') }}"
                            class="prestasi-item d-block">
                            <img src="{{ asset('assets/template/img/achievments/achievement-01b.jpg') }}"
                                class="card-img-top p-3" alt="{{ __('document.achv_2_alt') }}">
                        </a>
                        <div class="card-body">
                            <h6 class="fw-bold">
                                {{ __('document.achv_2_title') }}
                            </h6>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 text-center">
                        <a href="{{ asset('assets/template/img/achievments/achievement-02a.jpg') }}"
                            class="prestasi-item d-block">
                            <img src="{{ asset('assets/template/img/achievments/achievement-02a.jpg') }}"
                                class="card-img-top p-3" alt="{{ __('document.achv_3_alt') }}">
                        </a>
                        <div class="card-body">
                            <h6 class="fw-bold">
                                {{ __('document.achv_3_title') }}
                            </h6>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 text-center">
                        <a href="{{ asset('assets/template/img/achievments/achievement-02b.jpg') }}"
                            class="prestasi-item d-block">
                            <img src="{{ asset('assets/template/img/achievments/achievement-02b.jpg') }}"
                                class="card-img-top p-3" alt="{{ __('document.achv_4_alt') }}">
                        </a>
                        <div class="card-body">
                            <h6 class="fw-bold">
                                {{ __('document.achv_4_title') }}
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@push('scripts')
    <!-- jQuery (kalau belum ada) -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" />

    <!-- Magnific Popup JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.prestasi-gallery').magnificPopup({
                delegate: 'a.prestasi-item',
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        });
    </script>
@endpush
