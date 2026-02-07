@extends('app')
@section('title', 'Legal & Perizinan - PT Dwi Damar Tirta')

@section('content')
    <section class="container py-5 py-md-6">
        <div class="mb-4 text-center">
            <span class="badge rounded-pill bg-label-primary text-uppercase small mb-2">
                Dokumen
            </span>
            <h2 class="fw-bold mb-2">Rekomendasi</h2>
            <p class="text-muted mb-0">
                Klik dokumen untuk melihat detail.
            </p>
        </div>

        <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
            {{-- Toggle button untuk mobile --}}
            <div class="d-md-none p-3 bg-white border-bottom">
                <button class="btn btn-sm btn-primary w-100 d-flex align-items-center justify-content-between"
                    id="toggleDocList" type="button" style="white-space: nowrap;">
                    <span>
                        <i class="iconbase ti tabler-list me-2"></i>
                        Daftar Dokumen
                    </span>
                    <i class="iconbase ti tabler-chevron-down toggle-icon"></i>
                </button>
            </div>

            <div class="row g-0">
                {{-- Nav kiri (Desktop) / Collapsible (Mobile) --}}
                <div class="col-md-4 col-lg-3 border-end bg-white doc-sidebar" id="docSidebar">
                    <div class="nav flex-column nav-pills p-3 gap-2 doc-nav-tabs" id="doc-vertical-tabs" role="tablist"
                        aria-orientation="vertical">

                        <button class="nav-link active text-start" id="doc-1-tab" data-bs-toggle="pill"
                            data-bs-target="#doc-1" type="button" role="tab">
                            <span class="doc-number">1.</span>
                            <span class="doc-title">Dokumen 1</span>
                        </button>

                        <button class="nav-link text-start" id="doc-2-tab" data-bs-toggle="pill" data-bs-target="#doc-2"
                            type="button" role="tab">
                            <span class="doc-number">2.</span>
                            <span class="doc-title">Dokumen 2</span>
                        </button>

                        <button class="nav-link text-start" id="doc-3-tab" data-bs-toggle="pill" data-bs-target="#doc-3"
                            type="button" role="tab">
                            <span class="doc-number">3.</span>
                            <span class="doc-title">Dokumen 3</span>
                        </button>

                        <button class="nav-link text-start" id="doc-4-tab" data-bs-toggle="pill" data-bs-target="#doc-4"
                            type="button" role="tab">
                            <span class="doc-number">4.</span>
                            <span class="doc-title">Dokumen 4</span>
                        </button>

                        <button class="nav-link text-start" id="doc-5-tab" data-bs-toggle="pill" data-bs-target="#doc-5"
                            type="button" role="tab">
                            <span class="doc-number">5.</span>
                            <span class="doc-title">Dokumen 5</span>
                        </button>
                    </div>
                </div>

                {{-- Konten kanan: Foto Dokumen --}}
                <div class="col-md-8 col-lg-9">
                    <div class="tab-content p-3 p-md-4" id="doc-vertical-tabs-content">

                        {{-- Dokumen 1 --}}
                        <div class="tab-pane text-center fade show active" id="doc-1" role="tabpanel">
                            <h5 class="fw-bold mb-3">Dokumen 1</h5>
                            <div class="text-center">
                                <img src="{{ asset('assets/template/img/dokumen/izin-lingkungan.jpg') }}"
                                    alt="Izin Lingkungan" class="img-fluid rounded-3 shadow-sm"
                                    style="max-height: 600px; object-fit: contain;">
                            </div>
                        </div>

                        {{-- Dokumen 2 --}}
                        <div class="tab-pane text-center fade" id="doc-2" role="tabpanel">
                            <h5 class="fw-bold mb-3">Dokumen 2</h5>
                            <div class="text-center">
                                <img src="{{ asset('assets/template/img/dokumen/rekomendasi-ukl-upl.jpg') }}"
                                    alt="Rekomendasi UKL-UPL" class="img-fluid rounded-3 shadow-sm"
                                    style="max-height: 600px; object-fit: contain;">
                            </div>
                        </div>

                        {{-- Dokumen 3 --}}
                        <div class="tab-pane text-center fade" id="doc-3" role="tabpanel">
                            <h5 class="fw-bold mb-3">Dokumen 3</h5>
                            <div class="text-center">
                                <img src="{{ asset('assets/template/img/dokumen/dokumen-ukl-upl.jpg') }}"
                                    alt="Dokumen UKL-UPL" class="img-fluid rounded-3 shadow-sm"
                                    style="max-height: 600px; object-fit: contain;">
                            </div>
                        </div>

                        {{-- Dokumen 4 --}}
                        <div class="tab-pane text-center fade" id="doc-4" role="tabpanel">
                            <h5 class="fw-bold mb-3">Dokumen 4</h5>
                            <div class="text-center">
                                <img src="{{ asset('assets/template/img/dokumen/izin-pengumpul-gubernur.jpg') }}"
                                    alt="Izin Pengumpul B3 Gubernur" class="img-fluid rounded-3 shadow-sm"
                                    style="max-height: 600px; object-fit: contain;">
                            </div>
                        </div>

                        {{-- Dokumen 5 --}}
                        <div class="tab-pane text-center fade" id="doc-5" role="tabpanel">
                            <h5 class="fw-bold mb-3">Dokumen 5</h5>
                            <div class="text-center">
                                <img src="{{ asset('assets/template/img/dokumen/izin-pengumpul-klhk.jpg') }}"
                                    alt="Izin Pengumpul B3 KLHK" class="img-fluid rounded-3 shadow-sm"
                                    style="max-height: 600px; object-fit: contain;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        /* Reset dan fix overlap */
        .doc-nav-tabs .nav-link {
            position: relative;
            z-index: 1;
            background: #fff;
        }

        .doc-nav-tabs .nav-link.active {
            background: #0d6efd;
            color: #fff;
            z-index: 2;
        }

        /* Sidebar toggle untuk mobile */
        @media (max-width: 767.98px) {
            .doc-sidebar {
                max-height: 0;
                overflow: hidden;
                /* GANTI jadi hidden supaya tidak overlap */
                transition: max-height 0.4s ease;
                position: relative;
                z-index: 10;
            }

            .doc-sidebar.show {
                max-height: 2000px;
                overflow: visible;
            }

            .doc-nav-tabs {
                padding-top: 0.5rem !important;
                background: #f8f9fa;
            }

            .doc-nav-tabs .nav-link {
                font-size: 0.85rem;
                padding: 0.75rem 0.9rem;
                /* Padding lebih besar */
                white-space: normal !important;
                word-wrap: break-word;
                line-height: 1.5;
                display: flex;
                align-items: flex-start;
                text-align: left;
                margin-bottom: 0.5rem;
                border-radius: 8px;
                background: #fff;
                border: 1px solid #e0e0e0;
            }

            .doc-nav-tabs .nav-link.active {
                background: #0d6efd;
                color: #fff;
                border-color: #0d6efd;
            }

            .doc-number {
                font-weight: 700;
                color: #003d99;
                margin-right: 0.6rem;
                flex-shrink: 0;
                min-width: 20px;
            }

            .doc-nav-tabs .nav-link.active .doc-number {
                color: #FFD700;
            }

            .doc-title {
                flex: 1;
                word-break: break-word;
            }

            .toggle-icon {
                transition: transform 0.3s ease;
            }

            .toggle-icon.rotate {
                transform: rotate(180deg);
            }

            /* Pastikan card tidak overflow */
            .card {
                overflow: hidden;
            }
        }

        @media (min-width: 768px) {
            .doc-nav-tabs .nav-link {
                font-size: 0.88rem;
                padding: 0.7rem 1rem;
                white-space: normal;
                line-height: 1.5;
                display: flex;
                align-items: flex-start;
                border-radius: 8px;
            }

            .doc-number {
                font-weight: 700;
                color: #003d99;
                margin-right: 0.6rem;
                flex-shrink: 0;
                min-width: 20px;
            }

            .doc-title {
                flex: 1;
            }
        }
    </style>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toggleBtn = document.getElementById('toggleDocList');
            const sidebar = document.getElementById('docSidebar');
            const toggleIcon = toggleBtn?.querySelector('.toggle-icon');
            const tabButtons = document.querySelectorAll('.nav-link');

            // Toggle sidebar di mobile
            if (toggleBtn && sidebar) {
                toggleBtn.addEventListener('click', function() {
                    sidebar.classList.toggle('show');
                    toggleIcon?.classList.toggle('rotate');
                });

                // Auto-close sidebar ketika pilih dokumen di mobile
                tabButtons.forEach(btn => {
                    btn.addEventListener('click', function() {
                        if (window.innerWidth < 768) {
                            setTimeout(() => {
                                sidebar.classList.remove('show');
                                toggleIcon?.classList.remove('rotate');
                            }, 200);
                        }
                    });
                });
            }
        });
    </script>
@endsection
