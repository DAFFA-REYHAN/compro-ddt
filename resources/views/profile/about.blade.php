@extends('app')

@section('title', 'Tentang Kami - PT Dwi Damar Tirta')

@section('content')
    <section class="py-5 py-lg-6">
        <div class="container-md">
            <div class="row align-items-center g-4 justify-content-center">
                <div class="col-lg-6">
                    <span class="badge rounded-pill bg-label-primary mb-2 p-2">Tentang Kami</span>
                    <h3 class="mb-3">PT Dwi Damar Tirta</h2>

                    {{-- Deskripsi perusahaan --}}
                    <p class="mb-3" style="text-align: justify;">
                        PT Dwi Damar Tirta adalah perusahaan pengumpulan dan pengangkutan limbah B3 dan non‑B3
                        yang berbasis di Batam dan telah beroperasi sejak 2009.
                    </p>
                    <p class="mb-3" style="text-align: justify;">
                        Kami mendukung perusahaan industri dalam menangani limbah secara aman dan patuh regulasi,
                        mulai dari penjemputan di lokasi, pengangkutan dengan armada berizin, hingga dukungan dokumen
                        lingkungan dan perizinan.
                    </p>
                    <p class="mb-4" style="text-align: justify;">
                        Dengan tim berpengalaman dan fasilitas yang sesuai ketentuan, kami berkomitmen menjadi mitra
                        jangka panjang dalam pengelolaan limbah perusahaan Anda.
                    </p>

                    {{-- Jenis limbah yang ditangani --}}
                    <div class="text-center text-lg-start mb-3">
                        <h5 class="mb-1">Jenis limbah yang kami tangani</h5>
                        <small class="text-muted">Limbah B3 dan non‑B3 dari berbagai aktivitas industri</small>
                    </div>

                    <div class="row g-3">
                        <div class="col-sm-6">
                            <h6 class="mb-2">Limbah B3</h6>
                            <ul class="list-unstyled mb-0">
                                <li class="d-flex align-items-start mb-1">
                                    <i class="iconbase ti tabler-check text-success me-2 mt-1"></i>
                                    <span>Aki</span>
                                </li>
                                <li class="d-flex align-items-start mb-1">
                                    <i class="iconbase ti tabler-check text-success me-2 mt-1"></i>
                                    <span>Copper slag</span>
                                </li>
                                <li class="d-flex align-items-start mb-1">
                                    <i class="iconbase ti tabler-check text-success me-2 mt-1"></i>
                                    <span>Sludge oil, slop oil, used oil</span>
                                </li>
                                <li class="d-flex align-items-start mb-1">
                                    <i class="iconbase ti tabler-check text-success me-2 mt-1"></i>
                                    <span>Oily water</span>
                                </li>
                                <li class="d-flex align-items-start mb-1">
                                    <i class="iconbase ti tabler-check text-success me-2 mt-1"></i>
                                    <span>Garnet, blasting sand, PS ball</span>
                                </li>
                                <li class="d-flex align-items-start mb-1">
                                    <i class="iconbase ti tabler-check text-success me-2 mt-1"></i>
                                    <span>Contaminated rag</span>
                                </li>
                                <li class="d-flex align-items-start mb-1">
                                    <i class="iconbase ti tabler-check text-success me-2 mt-1"></i>
                                    <span>Paint sludge, ink sludge</span>
                                </li>
                                <li class="d-flex align-items-start mb-1">
                                    <i class="iconbase ti tabler-check text-success me-2 mt-1"></i>
                                    <span>Empty can, empty drum</span>
                                </li>
                                <li class="d-flex align-items-start">
                                    <i class="iconbase ti tabler-check text-success me-2 mt-1"></i>
                                    <span>Coolant dan limbah sejenis lainnya</span>
                                </li>
                            </ul>
                        </div>

                        <div class="col-sm-6">
                            <h6 class="mb-2">Limbah industri non‑B3</h6>
                            <ul class="list-unstyled mb-0">
                                <li class="d-flex align-items-start mb-1">
                                    <i class="iconbase ti tabler-check text-success me-2 mt-1"></i>
                                    <span>Aluminium</span>
                                </li>
                                <li class="d-flex align-items-start mb-1">
                                    <i class="iconbase ti tabler-check text-success me-2 mt-1"></i>
                                    <span>Tembaga</span>
                                </li>
                                <li class="d-flex align-items-start mb-1">
                                    <i class="iconbase ti tabler-check text-success me-2 mt-1"></i>
                                    <span>Besi</span>
                                </li>
                                <li class="d-flex align-items-start mb-1">
                                    <i class="iconbase ti tabler-check text-success me-2 mt-1"></i>
                                    <span>Kertas dan kardus</span>
                                </li>
                                <li class="d-flex align-items-start">
                                    <i class="iconbase ti tabler-check text-success me-2 mt-1"></i>
                                    <span>Pallet kayu</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 d-none d-md-block">
                    <img src="{{ asset('assets/template/img/Hero/Hero2.png') }}"
                        alt="Kegiatan pengelolaan limbah PT Dwi Damar Tirta" class="img-fluid rounded-4 shadow-sm">
                </div>
            </div>
        </div>
    </section>

    {{-- CTA sederhana (tetap ada) --}}
    <section class="py-5">
        <div class="container">
            <div
                class="d-flex flex-column flex-md-row align-items-start align-items-md-center justify-content-between gap-3 p-4 rounded-3 border bg-outline-light">
                <div class="text-center text-md-start ">
                    <h5 class="mb-1">Ingin konsultasi pengelolaan limbah?</h5>
                    <p class="mb-0 text-muted">
                        Hubungi kami untuk diskusi singkat mengenai kebutuhan limbah B3 dan non‑B3 di perusahaan Anda.
                    </p>
                </div>
                <div class="text-center text-md-start ">
                    <a href="{{ url('/kontak-kami') }}" class="btn btn-primary px-4">
                        Hubungi kami
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
