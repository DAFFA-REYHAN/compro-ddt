@extends('app')

@section('title', 'Tentang Kami - PT Dwi Damar Tirta')

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
                            Profil Perusahaan
                        </div>
                        <h1 class="display-3 fw-bold text-white mb-4">
                            Tentang Kami
                        </h1>
                        <p class="lead text-white-50 mb-0 fs-4">
                            Profesional dalam pengelolaan limbah B3 sejak 2009
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

    {{-- Company Overview --}}
    <section class="py-6">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    {{-- Stats Cards --}}
                    <div class="row g-4 mb-5">
                        <div class="col-md-4">
                            <div class="stat-card text-center">
                                <div class="stat-icon">
                                    <i class="iconbase ti tabler-calendar"></i>
                                </div>
                                <h3 class="stat-number">2009</h3>
                                <p class="stat-label">Tahun Berdiri</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="stat-card text-center">
                                <div class="stat-icon">
                                    <i class="iconbase ti tabler-award"></i>
                                </div>
                                <h3 class="stat-number">15+</h3>
                                <p class="stat-label">Tahun Pengalaman</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="stat-card text-center">
                                <div class="stat-icon">
                                    <i class="iconbase ti tabler-users"></i>
                                </div>
                                <h3 class="stat-number">100%</h3>
                                <p class="stat-label">Profesional</p>
                            </div>
                        </div>
                    </div>

                    {{-- Main Content --}}
                    <div class="glass-card p-5">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="fw-bold mb-4">Sejarah Perusahaan</h2>
                                <p class="fs-5 lh-lg text-dark mb-4" style="text-align: justify;">
                                    <strong class="text-primary">PT. Dwi Damar Tirta</strong> adalah sebuah perusahaan yang
                                    didirikan di pulau Batam pada tahun 2009. Kami peduli dan menangani dengan benar/baik,
                                    tepat dan profesional untuk pengangkutan dan transportasi limbah domestik dan limbah B3
                                    termasuk segala jenis material scrap, pelayanan lainnya yang berhubungan dengan dokumen
                                    lingkungan, perizinan yang sah dan konsultan.
                                </p>
                                <p class="fs-5 lh-lg text-dark mb-4" style="text-align: justify;">
                                    Kami mempunyai <strong>fasilitas yang memadai</strong> sesuai dengan hukum dan peraturan
                                    dan kami memiliki <strong>tenaga kerja yang berpengalaman</strong> dalam mengelola dan
                                    penanganan limbah domestik dan Limbah B3.
                                </p>
                                <p class="fs-5 lh-lg text-dark mb-0" style="text-align: justify;">
                                    Perusahaan kami adalah perusahaan yang telah memiliki pengalaman dalam limbah industri
                                    baik Non B3 dan Limbah B3 <strong>lebih dari 15 tahun</strong>, dengan tim profesional
                                    yang berdedikasi tinggi.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Services Section --}}
    <section class="py-6 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="text-center mb-5">
                        <h6 class="text-uppercase text-primary fw-bold mb-3 letter-spacing">Layanan Kami</h6>
                        <h2 class="fw-bold mb-3">Jenis Limbah yang Kami Tangani</h2>
                        <p class="text-muted fs-5">Solusi lengkap untuk berbagai jenis limbah industri</p>
                    </div>

                    <div class="row g-4">
                        {{-- Limbah Non B3 --}}
                        <div class="col-lg-6">
                            <div class="service-card h-100">
                                <div class="service-header">
                                    <div class="service-icon bg-primary">
                                        <i class="iconbase ti tabler-recycle"></i>
                                    </div>
                                    <h4 class="fw-bold mb-0">Limbah Industri Non B3</h4>
                                </div>
                                <div class="service-body">
                                    <ul class="service-list">
                                        <li>
                                            <i class="iconbase ti tabler-check"></i>
                                            <span>Aluminium</span>
                                        </li>
                                        <li>
                                            <i class="iconbase ti tabler-check"></i>
                                            <span>Tembaga</span>
                                        </li>
                                        <li>
                                            <i class="iconbase ti tabler-check"></i>
                                            <span>Besi</span>
                                        </li>
                                        <li>
                                            <i class="iconbase ti tabler-check"></i>
                                            <span>Kertas & Kardus</span>
                                        </li>
                                        <li>
                                            <i class="iconbase ti tabler-check"></i>
                                            <span>Pallet Kayu</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        {{-- Limbah B3 --}}
                        <div class="col-lg-6">
                            <div class="service-card h-100">
                                <div class="service-header">
                                    <div class="service-icon bg-danger">
                                        <i class="iconbase ti tabler-alert-triangle"></i>
                                    </div>
                                    <h4 class="fw-bold mb-0">Limbah B3</h4>
                                </div>
                                <div class="service-body">
                                    <ul class="service-list">
                                        <li>
                                            <i class="iconbase ti tabler-check"></i>
                                            <span>Aki</span>
                                        </li>
                                        <li>
                                            <i class="iconbase ti tabler-check"></i>
                                            <span>Copper Slag</span>
                                        </li>
                                        <li>
                                            <i class="iconbase ti tabler-check"></i>
                                            <span>Sludge Oil, Slop Oil, Used Oil</span>
                                        </li>
                                        <li>
                                            <i class="iconbase ti tabler-check"></i>
                                            <span>Oily Water</span>
                                        </li>
                                        <li>
                                            <i class="iconbase ti tabler-check"></i>
                                            <span>Garnet, Blasting Sand, PS Ball</span>
                                        </li>
                                        <li>
                                            <i class="iconbase ti tabler-check"></i>
                                            <span>Contaminated Rag</span>
                                        </li>
                                        <li>
                                            <i class="iconbase ti tabler-check"></i>
                                            <span>Paint Sludge, Ink Sludge</span>
                                        </li>
                                        <li>
                                            <i class="iconbase ti tabler-check"></i>
                                            <span>Empty Can, Empty Drum</span>
                                        </li>
                                        <li>
                                            <i class="iconbase ti tabler-check"></i>
                                            <span>Coolant & Lain-lain</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA Section --}}
    <section class="py-6">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="cta-modern position-relative overflow-hidden">
                        <div class="cta-gradient"></div>
                        <div class="row align-items-center position-relative" style="z-index: 2;">
                            <div class="col-lg-8">
                                <h3 class="fw-bold text-white mb-3">Butuh Solusi Pengelolaan Limbah?</h3>
                                <p class="text-white-50 mb-0 fs-5">
                                    Percayakan kepada kami untuk menangani limbah industri Anda dengan profesional dan
                                    bertanggung jawab
                                </p>
                            </div>
                            <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                                <a href="{{ url('/kontak-kami') }}" class="btn btn-light btn-lg px-5 fw-semibold">
                                    Hubungi Kami
                                    <i class="iconbase ti tabler-arrow-right ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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

        /* Stat Card */
        .stat-card {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.12);
        }

        .stat-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
        }

        .stat-icon i {
            font-size: 2rem;
            color: white;
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 800;
            color: #0d6efd;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            color: #6c757d;
            font-weight: 500;
            margin: 0;
        }

        /* Glass Card */
        .glass-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 24px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
        }

        /* Service Card */
        .service-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .service-header {
            padding: 2rem;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .service-icon {
            width: 60px;
            height: 60px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .service-icon i {
            font-size: 1.8rem;
            color: white;
        }

        .service-body {
            padding: 2rem;
        }

        .service-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .service-list li {
            display: flex;
            align-items: center;
            padding: 0.75rem 0;
            border-bottom: 1px solid #f1f3f5;
        }

        .service-list li:last-child {
            border-bottom: none;
        }

        .service-list li i {
            color: #28a745;
            font-size: 1.2rem;
            margin-right: 1rem;
            flex-shrink: 0;
        }

        .service-list li span {
            color: #495057;
            font-size: 1rem;
        }

        /* CTA Modern */
        .cta-modern {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 24px;
            padding: 3rem;
            position: relative;
        }

        .cta-gradient {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at top right, rgba(255, 255, 255, 0.1) 0%, transparent 60%);
            z-index: 1;
        }

        /* Typography */
        .letter-spacing {
            letter-spacing: 0.1em;
        }

        /* Responsive */
        @media (max-width: 991.98px) {
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

            .glass-card {
                padding: 2rem !important;
            }

            .stat-card {
                padding: 1.5rem;
            }

            .stat-number {
                font-size: 2rem;
            }

            .service-header,
            .service-body {
                padding: 1.5rem;
            }

            .cta-modern {
                padding: 2rem;
            }
        }

        @media (max-width: 575.98px) {
            .display-3 {
                font-size: 2rem;
            }

            .lead {
                font-size: 1rem !important;
            }

            h2 {
                font-size: 1.75rem;
            }

            .stat-icon {
                width: 60px;
                height: 60px;
            }

            .stat-icon i {
                font-size: 1.5rem;
            }

            .service-icon {
                width: 50px;
                height: 50px;
            }

            .service-icon i {
                font-size: 1.5rem;
            }
        }
    </style>
@endsection

@push('scripts')
@endpush
