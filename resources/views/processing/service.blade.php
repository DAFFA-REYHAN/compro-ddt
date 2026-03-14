@extends('app')

@section('title', __('service.page_title'))

@section('content')
    <section class="section-padding" id="services">
        <div class="container mt-4">
            <div class="text-center">
                <span class="badge rounded-pill bg-label-primary px-3 text-uppercase small">
                    {{ __('service.badge') }}
                </span>
                <h2 class="mb-3 fw-bold">
                    {{ __('service.heading') }}
                </h2>
                <p class="text-muted text-small">
                    {{ __('service.smallText') }}
                </p>
            </div>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
                <div class="col">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modal-service1">
                        <div class="card h-100">
                            <img class="card-img-top" src="{{ asset('assets/template/img/layanan-kami/1.png') }}"
                                alt="Pengangkutan Limbah B3" />
                            <div class="card-body pt-0">
                                <h5 class="card-title">{{ __('service.header-card1') }}</h5>
                                <p class="text-muted small-text">{{ __('service.body-card1') }}</p>
                            </div>
                        </div>
                    </button>
                </div>

                <div class="col">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modal-service2">
                        <div class="card h-100">
                            <img class="card-img-top" src="{{ asset('assets/template/img/layanan-kami/3.png') }}"
                                alt="Pengumpulan Limbah B3" />
                            <div class="card-body pt-0">
                                <h5 class="card-title">{{ __('service.header-card2') }}</h5>
                                <p class="text-muted small-text">{{ __('service.body-card2') }}</p>
                            </div>
                        </div>
                    </button>
                </div>

                <div class="col">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modal-service3">
                        <div class="card h-100">
                            <img class="card-img-top" src="{{ asset('assets/template/img/layanan-kami/2.png') }}"
                                alt="Pembersihan Tangki Kapal" />
                            <div class="card-body pt-0">
                                <h5 class="card-title">{{ __('service.header-card3') }}</h5>
                                <p class="text-muted small-text">{{ __('service.body-card3') }}</p>
                            </div>
                        </div>
                    </button>
                </div>

                <div class="col">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modal-service4">
                        <div class="card h-100">
                            <img class="card-img-top" src="{{ asset('assets/template/img/layanan-kami/4.png') }}"
                                alt="Konsultasi Lingkungan & Program CSR" />
                            <div class="card-body pt-0">
                                <h5 class="card-title">{{ __('service.header-card4') }}</h5>
                                <p class="text-muted small-text">{{ __('service.body-card4') }}</p>
                            </div>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- MODAL SERVICE 1 -->
    <div class="modal fade" id="modal-service1" tabindex="-1" >
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ __('service.modal1.title') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h4>{{ __('service.modal1.h4') }}</h4>
                    <p>{{ __('service.modal1.p1') }}</p>
                    <p>{{ __('service.modal1.p2') }}</p>
                    <p>{{ __('service.modal1.p3') }}</p>
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>

    <!-- MODAL SERVICE 2 -->
    <div class="modal fade" id="modal-service2" tabindex="-1" >
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ __('service.modal2.title') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h4>{{ __('service.modal2.h4') }}</h4>
                    <p>{{ __('service.modal2.p1') }}</p>
                    <p>{{ __('service.modal2.p2') }}</p>
                    <p>{{ __('service.modal2.p3') }}</p>
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>

    <!-- MODAL SERVICE 3 -->
    <div class="modal fade" id="modal-service3" tabindex="-1" >
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ __('service.modal3.title') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h4>{{ __('service.modal3.h4') }}</h4>
                    <p>{{ __('service.modal3.p1') }}</p>
                    <p>{{ __('service.modal3.p2') }}</p>
                    <p>{{ __('service.modal3.p3') }}</p>
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>

    <!-- MODAL SERVICE 4 -->
    <div class="modal fade" id="modal-service4" tabindex="-1" >
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ __('service.modal4.title') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h4>{{ __('service.modal4.h4') }}</h4>
                    <p>{{ __('service.modal4.p1') }}</p>
                    <p>{{ __('service.modal4.p2') }}</p>
                    <p>{{ __('service.modal4.p3') }}</p>
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        .card-body p {
            text-align: justify !important;
        }
    </style>
@endpush
