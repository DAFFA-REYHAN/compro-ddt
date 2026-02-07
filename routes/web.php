<?php

use Illuminate\Support\Facades\Route;

Route::middleware('page-cache')->group(function () {
    Route::get('/', function () {
        return view('home.home');
    });
    
    
    Route::get('/kontak-kami', function () {
        return view('contact_us.contact');
    });


    // PENGOLAHAN
    Route::get('/pengolahan/fasilitas', function () {
        return view('processing.facility');
    });

    // PROFIL
    Route::get('/profil/tentang-kami', function () {
        return view('profile.about');
    });
    Route::get('/profil/visi-misi', function () {
        return view('profile.vission-mission');
    });
    Route::get('/profil/struktur-organisasi', function () {
        return view('profile.organization-structure');
    });


    //DOKUMEN
    Route::get('/dokumen/legal', function () {
        return view('document.lincesing-and-legal');
    });
    Route::get('/dokumen/rekomendasi', function () {
        return view('document.recommend');
    });
    Route::get('/dokumen/kerjasama', function () {
        return view('document.collaboration');
    });
    Route::get('/dokumen/asuransi', function () {
        return view('document.asurance');
    });
    Route::get('/dokumen/prestasi', function () {
        return view('document.awwards');
    });
});
