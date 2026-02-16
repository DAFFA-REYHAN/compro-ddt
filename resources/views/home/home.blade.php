@extends('app')

@section('title', 'Pengelolaan Limbah B3 Profesional di Batam | PT Dwi Damar Tirta')

@section('content')
    @include('home._hero')
    @include('home._service')
    @include('home._about_us')
    @include('home._client')
    @include('home._contact_us')
@endsection

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}"/>
@endpush

@push('scripts')
    <script src="https://unpkg.com/aos@next/dist/aos.js" defer></script>
    <script src="{{ asset('assets/js/home.js') }}" defer></script>
@endpush
