@extends('app')

@section('title', 'Visi & Misi - PT Dwi Damar Tirta')

@section('content')
    {{-- Visi --}}
    <section class="py-5 py-lg-6">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <span class="badge rounded-pill bg-label-primary mb-2">Visi & Misi</span>
                    <h2 class="mb-3">Visi</h2>
                    <p class="mb-0">
                        Menjadi perusahaan pengelola limbah B3 terkemuka di Indonesia yang berkontribusi aktif
                        dalam mewujudkan lingkungan yang berkelanjutan serta mendukung kesejahteraan masyarakat.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Misi (judul + cards grid responsif, pakai angka) --}}
    <section class="py-4 pb-5">
        <div class="container">
            <div class="row justify-content-center mb-3">
                <div class="col-lg-8 text-center">
                    <h2 class="mb-2">Misi</h2>
                    <p class="text-muted mb-0">
                        Prinsip yang kami pegang dalam menjalankan kegiatan pengelolaan limbah B3 dan non‑B3.
                    </p>
                </div>
            </div>

            <div class="row g-3 ">
                {{-- Misi 1 --}}
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border border-1">
                        <div class="card-body d-flex">
                            <div class="me-3">
                                <div class="badge rounded-pill bg-label-primary mb-1 px-3">01</div>
                            </div>
                            <div>
                                <h5 class="mb-1">Pemberdayaan masyarakat</h5>
                                <p class="mb-0 text-muted">
                                    Membantu masyarakat sekitar untuk mendapatkan pekerjaan dan penghidupan yang layak.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Misi 2 --}}
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border border-1">
                        <div class="card-body d-flex">
                            <div class="me-3">
                                <div class="badge rounded-pill bg-label-primary mb-1 px-3">02</div>
                            </div>
                            <div>
                                <h5 class="mb-1">Dukungan kepada mitra</h5>
                                <p class="mb-0 text-muted">
                                    Memberikan bantuan kepada semua perusahaan yang telah bekerja sama dalam
                                    penanganan limbah B3 dengan baik, benar, dan ekonomis.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Misi 3 --}}
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border border-1">
                        <div class="card-body d-flex">
                            <div class="me-3">
                                <div class="badge rounded-pill bg-label-primary mb-1 px-3">03</div>
                            </div>
                            <div>
                                <h5 class="mb-1">Mengurangi polusi lingkungan</h5>
                                <p class="mb-0 text-muted">
                                    Membantu Pemerintah dan masyarakat dalam mengurangi dampak dari polusi lingkungan.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Misi 4 --}}
                <div class="offset-lg-2 col-md-6 col-lg-4">
                    <div class="card h-100 border border-1">
                        <div class="card-body d-flex">
                            <div class="me-3">
                                <div class="badge rounded-pill bg-label-primary mb-1 px-3">04</div>
                            </div>
                            <div>
                                <h5 class="mb-1">Kepatuhan regulasi</h5>
                                <p class="mb-0 text-muted">
                                    Menjalankan semua peraturan dan regulasi yang berlaku di Indonesia,
                                    khususnya yang berkaitan dengan lingkungan.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Misi 5 --}}
                <div class=" col-md-6 col-lg-4">
                    <div class="card h-100 border border-1">
                        <div class="card-body d-flex">
                            <div class="me-3">
                                <div class="badge rounded-pill bg-label-primary mb-1 px-3">05</div>
                            </div>
                            <div>
                                <h5 class="mb-1">Kerja sama berkelanjutan</h5>
                                <p class="mb-0 text-muted">
                                    Selalu mempererat, mengembangkan, dan memelihara kerja sama yang baik
                                    dengan masyarakat, pemerintah, lembaga lainnya, serta perusahaan sejenis.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA sederhana --}}
    <section class="py-5">
        <div class="container">
            <div
                class="d-flex flex-column flex-md-row align-items-start align-items-md-center justify-content-between gap-3 p-4 rounded-3 border bg-outline-light">
                <div>
                    <h5 class="mb-1">Ingin berdiskusi tentang pengelolaan limbah?</h5>
                    <p class="mb-0 text-muted">
                        Hubungi kami untuk membahas bagaimana kami dapat mendukung kebutuhan pengelolaan limbah di
                        perusahaan Anda.
                    </p>
                </div>
                <div>
                    <a href="{{ url('/kontak-kami') }}" class="btn btn-primary px-4">
                        Hubungi Kami
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
