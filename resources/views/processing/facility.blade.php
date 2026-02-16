@extends('app')

@section('title', 'Fasilitas & Armada - PT Dwi Damar Tirta')

@push('styles')
@endpush

@section('content')
    {{-- Gudang & Penyimpanan --}}
    <section class="py-6 bg-white">
        <div class="container">
            <div class="section-header mb-5">
                <div class="section-icon">
                    <i class="iconbase ti tabler-building-warehouse"></i>
                </div>
                <div>
                    <h2 class="fw-bold mb-1">Gudang & Fasilitas Penyimpanan</h2>
                    <p class="text-muted mb-0">
                        Fasilitas penyimpanan berstandar K3 dan lingkungan sesuai regulasi.
                    </p>
                </div>
            </div>

            <div class="row g-3">
                <div class="col-md-6 col-xl-3">
                    <div class="card gallery-card border-0 shadow-sm h-100">
                        <div class="card-img-top position-relative overflow-hidden">
                            <img src="{{ asset('assets/template/img/gudang/Gudang1.jpeg') }}" class="img-fluid"
                                alt="Gudang Penyimpanan Limbah B3">
                            <button
                                class="btn btn-icon rounded-circle btn-light position-absolute top-50 start-50 translate-middle"
                                data-bs-toggle="modal" data-bs-target="#imageModal"
                                data-image="{{ asset('assets/template/img/gudang/Gudang2.jpeg') }}"
                                data-title="Gudang Penyimpanan Limbah B3">
                                <i class="iconbase ti tabler-zoom-in"></i>
                            </button>
                        </div>
                        <div class="card-body py-3">
                            <span class="badge bg-primary mb-2 text-uppercase">Gudang</span>
                            <h6 class="card-title mb-1">Gudang 1</h6>
                            <p class="card-text small mb-0">
                                Fasilitas penyimpanan dengan standar K3 dan lingkungan.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="card gallery-card border-0 shadow-sm h-100">
                        <div class="card-img-top position-relative overflow-hidden">
                            <img src="{{ asset('assets/template/img/fasilitas/gudang-3.jpg') }}" class="img-fluid"
                                alt="Ruang Karantina">
                            <button
                                class="btn btn-icon rounded-circle btn-light position-absolute top-50 start-50 translate-middle"
                                data-bs-toggle="modal" data-bs-target="#imageModal"
                                data-image="{{ asset('assets/template/img/fasilitas/gudang-3.jpg') }}"
                                data-title="Ruang Karantina">
                                <i class="iconbase ti tabler-zoom-in"></i>
                            </button>
                        </div>
                        <div class="card-body py-3">
                            <span class="badge bg-primary mb-2 text-uppercase">Gudang</span>
                            <h6 class="card-title mb-1">Gudang 2</h6>
                            <p class="card-text small mb-0">
                                Fasilitas penyimpanan dengan standar K3 dan lingkungan.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="card gallery-card border-0 shadow-sm h-100">
                        <div class="card-img-top position-relative overflow-hidden">
                            <img src="{{ asset('assets/template/img/gudang/Gudang4.jpeg') }}" class="img-fluid"
                                alt="Area Sortir Limbah">
                            <button
                                class="btn btn-icon rounded-circle btn-light position-absolute top-50 start-50 translate-middle"
                                data-bs-toggle="modal" data-bs-target="#imageModal"
                                data-image="{{ asset('assets/template/img/gudang/Gudang4.jpeg') }}"
                                data-title="Area Sortir Limbah">
                                <i class="iconbase ti tabler-zoom-in"></i>
                            </button>
                        </div>
                        <div class="card-body py-3">
                            <span class="badge bg-primary mb-2 text-uppercase">Gudang</span>
                            <h6 class="card-title mb-1">Gudang 3</h6>
                            <p class="card-text small mb-0">
                                Fasilitas penyimpanan dengan standar K3 dan lingkungan.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="card gallery-card border-0 shadow-sm h-100">
                        <div class="card-img-top position-relative overflow-hidden">
                            <img src="{{ asset('assets/template/img/gudang/Gudang4.jpeg') }}" class="img-fluid"
                                alt="Cold Storage">
                            <button
                                class="btn btn-icon rounded-circle btn-light position-absolute top-50 start-50 translate-middle"
                                data-bs-toggle="modal" data-bs-target="#imageModal"
                                data-image="{{ asset('assets/template/img/gudang/Gudang4.jpeg') }}"
                                data-title="Cold Storage">
                                <i class="iconbase ti tabler-zoom-in"></i>
                            </button>
                        </div>
                        <div class="card-body py-3">
                            <span class="badge bg-primary mb-2 text-uppercase">Gudang</span>
                            <h6 class="card-title mb-1">Gudang 4</h6>
                            <p class="card-text small mb-0">
                                Fasilitas penyimpanan dengan standar K3 dan lingkungan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Armada --}}
    <section class="py-6 bg-light">
        <div class="container">
            <div class="section-header mb-5">
                <div class="section-icon bg-success">
                    <i class="iconbase ti tabler-truck"></i>
                </div>
                <div>
                    <h2 class="fw-bold mb-1">Armada Transportasi</h2>
                    <p class="text-muted mb-0">
                        Fleet berizin resmi dengan standar keselamatan tinggi untuk pengangkutan limbah B3.
                    </p>
                </div>
            </div>

            <div class="row g-3">
                <div class="col-lg-6">
                    <div class="card gallery-card border-0 shadow-sm h-100">
                        <div class="card-img-top position-relative overflow-hidden">
                            <img src="{{ asset('assets/template/img/fasilitas/truk-1.jpg') }}" class="img-fluid"
                                alt="Truk Pengangkut Limbah B3">
                            <button
                                class="btn btn-icon rounded-circle btn-light position-absolute top-50 start-50 translate-middle"
                                data-bs-toggle="modal" data-bs-target="#imageModal"
                                data-image="{{ asset('assets/template/img/fasilitas/truk-1.jpg') }}"
                                data-title="Truk Pengangkut Limbah B3">
                                <i class="iconbase ti tabler-zoom-in"></i>
                            </button>
                        </div>
                        <div class="card-body py-3">
                            <span class="badge bg-success mb-2 text-uppercase">Armada</span>
                            <h6 class="card-title mb-1">Truk Pengangkut Limbah B3</h6>
                            <p class="card-text small mb-2">
                                Armada dengan izin Dishub dan standar keselamatan tinggi.
                            </p>
                            <div class="d-flex flex-wrap gap-1 small text-muted">
                                <span><i class="iconbase ti tabler-certificate me-1"></i>Izin Dishub</span>
                                <span><i class="iconbase ti tabler-shield-check me-1"></i>Standar K3</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-12">
                            <div class="card gallery-card border-0 shadow-sm h-100">
                                <div class="card-img-top position-relative overflow-hidden">
                                    <img src="{{ asset('assets/template/img/fasilitas/truk-2.jpg') }}" class="img-fluid"
                                        alt="Truk Tangki">
                                    <button
                                        class="btn btn-icon rounded-circle btn-light position-absolute top-50 start-50 translate-middle"
                                        data-bs-toggle="modal" data-bs-target="#imageModal"
                                        data-image="{{ asset('assets/template/img/fasilitas/truk-2.jpg') }}"
                                        data-title="Truk Tangki">
                                        <i class="iconbase ti tabler-zoom-in"></i>
                                    </button>
                                </div>
                                <div class="card-body py-3">
                                    <span class="badge bg-success mb-2 text-uppercase">Armada</span>
                                    <h6 class="card-title mb-1">Truk Tangki</h6>
                                    <p class="card-text small mb-0">
                                        Untuk pengangkutan limbah cair dengan sistem keamanan ganda.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="card gallery-card border-0 shadow-sm h-100">
                                <div class="card-img-top position-relative overflow-hidden">
                                    <img src="{{ asset('assets/template/img/fasilitas/truk-3.jpg') }}" class="img-fluid"
                                        alt="Fleet Armada">
                                    <button
                                        class="btn btn-icon rounded-circle btn-light position-absolute top-50 start-50 translate-middle"
                                        data-bs-toggle="modal" data-bs-target="#imageModal"
                                        data-image="{{ asset('assets/template/img/fasilitas/truk-3.jpg') }}"
                                        data-title="Fleet Armada">
                                        <i class="iconbase ti tabler-zoom-in"></i>
                                    </button>
                                </div>
                                <div class="card-body py-3">
                                    <span class="badge bg-success mb-2 text-uppercase">Armada</span>
                                    <h6 class="card-title mb-1">Fleet Armada</h6>
                                    <p class="card-text small mb-0">
                                        Armada siap operasional 24/7 untuk kebutuhan pelanggan.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Peralatan --}}
    <section class="py-6 bg-white">
        <div class="container">
            <div class="section-header mb-5">
                <div class="section-icon bg-warning">
                    <i class="iconbase ti tabler-tool"></i>
                </div>
                <div>
                    <h2 class="fw-bold mb-1">Peralatan & Teknologi</h2>
                    <p class="text-muted mb-0">
                        Peralatan modern untuk operasional yang aman dan efisien.
                    </p>
                </div>
            </div>

            <div class="row g-3">
                <div class="col-md-6 col-lg-4">
                    <div class="card gallery-card border-0 shadow-sm h-100">
                        <div class="card-img-top position-relative overflow-hidden">
                            <img src="{{ asset('assets/template/img/fasilitas/fac-forklift.png') }}" class="img-fluid"
                                alt="Forklift">
                            <button
                                class="btn btn-icon rounded-circle btn-light position-absolute top-50 start-50 translate-middle"
                                data-bs-toggle="modal" data-bs-target="#imageModal"
                                data-image="{{ asset('assets/template/img/fasilitas/fac-forklift.png') }}"
                                data-title="Forklift">
                                <i class="iconbase ti tabler-zoom-in"></i>
                            </button>
                        </div>
                        <div class="card-body py-3">
                            <span class="badge bg-warning mb-2 text-uppercase text-dark">Peralatan</span>
                            <h6 class="card-title mb-1">Forklift</h6>
                            <p class="card-text small mb-0">
                                Untuk handling material berat dengan kapasitas 3–5 ton.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card gallery-card border-0 shadow-sm h-100">
                        <div class="card-img-top position-relative overflow-hidden">
                            <img src="{{ asset('assets/template/img/fasilitas/fac-excavator.png') }}"
                                class="img-fluid img-fit" alt="Timbangan Digital">
                            <button
                                class="btn btn-icon rounded-circle btn-light position-absolute top-50 start-50 translate-middle"
                                data-bs-toggle="modal" data-bs-target="#imageModal"
                                data-image="{{ asset('assets/template/img/fasilitas/fac-excavator.png') }}"
                                data-title="Timbangan Digital">
                                <i class="iconbase ti tabler-zoom-in"></i>
                            </button>
                        </div>
                        <div class="card-body py-3">
                            <span class="badge bg-warning mb-2 text-uppercase text-dark">Peralatan</span>
                            <h6 class="card-title mb-1">Excavator</h6>
                            <p class="card-text small mb-0">

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card gallery-card border-0 shadow-sm h-100">
                        <div class="card-img-top position-relative overflow-hidden">
                            <img src="{{ asset('assets/template/img/fasilitas/alat-3.jpg') }}" class="img-fluid"
                                alt="Alat Keselamatan">
                            <button
                                class="btn btn-icon rounded-circle btn-light position-absolute top-50 start-50 translate-middle"
                                data-bs-toggle="modal" data-bs-target="#imageModal"
                                data-image="{{ asset('assets/template/img/fasilitas/alat-3.jpg') }}"
                                data-title="Alat Keselamatan">
                                <i class="iconbase ti tabler-zoom-in"></i>
                            </button>
                        </div>
                        <div class="card-body py-3">
                            <span class="badge bg-warning mb-2 text-uppercase text-dark">Peralatan</span>
                            <h6 class="card-title mb-1">Alat Keselamatan</h6>
                            <p class="card-text small mb-0">
                                APD lengkap untuk semua pekerja sesuai standar K3.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card gallery-card border-0 shadow-sm h-100">
                        <div class="card-img-top position-relative overflow-hidden">
                            <img src="{{ asset('assets/template/img/fasilitas/alat-4.jpg') }}" class="img-fluid"
                                alt="Sistem Monitoring">
                            <button
                                class="btn btn-icon rounded-circle btn-light position-absolute top-50 start-50 translate-middle"
                                data-bs-toggle="modal" data-bs-target="#imageModal"
                                data-image="{{ asset('assets/template/img/fasilitas/alat-4.jpg') }}"
                                data-title="Sistem Monitoring">
                                <i class="iconbase ti tabler-zoom-in"></i>
                            </button>
                        </div>
                        <div class="card-body py-3">
                            <span class="badge bg-warning mb-2 text-uppercase text-dark">Peralatan</span>
                            <h6 class="card-title mb-1">Sistem Monitoring</h6>
                            <p class="card-text small mb-0">
                                CCTV dan sistem monitoring 24/7.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card gallery-card border-0 shadow-sm h-100">
                        <div class="card-img-top position-relative overflow-hidden">
                            <img src="{{ asset('assets/template/img/fasilitas/alat-5.jpg') }}" class="img-fluid"
                                alt="Alat Ukur">
                            <button
                                class="btn btn-icon rounded-circle btn-light position-absolute top-50 start-50 translate-middle"
                                data-bs-toggle="modal" data-bs-target="#imageModal"
                                data-image="{{ asset('assets/template/img/fasilitas/alat-5.jpg') }}"
                                data-title="Alat Ukur">
                                <i class="iconbase ti tabler-zoom-in"></i>
                            </button>
                        </div>
                        <div class="card-body py-3">
                            <span class="badge bg-warning mb-2 text-uppercase text-dark">Peralatan</span>
                            <h6 class="card-title mb-1">Alat Ukur</h6>
                            <p class="card-text small mb-0">
                                Alat ukur parameter limbah yang presisi.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card gallery-card border-0 shadow-sm h-100">
                        <div class="card-img-top position-relative overflow-hidden">
                            <img src="{{ asset('assets/template/img/fasilitas/alat-6.jpg') }}" class="img-fluid"
                                alt="Drum & Container">
                            <button
                                class="btn btn-icon rounded-circle btn-light position-absolute top-50 start-50 translate-middle"
                                data-bs-toggle="modal" data-bs-target="#imageModal"
                                data-image="{{ asset('assets/template/img/fasilitas/alat-6.jpg') }}"
                                data-title="Drum & Container">
                                <i class="iconbase ti tabler-zoom-in"></i>
                            </button>
                        </div>
                        <div class="card-body py-3">
                            <span class="badge bg-warning mb-2 text-uppercase text-dark">Peralatan</span>
                            <h6 class="card-title mb-1">Drum & Container</h6>
                            <p class="card-text small mb-0">
                                Wadah penyimpanan limbah dengan standar internasional.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Modal Image Viewer - Vuexy style --}}
    <div class="modal fade text-start" id="imageModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-bottom">
                    <h5 class="modal-title fw-bold" id="modalTitle">Detail Fasilitas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <img src="" alt="" id="modalImage" class="img-fluid w-100">
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        .py-6 {
            padding-top: 3.5rem;
            padding-bottom: 3.5rem;
        }

        .section-header {
            display: flex;
            align-items: center;
            gap: 1.25rem;
        }

        .section-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .section-icon.bg-success {
            background: linear-gradient(135deg, #56ab2f 0%, #a8e063 100%);
        }

        .section-icon.bg-warning {
            background: linear-gradient(135deg, #f7971e 0%, #ffd200 100%);
        }

        .section-icon i {
            font-size: 1.6rem;
            color: #fff;
        }

        /* Thumbnail fit untuk semua card */
        .gallery-card .card-img-top {
            position: relative;
            height: 180px;
            /* tinggi seragam */
            overflow: hidden;
            background: #f8f9fa;
        }

        .gallery-card .card-img-top img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* gambar selalu fill, tidak gepeng */
            object-position: center;
            /* fokus di tengah */
            transition: transform .3s ease;
            display: block;
        }

        .gallery-card:hover .card-img-top img {
            transform: scale(1.05);
        }

        .gallery-card .btn-icon {
            opacity: 0;
            transition: opacity .2s ease, transform .2s ease;
        }

        .gallery-card:hover .btn-icon {
            opacity: 1;
            transform: translate(-50%, -50%) scale(1.02);
        }

        @media (max-width: 991px) {
            .section-header {
                flex-direction: column;
                text-align: center;
            }

            .gallery-card .card-img-top {
                height: 200px;
                /* sedikit lebih tinggi di mobile */
            }
        }
    </style>
@endpush


@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const imageModal = document.getElementById('imageModal');

            imageModal.addEventListener('show.bs.modal', function(event) {
                const button = event.relatedTarget;
                if (!button) return;

                const imageSrc = button.getAttribute('data-image');
                const imageTitle = button.getAttribute('data-title');

                const modalImage = document.getElementById('modalImage');
                const modalTitle = document.getElementById('modalTitle');

                modalImage.src = imageSrc || '';
                modalImage.alt = imageTitle || '';
                modalTitle.textContent = imageTitle || 'Detail Fasilitas';
            });
        });
    </script>
@endpush
