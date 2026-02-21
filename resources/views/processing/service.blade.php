@extends('app')

@section('title', 'Layanan & Proses Kerja - PT Dwi Damar Tirta')

@section('content')
    <section class="section-padding" id="services">
        <div class="container mt-4 text-center">
            <span class="badge rounded-pill bg-label-primary px-3 text-uppercase small">
                {{ __('service.badge') }}
            </span>
            <h2 class="mb-3 fw-bold">
                {{ __('service.heading') }}
            </h2>
        </div>
    </section>
@endsection

@push('styles')
@endpush
