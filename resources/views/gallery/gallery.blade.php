@extends('app')

@section('title', 'Gallery Pekerjaan Pengelolaan Limbah B3 - PT Dwi Damar Tirta')

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
        border: 1px solid #cbd5f5;
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
        box-shadow: 0 8px 20px rgba(15, 23, 42, 0.25);
    }

    .gallery-filter-btn span.dot {
        width: 8px;
        height: 8px;
        border-radius: 999px;
        background: currentColor;
    }

    .gallery-grid {
        margin-bottom: 3rem;
    }

    .gallery-card {
        position: relative;
        border-radius: 1rem;
        overflow: hidden;
        background: #020617;
        cursor: pointer;
        height: 100%;
        box-shadow:
            0 10px 25px rgba(15, 23, 42, 0.15),
            0 25px 60px rgba(15, 23, 42, 0.18);
        transition: transform 0.25s ease, box-shadow 0.25s ease;
    }

    .gallery-card:hover {
        transform: translateY(-4px);
        box-shadow:
            0 14px 30px rgba(15, 23, 42, 0.18),
            0 32px 70px rgba(15, 23, 42, 0.22);
    }

    .gallery-thumb-wrapper {
        position: relative;
        overflow: hidden;
    }

    .gallery-thumb {
        width: 100%;
        height: 240px;
        object-fit: cover;
        display: block;
        transition: transform 0.35s ease;
    }

    .gallery-card:hover .gallery-thumb {
        transform: scale(1.05);
    }

    .gallery-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(
            to top,
            rgba(15, 23, 42, 0.85),
            rgba(15, 23, 42, 0.35),
            transparent
        );
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        padding: 1rem 1rem 1.1rem;
        color: #e5e7eb;
        pointer-events: none;
    }

    .gallery-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.35rem;
        padding: 0.25rem 0.75rem;
        border-radius: 999px;
        font-size: 0.75rem;
        font-weight: 600;
        letter-spacing: 0.04em;
        text-transform: uppercase;
    }

    .gallery-badge-dot {
        width: 9px;
        height: 9px;
        border-radius: 999px;
        background: #f97316;
    }

    .badge-pengangkutan {
        background: rgba(37, 99, 235, 0.18);
        color: #bfdbfe;
    }

    .badge-pengumpulan {
        background: rgba(16, 185, 129, 0.18);
        color: #a7f3d0;
    }

    .badge-loading {
        background: rgba(249, 115, 22, 0.2);
        color: #fed7aa;
    }

    .badge-mesin {
        background: rgba(139, 92, 246, 0.2);
        color: #ddd6fe;
    }

    .gallery-title {
        font-size: 1rem;
        font-weight: 600;
        margin-top: 0.7rem;
        margin-bottom: 0.15rem;
        color: #f9fafb;
    }

    .gallery-meta {
        font-size: 0.78rem;
        color: #cbd5f5;
        display: flex;
        align-items: center;
        gap: 0.7rem;
        flex-wrap: wrap;
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

    .gallery-type-pill {
        position: absolute;
        top: 0.9rem;
        right: 0.9rem;
        padding: 0.18rem 0.6rem;
        border-radius: 999px;
        font-size: 0.7rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.08em;
        background: rgba(15, 23, 42, 0.85);
        color: #e5e7eb;
        display: inline-flex;
        align-items: center;
        gap: 0.25rem;
    }

    .gallery-type-pill i {
        font-size: 0.8rem;
    }

    .gallery-play-icon {
        position: absolute;
        inset: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        pointer-events: none;
        opacity: 0;
        transform: scale(0.95);
        transition: opacity 0.25s ease, transform 0.25s ease;
    }

    .gallery-play-icon i {
        width: 52px;
        height: 52px;
        border-radius: 999px;
        background: rgba(15, 23, 42, 0.85);
        color: #fefce8;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.25rem;
        box-shadow: 0 12px 30px rgba(15, 23, 42, 0.6);
        backdrop-filter: blur(6px);
    }

    .gallery-card.is-video:hover .gallery-play-icon {
        opacity: 1;
        transform: scale(1);
    }

    .gallery-empty {
        padding: 3rem 1rem;
        text-align: center;
        color: #64748b;
        border-radius: 1rem;
        background: #f8fafc;
        border: 1px dashed #d1d5db;
    }

    /* Modal detail */
    .gallery-modal-img {
        width: 100%;
        max-height: 70vh;
        object-fit: cover;
    }

    @media (max-width: 575.98px) {
        .gallery-hero {
            padding-top: 3rem;
        }

        .gallery-thumb {
            height: 210px;
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
                Gallery Pekerjaan
            </span>
            <h1 class="gallery-hero-title">
                Dokumentasi Pengerjaan Pengelolaan Limbah B3 & Non B3
            </h1>
            <p class="gallery-hero-text mb-0">
                Kumpulan dokumentasi proses pengangkutan, pengumpulan, loading, dan operasi mesin dalam
                pengelolaan limbah B3 yang kami tangani di berbagai lokasi industri.
            </p>

            <div class="gallery-filter">
                <button class="gallery-filter-btn active" data-filter="all">
                    <span class="dot"></span>
                    Semua
                </button>
                <button class="gallery-filter-btn" data-filter="pengangkutan">
                    <span class="dot"></span>
                    Pengangkutan
                </button>
                <button class="gallery-filter-btn" data-filter="pengumpulan">
                    <span class="dot"></span>
                    Pengumpulan
                </button>
                <button class="gallery-filter-btn" data-filter="loading">
                    <span class="dot"></span>
                    Loading
                </button>
                <button class="gallery-filter-btn" data-filter="mesin">
                    <span class="dot"></span>
                    Mesin
                </button>
            </div>
        </div>
    </section>

    <section class="pb-5">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4 gallery-grid" id="galleryGrid">
                {{-- Contoh item (nanti bisa diganti loop dari DB) --}}
                {{-- FOTO – Pengangkutan --}}
                <div class="col gallery-item" data-category="pengangkutan" data-type="image"
                     data-title="Armada Pengangkutan Limbah B3 di Kawasan Industri"
                     data-location="Kawasan Industri Batam"
                     data-date="2025"
                     data-src="{{ asset('assets/gallery/pengangkutan-1.jpg') }}">
                    <article class="gallery-card">
                        <div class="gallery-thumb-wrapper">
                            <img
                                src="{{ asset('assets/gallery/pengangkutan-1.jpg') }}"
                                alt="Armada pengangkutan limbah B3"
                                loading="lazy"
                                class="gallery-thumb img-fluid">
                            <div class="gallery-overlay">
                                <span class="gallery-badge badge-pengangkutan">
                                    <span class="gallery-badge-dot"></span>
                                    Pengangkutan
                                </span>
                                <h3 class="gallery-title">
                                    Armada Pengangkutan Limbah B3 di Kawasan Industri
                                </h3>
                                <div class="gallery-meta">
                                    <span>
                                        <i class="bi bi-geo-alt"></i>
                                        Kawasan Industri Batam
                                    </span>
                                    <span>
                                        <i class="bi bi-calendar-event"></i>
                                        2025
                                    </span>
                                </div>
                            </div>
                            <span class="gallery-type-pill">
                                <i class="bi bi-image"></i>
                                Foto
                            </span>
                        </div>
                    </article>
                </div>

                {{-- FOTO – Pengumpulan --}}
                <div class="col gallery-item" data-category="pengumpulan" data-type="image"
                     data-title="Pengumpulan Limbah B3 di Area Produksi"
                     data-location="Pabrik Manufaktur"
                     data-date="2025"
                     data-src="{{ asset('assets/gallery/pengumpulan-1.jpg') }}">
                    <article class="gallery-card">
                        <div class="gallery-thumb-wrapper">
                            <img
                                src="{{ asset('assets/gallery/pengumpulan-1.jpg') }}"
                                alt="Pengumpulan limbah B3 di area produksi"
                                loading="lazy"
                                class="gallery-thumb img-fluid">
                            <div class="gallery-overlay">
                                <span class="gallery-badge badge-pengumpulan">
                                    <span class="gallery-badge-dot"></span>
                                    Pengumpulan
                                </span>
                                <h3 class="gallery-title">
                                    Pengumpulan Limbah B3 di Area Produksi
                                </h3>
                                <div class="gallery-meta">
                                    <span>
                                        <i class="bi bi-geo-alt"></i>
                                        Pabrik Manufaktur
                                    </span>
                                    <span>
                                        <i class="bi bi-calendar-event"></i>
                                        2025
                                    </span>
                                </div>
                            </div>
                            <span class="gallery-type-pill">
                                <i class="bi bi-image"></i>
                                Foto
                            </span>
                        </div>
                    </article>
                </div>

                {{-- FOTO – Loading --}}
                <div class="col gallery-item" data-category="loading" data-type="image"
                     data-title="Proses Loading Limbah ke Armada"
                     data-location="Gudang Penyimpanan Sementara"
                     data-date="2025"
                     data-src="{{ asset('assets/gallery/loading-1.jpg') }}">
                    <article class="gallery-card">
                        <div class="gallery-thumb-wrapper">
                            <img
                                src="{{ asset('assets/gallery/loading-1.jpg') }}"
                                alt="Proses loading limbah ke armada"
                                loading="lazy"
                                class="gallery-thumb img-fluid">
                            <div class="gallery-overlay">
                                <span class="gallery-badge badge-loading">
                                    <span class="gallery-badge-dot"></span>
                                    Loading
                                </span>
                                <h3 class="gallery-title">
                                    Proses Loading Limbah ke Armada
                                </h3>
                                <div class="gallery-meta">
                                    <span>
                                        <i class="bi bi-geo-alt"></i>
                                        Gudang Penyimpanan Sementara
                                    </span>
                                    <span>
                                        <i class="bi bi-calendar-event"></i>
                                        2025
                                    </span>
                                </div>
                            </div>
                            <span class="gallery-type-pill">
                                <i class="bi bi-image"></i>
                                Foto
                            </span>
                        </div>
                    </article>
                </div>

                {{-- FOTO – Mesin --}}
                <div class="col gallery-item" data-category="mesin" data-type="image"
                     data-title="Peralatan & Mesin Pendukung Pengelolaan Limbah"
                     data-location="Workshop & Fasilitas Internal"
                     data-date="2025"
                     data-src="{{ asset('assets/gallery/mesin-1.jpg') }}">
                    <article class="gallery-card">
                        <div class="gallery-thumb-wrapper">
                            <img
                                src="{{ asset('assets/gallery/mesin-1.jpg') }}"
                                alt="Peralatan dan mesin pengelolaan limbah"
                                loading="lazy"
                                class="gallery-thumb img-fluid">
                            <div class="gallery-overlay">
                                <span class="gallery-badge badge-mesin">
                                    <span class="gallery-badge-dot"></span>
                                    Mesin
                                </span>
                                <h3 class="gallery-title">
                                    Peralatan & Mesin Pendukung Pengelolaan Limbah
                                </h3>
                                <div class="gallery-meta">
                                    <span>
                                        <i class="bi bi-geo-alt"></i>
                                        Workshop & Fasilitas Internal
                                    </span>
                                    <span>
                                        <i class="bi bi-calendar-event"></i>
                                        2025
                                    </span>
                                </div>
                            </div>
                            <span class="gallery-type-pill">
                                <i class="bi bi-image"></i>
                                Foto
                            </span>
                        </div>
                    </article>
                </div>

                {{-- VIDEO – Pengangkutan (contoh, pakai thumbnail + icon play) --}}
                <div class="col gallery-item" data-category="pengangkutan" data-type="video"
                     data-title="Video Pengangkutan Limbah B3"
                     data-location="Kawasan Industri"
                     data-date="2025"
                     data-video-url="https://www.youtube.com/embed/XXXXXXXX">
                    <article class="gallery-card is-video">
                        <div class="gallery-thumb-wrapper">
                            <img
                                src="{{ asset('assets/gallery/pengangkutan-video-thumb.jpg') }}"
                                alt="Video pengangkutan limbah B3"
                                loading="lazy"
                                class="gallery-thumb img-fluid">
                            <div class="gallery-overlay">
                                <span class="gallery-badge badge-pengangkutan">
                                    <span class="gallery-badge-dot"></span>
                                    Pengangkutan
                                </span>
                                <h3 class="gallery-title">
                                    Video Pengangkutan Limbah B3
                                </h3>
                                <div class="gallery-meta">
                                    <span>
                                        <i class="bi bi-geo-alt"></i>
                                        Kawasan Industri
                                    </span>
                                    <span>
                                        <i class="bi bi-calendar-event"></i>
                                        2025
                                    </span>
                                </div>
                            </div>
                            <span class="gallery-type-pill">
                                <i class="bi bi-camera-video"></i>
                                Video
                            </span>
                            <div class="gallery-play-icon">
                                <i class="bi bi-play-fill"></i>
                            </div>
                        </div>
                    </article>
                </div>

                {{-- Tambah item lain sesuai kebutuhan --}}
            </div>

            {{-- Optional: kalau mau ada state kosong saat filter tidak menemukan item, bisa kamu handle via JS --}}
        </div>
    </section>

    {{-- Modal untuk preview (1 modal saja, kontennya dinamis) --}}
    <div class="modal fade" id="galleryModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content bg-black text-white border-0">
                <div class="modal-header border-0">
                    <h5 class="modal-title" id="galleryModalTitle"></h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                </div>
                <div class="modal-body pb-3">
                    <div id="galleryModalMedia" class="mb-3"></div>
                    <div class="d-flex flex-wrap gap-3 small text-gray-300">
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
                    <button type="button" class="btn btn-outline-light btn-sm" data-bs-dismiss="modal">
                        Tutup
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const filterButtons = document.querySelectorAll('.gallery-filter-btn');
        const items = document.querySelectorAll('.gallery-item');
        const grid = document.getElementById('galleryGrid');

        const modalEl = document.getElementById('galleryModal');
        const modalTitle = document.getElementById('galleryModalTitle');
        const modalMedia = document.getElementById('galleryModalMedia');
        const modalLocation = document.getElementById('galleryModalLocation');
        const modalDate = document.getElementById('galleryModalDate');
        const bsModal = modalEl ? new bootstrap.Modal(modalEl) : null;

        // Filter
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

        // Klik item -> buka modal
        items.forEach(item => {
            item.addEventListener('click', () => {
                if (!bsModal) return;

                const type = item.getAttribute('data-type');
                const title = item.getAttribute('data-title') || '';
                const location = item.getAttribute('data-location') || '-';
                const date = item.getAttribute('data-date') || '-';

                modalTitle.textContent = title;
                modalLocation.textContent = location;
                modalDate.textContent = date;

                if (type === 'video') {
                    const videoUrl = item.getAttribute('data-video-url');
                    modalMedia.innerHTML = `
                        <div class="ratio ratio-16x9">
                            <iframe src="${videoUrl}"
                                    title="${title}"
                                    allowfullscreen
                                    loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    `;
                } else {
                    const src = item.getAttribute('data-src');
                    modalMedia.innerHTML = `
                        <img src="${src}"
                             alt="${title}"
                             class="gallery-modal-img rounded">
                    `;
                }

                bsModal.show();
            });
        });

        // Bersihkan iframe video ketika modal ditutup
        if (modalEl) {
            modalEl.addEventListener('hidden.bs.modal', () => {
                if (modalMedia) {
                    modalMedia.innerHTML = '';
                }
            });
        }
    });
</script>
@endpush
