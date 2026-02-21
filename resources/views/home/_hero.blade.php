<section class="hero-clean" id="beranda">
    <div class="container">
        <div class="row align-items-center min-vh-100 py-5">

            {{-- Kolom konten teks --}}
            <div class="col-lg-6">
                <div class="hero-content text-center text-md-start">

                    {{-- Eyebrow / badge: bagus untuk konteks lokal --}}
                    <p class="hero-badge" data-aos="fade-right">
                        <span class="badge-dot"></span>
                        <span>{{ __('home.badgeHero') }}</span>
                    </p>

                    {{-- H1 utama halaman (SEO) --}}
                    <h1 class="hero-title text-center text-md-start" data-aos="fade-right" data-aos-delay="100">
                        {{ __('home.heroTitle') }}
                    </h1>

                    {{-- Subheading --}}
                    <p class="hero-desc text-justify" data-aos="fade-right" data-aos-delay="200">
                        {{ __('home.heroSubTitle') }}
                    </p>

                    {{-- CTA utama --}}
                    <div class="hero-desc" data-aos="fade-right" data-aos-delay="300">
                        <div class="row">
                            <div class="col-6">
                                <a href="#layanan" class="btn btn-primary w-100 py-3">
                                    <span>{{ __('home.serviceButton') }}</span>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="/dokumen/legal" class="btn btn-outline-primary w-100 py-3">
                                    <span>{{ __('home.legal') }}</span>
                                </a>
                            </div>
                        </div>


                    </div>

                    {{-- Trust / social proof --}}
                    <div class="hero-trust" data-aos="fade-up" data-aos-delay="350">
                        <div class="hero-trust-item">
                            <span class="hero-trust-label">Dipercaya lebih dari</span>
                            <span class="hero-trust-value">100+ perusahaan manufaktur</span>
                        </div>

                        <span class="hero-trust-divider" aria-hidden="true"></span>

                        <div class="hero-trust-item">
                            <span class="hero-trust-label">Perizinan</span>
                            <span class="hero-trust-value">Lengkap &amp; sesuai regulasi</span>
                        </div>
                    </div>

                </div>
            </div>

            {{-- Kolom visual --}}
            <div class="col-lg-6">
                <div class="hero-image" data-aos="fade-left" data-aos-delay="200">
                    <div class="image-wrapper position-relative">
                        <img src="{{ asset('assets/template/img/Hero/Hero1.webp') }}"
                            alt="Kantor PT Dwi Damar Tirta dan armada pengangkutan limbah B3 di Batam">

                        {{-- LOGO DI TENGAH ATAS TAGLINE --}}
                        <div class="hero-logo-center">
                            <img src="{{ asset('assets/template/img/logo/logo dwi damar tirta.webp') }}"
                                alt=" Logo PT Dwi Damar Tirta ">
                        </div>

                        {{-- Tagline sedikit di bawah logo --}}
                        <div class="hero-tagline-card">
                            <p class="hero-tagline-text mb-0 fw-bolder fst-italic">
                                " New Spirit With Better Services "
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>
