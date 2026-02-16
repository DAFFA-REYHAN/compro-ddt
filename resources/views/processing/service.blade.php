@extends('app')

@section('title', 'Proses Pengerjaan - PT Dwi Damar Tirta')

@section('content')
    {{-- Galeri Proses Pengerjaan --}}
    <section class="section-padding" id="galeri">
        <div class="container">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <span class="section-subtitle">Proses Pengerjaan</span>
                <h2 class="section-title">Dokumentasi alur kerja & aktivitas lapangan</h2>
                <p class="section-desc">
                    Cuplikan proses pengangkutan, pengelolaan, dan penanganan limbah di lapangan sebagai bagian dari layanan
                    kami.
                </p>
            </div>

            {{-- Filter (opsional, untuk future JS) --}}
            <div class="gallery-filters" data-aos="fade-up" data-aos-delay="50">
                <button class="gallery-filter-btn active" data-filter="all">Semua</button>
                <button class="gallery-filter-btn" data-filter="pengangkutan">Proses Pengangkutan</button>
                <button class="gallery-filter-btn" data-filter="pengelolaan">Proses Pengelolaan</button>
                <button class="gallery-filter-btn" data-filter="fasilitas">Di Fasilitas</button>
                <button class="gallery-filter-btn" data-filter="video">Video Proses</button>
            </div>

            {{-- Grid – foto + video proses --}}
            <div class="gallery-grid" data-aos="fade-up" data-aos-delay="100">
                {{-- FOTO – Proses pengangkutan --}}
                <div class="gallery-item" data-category="pengangkutan" data-type="image">
                    <div class="gallery-image-wrapper">
                        <img src="{{ asset('assets/template/img/gallery/pengangkutan-1.jpg') }}"
                            alt="Proses pengangkutan limbah B3 dari lokasi klien">
                        <div class="gallery-overlay">
                            <div class="gallery-meta">
                                <span class="gallery-tag">Proses Pengangkutan</span>
                                <h3 class="gallery-title">Pengambilan limbah B3 di area produksi klien</h3>
                                <p class="gallery-location">Batam, Kepulauan Riau</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="gallery-item" data-category="pengangkutan" data-type="image">
                    <div class="gallery-image-wrapper">
                        <img src="{{ asset('assets/template/img/gallery/pengangkutan-2.jpg') }}"
                            alt="Proses loading limbah ke armada">
                        <div class="gallery-overlay">
                            <div class="gallery-meta">
                                <span class="gallery-tag">Proses Pengangkutan</span>
                                <h3 class="gallery-title">Loading limbah ke armada berizin dengan APD lengkap</h3>
                                <p class="gallery-location">Kawasan industri Muka Kuning</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- FOTO – Proses pengelolaan --}}
                <div class="gallery-item" data-category="pengelolaan" data-type="image">
                    <div class="gallery-image-wrapper">
                        <img src="{{ asset('assets/template/img/gallery/pengelolaan-1.jpg') }}"
                            alt="Area pengelolaan limbah terkontrol">
                        <div class="gallery-overlay">
                            <div class="gallery-meta">
                                <span class="gallery-tag">Proses Pengelolaan</span>
                                <h3 class="gallery-title">Pemilahan dan penataan limbah di area penyimpanan</h3>
                                <p class="gallery-location">Fasilitas PT Dwi Damar Tirta</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="gallery-item" data-category="pengelolaan" data-type="image">
                    <div class="gallery-image-wrapper">
                        <img src="{{ asset('assets/template/img/gallery/pengelolaan-2.jpg') }}"
                            alt="Handling limbah sesuai SOP">
                        <div class="gallery-overlay">
                            <div class="gallery-meta">
                                <span class="gallery-tag">Proses Pengelolaan</span>
                                <h3 class="gallery-title">Tim menangani limbah sesuai SOP dan standar K3</h3>
                                <p class="gallery-location">Area operasi</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- FOTO – Kegiatan di fasilitas (bagian dari proses) --}}
                <div class="gallery-item" data-category="fasilitas" data-type="image">
                    <div class="gallery-image-wrapper">
                        <img src="{{ asset('assets/template/img/gallery/fasilitas-1.jpg') }}"
                            alt="Pengaturan area penyimpanan limbah">
                        <div class="gallery-overlay">
                            <div class="gallery-meta">
                                <span class="gallery-tag">Di Fasilitas</span>
                                <h3 class="gallery-title">Pengaturan area penyimpanan limbah sebelum dikirim mitra pemanfaat
                                </h3>
                                <p class="gallery-location">Batam, Kepulauan Riau</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="gallery-item" data-category="fasilitas" data-type="image">
                    <div class="gallery-image-wrapper">
                        <img src="{{ asset('assets/template/img/gallery/fasilitas-2.jpg') }}"
                            alt="Area bongkar muat limbah">
                        <div class="gallery-overlay">
                            <div class="gallery-meta">
                                <span class="gallery-tag">Di Fasilitas</span>
                                <h3 class="gallery-title">Proses bongkar muat limbah di bawah pengawasan petugas</h3>
                                <p class="gallery-location">Fasilitas PT Dwi Damar Tirta</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- VIDEO – Proses di lapangan --}}
                <div class="gallery-item" data-category="pengangkutan" data-type="video">
                    <div class="gallery-image-wrapper">
                        <img src="{{ asset('assets/template/img/gallery/video-pengangkutan-thumb.jpg') }}"
                            alt="Video proses pengangkutan limbah B3">
                        <div class="gallery-overlay">
                            <div class="gallery-meta">
                                <span class="gallery-tag gallery-tag-video">Video • Proses Pengangkutan</span>
                                <h3 class="gallery-title">Alur pengangkutan limbah dari loading hingga berangkat</h3>
                                <p class="gallery-location">Batam, Kepulauan Riau</p>
                            </div>
                        </div>

                        <div class="gallery-play-icon">
                            <i class="iconbase ti tabler-player-play"></i>
                        </div>

                        <a href="https://www.youtube.com/watch?v=VIDEO_ID" class="gallery-video-link" target="_blank"
                            aria-label="Tonton video proses pengangkutan limbah B3"></a>
                    </div>
                </div>

                <div class="gallery-item" data-category="fasilitas" data-type="video">
                    <div class="gallery-image-wrapper">
                        <img src="{{ asset('assets/template/img/gallery/video-fasilitas-thumb.jpg') }}"
                            alt="Video proses di fasilitas pengelolaan limbah">
                        <div class="gallery-overlay">
                            <div class="gallery-meta">
                                <span class="gallery-tag gallery-tag-video">Video • Di Fasilitas</span>
                                <h3 class="gallery-title">Gambaran alur kerja di fasilitas pengelolaan limbah</h3>
                                <p class="gallery-location">Fasilitas PT Dwi Damar Tirta</p>
                            </div>
                        </div>

                        <div class="gallery-play-icon">
                            <i class="iconbase ti tabler-player-play"></i>
                        </div>

                        <a href="https://www.youtube.com/watch?v=VIDEO_ID_2" class="gallery-video-link" target="_blank"
                            aria-label="Tonton video proses di fasilitas pengelolaan limbah"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
    <style>
        /* GALLERY – GRID MODERN (PROSES PEKERJAAN) */
        .gallery-filters {
            display: inline-flex;
            flex-wrap: wrap;
            gap: 0.75rem;
            padding: 0.6rem;
            background: #f8fafc;
            border-radius: 999px;
            border: 1px solid #e2e8f0;
            margin: 0 auto 2.5rem;
            justify-content: center;
        }

        .gallery-filter-btn {
            border: none;
            background: transparent;
            padding: 0.45rem 1.1rem;
            border-radius: 999px;
            font-size: 0.85rem;
            font-weight: 600;
            color: #64748B;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .gallery-filter-btn:hover {
            background: rgba(0, 102, 255, 0.06);
            color: #0066FF;
        }

        .gallery-filter-btn.active {
            background: #ffffff;
            color: #0066FF;
            box-shadow: 0 6px 20px rgba(15, 23, 42, 0.06);
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 1.5rem;
        }

        @media (max-width: 991px) {
            .gallery-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 575px) {
            .gallery-grid {
                grid-template-columns: repeat(1, minmax(0, 1fr));
            }
        }

        .gallery-item {
            position: relative;
        }

        .gallery-image-wrapper {
            position: relative;
            overflow: hidden;
            border-radius: 18px;
            background: #0f172a;
            box-shadow:
                0 8px 24px rgba(15, 23, 42, 0.16),
                0 18px 55px rgba(15, 23, 42, 0.18);
        }

        .gallery-image-wrapper img {
            width: 100%;
            height: 100%;
            max-height: 260px;
            object-fit: cover;
            display: block;
            transition: transform 0.5s ease, opacity 0.5s ease;
        }

        .gallery-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top,
                    rgba(15, 23, 42, 0.85),
                    rgba(15, 23, 42, 0.25),
                    transparent);
            opacity: 0;
            transition: opacity 0.35s ease;
            display: flex;
            align-items: flex-end;
            padding: 1.1rem 1.2rem;
        }

        .gallery-meta {
            color: #e5e7eb;
        }

        .gallery-tag {
            display: inline-block;
            padding: 0.2rem 0.6rem;
            border-radius: 999px;
            background: rgba(15, 23, 42, 0.75);
            font-size: 0.7rem;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            margin-bottom: 0.35rem;
        }

        .gallery-tag-video {
            background: rgba(220, 38, 38, 0.9);
        }

        .gallery-title {
            font-size: 0.95rem;
            font-weight: 600;
            margin: 0;
        }

        .gallery-location {
            font-size: 0.8rem;
            color: #cbd5f5;
            margin: 0.15rem 0 0;
        }

        .gallery-play-icon {
            position: absolute;
            inset: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            pointer-events: none;
            opacity: 0;
            transition: opacity 0.3s ease, transform 0.3s ease;
        }

        .gallery-play-icon i {
            width: 52px;
            height: 52px;
            border-radius: 999px;
            background: rgba(15, 23, 42, 0.8);
            color: #fefce8;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            box-shadow: 0 10px 30px rgba(15, 23, 42, 0.8);
            transform: scale(0.9);
        }

        .gallery-video-link {
            position: absolute;
            inset: 0;
            z-index: 2;
        }

        .gallery-image-wrapper:hover img {
            transform: scale(1.06);
            opacity: 0.9;
        }

        .gallery-image-wrapper:hover .gallery-overlay {
            opacity: 1;
        }

        .gallery-image-wrapper:hover .gallery-play-icon {
            opacity: 1;
            transform: scale(1);
        }
    </style>
@endpush
