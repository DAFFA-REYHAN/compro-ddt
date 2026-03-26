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
                        <img src="{{ asset('assets/template/img/iso/ISO-9001.webp') }}" alt="ISO 9001" class="img-fluid"
                            style="height: 80px;" loading="lazy">
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
                            <a href="{{ url('/profil/tentang-kami') }}"
                                class="footer-link">{{ __('footer.nav_about') }}</a>
                        </li>
                        <li class="mb-2">
                            <a href="{{ url('/profil/visi-misi') }}"
                                class="footer-link">{{ __('footer.nav_vision_mission') }}</a>
                        </li>
                        <li class="mb-2">
                            <a href="{{ url('/profil/struktur-organisasi') }}"
                                class="footer-link">{{ __('footer.nav_structure') }}</a>
                        </li>

                        <li class="mb-2">
                            <a href="{{ url('/layanan-kami') }}"
                                class="footer-link">{{ __('footer.nav_services') }}</a>
                        </li>
                        <li class="mb-2">
                            <a href="{{ url('/fasilitas') }}"
                                class="footer-link">{{ __('footer.nav_facilities') }}</a>
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

                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <a href="mailto:gufron.wiguna@dwidamartirta.co.id" class="footer-link fw-bold mb-0">
                                        gufron.wiguna@dwidamartirta.co.id
                                    </a>

                                    <button type="button"
                                        class="btn btn-sm btn-outline-light d-inline-flex align-items-center gap-1 copy-btn p-1"
                                        data-copy="gufron.wiguna@dwidamartirta.co.id">
                                        <span class="copy-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <rect x="8" y="8" width="12" height="12" rx="2"></rect>
                                                <path d="M16 8V6a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2">
                                                </path>
                                            </svg>
                                        </span>
                                        <span class="copy-label">Salin</span>
                                    </button>
                                </div>

                                <div class="d-flex align-items-center gap-2">
                                    <a href="mailto:admin@dwidamartirta.co.id" class="footer-link fw-bold mb-0">
                                        admin@dwidamartirta.co.id
                                    </a>

                                    <button type="button"
                                        class="btn btn-sm btn-outline-light d-inline-flex align-items-center gap-1 copy-btn p-1"
                                        data-copy="admin@dwidamartirta.co.id">
                                        <span class="copy-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <rect x="8" y="8" width="12" height="12" rx="2">
                                                </rect>
                                                <path d="M16 8V6a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2">
                                                </path>
                                            </svg>
                                        </span>
                                        <span class="copy-label">Salin</span>
                                    </button>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex align-items-start">
                            <i class="icon-base ti tabler-brand-whatsapp me-2 mt-1"></i>
                            <div>
                                <strong class="mb-2 d-block">{{ __('footer.whatsapp') }}</strong>

                                <div class="d-flex flex-column flex-md-row gap-3 mt-2">
                                    <!-- Kartu WhatsApp Direktur Utama -->
                                    <a href="https://wa.me/6281277000789?text=Halo%20Pak%20Gufron%20Wiguna,%20Direktur%20Utama%20PT%20Dwi%20Damar%20Tirta.%20Saya%20mendapatkan%20kontak%20Bapak%20dari%20website%20dwidamartirta.co.id."
                                        target="_blank" rel="noopener"
                                        class="btn btn-success text-start d-flex align-items-center gap-2 px-3 py-2">
                                        <i class="ti tabler-brand-whatsapp fs-5"></i>
                                        <div class="small">
                                            <div class="fw-bold">Gufron Wiguna</div>
                                            <div class="text-white-50">Direktur Utama</div>
                                        </div>
                                    </a>
                                    <a href="https://wa.me/628116933777?text=Halo%20Pak%20Gufron%20Wiguna,%20Direktur%20Utama%20PT%20Dwi%20Damar%20Tirta.%20Saya%20mendapatkan%20kontak%20Bapak%20dari%20website%20dwidamartirta.co.id."
                                        target="_blank" rel="noopener"
                                        class="btn btn-success text-start d-flex align-items-center gap-2 px-3 py-2">
                                        <i class="ti tabler-brand-whatsapp fs-5"></i>
                                        <div class="small">
                                            <div class="fw-bold">Admin</div>
                                            <div class="text-white-50">Dwi Damar Tirta</div>
                                        </div>
                                    </a>
                                </div>
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
                <!-- <a href="#" class="me-2 text-white">LinkedIn</a>
                <a href="https://www.instagram.com/dwidamartirta.id/" class="text-white"
                    target="_blank">Instagram</a> -->
                <a href="#" class="me-2 text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-brand-linkedin">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M17 2a5 5 0 0 1 5 5v10a5 5 0 0 1 -5 5h-10a5 5 0 0 1 -5 -5v-10a5 5 0 0 1 5 -5zm-9 8a1 1 0 0 0 -1 1v5a1 1 0 0 0 2 0v-5a1 1 0 0 0 -1 -1m6 0a3 3 0 0 0 -1.168 .236l-.125 .057a1 1 0 0 0 -1.707 .707v5a1 1 0 0 0 2 0v-3a1 1 0 0 1 2 0v3a1 1 0 0 0 2 0v-3a3 3 0 0 0 -3 -3m-6 -3a1 1 0 0 0 -.993 .883l-.007 .127a1 1 0 0 0 1.993 .117l.007 -.127a1 1 0 0 0 -1 -1" />
                    </svg></a>
                <a href="https://www.instagram.com/dwidamartirta.id/" class="text-white" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-brand-instagram">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M16 3a5 5 0 0 1 5 5v8a5 5 0 0 1 -5 5h-8a5 5 0 0 1 -5 -5v-8a5 5 0 0 1 5 -5zm-4 5a4 4 0 0 0 -3.995 3.8l-.005 .2a4 4 0 1 0 4 -4m4.5 -1.5a1 1 0 0 0 -.993 .883l-.007 .127a1 1 0 0 0 1.993 .117l.007 -.127a1 1 0 0 0 -1 -1" />
                    </svg>
                </a>
                <a href="#" class="text-white" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-brand-facebook">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M18 2a1 1 0 0 1 .993 .883l.007 .117v4a1 1 0 0 1 -.883 .993l-.117 .007h-3v1h3a1 1 0 0 1 .991 1.131l-.02 .112l-1 4a1 1 0 0 1 -.858 .75l-.113 .007h-2v6a1 1 0 0 1 -.883 .993l-.117 .007h-4a1 1 0 0 1 -.993 -.883l-.007 -.117v-6h-2a1 1 0 0 1 -.993 -.883l-.007 -.117v-4a1 1 0 0 1 .883 -.993l.117 -.007h2v-1a6 6 0 0 1 5.775 -5.996l.225 -.004h3z" />
                    </svg>
                </a>
                <a href="#" class="text-white" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-brand-x">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M8.267 3a1 1 0 0 1 .73 .317l.076 .092l4.274 5.828l5.946 -5.944a1 1 0 0 1 1.497 1.32l-.083 .094l-6.163 6.162l6.262 8.54a1 1 0 0 1 -.697 1.585l-.109 .006h-4.267a1 1 0 0 1 -.73 -.317l-.076 -.092l-4.276 -5.829l-5.944 5.945a1 1 0 0 1 -1.497 -1.32l.083 -.094l6.161 -6.163l-6.26 -8.539a1 1 0 0 1 .697 -1.585l.109 -.006h4.267z" />
                    </svg>
                </a>

            </div>
        </div>
    </div>
</footer>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const copySvg = `
        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <rect x="8" y="8" width="12" height="12" rx="2"></rect>
            <path d="M16 8V6a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2"></path>
        </svg>
    `;

    const checkSvg = `
        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
             stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M5 12l5 5L20 7"></path>
        </svg>
    `;

    const getVariantClass = (button) => {
        return [...button.classList].find(cls =>
            /^(btn-(outline-)?(primary|secondary|success|danger|warning|info|light|dark))$/.test(cls)
        );
    };

    const setButtonState = (button, type) => {
        const label = button.querySelector('.copy-label');
        const icon = button.querySelector('.copy-icon');

        if (!button.dataset.originalBtnClass) {
            const originalClass = getVariantClass(button);
            if (originalClass) {
                button.dataset.originalBtnClass = originalClass;
            }
        }

        const originalBtnClass = button.dataset.originalBtnClass;

        if (originalBtnClass) {
            button.classList.remove(
                'btn-primary', 'btn-secondary', 'btn-success', 'btn-danger',
                'btn-warning', 'btn-info', 'btn-light', 'btn-dark',
                'btn-outline-primary', 'btn-outline-secondary', 'btn-outline-success',
                'btn-outline-danger', 'btn-outline-warning', 'btn-outline-info',
                'btn-outline-light', 'btn-outline-dark'
            );
        }

        if (type === 'success') {
            button.classList.add('btn-success');
            if (label) label.textContent = 'Tersalin';
            if (icon) icon.innerHTML = checkSvg;
        } else if (type === 'error') {
            button.classList.add('btn-danger');
            if (label) label.textContent = 'Gagal';
        } else if (type === 'reset') {
            if (originalBtnClass) {
                button.classList.add(originalBtnClass);
            }
            if (label) label.textContent = 'Salin';
            if (icon) icon.innerHTML = copySvg;
        }

        button.blur();
    };

    document.querySelectorAll('.copy-btn').forEach(button => {
        if (!button.dataset.originalBtnClass) {
            const originalClass = getVariantClass(button);
            if (originalClass) {
                button.dataset.originalBtnClass = originalClass;
            }
        }

        button.addEventListener('click', async function () {
            const text = this.dataset.copy;
            if (!text) return;

            try {
                await navigator.clipboard.writeText(text);
                setButtonState(this, 'success');
            } catch (error) {
                setButtonState(this, 'error');
            }

            clearTimeout(this.copyTimeout);
            this.copyTimeout = setTimeout(() => {
                setButtonState(this, 'reset');
            }, 1200);
        });
    });
});
</script>