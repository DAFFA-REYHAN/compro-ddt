@extends('app')

@section('title', __('about.page_title'))

@section('content')
    <section class="py-5 py-lg-6">
        <div class="container-md">
            <div class="row align-items-center g-4 justify-content-center">
                <div class="col-lg-6">
                    <span class="badge rounded-pill bg-label-primary mb-3 px-3 py-2 text-uppercase small">
                        {{ __('about.badge') }}
                    </span>

                    <h2 class="mb-3 fw-bold">
                        {{ __('about.heading') }}
                    </h2>

                    {{-- Deskripsi perusahaan --}}
                    <p class="mb-3 text-body-secondary" style="text-align: justify;">
                        {{ __('about.paragraph_1') }}
                    </p>
                    <p class="mb-3 text-body-secondary" style="text-align: justify;">
                        {{ __('about.paragraph_2') }}
                    </p>
                    <p class="mb-4 text-body-secondary" style="text-align: justify;">
                        {{ __('about.paragraph_3') }}
                    </p>

                    {{-- Jenis limbah yang ditangani --}}
                    <div class="card border-0 shadow-sm mb-3">
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <h5 class="mb-1">
                                    {{ __('about.waste_title') }}
                                </h5>
                                <small class="text-muted">
                                    {{ __('about.waste_subtitle') }}
                                </small>
                            </div>

                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <h6 class="mb-2">
                                        {{ __('about.hazardous_title') }}
                                    </h6>
                                    <ul class="list-unstyled mb-0 small">
                                        <li class="d-flex align-items-start mb-1">
                                            <i class="iconbase ti tabler-check text-success me-2 mt-1"></i>
                                            <span>{{ __('about.hazardous_1') }}</span>
                                        </li>
                                        <li class="d-flex align-items-start mb-1">
                                            <i class="iconbase ti tabler-check text-success me-2 mt-1"></i>
                                            <span>{{ __('about.hazardous_2') }}</span>
                                        </li>
                                        <li class="d-flex align-items-start mb-1">
                                            <i class="iconbase ti tabler-check text-success me-2 mt-1"></i>
                                            <span>{{ __('about.hazardous_3') }}</span>
                                        </li>
                                        <li class="d-flex align-items-start mb-1">
                                            <i class="iconbase ti tabler-check text-success me-2 mt-1"></i>
                                            <span>{{ __('about.hazardous_4') }}</span>
                                        </li>
                                        <li class="d-flex align-items-start mb-1">
                                            <i class="iconbase ti tabler-check text-success me-2 mt-1"></i>
                                            <span>{{ __('about.hazardous_5') }}</span>
                                        </li>
                                        <li class="d-flex align-items-start mb-1">
                                            <i class="iconbase ti tabler-check text-success me-2 mt-1"></i>
                                            <span>{{ __('about.hazardous_6') }}</span>
                                        </li>
                                        <li class="d-flex align-items-start mb-1">
                                            <i class="iconbase ti tabler-check text-success me-2 mt-1"></i>
                                            <span>{{ __('about.hazardous_7') }}</span>
                                        </li>
                                        <li class="d-flex align-items-start mb-1">
                                            <i class="iconbase ti tabler-check text-success me-2 mt-1"></i>
                                            <span>{{ __('about.hazardous_8') }}</span>
                                        </li>
                                        <li class="d-flex align-items-start">
                                            <i class="iconbase ti tabler-check text-success me-2 mt-1"></i>
                                            <span>{{ __('about.hazardous_9') }}</span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-sm-6">
                                    <h6 class="mb-2">
                                        {{ __('about.non_hazardous_title') }}
                                    </h6>
                                    <ul class="list-unstyled mb-0 small">
                                        <li class="d-flex align-items-start mb-1">
                                            <i class="iconbase ti tabler-check text-success me-2 mt-1"></i>
                                            <span>{{ __('about.non_hazardous_1') }}</span>
                                        </li>
                                        <li class="d-flex align-items-start mb-1">
                                            <i class="iconbase ti tabler-check text-success me-2 mt-1"></i>
                                            <span>{{ __('about.non_hazardous_2') }}</span>
                                        </li>
                                        <li class="d-flex align-items-start mb-1">
                                            <i class="iconbase ti tabler-check text-success me-2 mt-1"></i>
                                            <span>{{ __('about.non_hazardous_3') }}</span>
                                        </li>
                                        <li class="d-flex align-items-start mb-1">
                                            <i class="iconbase ti tabler-check text-success me-2 mt-1"></i>
                                            <span>{{ __('about.non_hazardous_4') }}</span>
                                        </li>
                                        <li class="d-flex align-items-start">
                                            <i class="iconbase ti tabler-check text-success me-2 mt-1"></i>
                                            <span>{{ __('about.non_hazardous_5') }}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6 d-none d-md-block">
                    <div class="position-relative">
                        <img src="{{ asset('assets/template/img/Hero/Hero2.png') }}"
                             alt="{{ __('about.image_alt') }}"
                             class="img-fluid rounded-4 shadow-sm">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
