@extends('app')

@section('title', 'Beranda - PT Dwi Damar Tirta')

@section('content')
    {{-- Hero Section - Clean & Modern --}}
    <section class="hero-clean" id="beranda">
        <div class="container">
            <div class="row align-items-center min-vh-100 py-5">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <div class="hero-badge" data-aos="fade-right">
                            <span class="badge-dot"></span>
                            <span>Solusi Limbah B3 • Batam</span>
                        </div>

                        <h1 class="hero-title" data-aos="fade-right" data-aos-delay="100">
                            <span class="typing-text"></span>
                            <span class="cursor">|</span>
                        </h1>

                        <p class="hero-desc" data-aos="fade-right" data-aos-delay="200">
                            Pengelolaan limbah B3 dan Non-B3 yang aman, legal, dan bertanggung jawab untuk perusahaan Anda
                        </p>

                        <div class="hero-cta" data-aos="fade-right" data-aos-delay="300">
                            <a href="{{ url('/kontak-kami') }}" class="btn-primary-modern">
                                <span>Konsultasi Gratis</span>
                                <i class="iconbase ti tabler-arrow-right"></i>
                            </a>
                            <a href="#siapa-kami" class="btn-outline-modern">
                                <span>Pelajari Lebih Lanjut</span>
                            </a>
                        </div>

                        <div class="hero-stats" data-aos="fade-up" data-aos-delay="400">
                            <div class="stat-item">
                                <h3 class="stat-number">15+</h3>
                                <p class="stat-label">Tahun Pengalaman</p>
                            </div>
                            <div class="stat-item">
                                <h3 class="stat-number">100+</h3>
                                <p class="stat-label">Klien Terpercaya</p>
                            </div>
                            <div class="stat-item">
                                <h3 class="stat-number">24/7</h3>
                                <p class="stat-label">Layanan Siaga</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="hero-image" data-aos="fade-left" data-aos-delay="200">
                        <div class="image-wrapper">
                            <img src="{{ asset('assets/template/img/Hero/Hero1.png') }}" alt="PT Dwi Damar Tirta">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="scroll-down" data-aos="fade-down" data-aos-delay="500">
            <a href="#siapa-kami">
                <i class="iconbase ti tabler-chevron-down"></i>
            </a>
        </div>
    </section>

    {{-- Siapa Kami Section --}}
    <section class="section-padding" id="siapa-kami">
        <div class="container">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <span class="section-subtitle">Tentang Kami</span>
                <h2 class="section-title">Siapa Kami?</h2>
            </div>

            <div class="row g-5 align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="about-image">
                        <img src="{{ asset('assets/template/img/Hero/Hero3.png') }}" alt="PT Dwi Damar Tirta"
                            class="img-fluid rounded-4">
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-left">
                    <div class="about-content">
                        <div class="content-icon">
                            <i class="iconbase ti tabler-building-factory-2"></i>
                        </div>
                        <h3 class="mb-4">PT. Dwi Damar Tirta</h3>
                        <p class="mb-4">
                            Perusahaan pengelola limbah B3 yang didirikan di Batam sejak <strong>2009</strong>.
                            Kami menangani pengangkutan dan pengelolaan limbah domestik, limbah B3,
                            serta material scrap secara profesional.
                        </p>
                        <p class="mb-4">
                            Dengan fasilitas memadai dan tim berpengalaman, kami memberikan layanan lengkap
                            termasuk dokumen lingkungan dan konsultasi perizinan.
                        </p>

                        <div class="features-list mb-4">
                            <div class="feature-item">
                                <i class="iconbase ti tabler-check"></i>
                                <span>Perizinan Lengkap & Legal</span>
                            </div>
                            <div class="feature-item">
                                <i class="iconbase ti tabler-check"></i>
                                <span>Tim Profesional Berpengalaman</span>
                            </div>
                            <div class="feature-item">
                                <i class="iconbase ti tabler-check"></i>
                                <span>Fasilitas Standar K3</span>
                            </div>
                        </div>

                        <a href="{{ url('/profil/tentang') }}" class="btn-link-modern">
                            <span>Selengkapnya</span>
                            <i class="iconbase ti tabler-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Klien Section --}}
    <section class="section-padding">
        <div class="container">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <span class="section-subtitle">Dipercaya Oleh</span>
                <h2 class="section-title">Klien Kami</h2>
                <p class="section-desc">Perusahaan-perusahaan terkemuka yang mempercayai layanan kami</p>
            </div>

            {{-- Row 1 --}}
            <div class="clients-marquee mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="marquee-track marquee-ltr">
                    @for ($i = 1; $i <= 12; $i++)
                        <div class="client-logo">
                            <img src="{{ asset('assets/template/img/clients/client-' . $i . '.png') }}"
                                alt="Client {{ $i }}">
                        </div>
                    @endfor
                </div>
            </div>

            {{-- Row 2 --}}
            <div class="clients-marquee" data-aos="fade-up" data-aos-delay="200">
                <div class="marquee-track marquee-rtl">
                    @for ($i = 1; $i <= 12; $i++)
                        <div class="client-logo">
                            <img src="{{ asset('assets/template/img/clients/client-' . $i . '.png') }}"
                                alt="Client {{ $i }}">
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </section>

    {{-- Lokasi Section --}}
    <section class="section-padding">
        <div class="container">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <span class="section-subtitle">Temukan Kami</span>
                <h2 class="section-title">Lokasi Kami</h2>
            </div>

            <div class="row g-4">
                <div class="col-lg-5" data-aos="fade-right">
                    <div class="location-card">
                        <div class="location-icon">
                            <i class="iconbase ti tabler-map-pin"></i>
                        </div>

                        <h4 class="mb-4">Kunjungi Kami</h4>

                        <div class="location-info">
                            <div class="info-item">
                                <i class="iconbase ti tabler-building"></i>
                                <div>
                                    <strong>Alamat</strong>
                                    <p>Jl. Contoh No. 123, Batam Center<br>Batam, Kepulauan Riau 29432</p>
                                </div>
                            </div>

                            <div class="info-item">
                                <i class="iconbase ti tabler-phone"></i>
                                <div>
                                    <strong>Telepon</strong>
                                    <p>+62 778 123 4567</p>
                                </div>
                            </div>

                            <div class="info-item">
                                <i class="iconbase ti tabler-mail"></i>
                                <div>
                                    <strong>Email</strong>
                                    <p>info@dwidamartirta.com</p>
                                </div>
                            </div>

                            <div class="info-item">
                                <i class="iconbase ti tabler-clock"></i>
                                <div>
                                    <strong>Jam Operasional</strong>
                                    <p>Senin - Jumat: 08:00 - 17:00<br>Sabtu: 08:00 - 12:00</p>
                                </div>
                            </div>
                        </div>

                        <a href="https://maps.google.com" target="_blank" class="btn-primary-modern w-100">
                            <span>Buka Google Maps</span>
                            <i class="iconbase ti tabler-external-link"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-7" data-aos="fade-left">
                    <div class="map-wrapper">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15955.202562285208!2d104.0304535!3d1.1303746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d989a0e390c8e7%3A0x3039d80b220d0c0!2sBatam%20Center%2C%20Batam%20City%2C%20Riau%20Islands!5e0!3m2!1sen!2sid!4v1234567890"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <style>
        :root {
            --primary: #0066FF;
            --primary-dark: #0052CC;
            --dark: #0A1628;
            --gray: #64748B;
            --light-bg: #F8FAFC;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Hero Clean */
        .hero-clean {
            position: relative;
            background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
            overflow: hidden;
        }

        .hero-content {
            padding: 2rem 0;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.5rem 1.25rem;
            background: rgba(0, 102, 255, 0.1);
            border-radius: 50px;
            font-size: 0.875rem;
            font-weight: 600;
            color: var(--primary);
            margin-bottom: 2rem;
        }

        .badge-dot {
            width: 8px;
            height: 8px;
            background: var(--primary);
            border-radius: 50%;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0.5;
            }
        }

        .hero-title {
            font-size: clamp(2.5rem, 5vw, 4rem);
            font-weight: 800;
            line-height: 1.2;
            color: var(--dark);
            margin-bottom: 1.5rem;
            min-height: 150px;
        }

        .typing-text {
            color: var(--primary);
        }

        .cursor {
            color: var(--primary);
            animation: blink 1s infinite;
        }

        @keyframes blink {

            0%,
            50% {
                opacity: 1;
            }

            51%,
            100% {
                opacity: 0;
            }
        }

        .hero-desc {
            font-size: 1.125rem;
            line-height: 1.75;
            color: var(--gray);
            margin-bottom: 2rem;
            max-width: 540px;
        }

        .hero-cta {
            display: flex;
            gap: 1rem;
            margin-bottom: 3rem;
            flex-wrap: wrap;
        }

        .btn-primary-modern {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 1rem 2rem;
            background: var(--primary);
            color: white;
            border-radius: 12px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s;
            box-shadow: 0 10px 30px rgba(0, 102, 255, 0.3);
        }

        .btn-primary-modern:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 15px 40px rgba(0, 102, 255, 0.4);
        }

        .btn-outline-modern {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 1rem 2rem;
            background: transparent;
            color: var(--dark);
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s;
        }

        .btn-outline-modern:hover {
            border-color: var(--primary);
            color: var(--primary);
        }

        .hero-stats {
            display: flex;
            gap: 3rem;
            padding-top: 2rem;
            border-top: 1px solid #e2e8f0;
        }

        .stat-item {
            text-align: left;
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--primary);
            margin-bottom: 0.25rem;
        }

        .stat-label {
            font-size: 0.875rem;
            color: var(--gray);
            margin: 0;
        }

        .hero-image {
            position: relative;
        }

        .image-wrapper {
            position: relative;
        }

        .image-wrapper img {
            width: 100%;
            height: auto;
            filter: drop-shadow(0 20px 60px rgba(0, 0, 0, 0.1));
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        .scroll-down {
            position: absolute;
            bottom: 2rem;
            left: 50%;
            transform: translateX(-50%);
        }

        .scroll-down a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: white;
            border-radius: 50%;
            color: var(--primary);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            animation: bounce 2s infinite;
        }

        @keyframes bounce {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        /* Section Padding */
        .section-padding {
            padding: 6rem 0;
        }

        .section-header {
            margin-bottom: 3rem;
        }

        .section-subtitle {
            display: inline-block;
            padding: 0.5rem 1rem;
            background: rgba(0, 102, 255, 0.1);
            color: var(--primary);
            border-radius: 50px;
            font-size: 0.875rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .section-title {
            font-size: clamp(2rem, 4vw, 2.5rem);
            font-weight: 800;
            color: var(--dark);
            margin-bottom: 1rem;
        }

        .section-desc {
            font-size: 1.125rem;
            color: var(--gray);
            margin: 0;
        }

        /* About Section */
        .about-image img {
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
        }

        .content-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--primary) 0%, #0052CC 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
        }

        .content-icon i {
            font-size: 2rem;
            color: white;
        }

        .about-content h3 {
            font-size: 2rem;
            font-weight: 700;
            color: var(--dark);
        }

        .about-content p {
            font-size: 1rem;
            line-height: 1.75;
            color: var(--gray);
        }

        .features-list {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .feature-item {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            font-weight: 500;
            color: var(--dark);
        }

        .feature-item i {
            width: 24px;
            height: 24px;
            background: rgba(0, 102, 255, 0.1);
            color: var(--primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .btn-link-modern {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--primary);
            font-weight: 600;
            text-decoration: none;
            transition: gap 0.3s;
        }

        .btn-link-modern:hover {
            gap: 1rem;
        }

        /* Clients Marquee */
        .clients-marquee {
            overflow: hidden;
            position: relative;
        }

        .marquee-track {
            display: flex;
            gap: 2rem;
            width: max-content;
        }

        .marquee-ltr {
            animation: scroll-left 30s linear infinite;
        }

        .marquee-rtl {
            animation: scroll-right 30s linear infinite;
        }

        @keyframes scroll-left {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        @keyframes scroll-right {
            0% {
                transform: translateX(-50%);
            }

            100% {
                transform: translateX(0);
            }
        }

        .clients-marquee:hover .marquee-track {
            animation-play-state: paused;
        }

        .client-logo {
            width: 180px;
            height: 100px;
            background: white;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1.5rem;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            flex-shrink: 0;
        }

        .client-logo img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            filter: grayscale(100%);
            opacity: 0.6;
            transition: all 0.3s;
        }

        .client-logo:hover img {
            filter: grayscale(0%);
            opacity: 1;
        }

        /* Location Section */
        .location-card {
            background: white;
            padding: 2.5rem;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.08);
            height: 100%;
        }

        .location-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--primary) 0%, #0052CC 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
        }

        .location-icon i {
            font-size: 2rem;
            color: white;
        }

        .location-card h4 {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--dark);
        }

        .location-info {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .info-item {
            display: flex;
            gap: 1rem;
        }

        .info-item i {
            width: 40px;
            height: 40px;
            background: rgba(0, 102, 255, 0.1);
            color: var(--primary);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .info-item strong {
            display: block;
            color: var(--dark);
            margin-bottom: 0.25rem;
            font-size: 0.875rem;
        }

        .info-item p {
            color: var(--gray);
            margin: 0;
            font-size: 0.875rem;
        }

        .map-wrapper {
            height: 100%;
            min-height: 500px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.08);
        }

        /* CTA Section */
        .cta-section {
            padding: 6rem 0;
            background: linear-gradient(135deg, var(--primary) 0%, #0052CC 100%);
        }

        .cta-wrapper {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 3rem;
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .cta-title {
            font-size: clamp(1.75rem, 4vw, 2.5rem);
            font-weight: 800;
            color: white;
            margin-bottom: 0.5rem;
        }

        .cta-desc {
            font-size: 1.125rem;
            color: rgba(255, 255, 255, 0.9);
            margin: 0;
        }

        .btn-cta-white {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 1rem 2rem;
            background: white;
            color: var(--primary);
            border-radius: 12px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s;
        }

        .btn-cta-white:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        /* Responsive */
        @media (max-width: 991px) {
            .section-padding {
                padding: 4rem 0;
            }

            .hero-stats {
                gap: 2rem;
            }

            .stat-number {
                font-size: 2rem;
            }

            .hero-cta {
                flex-direction: column;
            }

            .btn-primary-modern,
            .btn-outline-modern {
                width: 100%;
                justify-content: center;
            }

            .map-wrapper {
                min-height: 400px;
            }

            .cta-wrapper {
                text-align: center;
            }

            .btn-cta-white {
                width: 100%;
                justify-content: center;
            }
        }

        @media (max-width: 575px) {
            .hero-title {
                min-height: 180px;
            }

            .hero-stats {
                flex-direction: column;
                gap: 1.5rem;
            }

            .client-logo {
                width: 150px;
                height: 80px;
            }
        }
    </style>
@endpush

@push('scripts')
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            once: true,
            offset: 100
        });

        // Typing Animation
        const texts = [
            "Mitra Profesional",
            "Pengelolaan Limbah B3",
            "Solusi Tepercaya"
        ];

        let textIndex = 0;
        let charIndex = 0;
        let isDeleting = false;
        let typingSpeed = 150;

        function typeText() {
            const typingElement = document.querySelector('.typing-text');
            const currentText = texts[textIndex];

            if (!isDeleting) {
                typingElement.textContent = currentText.substring(0, charIndex + 1);
                charIndex++;

                if (charIndex === currentText.length) {
                    isDeleting = true;
                    typingSpeed = 2000; // Pause at end
                }
            } else {
                typingElement.textContent = currentText.substring(0, charIndex - 1);
                charIndex--;

                if (charIndex === 0) {
                    isDeleting = false;
                    textIndex = (textIndex + 1) % texts.length;
                    typingSpeed = 500; // Pause before next text
                } else {
                    typingSpeed = 50;
                }
            }

            setTimeout(typeText, typingSpeed);
        }

        // Start typing animation when page loads
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(typeText, 500);
        });
    </script>
@endpush
