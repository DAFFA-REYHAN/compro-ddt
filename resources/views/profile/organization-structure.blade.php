@extends('app')

@section('title', 'Struktur Organisasi - PT Dwi Damar Tirta')

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
                            Struktur Organisasi
                        </h1>
                        <p class="lead text-white-50 mb-0 fs-4">
                            Tim profesional yang berdedikasi untuk layanan terbaik
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

    {{-- Struktur Organisasi Image --}}
    <section class="py-6">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    {{-- Intro Text --}}
                    <div class="text-center mb-5">
                        <h2 class="fw-bold mb-3">Hierarki Organisasi</h2>
                        <p class="text-muted fs-5 mb-0">
                            Struktur tim yang solid untuk memberikan pelayanan terbaik
                        </p>
                    </div>

                    {{-- Chart Container --}}
                    <div class="org-chart-container">
                        <div class="glass-card p-4">
                            <div class="text-center">
                                <img src="{{ asset('assets/template/img/struktur-organisasi/struktur-organisasi.png') }}"
                                    alt="Struktur Organisasi PT Dwi Damar Tirta" class="img-fluid rounded-3"
                                    style="max-height: 800px; object-fit: contain; width: 100%; display: block; margin: 0 auto;">
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

        /* Glass Card */
        .glass-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 24px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
        }

        .org-chart-container {
            position: relative;
        }

        /* Department Card */
        .dept-card {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
        }

        .dept-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.12);
        }

        .dept-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
        }

        .dept-icon i {
            font-size: 2.5rem;
            color: white;
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
                padding: 1.5rem !important;
            }

            .dept-card {
                padding: 1.5rem;
            }

            .dept-icon {
                width: 70px;
                height: 70px;
            }

            .dept-icon i {
                font-size: 2rem;
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
        }
    </style>
@endsection

@push('scripts')
@endpush
