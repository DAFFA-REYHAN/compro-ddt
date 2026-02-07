@extends('app')

@section('title', 'Fasilitas & Armada - PT Dwi Damar Tirta')

@push('styles')
@endpush

@section('content')
    {{-- Hero Section --}}
    <section class="hero-gradient position-relative overflow-hidden">
        <div class="hero-pattern"></div>
        <div class="container position-relative" style="z-index: 2;">
            <div class="row min-vh-40 align-items-center py-5">
                <div class="col-lg-8 mx-auto text-center">
                    <div class="animate-fade-in">
                        <div class="badge-custom mb-4">
                            <span class="dot me-2"></span>
                            Fasilitas Perusahaan
                        </div>
                        <h1 class="display-3 fw-bold text-white mb-4">
                            Fasilitas & Armada
                        </h1>
                        <p class="lead text-white-50 mb-0 fs-4">
                            Dilengkapi peralatan modern dan armada lengkap untuk pengelolaan limbah B3
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-wave">
            <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M0 120L60 110C120 100 240 80 360 70C480 60 600 60 720 65C840 70 960 80 1080 85C1200 90 1320 90 1380 90L1440 90V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z"
                    fill="white" />
            </svg>
        </div>
    </section>

    {{-- Gudang & Penyimpanan Section --}}
    <section class="py-6 bg-white">
        <div class="container">
            <div class="section-header mb-5">
                <div class="section-icon">
                    <i class="iconbase ti tabler-building-warehouse"></i>
                </div>
                <div>
                    <h2 class="fw-bold mb-2">Gudang & Fasilitas Penyimpanan</h2>
                    <p class="text-muted mb-0">Fasilitas penyimpanan dengan standar keamanan tinggi sesuai regulasi</p>
                </div>
            </div>

            <div class="gallery-masonry">
                <div class="masonry-column">
                    <div class="gallery-card-modern">
                        <div class="card-image-wrapper">
                            <img src="{{ asset('assets/template/img/fasilitas/gudang-1.jpg') }}"
                                alt="Gudang Penyimpanan Limbah B3">
                            <div class="image-overlay">
                                <button class="btn-zoom" data-bs-toggle="modal" data-bs-target="#imageModal"
                                    data-image="{{ asset('assets/template/img/fasilitas/gudang-1.jpg') }}"
                                    data-title="Gudang Penyimpanan Limbah B3">
                                    <i class="iconbase ti tabler-zoom-in"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-content">
                            <span class="card-badge badge-warehouse">Gudang</span>
                            <h5 class="card-title">Gudang Penyimpanan Limbah B3</h5>
                            <p class="card-desc">Fasilitas penyimpanan dengan standar K3 dan lingkungan</p>
                        </div>
                    </div>

                    <div class="gallery-card-modern">
                        <div class="card-image-wrapper">
                            <img src="{{ asset('assets/template/img/fasilitas/gudang-3.jpg') }}" alt="Ruang Karantina">
                            <div class="image-overlay">
                                <button class="btn-zoom" data-bs-toggle="modal" data-bs-target="#imageModal"
                                    data-image="{{ asset('assets/template/img/fasilitas/gudang-3.jpg') }}"
                                    data-title="Ruang Karantina">
                                    <i class="iconbase ti tabler-zoom-in"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-content">
                            <span class="card-badge badge-warehouse">Gudang</span>
                            <h5 class="card-title">Ruang Karantina</h5>
                            <p class="card-desc">Area khusus untuk limbah B3 yang memerlukan penanganan ekstra</p>
                        </div>
                    </div>
                </div>

                <div class="masonry-column">
                    <div class="gallery-card-modern">
                        <div class="card-image-wrapper">
                            <img src="{{ asset('assets/template/img/fasilitas/gudang-2.jpg') }}" alt="Area Sortir Limbah">
                            <div class="image-overlay">
                                <button class="btn-zoom" data-bs-toggle="modal" data-bs-target="#imageModal"
                                    data-image="{{ asset('assets/template/img/fasilitas/gudang-2.jpg') }}"
                                    data-title="Area Sortir Limbah">
                                    <i class="iconbase ti tabler-zoom-in"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-content">
                            <span class="card-badge badge-warehouse">Gudang</span>
                            <h5 class="card-title">Area Sortir Limbah</h5>
                            <p class="card-desc">Tempat pemilahan dan pengelompokan limbah berdasarkan kategori</p>
                        </div>
                    </div>

                    <div class="gallery-card-modern">
                        <div class="card-image-wrapper">
                            <img src="{{ asset('assets/template/img/fasilitas/gudang-4.jpg') }}" alt="Cold Storage">
                            <div class="image-overlay">
                                <button class="btn-zoom" data-bs-toggle="modal" data-bs-target="#imageModal"
                                    data-image="{{ asset('assets/template/img/fasilitas/gudang-4.jpg') }}"
                                    data-title="Cold Storage">
                                    <i class="iconbase ti tabler-zoom-in"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-content">
                            <span class="card-badge badge-warehouse">Gudang</span>
                            <h5 class="card-title">Cold Storage</h5>
                            <p class="card-desc">Penyimpanan limbah dengan kontrol suhu khusus</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Armada Section --}}
    <section class="py-6 bg-light">
        <div class="container">
            <div class="section-header mb-5">
                <div class="section-icon bg-success">
                    <i class="iconbase ti tabler-truck"></i>
                </div>
                <div>
                    <h2 class="fw-bold mb-2">Armada Transportasi</h2>
                    <p class="text-muted mb-0">Fleet lengkap dengan izin resmi untuk pengangkutan limbah B3</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="gallery-card-modern card-large">
                        <div class="card-image-wrapper">
                            <img src="{{ asset('assets/template/img/fasilitas/truk-1.jpg') }}"
                                alt="Truk Pengangkut Limbah B3">
                            <div class="image-overlay">
                                <button class="btn-zoom" data-bs-toggle="modal" data-bs-target="#imageModal"
                                    data-image="{{ asset('assets/template/img/fasilitas/truk-1.jpg') }}"
                                    data-title="Truk Pengangkut Limbah B3">
                                    <i class="iconbase ti tabler-zoom-in"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-content">
                            <span class="card-badge badge-vehicle">Armada</span>
                            <h5 class="card-title">Truk Pengangkut Limbah B3</h5>
                            <p class="card-desc">Armada lengkap dengan izin Dishub dan standar keselamatan tinggi</p>
                            <div class="card-specs">
                                <span><i class="iconbase ti tabler-certificate"></i> Izin Dishub</span>
                                <span><i class="iconbase ti tabler-shield-check"></i> Standar K3</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="gallery-card-modern">
                                <div class="card-image-wrapper">
                                    <img src="{{ asset('assets/template/img/fasilitas/truk-2.jpg') }}" alt="Truk Tangki">
                                    <div class="image-overlay">
                                        <button class="btn-zoom" data-bs-toggle="modal" data-bs-target="#imageModal"
                                            data-image="{{ asset('assets/template/img/fasilitas/truk-2.jpg') }}"
                                            data-title="Truk Tangki">
                                            <i class="iconbase ti tabler-zoom-in"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <span class="card-badge badge-vehicle">Armada</span>
                                    <h5 class="card-title">Truk Tangki</h5>
                                    <p class="card-desc">Untuk pengangkutan limbah cair dengan sistem keamanan ganda</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="gallery-card-modern">
                                <div class="card-image-wrapper">
                                    <img src="{{ asset('assets/template/img/fasilitas/truk-3.jpg') }}"
                                        alt="Fleet Armada">
                                    <div class="image-overlay">
                                        <button class="btn-zoom" data-bs-toggle="modal" data-bs-target="#imageModal"
                                            data-image="{{ asset('assets/template/img/fasilitas/truk-3.jpg') }}"
                                            data-title="Fleet Armada">
                                            <i class="iconbase ti tabler-zoom-in"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <span class="card-badge badge-vehicle">Armada</span>
                                    <h5 class="card-title">Fleet Armada</h5>
                                    <p class="card-desc">Armada lengkap siap operasional 24/7</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Peralatan Section --}}
    <section class="py-6 bg-white">
        <div class="container">
            <div class="section-header mb-5">
                <div class="section-icon bg-warning">
                    <i class="iconbase ti tabler-tool"></i>
                </div>
                <div>
                    <h2 class="fw-bold mb-2">Peralatan & Teknologi</h2>
                    <p class="text-muted mb-0">Peralatan modern untuk operasional yang aman dan efisien</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="gallery-card-modern">
                        <div class="card-image-wrapper">
                            <img src="{{ asset('assets/template/img/fasilitas/alat-1.jpg') }}" alt="Forklift">
                            <div class="image-overlay">
                                <button class="btn-zoom" data-bs-toggle="modal" data-bs-target="#imageModal"
                                    data-image="{{ asset('assets/template/img/fasilitas/alat-1.jpg') }}"
                                    data-title="Forklift">
                                    <i class="iconbase ti tabler-zoom-in"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-content">
                            <span class="card-badge badge-equipment">Peralatan</span>
                            <h5 class="card-title">Forklift</h5>
                            <p class="card-desc">Untuk handling material berat dengan kapasitas 3-5 ton</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="gallery-card-modern">
                        <div class="card-image-wrapper">
                            <img src="{{ asset('assets/template/img/fasilitas/alat-2.jpg') }}" alt="Timbangan Digital">
                            <div class="image-overlay">
                                <button class="btn-zoom" data-bs-toggle="modal" data-bs-target="#imageModal"
                                    data-image="{{ asset('assets/template/img/fasilitas/alat-2.jpg') }}"
                                    data-title="Timbangan Digital">
                                    <i class="iconbase ti tabler-zoom-in"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-content">
                            <span class="card-badge badge-equipment">Peralatan</span>
                            <h5 class="card-title">Timbangan Digital</h5>
                            <p class="card-desc">Akurat dan terkalibrasi sesuai standar</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="gallery-card-modern">
                        <div class="card-image-wrapper">
                            <img src="{{ asset('assets/template/img/fasilitas/alat-3.jpg') }}" alt="Alat Keselamatan">
                            <div class="image-overlay">
                                <button class="btn-zoom" data-bs-toggle="modal" data-bs-target="#imageModal"
                                    data-image="{{ asset('assets/template/img/fasilitas/alat-3.jpg') }}"
                                    data-title="Alat Keselamatan">
                                    <i class="iconbase ti tabler-zoom-in"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-content">
                            <span class="card-badge badge-equipment">Peralatan</span>
                            <h5 class="card-title">Alat Keselamatan</h5>
                            <p class="card-desc">APD lengkap untuk semua pekerja sesuai standar K3</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="gallery-card-modern">
                        <div class="card-image-wrapper">
                            <img src="{{ asset('assets/template/img/fasilitas/alat-4.jpg') }}" alt="Sistem Monitoring">
                            <div class="image-overlay">
                                <button class="btn-zoom" data-bs-toggle="modal" data-bs-target="#imageModal"
                                    data-image="{{ asset('assets/template/img/fasilitas/alat-4.jpg') }}"
                                    data-title="Sistem Monitoring">
                                    <i class="iconbase ti tabler-zoom-in"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-content">
                            <span class="card-badge badge-equipment">Peralatan</span>
                            <h5 class="card-title">Sistem Monitoring</h5>
                            <p class="card-desc">CCTV dan sistem monitoring 24/7</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="gallery-card-modern">
                        <div class="card-image-wrapper">
                            <img src="{{ asset('assets/template/img/fasilitas/alat-5.jpg') }}" alt="Alat Ukur">
                            <div class="image-overlay">
                                <button class="btn-zoom" data-bs-toggle="modal" data-bs-target="#imageModal"
                                    data-image="{{ asset('assets/template/img/fasilitas/alat-5.jpg') }}"
                                    data-title="Alat Ukur">
                                    <i class="iconbase ti tabler-zoom-in"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-content">
                            <span class="card-badge badge-equipment">Peralatan</span>
                            <h5 class="card-title">Alat Ukur</h5>
                            <p class="card-desc">Alat ukur parameter limbah yang presisi</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="gallery-card-modern">
                        <div class="card-image-wrapper">
                            <img src="{{ asset('assets/template/img/fasilitas/alat-6.jpg') }}" alt="Drum & Container">
                            <div class="image-overlay">
                                <button class="btn-zoom" data-bs-toggle="modal" data-bs-target="#imageModal"
                                    data-image="{{ asset('assets/template/img/fasilitas/alat-6.jpg') }}"
                                    data-title="Drum & Container">
                                    <i class="iconbase ti tabler-zoom-in"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-content">
                            <span class="card-badge badge-equipment">Peralatan</span>
                            <h5 class="card-title">Drum & Container</h5>
                            <p class="card-desc">Wadah penyimpanan limbah dengan standar internasional</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Modal Image Viewer --}}
    <div class="modal fade" id="imageModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title fw-bold" id="modalTitle">Detail Fasilitas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
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
        /* Custom Spacing */
        .py-6 {
            padding-top: 5rem;
            padding-bottom: 5rem;
        }

        .min-vh-40 {
            min-height: 40vh;
        }

        /* Hero Gradient */
        .hero-gradient {
            background: linear-gradient(135deg, #0052D4 0%, #4364F7 50%, #6FB1FC 100%);
            position: relative;
            padding-top: 4rem;
            padding-bottom: 6rem;
        }

        .hero-pattern {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image:
                radial-gradient(circle at 20% 50%, rgba(255, 255, 255, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(255, 255, 255, 0.1) 0%, transparent 50%);
            z-index: 1;
        }

        .hero-wave {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            line-height: 0;
        }

        .hero-wave svg {
            width: 100%;
            height: auto;
        }

        /* Badge Custom */
        .badge-custom {
            display: inline-flex;
            align-items: center;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            padding: 0.5rem 1.5rem;
            border-radius: 50px;
            color: white;
            font-weight: 600;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .badge-custom .dot {
            width: 8px;
            height: 8px;
            background: #4ade80;
            border-radius: 50%;
            display: inline-block;
            animation: pulse-dot 2s infinite;
        }

        @keyframes pulse-dot {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0.5;
            }
        }

        /* Animate */
        .animate-fade-in {
            animation: fadeInUp 0.8s ease-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Section Header */
        .section-header {
            display: flex;
            align-items: center;
            gap: 1.5rem;
        }

        .section-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 16px;
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
            font-size: 2rem;
            color: white;
        }

        /* Gallery Masonry */
        .gallery-masonry {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 2rem;
        }

        .masonry-column {
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }

        /* Gallery Card Modern */
        .gallery-card-modern {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            border: 2px solid transparent;
        }

        .gallery-card-modern:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
            border-color: #0d6efd;
        }

        .gallery-card-modern.card-large .card-image-wrapper {
            height: 400px;
        }

        .card-image-wrapper {
            position: relative;
            height: 280px;
            overflow: hidden;
            background: #f8f9fa;
        }

        .card-image-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .gallery-card-modern:hover .card-image-wrapper img {
            transform: scale(1.08);
        }

        .image-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, transparent 0%, rgba(0, 0, 0, 0.7) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .gallery-card-modern:hover .image-overlay {
            opacity: 1;
        }

        .btn-zoom {
            width: 60px;
            height: 60px;
            background: white;
            color: #0d6efd;
            border: none;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .btn-zoom i {
            font-size: 1.8rem;
        }

        .btn-zoom:hover {
            background: #0d6efd;
            color: white;
            transform: scale(1.1) rotate(90deg);
        }

        .card-content {
            padding: 1.5rem;
        }

        .card-badge {
            display: inline-block;
            padding: 0.4rem 1rem;
            background: #0d6efd;
            color: white;
            border-radius: 8px;
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: 1rem;
        }

        .card-badge.badge-warehouse {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .card-badge.badge-vehicle {
            background: linear-gradient(135deg, #56ab2f 0%, #a8e063 100%);
        }

        .card-badge.badge-equipment {
            background: linear-gradient(135deg, #f7971e 0%, #ffd200 100%);
        }

        .card-title {
            font-size: 1.15rem;
            font-weight: 700;
            margin-bottom: 0.75rem;
            color: #1a1a2e;
            line-height: 1.4;
        }

        .card-desc {
            font-size: 0.9rem;
            color: #6c757d;
            margin: 0;
            line-height: 1.6;
        }

        .card-specs {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
            flex-wrap: wrap;
        }

        .card-specs span {
            display: flex;
            align-items: center;
            gap: 0.4rem;
            font-size: 0.85rem;
            color: #495057;
            padding: 0.4rem 0.8rem;
            background: #f8f9fa;
            border-radius: 6px;
        }

        .card-specs i {
            font-size: 1rem;
            color: #0d6efd;
        }

        /* Modal */
        .modal-content {
            border-radius: 20px;
            overflow: hidden;
            border: none;
        }

        #modalImage {
            max-height: 80vh;
            object-fit: contain;
            background: #000;
        }

        /* Responsive */
        @media (max-width: 991px) {
            .py-6 {
                padding-top: 3rem;
                padding-bottom: 3rem;
            }

            .hero-gradient {
                padding-top: 3rem;
                padding-bottom: 4rem;
            }

            .display-3 {
                font-size: 2.5rem;
            }

            .gallery-masonry {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }

            .masonry-column {
                gap: 1.5rem;
            }

            .section-header {
                flex-direction: column;
                text-align: center;
            }

            .card-image-wrapper {
                height: 240px;
            }

            .gallery-card-modern.card-large .card-image-wrapper {
                height: 300px;
            }
        }

        @media (max-width: 575px) {
            .display-3 {
                font-size: 2rem;
            }

            .lead {
                font-size: 1rem !important;
            }

            .section-icon {
                width: 60px;
                height: 60px;
            }

            .section-icon i {
                font-size: 1.5rem;
            }

            .card-image-wrapper {
                height: 220px;
            }

            .gallery-card-modern.card-large .card-image-wrapper {
                height: 260px;
            }

            .btn-zoom {
                width: 50px;
                height: 50px;
            }

            .btn-zoom i {
                font-size: 1.5rem;
            }
        }
    </style>
@endpush

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Modal Image Viewer
            const imageModal = document.getElementById('imageModal');
            imageModal.addEventListener('show.bs.modal', function(event) {
                const button = event.relatedTarget;
                const imageSrc = button.getAttribute('data-image');
                const imageTitle = button.getAttribute('data-title');

                const modalImage = document.getElementById('modalImage');
                const modalTitle = document.getElementById('modalTitle');

                modalImage.src = imageSrc;
                modalImage.alt = imageTitle;
                modalTitle.textContent = imageTitle;
            });
        });
    </script>
@endpush
