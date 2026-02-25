@extends('app')

@section('title', 'Fasilitas & Armada - PT Dwi Damar Tirta')

@push('styles')
    {{-- Magnific Popup CSS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" />

    {{-- Owl Carousel CSS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    {{-- web:182 web:193 --}}

    <style>
        .py-6 {
            padding-top: 3.5rem;
            padding-bottom: 3.5rem;
        }

        .section-header {
            display: flex;
            align-items: center;
            gap: 1.25rem;
        }

        .section-icon {
            width: 60px;
            height: 60px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            background: #0d6efd;
        }

        .section-icon.bg-success {
            background: linear-gradient(135deg, #56ab2f 0%, #a8e063 100%);
        }

        .section-icon.bg-warning {
            background: linear-gradient(135deg, #f7971e 0%, #ffd200 100%);
        }

        .section-icon i {
            font-size: 1.6rem;
            color: #fff;
        }

        .gallery-card {
            border-radius: .75rem;
        }

        .gallery-card .card-img-top {
            position: relative;
            height: 200px;
            overflow: hidden;
            background: #f8f9fa;
        }

        .gallery-card .card-img-top img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            transition: transform .3s ease;
            display: block;
        }

        .gallery-card:hover .card-img-top img {
            transform: scale(1.05);
        }

        .mfp-title {
            font-size: .9rem;
            line-height: 1.4;
        }

        .mfp-title strong {
            display: block;
            font-size: 1rem;
            margin-bottom: .15rem;
        }

        .mfp-title span {
            display: block;
        }

        /* Owl safety navigation lebih jelas */
        .safety-owl .owl-nav button.owl-prev,
        .safety-owl .owl-nav button.owl-next {
            position: absolute;
            top: 45%;
            transform: translateY(-50%);
            width: 34px;
            height: 34px;
            border-radius: 50%;
            background: #0d6efd !important;
            color: #fff !important;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.25);
        }

        .safety-owl .owl-nav button.owl-prev {
            left: -18px;
        }

        .safety-owl .owl-nav button.owl-next {
            right: -18px;
        }

        .safety-owl .owl-nav button span {
            font-size: 1.3rem;
            line-height: 1;
        }

        .safety-owl .owl-nav button:focus {
            outline: none;
        }

        /* hilangkan dots */
        .safety-owl .owl-dots {
            display: none;
        }

        @media (max-width: 991px) {
            .section-header {
                flex-direction: column;
                text-align: center;
            }

            .gallery-card .card-img-top {
                height: 220px;
            }

            .safety-owl .owl-nav button.owl-prev {
                left: -10px;
            }

            .safety-owl .owl-nav button.owl-next {
                right: -10px;
            }
        }

        .card-img-top-armada {
            height: 180px;
            background: #f8f9fa;
        }

        .card-img-top-armada img {
            object-fit: contain;
            object-position: center;
        }
    </style>
@endpush

@section('content')
    {{-- ================= GUDANG & PENYIMPANAN ================= --}}
    <section class="py-6 bg-white">
        <div class="container">
            <div class="section-header mb-5">
                <div class="section-icon bg-primary">
                    <i class="iconbase ti tabler-building-warehouse"></i>
                </div>
                <div>
                    <h2 class="fw-bold mb-1">Fasilitas Penyimpanan (Gudang)</h2>
                    <p class="text-muted mb-0">
                        Fasilitas penyimpanan berstandar K3 dan lingkungan sesuai regulasi.
                    </p>
                </div>
            </div>

            <div class="row g-3 popup-gallery-gudang">
                {{-- Gudang 1 --}}
                <div class="col-md-6 col-xl-3">
                    <div class="card gallery-card border-0 shadow-sm h-100">
                        <div class="card-img-top position-relative overflow-hidden">
                            <a href="{{ asset('assets/template/img/gudang/Gudang1.jpeg') }}" title="Gudang 1"
                                data-area="518.43" data-location="KPLI KABIL">
                                <img src="{{ asset('assets/template/img/gudang/Gudang1.jpeg') }}" class="img-fluid"
                                    alt="Gudang 1 - Gudang Penyimpanan Limbah B3">
                            </a>
                        </div>
                        <div class="card-body py-3 d-flex flex-column">
                            <span class="badge bg-primary mb-2 text-uppercase fst-italic">Gudang</span>
                            <h6 class="card-title mb-1">Gudang 1</h6>
                            <ul class="ps-0 mt-3 mb-0 list-unstyled small">
                                <li class="d-flex align-items-center mb-2">
                                    <i class="icon-base ti tabler-building-warehouse me-3"></i>
                                    <span>LUAS : 518.43 M<sup>2</sup></span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="icon-base ti tabler-map-pin me-3"></i>
                                    <span>LOKASI : KPLI KABIL</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- Gudang 2 --}}
                <div class="col-md-6 col-xl-3">
                    <div class="card gallery-card border-0 shadow-sm h-100">
                        <div class="card-img-top position-relative overflow-hidden">
                            <a href="{{ asset('assets/template/img/gudang/Gudang2.jpeg') }}" title="Gudang 2"
                                data-area="985" data-location="KPLI KABIL">
                                <img src="{{ asset('assets/template/img/gudang/Gudang2.jpeg') }}" class="img-fluid"
                                    alt="Gudang 2 - Gudang Penyimpanan Limbah B3">
                            </a>
                        </div>
                        <div class="card-body py-3 d-flex flex-column">
                            <span class="badge bg-primary mb-2 text-uppercase fst-italic">Gudang</span>
                            <h6 class="card-title mb-1">Gudang 2</h6>
                            <ul class="ps-0 mt-3 mb-0 list-unstyled small">
                                <li class="d-flex align-items-center mb-2">
                                    <i class="icon-base ti tabler-building-warehouse me-3"></i>
                                    <span>LUAS : 985 M<sup>2</sup></span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="icon-base ti tabler-map-pin me-3"></i>
                                    <span>LOKASI : KPLI KABIL</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- Gudang 3 --}}
                <div class="col-md-6 col-xl-3">
                    <div class="card gallery-card border-0 shadow-sm h-100">
                        <div class="card-img-top position-relative overflow-hidden">
                            <a href="{{ asset('assets/template/img/gudang/Gudang3_2.jpeg') }}" title="Gudang 3"
                                data-area="675" data-location="KPLI KABIL">
                                <img src="{{ asset('assets/template/img/gudang/Gudang3_2.jpeg') }}" class="img-fluid"
                                    alt="Gudang 3 - Gudang Penyimpanan Limbah B3">
                            </a>
                        </div>
                        <div class="card-body py-3 d-flex flex-column">
                            <span class="badge bg-primary mb-2 text-uppercase fst-italic">Gudang</span>
                            <h6 class="card-title mb-1">Gudang 3</h6>
                            <ul class="ps-0 mt-3 mb-0 list-unstyled small">
                                <li class="d-flex align-items-center mb-2">
                                    <i class="icon-base ti tabler-building-warehouse me-3"></i>
                                    <span>LUAS : 675 M<sup>2</sup></span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="icon-base ti tabler-map-pin me-3"></i>
                                    <span>LOKASI : KPLI KABIL</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- Gudang 4 --}}
                <div class="col-md-6 col-xl-3">
                    <div class="card gallery-card border-0 shadow-sm h-100">
                        <div class="card-img-top position-relative overflow-hidden">
                            <a href="{{ asset('assets/template/img/gudang/Gudang4.jpeg') }}" title="Gudang 4"
                                data-area="2168.5" data-location="KPLI KABIL">
                                <img src="{{ asset('assets/template/img/gudang/Gudang4.jpeg') }}" class="img-fluid"
                                    alt="Gudang 4 - Gudang Penyimpanan Limbah B3">
                            </a>
                        </div>
                        <div class="card-body py-3 d-flex flex-column">
                            <span class="badge bg-primary mb-2 text-uppercase fst-italic">Gudang</span>
                            <h6 class="card-title mb-1">Gudang 4</h6>
                            <ul class="ps-0 mt-3 mb-0 list-unstyled small">
                                <li class="d-flex align-items-center mb-2">
                                    <i class="icon-base ti tabler-building-warehouse me-3"></i>
                                    <span>LUAS : 2168.5 M<sup>2</sup></span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="icon-base ti tabler-map-pin me-3"></i>
                                    <span>LOKASI : KPLI KABIL</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> {{-- /.popup-gallery-gudang --}}

            {{-- Fasilitas Keselamatan di setiap gudang (Owl Carousel) --}}
            <div class="mt-5 position-relative">
                <div class="text-center mb-3">
                    <h5 class="mb-0 pb-0 small text-muted fst-italic">
                        Setiap Gudang dilengkapi Fasilitas Keselamata yang Memadai Seperti :
                    </h5>
                </div>

                <div class="position-relative px-4 px-md-5">
                    <div class="owl-carousel safety-owl popup-gallery-safety">
                        {{-- FIRE EXTINGUISHER --}}
                        <div class="item mb-2">
                            <div class="card gallery-card border-0 shadow-sm h-100">
                                <div class="card-img-top position-relative overflow-hidden">
                                    <a href="{{ asset('assets/template/img/gudang/safety1.png') }}"
                                        title="FIRE EXTINGUISHER" data-location="Area Gudang & Kantor">
                                        <img src="{{ asset('assets/template/img/gudang/safety1.png') }}" class="img-fluid"
                                            alt="Fire Extinguisher">
                                    </a>
                                </div>
                                <div class="card-body py-2 text-center">
                                    <h6 class="card-title mb-0 small fst-italic">FIRE EXTINGUISHER</h6>
                                </div>
                            </div>
                        </div>

                        {{-- ALARM SYSTEM --}}
                        <div class="item mb-2">
                            <div class="card gallery-card border-0 shadow-sm h-100">
                                <div class="card-img-top position-relative overflow-hidden">
                                    <a href="{{ asset('assets/template/img/gudang/safety6.png') }}" title="ALARM SYSTEM"
                                        data-location="Area Gudang & Kantor">
                                        <img src="{{ asset('assets/template/img/gudang/safety6.png') }}"
                                            class="img-fluid" alt="Alarm System">
                                    </a>
                                </div>
                                <div class="card-body py-2 text-center">
                                    <h6 class="card-title mb-0 small fst-italic">ALARM SYSTEM</h6>
                                </div>
                            </div>
                        </div>

                        {{-- EYES WASH --}}
                        <div class="item mb-2">
                            <div class="card gallery-card border-0 shadow-sm h-100">
                                <div class="card-img-top position-relative overflow-hidden">
                                    <a href="{{ asset('assets/template/img/gudang/safety4.png') }}" title="EYES WASH"
                                        data-location="Area Gudang ">
                                        <img src="{{ asset('assets/template/img/gudang/safety4.png') }}"
                                            class="img-fluid" alt="Eyes Wash">
                                    </a>
                                </div>
                                <div class="card-body py-2 text-center">
                                    <h6 class="card-title mb-0 small fst-italic">EYES WASH</h6>
                                </div>
                            </div>
                        </div>

                        {{-- SPILL KIT --}}
                        <div class="item mb-2">
                            <div class="card gallery-card border-0 shadow-sm h-100">
                                <div class="card-img-top position-relative overflow-hidden">
                                    <a href="{{ asset('assets/template/img/gudang/safety3.png') }}"
                                        title="SPILL KIT" data-location="Area Gudang">
                                        <img src="{{ asset('assets/template/img/gudang/safety3.png') }}"
                                            class="img-fluid" alt="SPILL KIT">
                                    </a>
                                </div>
                                <div class="card-body py-2 text-center">
                                    <h6 class="card-title mb-0 small fst-italic">SPILL KIT</h6>
                                </div>
                            </div>
                        </div>

                        {{-- FIRST AID BOX --}}
                        <div class="item mb-2">
                            <div class="card gallery-card border-0 shadow-sm h-100">
                                <div class="card-img-top position-relative overflow-hidden">
                                    <a href="{{ asset('assets/template/img/gudang/safety2.png') }}" title="SPILL KIT"
                                        data-location="Area Gudang & Kantor">
                                        <img src="{{ asset('assets/template/img/gudang/safety2.png') }}"
                                            class="img-fluid" alt="FIRST AID BOX">
                                    </a>
                                </div>
                                <div class="card-body py-2 text-center">
                                    <h6 class="card-title mb-0 small fst-italic">FIRST AID BOX</h6>
                                </div>
                            </div>
                        </div>

                        {{-- SHOWER --}}
                        <div class="item mb-2">
                            <div class="card gallery-card border-0 shadow-sm h-100">
                                <div class="card-img-top position-relative overflow-hidden">
                                    <a href="{{ asset('assets/template/img/gudang/safety5.png') }}" title="SHOWER"
                                        data-location="Area Gudang">
                                        <img src="{{ asset('assets/template/img/gudang/safety5.png') }}"
                                            class="img-fluid" alt="Safety Shower">
                                    </a>
                                </div>
                                <div class="card-body py-2 text-center">
                                    <h6 class="card-title mb-0 small fst-italic">SHOWER</h6>
                                </div>
                            </div>
                        </div>

                        {{-- LIGHTNING PROTECTION mb-2 7 --}}
                        <div class="item mb-2">
                            <div class="card gallery-card border-0 shadow-sm h-100">
                                <div class="card-img-top position-relative overflow-hidden">
                                    <a href="{{ asset('assets/template/img/gudang/safety7.png') }}" title="LIGHTNING PROTECTION"
                                        data-location="Area Gudang">
                                        <img src="{{ asset('assets/template/img/gudang/safety7.png') }}"
                                            class="img-fluid" alt="LIGHTNING PROTECTION">
                                    </a>
                                </div>
                                <div class="card-body py-2 text-center">
                                    <h6 class="card-title mb-0 small fst-italic">LIGHTNING PROTECTION</h6>
                                </div>
                            </div>
                        </div>
                    </div> {{-- /.owl-carousel --}}
                </div>
            </div>
        </div>
    </section>

    {{-- ================= ARMADA ================= --}}
    <section class="py-6 bg-white">
        <div class="container">
            <div class="section-header mb-5">
                <div class="section-icon bg-success">
                    <i class="iconbase ti tabler-truck"></i>
                </div>
                <div>
                    <h2 class="fw-bold mb-1">Armada Transportasi</h2>
                    <p class="text-muted mb-0">
                        Armada berizin resmi dengan standar keselamatan tinggi untuk pengangkutan limbah B3.
                    </p>
                </div>
            </div>

            <div class="row g-3 popup-gallery-armada">

                {{-- ================== BARIS ATAS (4 ARMADA) ================== --}}
                {{-- Armada 1 --}}
                <div class="col-md-6 col-lg-3 d-flex">
                    <div class="card gallery-card border-0 shadow-sm h-100 w-100">
                        <div class="card-img-top position-relative overflow-hidden">
                            <a href="{{ asset('assets/template/img/armada/lorry-bak-terbuka.png') }}"
                                title="Truk Pengangkut Limbah B3" data-location="">
                                <img src="{{ asset('assets/template/img/armada/lorry-bak-terbuka.png') }}"
                                    class="img-fluid" alt="Truk Bak Terbuka">
                            </a>
                        </div>
                        <div class="card-body py-3 d-flex flex-column">
                            <span class="badge bg-success mb-2 text-uppercase">Armada</span>
                            <h6 class="card-title mb-3">Truk Bak Terbuka</h6>

                            <ul class="ps-0 mb-0 list-unstyled small mt-auto">
                                <li class="d-flex align-items-center mb-2">
                                    <i class="icon-base ti tabler-certificate me-3 text-success"></i>
                                    <span><strong>Perizinan </strong>✅</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="icon-base ti tabler-weight me-3"></i>
                                    <span><strong>Kapasitas:</strong> 20 ton</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- Armada 2 --}}
                <div class="col-md-6 col-lg-3 d-flex">
                    <div class="card gallery-card border-0 shadow-sm h-100 w-100">
                        <div class="card-img-top position-relative overflow-hidden">
                            <a href="{{ asset('assets/template/img/armada/lorry-box-1.png') }}" title="Truk Wing Box 1"
                                data-location="Pool Armada - KPLI KABIL">
                                <img src="{{ asset('assets/template/img/armada/lorry-box-1.png') }}" class="img-fluid"
                                    alt="Truk Wing Box 1">
                            </a>
                        </div>
                        <div class="card-body py-3 d-flex flex-column">
                            <span class="badge bg-success mb-2 text-uppercase">Armada</span>
                            <h6 class="card-title mb-3">Truk Wing Box</h6>

                            <ul class="ps-0 mb-0 list-unstyled small mt-auto">
                                <li class="d-flex align-items-center mb-2">
                                    <i class="icon-base ti tabler-certificate me-3 text-success"></i>
                                    <span><strong>Perizinan </strong>✅</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="icon-base ti tabler-weight me-3"></i>
                                    <span><strong>Kapasitas:</strong> 20 TON</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- Armada 3 --}}
                <div class="col-md-6 col-lg-3 d-flex">
                    <div class="card gallery-card border-0 shadow-sm h-100 w-100">
                        <div class="card-img-top position-relative overflow-hidden">
                            <a href="{{ asset('assets/template/img/armada/lorry-box-2.png') }}" title="Truk Wing Box 2"
                                data-location="Pool Armada - KPLI KABIL">
                                <img src="{{ asset('assets/template/img/armada/lorry-box-2.png') }}" class="img-fluid"
                                    alt="Truk Wing Box 2">
                            </a>
                        </div>
                        <div class="card-body py-3 d-flex flex-column">
                            <span class="badge bg-success mb-2 text-uppercase">Armada</span>
                            <h6 class="card-title mb-3">Truk Wing Box</h6>

                            <ul class="ps-0 mb-0 list-unstyled small mt-auto">
                                <li class="d-flex align-items-center mb-2">
                                    <i class="icon-base ti tabler-certificate me-3 text-success"></i>
                                    <span><strong>Perizinan </strong>✅</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="icon-base ti tabler-weight me-3"></i>
                                    <span><strong>Kapasitas:</strong> 20 TON</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- Armada 4 --}}
                <div class="col-md-6 col-lg-3 d-flex">
                    <div class="card gallery-card border-0 shadow-sm h-100 w-100">
                        <div class="card-img-top position-relative overflow-hidden">
                            <a href="{{ asset('assets/template/img/armada/lorry-box-3.png') }}" title="Truk Wing Box 3"
                                data-location="Pool Armada - KPLI KABIL">
                                <img src="{{ asset('assets/template/img/armada/lorry-box-3.png') }}" class="img-fluid"
                                    alt="Truk Wing Box 3">
                            </a>
                        </div>
                        <div class="card-body py-3 d-flex flex-column">
                            <span class="badge bg-success mb-2 text-uppercase">Armada</span>
                            <h6 class="card-title mb-3">Truk Wing Box</h6>

                            <ul class="ps-0 mb-0 list-unstyled small mt-auto">
                                <li class="d-flex align-items-center mb-2">
                                    <i class="icon-base ti tabler-certificate me-3 text-success"></i>
                                    <span><strong>Perizinan </strong>✅</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="icon-base ti tabler-weight me-3"></i>
                                    <span><strong>Kapasitas:</strong> 10 TON</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- ================== BARIS BAWAH (3 ARMADA, TENGAH) ================== --}}
                <div class="col-12 mt-4">
                    <div class="row g-3 justif-content-center">

                        {{-- Armada 5 --}}
                        <div class="col-md-6 col-lg-3 d-flex">
                            <div class="card gallery-card border-0 shadow-sm h-100 w-100">
                                <div class="card-img-top position-relative overflow-hidden">
                                    <a href="{{ asset('assets/template/img/armada/lorry-crane-1.png') }}"
                                        title="Truk Bak Crane" data-location="Pool Armada - KPLI KABIL">
                                        <img src="{{ asset('assets/template/img/armada/lorry-crane-1.png') }}"
                                            class="img-fluid" alt="Truk Bak Crane">
                                    </a>
                                </div>
                                <div class="card-body py-3 d-flex flex-column">
                                    <span class="badge bg-success mb-2 text-uppercase">Armada</span>
                                    <h6 class="card-title mb-3">Truk Bak Crane</h6>

                                    <ul class="ps-0 mb-0 list-unstyled small mt-auto">
                                        <li class="d-flex align-items-center mb-2">
                                            <i class="icon-base ti tabler-certificate me-3 text-success"></i>
                                            <span><strong>Perizinan </strong>✅</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <i class="icon-base ti tabler-weight me-3"></i>
                                            <span><strong>Kapasitas:</strong> 20 TON</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        {{-- Armada 6 --}}
                        <div class="col-md-6 col-lg-3 d-flex">
                            <div class="card gallery-card border-0 shadow-sm h-100 w-100">
                                <div class="card-img-top position-relative overflow-hidden">
                                    <a href="{{ asset('assets/template/img/armada/lorry-crane-2.png') }}"
                                        title="Truk Bak Crane 2" data-location="Pool Armada - KPLI KABIL">
                                        <img src="{{ asset('assets/template/img/armada/lorry-crane-2.png') }}"
                                            class="img-fluid" alt="Truk Bak Crane 2">
                                    </a>
                                </div>
                                <div class="card-body py-3 d-flex flex-column">
                                    <span class="badge bg-success mb-2 text-uppercase">Armada</span>
                                    <h6 class="card-title mb-3">Truk Bak Crane</h6>

                                    <ul class="ps-0 mb-0 list-unstyled small mt-auto">
                                        <li class="d-flex align-items-center mb-2">
                                            <i class="icon-base ti tabler-certificate me-3 text-success"></i>
                                            <span><strong>Perizinan </strong>✅</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <i class="icon-base ti tabler-weight me-3"></i>
                                            <span><strong>Kapasitas:</strong> 10 TON</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        {{-- Armada 7 --}}
                        <div class="col-md-6 col-lg-3 d-flex">
                            <div class="card gallery-card border-0 shadow-sm h-100 w-100">
                                <div class="card-img-top position-relative overflow-hidden">
                                    <a href="{{ asset('assets/template/img/armada/truk-tangki.png') }}"
                                        title="Truk Tangki" data-location="Pool Armada - KPLI KABIL">
                                        <img src="{{ asset('assets/template/img/armada/truk-tangki.png') }}"
                                            class="img-fluid" alt="Truk Tangki">
                                    </a>
                                </div>
                                <div class="card-body py-3 d-flex flex-column">
                                    <span class="badge bg-success mb-2 text-uppercase">Armada</span>
                                    <h6 class="card-title mb-3">Truk Tangki</h6>

                                    <ul class="ps-0 mb-0 list-unstyled small mt-auto">
                                        <li class="d-flex align-items-center mb-2">
                                            <i class="icon-base ti tabler-certificate me-3 text-success"></i>
                                            <span><strong>Perizinan </strong>✅</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <i class="icon-base ti tabler-weight me-3"></i>
                                            <span><strong>Kapasitas:</strong> 24 TON </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div> {{-- /.row bawah --}}
                </div>

            </div> {{-- /.popup-gallery-armada --}}
        </div>
    </section>


    {{-- ================= PERALATAN & TEKNOLOGI ================= --}}
    <section class="py-6 bg-white">
        <div class="container">
            <div class="section-header mb-5">
                <div class="section-icon bg-warning">
                    <i class="iconbase ti tabler-tool"></i>
                </div>
                <div>
                    <h2 class="fw-bold mb-1">Peralatan & Teknologi</h2>
                    <p class="text-muted mb-0">
                        Peralatan modern untuk operasional yang aman dan efisien.
                    </p>
                </div>
            </div>

            {{-- BARIS PERTAMA: 4 CARD --}}
            <div class="row g-3 popup-gallery-peralatan">
                {{-- Forklift 1 --}}
                <div class="col-sm-6 col-lg-3 d-flex">
                    <div class="card gallery-card border-0 shadow-sm h-100 w-100">
                        <div class="card-img-top position-relative overflow-hidden card-img-top-peralatan">
                            <a href="{{ asset('assets/template/img/peralatan/forklift-1.jpg') }}" title="Forklift"
                                data-location="Area Operasional Gudang - KPLI KABIL">
                                <img src="{{ asset('assets/template/img/peralatan/forklift-1.jpg') }}" class="img-fluid"
                                    alt="Forklift">
                            </a>
                        </div>
                        <div class="card-body py-3 d-flex flex-column">
                            <span class="badge bg-warning mb-2 text-uppercase text-dark">Peralatan</span>
                            <h6 class="card-title mb-1">Forklift</h6>
                            <ul class="ps-0 mt-3 mb-0 list-unstyled small mt-auto">
                                <li class="d-flex align-items-center mb-2">
                                    <i class="icon-base ti tabler-weight me-3"></i>
                                    <span>Kapasitas 3 ton</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="icon-base ti tabler-map-pin me-3"></i>
                                    <span>Lokasi : Area Operasional Gudang - KPLI KABIL</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- Forklift 2 --}}
                <div class="col-sm-6 col-lg-3 d-flex">
                    <div class="card gallery-card border-0 shadow-sm h-100 w-100">
                        <div class="card-img-top position-relative overflow-hidden card-img-top-peralatan">
                            <a href="{{ asset('assets/template/img/fasilitas/fac-forklift.png') }}" title="Forklift"
                                data-location="Area Operasional Gudang - KPLI KABIL">
                                <img src="{{ asset('assets/template/img/fasilitas/fac-forklift.png') }}"
                                    class="img-fluid" alt="Forklift">
                            </a>
                        </div>
                        <div class="card-body py-3 d-flex flex-column">
                            <span class="badge bg-warning mb-2 text-uppercase text-dark">Peralatan</span>
                            <h6 class="card-title mb-1">Forklift</h6>
                            <ul class="ps-0 mt-3 mb-0 list-unstyled small mt-auto">
                                <li class="d-flex align-items-center mb-2">
                                    <i class="icon-base ti tabler-weight me-3"></i>
                                    <span>Kapasitas 3 ton</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="icon-base ti tabler-map-pin me-3"></i>
                                    <span>Lokasi : Area Operasional Gudang - KPLI KABIL</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- Excavator 1 --}}
                <div class="col-sm-6 col-lg-3 d-flex">
                    <div class="card gallery-card border-0 shadow-sm h-100 w-100">
                        <div class="card-img-top position-relative overflow-hidden card-img-top-peralatan">
                            <a href="{{ asset('assets/template/img/peralatan/excavator-komatsu.jpg') }}"
                                title="Excavator" data-location="Area Operasional Gudang - KPLI KABIL">
                                <img src="{{ asset('assets/template/img/peralatan/excavator-komatsu.jpg') }}"
                                    class="img-fluid" alt="Excavator">
                            </a>
                        </div>
                        <div class="card-body py-3 d-flex flex-column">
                            <span class="badge bg-warning mb-2 text-uppercase text-dark">Peralatan</span>
                            <h6 class="card-title mb-1">Excavator</h6>
                            <ul class="ps-0 mt-3 mb-0 list-unstyled small mt-auto">
                                <li class="d-flex align-items-center mb-2">
                                    <i class="icon-base ti tabler-tools me-3"></i>
                                    <span>Penanganan material volume besar</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="icon-base ti tabler-map-pin me-3"></i>
                                    <span>Lokasi : Area Operasional Gudang - KPLI KABIL</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- Excavator 2 --}}
                <div class="col-sm-6 col-lg-3 d-flex">
                    <div class="card gallery-card border-0 shadow-sm h-100 w-100">
                        <div class="card-img-top position-relative overflow-hidden card-img-top-peralatan">
                            <a href="{{ asset('assets/template/img/peralatan/excavator-cobelco.jpg') }}"
                                title="Excavator" data-location="Area Operasional Gudang - KPLI KABIL">
                                <img src="{{ asset('assets/template/img/peralatan/excavator-cobelco.jpg') }}"
                                    class="img-fluid" alt="Excavator">
                            </a>
                        </div>
                        <div class="card-body py-3 d-flex flex-column">
                            <span class="badge bg-warning mb-2 text-uppercase text-dark">Peralatan</span>
                            <h6 class="card-title mb-1">Excavator</h6>
                            <ul class="ps-0 mt-3 mb-0 list-unstyled small mt-auto">
                                <li class="d-flex align-items-center mb-2">
                                    <i class="icon-base ti tabler-tools me-3"></i>
                                    <span>Penanganan material volume besar</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="icon-base ti tabler-map-pin me-3"></i>
                                    <span>Lokasi : Area Operasional Gudang - KPLI KABIL</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            {{-- BARIS KEDUA: CARD DI TENGAH (GPS, CCTV) --}}
            <div class="row g-3 justify-content-center mt-1 popup-gallery-peralatan">
                {{-- GPS Tracking --}}
                <div class="col-sm-6 col-lg-3 d-flex">
                    <div class="card gallery-card border-0 shadow-sm h-100 w-100">
                        <div class="card-img-top position-relative overflow-hidden card-img-top-peralatan">
                            <a href="{{ asset('assets/template/img/peralatan/gps-tracker.png') }}"
                                title="GPS Tracking Armada" data-location="Seluruh Armada Operasional">
                                <img src="{{ asset('assets/template/img/peralatan/gps-tracker.png') }}" class="img-fluid"
                                    alt="GPS Tracking Armada">
                            </a>
                        </div>
                        <div class="card-body py-3 d-flex flex-column">
                            <span class="badge bg-warning mb-2 text-uppercase text-dark">Teknologi</span>
                            <h6 class="card-title mb-1">GPS Tracking Armada</h6>
                            <ul class="ps-0 mt-3 mb-0 list-unstyled small mt-auto">
                                <li class="d-flex align-items-center mb-2">
                                    <i class="icon-base ti tabler-map-search me-3"></i>
                                    <span>Monitoring pergerakan armada real-time</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="icon-base ti tabler-map-pin me-3"></i>
                                    <span>Lokasi : Seluruh Armada Operasional</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- CCTV --}}
                <div class="col-sm-6 col-lg-3 d-flex">
                    <div class="card gallery-card border-0 shadow-sm h-100 w-100">
                        <div class="card-img-top position-relative overflow-hidden card-img-top-peralatan">
                            <a href="{{ asset('assets/template/img/peralatan/cctv-sistem.png') }}"
                                title="CCTV & Sistem Monitoring" data-location="Area Gudang & Kantor">
                                <img src="{{ asset('assets/template/img/peralatan/cctv-sistem.png') }}" class="img-fluid"
                                    alt="CCTV & Sistem Monitoring">
                            </a>
                        </div>
                        <div class="card-body py-3 d-flex flex-column">
                            <span class="badge bg-warning mb-2 text-uppercase text-dark">Teknologi</span>
                            <h6 class="card-title mb-1">CCTV & Sistem Monitoring</h6>
                            <ul class="ps-0 mt-3 mb-0 list-unstyled small mt-auto">
                                <li class="d-flex align-items-center mb-2">
                                    <i class="icon-base ti tabler-device-cctv me-3"></i>
                                    <span>Pengawasan area 24/7</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="icon-base ti tabler-map-pin me-3"></i>
                                    <span>Lokasi : Area Gudang & Kantor</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> {{-- /.row kedua --}}
        </div>
    </section>


@endsection

@push('scripts')
    {{-- jQuery + Magnific Popup --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

    {{-- Owl Carousel JS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> {{-- web:188 web:191 --}}

    <script>
        $(document).ready(function() {
            function buildTitle(item) {
                var title = item.el.attr('title') || '';
                var area = item.el.data('area');
                var loc = item.el.data('location');

                var metaParts = [];
                if (area) {
                    metaParts.push('Luas: ' + area + ' M\u00B2');
                }
                if (loc) {
                    metaParts.push('Lokasi: ' + loc);
                }

                var metaText = metaParts.join(' \u00b7 ');

                return '<strong>' + title + '</strong>' +
                    (metaText ? '<span>' + metaText + '</span>' : '');
            }

            // Gallery Gudang
            $('.popup-gallery-gudang').magnificPopup({
                delegate: 'a',
                type: 'image',
                gallery: {
                    enabled: true,
                    navigateByImgClick: true,
                    preload: [0, 1]
                },
                image: {
                    titleSrc: buildTitle
                }
            });

            // Owl Carousel Safety
            $('.safety-owl').owlCarousel({
                loop: false,
                margin: 16,
                nav: true,
                dots: false,
                navText: ['<span>&lt;</span>', '<span>&gt;</span>'],
                responsive: {
                    0: {
                        items: 1
                    },
                    576: {
                        items: 2
                    },
                    768: {
                        items: 3
                    },
                    992: {
                        items: 4
                    },
                    1200: {
                        items: 5
                    }
                }
            });


            // Magnific Popup untuk item di dalam Owl
            $('.popup-gallery-safety').magnificPopup({
                delegate: '.owl-item:not(.cloned) a',
                type: 'image',
                gallery: {
                    enabled: true,
                    navigateByImgClick: true,
                    preload: [0, 1]
                },
                image: {
                    titleSrc: buildTitle
                }
            });


            // Gallery Armada
            $('.popup-gallery-armada').magnificPopup({
                delegate: 'a',
                type: 'image',
                gallery: {
                    enabled: true,
                    navigateByImgClick: true,
                    preload: [0, 1]
                },
                image: {
                    titleSrc: buildTitle
                }
            });

            // Gallery Peralatan
            $('.popup-gallery-peralatan').magnificPopup({
                delegate: 'a',
                type: 'image',
                gallery: {
                    enabled: true,
                    navigateByImgClick: true,
                    preload: [0, 1]
                },
                image: {
                    titleSrc: buildTitle
                }
            });
        });
    </script>
@endpush
