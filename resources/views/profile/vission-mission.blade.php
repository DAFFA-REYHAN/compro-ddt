@extends('app')

@section('title', __('vission-mission.page_title'))

@section('content')
    {{-- VISI & MISI --}}
    <section class="py-5 py-lg-6 bg-white">
        <div class="container">
            {{-- Intro singkat --}}
            <div class="row justify-content-center mb-4">
                <div class="col-lg-10 text-center">
                    <span class="badge rounded-pill bg-label-primary mb-2">
                        {{ __('vission-mission.badge') }}
                    </span>
                    <h2 class="mb-3 text-uppercase">
                        {{ __('vission-mission.heading') }}
                    </h2>
                    <p class="mb-0 text-muted">
                        {{ __('vission-mission.intro') }}
                    </p>
                </div>
            </div>

            <div class="row g-4">
                {{-- Card VISI (kiri) --}}
                <div class="col-md-6">
                    <div class="card h-100 p-4 p-md-5 text-center text-md-start">
                        <h3 class="mb-3 text-center fw-bold text-uppercase">
                            {{ __('vission-mission.visi_title') }}
                        </h3>
                        <p class="mb-0 text-muted text-center">
                            {{ __('vission-mission.visi_text') }}
                        </p>
                    </div>
                </div>

                {{-- Card MISI (kanan) --}}
                <div class="col-md-6">
                    <div class="card h-100 p-4 p-md-5">
                        <div class="text-center text-md-start mb-3">
                            <h3 class="mb-0 text-center fw-bold text-uppercase">
                                {{ __('vission-mission.misi_title') }}
                            </h3>
                        </div>

                        <div class="row g-3">
                            {{-- Misi 1 --}}
                            <div class="col-12">
                                <div class="d-flex">
                                    <div class="me-3 text-success">
                                        <i class="icon-base ti tabler-check fs-4"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-1">
                                            {{ __('vission-mission.misi_1_title') }}
                                        </h6>
                                        <p class="mb-0 text-muted small">
                                            {{ __('vission-mission.misi_1_text') }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            {{-- Misi 2 --}}
                            <div class="col-12">
                                <div class="d-flex">
                                    <div class="me-3 text-success">
                                        <i class="icon-base ti tabler-check fs-4"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-1">
                                            {{ __('vission-mission.misi_2_title') }}
                                        </h6>
                                        <p class="mb-0 text-muted small">
                                            {{ __('vission-mission.misi_2_text') }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            {{-- Misi 3 --}}
                            <div class="col-12">
                                <div class="d-flex">
                                    <div class="me-3 text-success">
                                        <i class="icon-base ti tabler-check fs-4"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-1">
                                            {{ __('vission-mission.misi_3_title') }}
                                        </h6>
                                        <p class="mb-0 text-muted small">
                                            {{ __('vission-mission.misi_3_text') }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            {{-- Misi 4 --}}
                            <div class="col-12">
                                <div class="d-flex">
                                    <div class="me-3 text-success">
                                        <i class="icon-base ti tabler-check fs-4"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-1">
                                            {{ __('vission-mission.misi_4_title') }}
                                        </h6>
                                        <p class="mb-0 text-muted small">
                                            {{ __('vission-mission.misi_4_text') }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            {{-- Misi 5 --}}
                            <div class="col-12">
                                <div class="d-flex">
                                    <div class="me-3 text-success">
                                        <i class="icon-base ti tabler-check fs-4"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-1">
                                            {{ __('vission-mission.misi_5_title') }}
                                        </h6>
                                        <p class="mb-0 text-muted small">
                                            {{ __('vission-mission.misi_5_text') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div> {{-- /.row misi --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA sederhana (tetap) --}}
    <section class="py-5 bg-white">
        <div class="container">
            <div
                class="d-flex flex-column flex-md-row align-items-start align-items-md-center justify-content-between gap-3 p-4 rounded-3 border bg-outline-light">
                <div>
                    <h5 class="mb-1">
                        {{ __('vission-mission.cta_title') }}
                    </h5>
                    <p class="mb-0 text-muted">
                        {{ __('vission-mission.cta_text') }}
                    </p>
                </div>
                <div>
                    <a href="{{ url('/kontak-kami') }}" class="btn btn-primary px-4">
                        {{ __('vission-mission.cta_button') }}
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
