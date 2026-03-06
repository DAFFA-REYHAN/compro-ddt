<footer class="landing-footer bg-body footer-text">
    <div class="footer-top position-relative overflow-hidden z-1">
        <img src="{{ asset('/assets/template/img/backgrounds/footer-bg-2.webp') }}" alt="footer bg"
             class="footer-bg banner-bg-img z-n1" />
        <div class="container py-5">
            <div class="row gy-4">
                {{-- Col 1: Company + CTA + ISO --}}
                <div class="col-lg-4">
                    <div class="d-flex align-items-center mb-3">
                        <img src="{{ asset('assets/template/img/logo/logo dwi damar tirta.webp') }}"
                             alt="Logo PT Dwi Damar Tirta" width="56" class="me-2">
                        <span class="fw-bold fs-5 text-white">
                            {{ __('footer.company_name') }}
                        </span>
                    </div>

                    <p class="footer-text footer-logo-description mb-3 text" style="text-align: justify;">
                        {{ __('footer.tagline') }}
                        <a href="{{ url('/kontak-kami') }}" class="text-white">
                            {{ __('footer.cta_contact') }}
                        </a>
                    </p>

                    {{-- ISO logos --}}
                    <div class="d-flex align-items-center flex-wrap gap-3 mt-2">
                        <img src="{{ asset('assets/template/img/iso/ISO-140011000.webp') }}" alt="ISO 45001"
                             class="img-fluid" style="height: 80px;" loading="lazy">
                        <img src="{{ asset('assets/template/img/iso/ISO-9001.webp') }}" alt="ISO 9001"
                             class="img-fluid" style="height: 80px;" loading="lazy">
                        <img src="{{ asset('assets/template/img/iso/ISO-45001.webp') }}" alt="ISO 14001"
                             class="img-fluid" style="height: 80px;" loading="lazy">
                    </div>
                </div>

                {{-- Col 2: Navigation --}}
                <div class="col-lg-2 col-md-6">
                    <h6 class="footer-title mb-3 text-white">{{ __('footer.nav_title') }}</h6>

                    <ul class="list-unstyled mb-0">
                        <li class="mb-2">
                            <a href="{{ url('/') }}" class="footer-link">{{ __('footer.nav_home') }}</a>
                        </li>

                        <li class="mb-2">
                            <a href="{{ url('/profil/tentang-kami') }}" class="footer-link">{{ __('footer.nav_about') }}</a>
                        </li>
                        <li class="mb-2">
                            <a href="{{ url('/profil/visi-misi') }}" class="footer-link">{{ __('footer.nav_vision_mission') }}</a>
                        </li>
                        <li class="mb-2">
                            <a href="{{ url('/profil/struktur-organisasi') }}" class="footer-link">{{ __('footer.nav_structure') }}</a>
                        </li>

                        <li class="mb-2">
                            <a href="{{ url('/layanan-kami') }}" class="footer-link">{{ __('footer.nav_services') }}</a>
                        </li>
                        <li class="mb-2">
                            <a href="{{ url('/fasilitas') }}" class="footer-link">{{ __('footer.nav_facilities') }}</a>
                        </li>

                        <li class="mb-2">
                            <a href="{{ url('/dokumen') }}" class="footer-link">{{ __('footer.nav_documents') }}</a>
                        </li>

                        <li class="mb-2">
                            <a href="{{ url('/gallery') }}" class="footer-link">{{ __('footer.nav_gallery') }}</a>
                        </li>

                        <li class="mb-2">
                            <a href="{{ url('/kontak-kami') }}" class="footer-link">{{ __('footer.nav_contact') }}</a>
                        </li>
                    </ul>
                </div>

                {{-- Col 3: Contact & Location --}}
                <div class="col-lg-4 col-md-6">
                    <h6 class="footer-title mb-3 text-white">{{ __('footer.contact_title') }}</h6>
                    <ul class="list-unstyled footer-text mb-0">
                        <li class="mb-3 d-flex align-items-start">
                            <i class="icon-base ti tabler-map-pin me-2 mt-1"></i>
                            <div>
                                <strong>{{ __('footer.location') }}</strong><br>
                                <a href="https://maps.app.goo.gl/YLhTuDD5Hrnnr9km9" target="_blank"
                                   rel="noopener noreferrer" class="footer-link">
                                    Jl. Letjend Suprapto No.1, Kibing, Kec. Batu Aji, Kota Batam,
                                    Kepulauan Riau 29424
                                </a>
                            </div>
                        </li>
                        <li class="mb-3 d-flex align-items-start">
                            <i class="icon-base ti tabler-phone me-2 mt-1"></i>
                            <div>
                                <strong>{{ __('footer.phone') }}</strong><br>
                                <span class="text-white">(0778) 3582877</span>
                            </div>
                        </li>
                        <li class="mb-3 d-flex align-items-start">
                            <i class="icon-base ti tabler-mail me-2 mt-1"></i>
                            <div>
                                <strong>{{ __('footer.email') }}</strong><br>
                                <a href="mailto:gufron.wiguna@dwidamartirta.co.id"
                                   class="footer-link d-block">gufron.wiguna@dwidamartirta.co.id</a>
                                <a href="mailto:admin@dwidamartirta.co.id"
                                   class="footer-link d-block">admin@dwidamartirta.co.id</a>
                            </div>
                        </li>
                        <li class="d-flex align-items-start">
                            <i class="icon-base ti tabler-brand-whatsapp me-2 mt-1"></i>
                            <div>
                                <strong>{{ __('footer.whatsapp') }}</strong><br>
                                <a href="https://wa.me/628116933777" class="footer-link" target="_blank">
                                    +62 811‑6933‑777
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    {{-- Bottom bar --}}
    <div class="footer-bottom py-3 py-md-4" style="background: linear-gradient(90deg, #003d99, #0F78ED);">
        <div
            class="container d-flex flex-wrap justify-content-between flex-md-row flex-column text-center text-md-start">
            <div class="mb-2 mb-md-0 text-white">
                © 2026 <span class="fw-medium text-white">PT Dwi Damar Tirta</span>.
                {{ __('footer.copyright') }}
            </div>
            <div>
                <a href="#" class="me-2 text-white-50">LinkedIn</a>
                <a href="https://www.instagram.com/dwidamartirta.id/" class="text-white-50"
                   target="_blank">Instagram</a>
            </div>
        </div>
    </div>
</footer>
