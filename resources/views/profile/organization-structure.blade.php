@extends('app')

@section('title', __('organization-structure.page_title'))

@section('content')
    {{-- Header sederhana --}}
    <section class="py-5 py-lg-6">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <span class="badge rounded-pill bg-label-primary mb-2">
                        {{ __('organization-structure.badge') }}
                    </span>
                    <h2 class="mb-3">
                        {{ __('organization-structure.heading') }}
                    </h2>
                    <p class="mb-0">
                        {{ __('organization-structure.subtitle') }}
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
                                    alt="{{ __('organization-structure.image_alt') }}" class="img-fluid rounded-3"
                                    style="max-height: 600px; object-fit: contain; width: 100%; display: block; margin: 0 auto;">
                            </div>
                        </div>
                    </div>
                    <p class="text-muted small mt-2 text-center">
                        {{ __('organization-structure.note') }}
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
