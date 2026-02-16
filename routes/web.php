<?php

use App\Http\Controllers\PageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

// Route::middleware('page-cache')->group(function () {
    // Route::get('/', [PageController::class, 'home'])->name('home');

    Route::get('/', function () {
        return view('home.home');
    });
    Route::get('/kontak-kami', function () {
        return view('contact_us.contact');
    });
    Route::get('/kontak-kami', function () {
        return view('contact_us.contact');
    });

    // PENGOLAHAN
    Route::get('/pengolahan/fasilitas', function () {
        return view('processing.facility');
    });
    Route::get('/pengolahan/proses-pekerjaan', function () {
        return view('processing.service');
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

    Route::get('/set-locale/{locale}', function (Request $request, $locale) {
        // dd($request->all());// daftar bahasa yang diizinkan
        $allowed = ['id', 'en'];
        // dd($locale);
        if (!in_array($locale, $allowed)) {
            $locale = config('app.locale'); // misal 'id'
        }

        // simpan pilihan bahasa ke session
        $request->session()->put('locale', $locale);

        // balik ke halaman sebelumnya
        return back();
    })->name('set-locale');
// });

Route::get('/set-locales/{locale}', function (Request $request, $locale) {
    $allowed = ['id', 'en'];

    if (!in_array($locale, $allowed)) {
        abort(400);
    }

    // Simpan pilihan ke session (ini yang penting)
    $request->session()->put('locale', $locale);

    // Supaya request ini langsung ikut berubah (opsional)
    App::setLocale($locale);

    return back();
})->name('set-locale');

Route::get('/tester', function () {
    return view('welcome');
});
