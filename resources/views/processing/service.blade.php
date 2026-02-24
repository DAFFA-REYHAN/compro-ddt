@extends('app')

@section('title', 'Layanan Kami - PT Dwi Damar Tirta')

@section('content')
    <section class="section-padding" id="services">
        <div class="container mt-4">
            <div class="text-center">
                <span class="badge rounded-pill bg-label-primary px-3 text-uppercase small">
                    {{ __('service.badge') }}
                </span>
                <h2 class="mb-3 fw-bold">
                    {{ __('service.heading') }}
                </h2>
                <p class="text-muted text-small">
                    {{ __('service.smallText') }}
                </p>
            </div>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
                <div class="col">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modal-service1">
                        <div class="card h-100">
                            <img class="card-img-top" src="{{ asset('assets/template/img/layanan-kami/1.png') }}"
                                alt="Card image cap" />
                            <div class="card-body pt-0">
                                <h5 class="card-title">{{ __('service.header-card1') }}</h5>
                                <p class="text-muted small-text">{{ __('service.body-card1') }}</p>
                            </div>
                        </div>
                    </button>
                </div>
                <div class="col">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modal-service2">
                        <div class="card h-100">
                            <img class="card-img-top" src="{{ asset('assets/template/img/layanan-kami/3.png') }}"
                                alt="Card image cap" />
                            <div class="card-body pt-0">
                                <h5 class="card-title">{{ __('service.header-card2') }}</h5>
                                <p class="text-muted small-text">{{ __('service.body-card2') }}</p>
                            </div>
                        </div>
                    </button>
                </div>
                <div class="col">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modal-service3">
                        <div class="card h-100">
                            <img class="card-img-top" src="{{ asset('assets/template/img/layanan-kami/2.png') }}"
                                alt="Card image cap" />
                            <div class="card-body pt-0">
                                <h5 class="card-title">{{ __('service.header-card3') }}</h5>
                                <p class="text-muted small-text">{{ __('service.body-card3') }}</p>
                            </div>
                        </div>
                    </button>
                </div>
                <div class="col">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modal-service4">
                        <div class="card h-100">
                            <img class="card-img-top" src="{{ asset('assets/template/img/layanan-kami/4.png') }}"
                                alt="Card image cap" />
                            <div class="card-body pt-0">
                                <h5 class="card-title">{{ __('service.header-card4') }}</h5>
                                <p class="text-muted small-text">{{ __('service.body-card4') }}</p>
                            </div>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </section>
    {{-- CTA --}}
    <section class="py-5">
        <div class="container">
            <div
                class="d-flex flex-column flex-md-row align-items-start align-items-md-center justify-content-between gap-3 p-4 rounded-3 border">
                <div class="text-center text-md-start">
                    <h5 class="mb-1">
                        {{ __('about.cta_title') }}
                    </h5>
                    <p class="mb-0 text-muted">
                        {{ __('about.cta_text') }}
                    </p>
                </div>
                <div class="text-center text-md-start">
                    <a href="{{ url('/kontak-kami') }}" class="btn btn-primary px-4">
                        {{ __('about.cta_button') }}
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!-- MODAL VIEW LAYANAN -->
    <!-- MODAL SERVICE 1: Pengangkutan Limbah B3 -->
    <div class="modal fade" id="modal-service1" tabindex="-1" aria-labelledby="modalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Pengangkutan Limbah B3</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h4>Transporter sesuai standar untuk limbah B3 dari lokasi sumber hingga ke fasilitas pengolahan atau
                        pemanfaatan.</h4>
                    <p>Kami menyediakan armada khusus limbah B3 yang telah dilengkapi perizinan dan peralatan keamanan
                        sesuai regulasi.</p>
                    <p>Setiap pengangkutan dilengkapi dokumen manifest, label, dan kemasan yang memenuhi standar
                        keselamatan.</p>
                    <p>Tim operasional kami terlatih menangani tumpahan, keadaan darurat, dan prosedur pemuatan serta
                        bongkar yang aman.</p>
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>

    <!-- MODAL SERVICE 2: Pengumpulan Limbah B3 -->
    <div class="modal fade" id="modal-service2" tabindex="-1" aria-labelledby="modalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Pengumpulan Limbah B3</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h4>Pengumpulan limbah B3 dari berbagai sumber secara terjadwal maupun on-demand.</h4>
                    <p>Kami membantu pelanggan melakukan pemilahan, pengemasan, dan pelabelan limbah B3 sesuai
                        karakteristiknya.</p>
                    <p>Limbah yang terkumpul akan disimpan sementara di fasilitas yang aman sebelum dikirim ke pengolah
                        akhir.</p>
                    <p>Laporan volume dan jenis limbah disediakan sebagai bahan pelaporan kepatuhan kepada instansi terkait.
                    </p>
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>

    <!-- MODAL SERVICE 3: Pembersihan Tangki Kapal -->
    <div class="modal fade" id="modal-service3" tabindex="-1" aria-labelledby="modalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Pembersihan Tangki Kapal</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h4>Layanan pembersihan tangki kapal dengan prosedur aman dan ramah lingkungan.</h4>
                    <p>Tim kami melakukan inspeksi awal untuk menentukan metode pembersihan yang paling sesuai dengan jenis
                        muatan.</p>
                    <p>Proses mencakup pengosongan residu, pencucian, pengeringan, hingga penanganan limbah hasil
                        pembersihan.</p>
                    <p>Seluruh pekerjaan mengikuti standar keselamatan kerja di lingkungan pelabuhan dan peraturan maritim
                        yang berlaku.</p>
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>

    <!-- MODAL SERVICE 4: Konsultasi Lingkungan & Program CSR -->
    <div class="modal fade" id="modal-service4" tabindex="-1" aria-labelledby="modalScrollableTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Konsultasi Lingkungan & Program CSR</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h4>Pendampingan kepatuhan lingkungan dan pengembangan program tanggung jawab sosial perusahaan.</h4>
                    <p>Kami membantu penyusunan strategi pengelolaan limbah, pemenuhan regulasi, dan dokumen teknis
                        lingkungan.</p>
                    <p>Tim konsultan mendukung perusahaan merancang program CSR yang relevan dengan isu lingkungan di
                        sekitar operasional.</p>
                    <p>Output layanan berupa rekomendasi praktis, rencana aksi, dan materi sosialisasi bagi pemangku
                        kepentingan.</p>
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>
    <!-- END MODAL VIEW LAYANAN-->
@endsection

@push('styles')
<style>
    .card-body p {
        text-align: justify !important;
    }
</style>
@endpush
