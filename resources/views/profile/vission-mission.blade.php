@extends('app')

@section('title', 'Visi & Misi - PT Dwi Damar Tirta')

@push('styles')
@endpush

@section('content')
    {{-- Hero dengan Gradient --}}
    <section class="hero-gradient position-relative overflow-hidden">
        <div class="hero-pattern"></div>
        <div class="container position-relative" style="z-index: 2;">
            <div class="row min-vh-50 align-items-center py-5">
                <div class="col-lg-8 mx-auto text-center">
                    <div class="animate-fade-in">
                        <div class="badge-custom mb-4">
                            <span class="dot me-2"></span>
                            Profil Perusahaan
                        </div>
                        <h1 class="display-3 fw-bold text-white mb-4">
                            Visi & Misi
                        </h1>
                        <p class="lead text-white-50 mb-0 fs-4">
                            Membangun masa depan berkelanjutan melalui <br class="d-none d-md-block">
                            pengelolaan limbah yang bertanggung jawab
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-wave">
            <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 120L60 110C120 100 240 80 360 70C480 60 600 60 720 65C840 70 960 80 1080 85C1200 90 1320 90 1380 90L1440 90V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z" fill="white"/>
            </svg>
        </div>
    </section>

    {{-- Visi Section --}}
    <section class="py-6">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="visi-container position-relative">
                        <div class="floating-shape shape-1"></div>
                        <div class="floating-shape shape-2"></div>
                        
                        <div class="glass-card p-5 position-relative">
                            <div class="row align-items-center">
                                <div class="col-md-2 text-center mb-4 mb-md-0">
                                    <div class="icon-circle">
                                        <i class="iconbase ti tabler-eye"></i>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <h6 class="text-uppercase text-primary fw-bold mb-3 letter-spacing">Our Vision</h6>
                                    <h2 class="fw-bold mb-4">Visi Kami</h2>
                                    <p class="fs-5 text-dark mb-0 lh-lg">
                                        Menjadi perusahaan pengelola limbah B3 <span class="highlight">terkemuka di Indonesia</span> yang berkontribusi aktif dalam mewujudkan <span class="highlight">lingkungan berkelanjutan</span> dan <span class="highlight">kesejahteraan masyarakat</span>.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Misi Section --}}
    <section class="py-6 bg-light position-relative">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-10">
                    <div class="text-center mb-5">
                        <h6 class="text-uppercase text-success fw-bold mb-3 letter-spacing">Our Mission</h6>
                        <h2 class="fw-bold mb-3">Misi Kami</h2>
                        <p class="text-muted fs-5">Langkah strategis menuju visi berkelanjutan</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="row g-4">
                        {{-- Misi 1 --}}
                        <div class="col-md-6 col-lg-4">
                            <div class="misi-card-modern h-100">
                                <div class="misi-number">01</div>
                                <div class="misi-icon">
                                    <i class="iconbase ti tabler-shield-check"></i>
                                </div>
                                <p class="misi-text">
                                    Mengelola limbah B3 secara <strong>profesional, aman, dan ekonomis</strong> sesuai standar regulasi nasional
                                </p>
                                <div class="misi-bg"></div>
                            </div>
                        </div>

                        {{-- Misi 2 --}}
                        <div class="col-md-6 col-lg-4">
                            <div class="misi-card-modern h-100">
                                <div class="misi-number">02</div>
                                <div class="misi-icon">
                                    <i class="iconbase ti tabler-users"></i>
                                </div>
                                <p class="misi-text">
                                    Memberdayakan masyarakat sekitar melalui <strong>penciptaan lapangan kerja</strong> dan peningkatan kualitas hidup
                                </p>
                                <div class="misi-bg"></div>
                            </div>
                        </div>

                        {{-- Misi 3 --}}
                        <div class="col-md-6 col-lg-4">
                            <div class="misi-card-modern h-100">
                                <div class="misi-number">03</div>
                                <div class="misi-icon">
                                    <i class="iconbase ti tabler-bulb"></i>
                                </div>
                                <p class="misi-text">
                                    Memberikan <strong>solusi penanganan limbah yang efektif dan efisien</strong> kepada seluruh mitra perusahaan
                                </p>
                                <div class="misi-bg"></div>
                            </div>
                        </div>

                        {{-- Misi 4 --}}
                        <div class="col-md-6 col-lg-4">
                            <div class="misi-card-modern h-100">
                                <div class="misi-number">04</div>
                                <div class="misi-icon">
                                    <i class="iconbase ti tabler-plant"></i>
                                </div>
                                <p class="misi-text">
                                    Berperan aktif dalam <strong>mengurangi dampak polusi lingkungan</strong> bersama pemerintah dan masyarakat
                                </p>
                                <div class="misi-bg"></div>
                            </div>
                        </div>

                        {{-- Misi 5 --}}
                        <div class="col-md-6 col-lg-4">
                            <div class="misi-card-modern h-100">
                                <div class="misi-number">05</div>
                                <div class="misi-icon">
                                    <i class="iconbase ti tabler-clipboard-check"></i>
                                </div>
                                <p class="misi-text">
                                    Menjalankan seluruh <strong>peraturan dan regulasi lingkungan</strong> yang berlaku di Indonesia dengan konsisten
                                </p>
                                <div class="misi-bg"></div>
                            </div>
                        </div>

                        {{-- Misi 6 --}}
                        <div class="col-md-6 col-lg-4">
                            <div class="misi-card-modern h-100">
                                <div class="misi-number">06</div>
                                <div class="misi-icon">
                                    <i class="iconbase ti tabler-handshake"></i>
                                </div>
                                <p class="misi-text">
                                    Membangun dan memelihara <strong>hubungan kolaboratif yang berkelanjutan</strong> dengan stakeholder
                                </p>
                                <div class="misi-bg"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA Modern --}}
    <section class="py-6">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="cta-modern position-relative overflow-hidden">
                        <div class="cta-gradient"></div>
                        <div class="row align-items-center position-relative" style="z-index: 2;">
                            <div class="col-lg-8">
                                <h3 class="fw-bold text-white mb-3">Mari Wujudkan Lingkungan Berkelanjutan</h3>
                                <p class="text-white-50 mb-0 fs-5">
                                    Bergabunglah dengan kami dalam pengelolaan limbah B3 yang profesional dan bertanggung jawab
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

        .min-vh-50 {
            min-height: 50vh;
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
            0%, 100% {
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

        /* Glass Card */
        .glass-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(20px);
            border-radius: 24px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
        }

        /* Floating Shapes */
        .visi-container {
            position: relative;
        }

        .floating-shape {
            position: absolute;
            border-radius: 50%;
            z-index: 0;
            animation: float 6s ease-in-out infinite;
        }

        .shape-1 {
            width: 200px;
            height: 200px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            opacity: 0.1;
            top: -50px;
            right: -50px;
        }

        .shape-2 {
            width: 150px;
            height: 150px;
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            opacity: 0.1;
            bottom: -30px;
            left: -30px;
            animation-delay: 2s;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-20px);
            }
        }

        /* Icon Circle */
        .icon-circle {
            width: 100px;
            height: 100px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
        }

        .icon-circle i {
            font-size: 3rem;
            color: white;
        }

        /* Typography */
        .letter-spacing {
            letter-spacing: 0.1em;
        }

        .highlight {
            background: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: 700;
        }

        /* Misi Card Modern */
        .misi-card-modern {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            position: relative;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: 2px solid transparent;
        }

        .misi-card-modern:hover {
            transform: translateY(-10px);
            border-color: #0d6efd;
            box-shadow: 0 20px 60px rgba(13, 110, 253, 0.2);
        }

        .misi-number {
            position: absolute;
            top: 1rem;
            right: 1rem;
            font-size: 4rem;
            font-weight: 900;
            color: #f8f9fa;
            line-height: 1;
            z-index: 1;
            transition: all 0.3s ease;
        }

        .misi-card-modern:hover .misi-number {
            color: rgba(13, 110, 253, 0.1);
        }

        .misi-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
            position: relative;
            z-index: 2;
        }

        .misi-icon i {
            font-size: 1.8rem;
            color: white;
        }

        .misi-text {
            font-size: 1rem;
            line-height: 1.7;
            color: #495057;
            margin: 0;
            position: relative;
            z-index: 2;
        }

        .misi-bg {
            position: absolute;
            bottom: -50%;
            right: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(13, 110, 253, 0.05) 0%, transparent 70%);
            transition: all 0.5s ease;
            transform: scale(0);
        }

        .misi-card-modern:hover .misi-bg {
            transform: scale(1);
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

            .icon-circle {
                width: 80px;
                height: 80px;
            }

            .icon-circle i {
                font-size: 2.5rem;
            }

            .misi-card-modern {
                padding: 1.5rem;
            }

            .misi-number {
                font-size: 3rem;
            }

            .cta-modern {
                padding: 2rem;
            }

            .floating-shape {
                display: none;
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

            .misi-icon {
                width: 50px;
                height: 50px;
            }

            .misi-icon i {
                font-size: 1.5rem;
            }
        }
    </style>
@endsection

@push('scripts')
@endpush
