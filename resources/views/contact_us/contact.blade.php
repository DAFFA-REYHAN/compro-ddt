@extends('app')
@section('title', 'Kontak Kami - PT Dwi Damar Tirta')

@section('content')
<section id="kontak-kami" class="container py-5 py-md-6">
    <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
        <div class="row g-0 flex-column-reverse flex-md-row">
            {{-- Kolom kiri: ajakan & keunggulan --}}
            <div
                class="col-md-6 p-4 p-md-5 d-flex flex-column justify-content-center"
                style="background: radial-gradient(circle at top left, rgba(15,120,237,.22), transparent 95%);"
            >
                <span class="badge rounded-pill bg-label-primary mb-3 text-uppercase small">
                    Hubungi Kami
                </span>

                <h3 class="fw-bold mb-3">
                    Diskusikan Kebutuhan Limbah Anda
                </h3>

                <p class="text-muted mb-4">
                    Ceritakan jenis limbah, volume, dan kebutuhan layanan Anda. Tim PT Dwi Damar Tirta
                    akan membantu merancang solusi pengangkutan dan pengelolaan limbah B3 &amp; non B3
                    yang aman dan sesuai regulasi.
                </p>

                <ul class="list-unstyled small text-muted mb-0">
                    <li class="d-flex align-items-start mb-2">
                        <i class="iconbase ti tabler-shield-check text-primary me-2 mt-1"></i>
                        <span>Layanan sesuai regulasi pengelolaan limbah yang berlaku.</span>
                    </li>
                    <li class="d-flex align-items-start mb-2">
                        <i class="iconbase ti tabler-truck-delivery text-primary me-2 mt-1"></i>
                        <span>Armada siap melayani area Batam dan sekitarnya.</span>
                    </li>
                    <li class="d-flex align-items-start">
                        <i class="iconbase ti tabler-headset text-primary me-2 mt-1"></i>
                        <span>Respon konsultasi cepat di jam operasional.</span>
                    </li>
                </ul>
            </div>

            {{-- Kolom kanan: form --}}
            <div class="col-md-6 p-4 p-md-5 bg-white">
                <form action="" method="post" class="h-100 d-flex flex-column">
                    @csrf
                    <h5 class="text-center mb-4 fw-semibold">Kirimkan Pesan Anda</h5>

                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input
                            type="text"
                            class="form-control"
                            id="name"
                            name="name"
                            placeholder="Nama lengkap Anda"
                            required
                        >
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input
                            type="email"
                            class="form-control"
                            id="email"
                            name="email"
                            placeholder="email@perusahaan.com"
                            required
                        >
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">No. Telepon / WhatsApp</label>
                        <input
                            type="text"
                            class="form-control"
                            id="phone"
                            name="phone"
                            placeholder="+62 ..."
                            required
                        >
                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label">Pesan</label>
                        <textarea
                            name="message"
                            id="message"
                            rows="4"
                            class="form-control"
                            placeholder="Ceritakan kebutuhan limbah / pertanyaan Anda"
                            required
                        ></textarea>
                    </div>

                    <button
                        type="submit"
                        class="btn btn-primary w-100 mt-2"
                        style="background: linear-gradient(90deg, #003d99, #0F78ED); border: none;"
                    >
                        Kirim Pesan
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
