@extends('app')

@section('title', 'Struktur Organisasi - PT Dwi Damar Tirta')

@section('content')
    {{-- Header sederhana --}}
    <section class="py-5 py-lg-6">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <span class="badge rounded-pill bg-label-primary mb-2">Profil Perusahaan</span>
                    <h2 class="mb-3">Struktur Organisasi</h2>
                    <p class="mb-0">
                        Gambaran susunan manajemen dan bagian operasional PT Dwi Damar Tirta dalam mendukung layanan
                        pengelolaan limbah.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Struktur Organisasi Image --}}
    <section class="pb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="card border">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="{{ asset('assets/template/img/struktur-organisasi/struktur-organisasi2.png') }}"
                                    alt="Struktur Organisasi PT Dwi Damar Tirta" class="img-fluid rounded-3"
                                    style="max-height: 600px; object-fit: contain; width: 100%; display: block; margin: 0 auto;">
                            </div>
                        </div>
                    </div>
                    <p class="text-muted small mt-2 text-center">
                        Struktur dapat diperbarui sesuai kebutuhan organisasi dan pembaruan regulasi.
                    </p>
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
