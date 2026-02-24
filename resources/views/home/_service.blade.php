<section class="section-padding" id="layanan">
    <div class="container">
        <div class="section-header text-center mb-5" data-aos="fade-up">
            <span class="section-subtitle">{{ __('home.serviceButton') }}</span>
            <h2 class="section-title">{{ __('home.titleService') }}</h2>
            <p class="section-desc">
                {{ __('home.descriptionService') }}
            </p>
        </div>

        <div class="row g-4">
            {{-- Card 1: Pengangkutan Limbah B3 --}}
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="50">
                <div class="service-card h-100">
                    <div class="service-icon">
                        <i class="iconbase ti tabler-truck"></i>
                    </div>
                    <h3 class="service-title">{{ __('home.card1Title') }}</h3>
                    <p class="service-text">
                        {{ __('home.card1Description') }}
                    </p>
                </div>
            </div>

            {{-- Card 2: Pengumpulan Limbah B3 --}}
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card h-100">
                    <div class="service-icon">
                        <i class="iconbase ti tabler-recycle"></i>
                    </div>
                    <h3 class="service-title">{{ __('home.card2Title') }}</h3>
                    <p class="service-text">
                        {{ __('home.card2Description') }}
                    </p>
                </div>
            </div>

            {{-- Card 3: Pembersihan Tangki Kapal --}}
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="150">
                <div class="service-card h-100">
                    <div class="service-icon">
                        <i class="iconbase ti tabler-wash-machine"></i>
                        {{-- ganti icon sesuai set yang kamu pakai --}}
                    </div>
                    <h3 class="service-title">{{ __('home.card3Title') }}</h3>
                    <p class="service-text">
                        {{ __('home.card3Description') }}
                    </p>
                </div>
            </div>

            {{-- Card 4: Konsultasi Lingkungan & CSR --}}
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card h-100">
                    <div class="service-icon">
                        <i class="iconbase ti tabler-file-description"></i>
                    </div>
                    <h3 class="service-title">{{ __('home.card4Title') }}</h3>
                    <p class="service-text">
                        {{ __('home.card4Description') }}
                    </p>
                </div>
            </div>

            <div class="text-center mt-4" data-aos="fade-up" data-aos-delay="250">
                <a href="{{ url('/layanan-kami') }}" class="btn btn-primary">
                    {{ __('home.btnServices') }}
                </a>
            </div>
        </div>
    </div>
</section>
