@extends('app')

@section('title', __('gallery.title'))
@section('meta_description', __('gallery.meta_description'))
@section('meta_keywords', __('gallery.meta_keywords'))

@push('styles')
    <style>
        .gallery-hero {
            padding: 4rem 0 2rem;
        }

        .gallery-hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.3rem 0.8rem;
            border-radius: 999px;
            background: #e0f2fe;
            color: #0369a1;
            font-size: 0.8rem;
            font-weight: 600;
            letter-spacing: 0.03em;
            text-transform: uppercase;
        }

        .gallery-hero-badge-dot {
            width: 8px;
            height: 8px;
            border-radius: 999px;
            background: #22c55e;
            box-shadow: 0 0 0 4px rgba(34, 197, 94, 0.3);
        }

        .gallery-hero-title {
            font-size: 2rem;
            font-weight: 700;
            color: #0f172a;
            margin-top: 1rem;
            margin-bottom: 0.75rem;
        }

        .gallery-hero-text {
            color: #64748b;
            max-width: 640px;
        }

        .gallery-filter {
            margin: 2rem 0 1.5rem;
            display: flex;
            flex-wrap: wrap;
            gap: 0.75rem;
        }

        .gallery-filter-btn {
            border-radius: 999px;
            padding: 0.45rem 1.1rem;
            font-size: 0.9rem;
            font-weight: 500;
            border: 1px solid #d4d4ff;
            background: #ffffff;
            color: #0f172a;
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .gallery-filter-btn.active {
            background: #0f172a;
            color: #f9fafb;
            border-color: #0f172a;
            box-shadow: 0 8px 20px rgba(15, 23, 42, 0.18);
        }

        .gallery-filter-btn span.dot {
            width: 8px;
            height: 8px;
            border-radius: 999px;
            background: currentColor;
        }

        .gallery-card {
            border-radius: 1rem;
            overflow: hidden;
            background: linear-gradient(135deg, #ffffff, #f9fafb);
            height: 100%;
            box-shadow: 0 10px 25px rgba(15, 23, 42, 0.08);
            border: 1px solid #e5e7eb;
            transition: transform 0.2s ease, box-shadow 0.2s ease, border-color 0.2s ease;
        }

        .gallery-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 14px 30px rgba(15, 23, 42, 0.12);
            border-color: #cbd5f5;
        }

        .gallery-thumb-wrapper {
            overflow: hidden;
            border-radius: 1rem 1rem 0 0;
        }

        .gallery-thumb {
            width: 100%;
            height: 220px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .gallery-card:hover .gallery-thumb {
            transform: scale(1.03);
        }

        .gallery-title {
            font-size: 0.98rem;
            font-weight: 600;
            margin-top: 0.55rem;
            margin-bottom: 0.15rem;
            color: #0f172a;
        }

        .gallery-meta {
            font-size: 0.78rem;
            color: #6b7280;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .gallery-meta span {
            display: inline-flex;
            align-items: center;
            gap: 0.25rem;
        }

        .gallery-meta span i {
            font-size: 0.8rem;
            opacity: 0.85;
        }

        .badge-step {
            display: inline-flex;
            align-items: center;
            gap: 0.35rem;
            padding: 0.2rem 0.65rem;
            border-radius: 999px;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.04em;
        }

        .badge-step .dot {
            width: 9px;
            height: 9px;
            border-radius: 999px;
            background: #0ea5e9;
        }

        .badge-pengangkutan {
            background: rgba(37, 99, 235, 0.08);
            color: #1d4ed8;
        }

        .badge-bongkar {
            background: rgba(16, 185, 129, 0.08);
            color: #059669;
        }

        .badge-penyimpanan {
            background: rgba(249, 115, 22, 0.08);
            color: #ea580c;
        }

        .badge-pengiriman {
            background: rgba(129, 140, 248, 0.1);
            color: #4f46e5;
        }

        .gallery-modal-img {
            width: 100%;
            max-height: 70vh;
            object-fit: cover;
        }

        @media (max-width:575.98px) {
            .gallery-hero {
                padding-top: 3rem;
            }

            .gallery-thumb {
                height: 200px;
            }

            .gallery-hero-title {
                font-size: 1.6rem;
            }
        }
    </style>
@endpush

@section('content')
    <section class="gallery-hero">
        <div class="container">
            <span class="gallery-hero-badge">
                <span class="gallery-hero-badge-dot"></span>
                {{ __('gallery.hero_badge') }}
            </span>
            <h1 class="gallery-hero-title">
                {{ __('gallery.hero_heading') }}
            </h1>
            <p class="gallery-hero-text mb-0">
                {{ __('gallery.hero_text') }}
            </p>

            <div class="gallery-filter">
                <button class="gallery-filter-btn active" data-filter="all">
                    <span class="dot"></span> {{ __('gallery.filter_all') }}
                </button>
                <button class="gallery-filter-btn" data-filter="pengangkutan">
                    <span class="dot"></span> {{ __('gallery.filter_pengangkutan') }}
                </button>
                <button class="gallery-filter-btn" data-filter="bongkar">
                    <span class="dot"></span> {{ __('gallery.filter_bongkar') }}
                </button>
                <button class="gallery-filter-btn" data-filter="penyimpanan">
                    <span class="dot"></span> {{ __('gallery.filter_penyimpanan') }}
                </button>
                <button class="gallery-filter-btn" data-filter="pengiriman">
                    <span class="dot"></span> {{ __('gallery.filter_pengiriman') }}
                </button>
            </div>
        </div>
    </section>

    <section class="pb-5">
        <div class="container">
            <div class="row g-4">

                {{-- 1. Pengangkutan --}}
                <div class="col-12 col-md-6 col-lg-4 gallery-item" data-category="pengangkutan" data-type="image"
                    data-title="{{ __('gallery.card_pengangkutan_title') }}"
                    data-location="{{ __('gallery.location_pengangkutan') }}" data-date="2025"
                    data-description="{{ __('gallery.card_pengangkutan_text') }}"
                    data-src="{{ asset('assets/template/img/gallery/Pengangkutan-3.jpeg') }}">
                    <article class="gallery-card">
                        <div class="gallery-thumb-wrapper">
                            <img src="{{ asset('assets/template/img/gallery/Pengangkutan-3.jpeg') }}"
                                alt="{{ __('gallery.card_pengangkutan_title') }}" class="gallery-thumb">
                        </div>
                        <div class="p-3">
                            <span class="badge-step badge-pengangkutan">
                                <span class="dot"></span>
                                {{ __('gallery.card_pengangkutan_badge') }}
                            </span>
                            <h3 class="gallery-title">
                                {{ __('gallery.card_pengangkutan_title') }}
                            </h3>
                            <p class="mb-2 small text-muted">
                                {{ __('gallery.card_pengangkutan_text') }}
                            </p>
                            <div class="gallery-meta">
                                <span><i class="bi bi-geo-alt"></i> {{ __('gallery.location_pengangkutan') }}</span>
                                <span><i class="bi bi-calendar-event"></i> 2025</span>
                            </div>
                        </div>
                    </article>
                </div>

                {{-- 2. Bongkar muat --}}
                <div class="col-12 col-md-6 col-lg-4 gallery-item" data-category="bongkar" data-type="image"
                    data-title="{{ __('gallery.card_bongkar_title') }}"
                    data-location="{{ __('gallery.location_bongkar') }}" data-date="2025"
                    data-description="{{ __('gallery.card_bongkar_text') }}"
                    data-src="{{ asset('assets/template/img/gallery/bongkar-muat.png') }}">
                    <article class="gallery-card">
                        <div class="gallery-thumb-wrapper">
                            <img src="{{ asset('assets/template/img/gallery/bongkar-muat.png') }}"
                                alt="{{ __('gallery.card_bongkar_title') }}" class="gallery-thumb">
                        </div>
                        <div class="p-3">
                            <span class="badge-step badge-bongkar">
                                <span class="dot"></span>
                                {{ __('gallery.card_bongkar_badge') }}
                            </span>
                            <h3 class="gallery-title">
                                {{ __('gallery.card_bongkar_title') }}
                            </h3>
                            <p class="mb-2 small text-muted">
                                {{ __('gallery.card_bongkar_text') }}
                            </p>
                            <div class="gallery-meta">
                                <span><i class="bi bi-geo-alt"></i> {{ __('gallery.location_bongkar') }}</span>
                                <span><i class="bi bi-calendar-event"></i> 2025</span>
                            </div>
                        </div>
                    </article>
                </div>

                {{-- 3. Penyimpanan & label --}}
                <div class="col-12 col-md-6 col-lg-4 gallery-item" data-category="penyimpanan" data-type="image"
                    data-title="{{ __('gallery.card_penyimpanan_title') }}"
                    data-location="{{ __('gallery.location_penyimpanan') }}" data-date="2025"
                    data-description="{{ __('gallery.card_penyimpanan_text') }}"
                    data-src="{{ asset('assets/template/img/gallery/penyimpanan-dan-labeling.png') }}">
                    <article class="gallery-card">
                        <div class="gallery-thumb-wrapper">
                            <img src="{{ asset('assets/template/img/gallery/penyimpanan-dan-labeling.png') }}"
                                alt="{{ __('gallery.card_penyimpanan_title') }}" class="gallery-thumb">
                        </div>
                        <div class="p-3">
                            <span class="badge-step badge-penyimpanan">
                                <span class="dot"></span>
                                {{ __('gallery.card_penyimpanan_badge') }}
                            </span>
                            <h3 class="gallery-title">
                                {{ __('gallery.card_penyimpanan_title') }}
                            </h3>
                            <p class="mb-2 small text-muted">
                                {{ __('gallery.card_penyimpanan_text') }}
                            </p>
                            <div class="gallery-meta">
                                <span><i class="bi bi-geo-alt"></i> {{ __('gallery.location_penyimpanan') }}</span>
                                <span><i class="bi bi-calendar-event"></i> 2025</span>
                            </div>
                        </div>
                    </article>
                </div>

                {{-- 4. Pengiriman ke rekanan --}}
                <div class="col-12 col-md-6 col-lg-4 gallery-item" data-category="pengiriman" data-type="video"
                    data-title="{{ __('gallery.card_pengiriman_title') }}"
                    data-location="{{ __('gallery.location_pengiriman') }}" data-date="2025"
                    data-description="{{ __('gallery.card_pengiriman_text') }}"
                    data-src="{{ asset('assets/template/img/gallery/pengiriman.mp4') }}">
                    <article class="gallery-card">
                        <div class="gallery-thumb-wrapper">
                            <video class="gallery-thumb" controls preload="metadata">
                                <source src="{{ asset('assets/template/img/gallery/pengiriman.mp4') }}" type="video/mp4">
                                Browser Anda tidak mendukung video tag.
                            </video>
                        </div>
                        <div class="p-3">
                            <span class="badge-step badge-pengiriman">
                                <span class="dot"></span>
                                {{ __('gallery.card_pengiriman_badge') }}
                            </span>
                            <h3 class="gallery-title">
                                {{ __('gallery.card_pengiriman_title') }}
                            </h3>
                            <p class="mb-2 small text-muted">
                                {{ __('gallery.card_pengiriman_text') }}
                            </p>
                            <div class="gallery-meta">
                                <span><i class="bi bi-geo-alt"></i> {{ __('gallery.location_pengiriman') }}</span>
                                <span><i class="bi bi-calendar-event"></i> 2025</span>
                            </div>
                        </div>
                    </article>
                </div>

            </div>
        </div>
    </section>

    {{-- Modal preview --}}
    <div class="modal fade" id="galleryModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content bg-white text-dark border-0">
                <div class="modal-header border-0">
                    <h5 class="modal-title" id="galleryModalTitle"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pb-3">
                    <div id="galleryModalMedia" class="mb-3"></div>
                    <div class="d-flex flex-wrap gap-3 small text-muted">
                        <span class="d-inline-flex align-items-center gap-2">
                            <i class="bi bi-geo-alt"></i>
                            <span id="galleryModalLocation"></span>
                        </span>
                        <span class="d-inline-flex align-items-center gap-2">
                            <i class="bi bi-calendar-event"></i>
                            <span id="galleryModalDate"></span>
                        </span>
                    </div>
                </div>
                <div class="modal-footer border-0 pt-0">
                    <button type="button" class="btn btn-outline-secondary btn-sm" data-bs-dismiss="modal">
                        {{ __('gallery.modal_close') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const filterButtons = document.querySelectorAll('.gallery-filter-btn');
            const items = document.querySelectorAll('.gallery-item');

            const modalEl = document.getElementById('galleryModal');
            const modalTitle = document.getElementById('galleryModalTitle');
            const modalMedia = document.getElementById('galleryModalMedia');
            const modalLocation = document.getElementById('galleryModalLocation');
            const modalDate = document.getElementById('galleryModalDate');
            const bsModal = modalEl ? new bootstrap.Modal(modalEl) : null;

            filterButtons.forEach(btn => {
                btn.addEventListener('click', () => {
                    const filter = btn.getAttribute('data-filter');
                    filterButtons.forEach(b => b.classList.remove('active'));
                    btn.classList.add('active');

                    items.forEach(item => {
                        const category = item.getAttribute('data-category');
                        if (filter === 'all' || filter === category) {
                            item.classList.remove('d-none');
                        } else {
                            item.classList.add('d-none');
                        }
                    });
                });
            });

            items.forEach(item => {
                item.addEventListener('click', () => {
                    if (!bsModal) return;

                    const type = item.getAttribute('data-type');
                    const title = item.getAttribute('data-title') || '';
                    const location = item.getAttribute('data-location') || '-';
                    const date = item.getAttribute('data-date') || '-';
                    const desc = item.getAttribute('data-description') || '';
                    const src = item.getAttribute('data-src');

                    modalTitle.textContent = title;
                    modalLocation.textContent = location;
                    modalDate.textContent = date;

                    if (type === 'image') {
                        modalMedia.innerHTML = `
                <img src="${src}" alt="${title}" class="gallery-modal-img rounded mb-3">
                <p class="small text-muted mb-0">${desc}</p>
            `;
                    } else if (type === 'video') {
                        modalMedia.innerHTML = `
                <video controls class="gallery-modal-img rounded mb-3">
                    <source src="${src}" type="video/mp4">
                    Browser Anda tidak mendukung video tag.
                </video>
                <p class="small text-muted mb-0">${desc}</p>
            `;
                    } else {
                        modalMedia.innerHTML = '';
                    }

                    bsModal.show();
                });
            });

            if (modalEl) {
                modalEl.addEventListener('hidden.bs.modal', () => {
                    if (modalMedia) modalMedia.innerHTML = '';
                });
            }
        });
    </script>
@endpush
