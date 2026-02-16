<section class="hero-clean" id="beranda">
    <div class="container">
        <div class="row align-items-center min-vh-100 py-5">

            {{-- Kolom konten teks --}}
            <div class="col-lg-6">
                <div class="hero-content text-center text-md-start">

                    {{-- Eyebrow / badge: bagus untuk konteks lokal --}}
                    <p class="hero-badge" data-aos="fade-right">
                        <span class="badge-dot"></span>
                        <span>Spesialis Solusi Limbah B3 • Batam &amp; Sekitarnya</span>
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
                    <div class="hero-cta" data-aos="fade-right" data-aos-delay="300">
                        <div class="row">
                            <div class="col-6">
                                <a href="#layanan" class="btn-primary-modern">
                                    <span>Layanan Kami</span>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="#layanan" class="btn btn-outline-primary w-100 py-3">
                                    <span>Perizinan Kami</span>
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
                    <div class="image-wrapper">
                        {{-- Gambar LCP: jangan pakai loading="lazy" --}}
                        <img src="{{ asset('assets/template/img/Hero/Hero1.webp') }}"
                            alt="Kantor PT Dwi Damar Tirta dan armada pengangkutan limbah B3 di Batam">

                        {{-- Stats di atas foto --}}
                        <div class="hero-photo-stats">
                            <div class="hero-photo-stat-item">
                                <span class="hero-photo-stat-number">15+</span>
                                <span class="hero-photo-stat-label">Tahun pengalaman</span>
                            </div>

                            <span class="hero-photo-divider" aria-hidden="true"></span>

                            <div class="hero-photo-stat-item">
                                <span class="hero-photo-stat-number">100+</span>
                                <span class="hero-photo-stat-label">Klien aktif</span>
                            </div>

                            <span class="hero-photo-divider" aria-hidden="true"></span>

                            <div class="hero-photo-stat-item">
                                <span class="hero-photo-stat-number">24/7</span>
                                <span class="hero-photo-stat-label">Siap tangani insiden</span>
                            </div>
                        </div>
                    </div>

                    {{-- Floating card --}}
                    <aside class="hero-floating-card" data-aos="fade-up" data-aos-delay="350"
                        aria-label="Keunggulan dokumentasi dan pelaporan">
                        <div class="hero-floating-icon">
                            <i class="iconbase ti tabler-shield-check" aria-hidden="true"></i>
                        </div>
                        <div>
                            <p class="hero-floating-title">Dokumen &amp; pelaporan rapi</p>
                            <p class="hero-floating-text">
                                Dukungan dokumen lingkungan, manifest, dan pelaporan berkala untuk perusahaan Anda.
                            </p>
                        </div>
                    </aside>
                </div>
            </div>

        </div>
    </div>

    {{-- Scroll indicator --}}
    <div class="scroll-down" data-aos="fade-down" data-aos-delay="500">
        <a href="#siapa-kami" aria-label="Scroll ke bagian tentang kami">
            <i class="iconbase ti tabler-chevron-down" aria-hidden="true"></i>
        </a>
    </div>
</section>
