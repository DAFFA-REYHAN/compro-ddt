@extends('app')
@section('title', __('contact.page_title'))

@section('content')
<section id="kontak-kami" class="container py-5 py-md-6">
    <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
        <div class="row g-0 flex-column-reverse flex-md-row">

            {{-- Kolom kiri: ajakan & keunggulan --}}
            <div class="col-md-6 p-4 p-md-5 d-flex flex-column justify-content-center"
                 style="background: radial-gradient(circle at top left, rgba(15,120,237,.22), transparent 95%);">

                <span class="badge rounded-pill bg-label-primary mb-3 text-uppercase small">
                    {{ __('contact.badge') }}
                </span>

                <h3 class="fw-bold mb-3">
                    {{ __('contact.heading') }}
                </h3>

                <p class="text-muted mb-4">
                    {{ __('contact.lead_text') }}
                </p>

                <ul class="list-unstyled small text-muted mb-0">
                    <li class="d-flex align-items-start mb-2">
                        <i class="iconbase ti tabler-shield-check text-primary me-2 mt-1"></i>
                        <span>{{ __('contact.point_1') }}</span>
                    </li>
                    <li class="d-flex align-items-start mb-2">
                        <i class="iconbase ti tabler-truck-delivery text-primary me-2 mt-1"></i>
                        <span>{{ __('contact.point_2') }}</span>
                    </li>
                    <li class="d-flex align-items-start">
                        <i class="iconbase ti tabler-headset text-primary me-2 mt-1"></i>
                        <span>{{ __('contact.point_3') }}</span>
                    </li>
                </ul>

                <div class="row g-2 mt-4">
                    <div class="col-4">
                        <div class="card h-100 border-0 shadow-sm bg-transparent">
                            <div class="card-body text-center py-3">
                                <i class="iconbase ti tabler-clock text-success mb-2 fs-4"></i>
                                <p class="small text-muted mb-0">
                                    {!! nl2br(e(__('contact.card_hours_short'))) !!}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="card h-100 border-0 shadow-sm bg-transparent">
                            <div class="card-body text-center py-3">
                                <i class="iconbase ti tabler-map-pin text-primary mb-2 fs-4"></i>
                                <p class="small text-muted mb-0">
                                    {!! nl2br(e(__('contact.card_address_short'))) !!}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="card h-100 border-0 shadow-sm bg-transparent">
                            <div class="card-body text-center py-3">
                                <i class="iconbase ti tabler-brand-whatsapp text-success mb-2 fs-4"></i>
                                <p class="small text-muted mb-0">
                                    {!! nl2br(e(__('contact.card_whatsapp_short'))) !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Kolom kanan: form --}}
            <div class="col-md-6 p-4 p-md-5 bg-white">

                {{-- fallback error server-side (kalau non-AJAX) --}}
                @if ($errors->any())
                    <div class="alert alert-danger mb-3">
                        <ul class="mb-0 small">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form id="contactForm" action="{{ route('message.post') }}" method="post"
                      class="h-100 d-flex flex-column" novalidate>
                    @csrf

                    <h5 class="text-center mb-4 fw-semibold">
                        {{ __('contact.form_title') }}
                    </h5>

                    <div class="mb-3">
                        <label for="name" class="form-label">{{ __('contact.form_name_label') }}</label>
                        <input
                            type="text"
                            class="form-control @error('name') is-invalid @enderror"
                            id="name"
                            name="name"
                            value="{{ old('name') }}"
                            placeholder="{{ __('contact.form_name_placeholder') }}"
                        >
                        <div class="invalid-feedback">
                            {{ $errors->first('name') ?: __('contact.error_name_required') }}
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">{{ __('contact.form_email_label') }}</label>
                        <input
                            type="email"
                            class="form-control @error('email') is-invalid @enderror"
                            id="email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="{{ __('contact.form_email_placeholder') }}"
                        >
                        <div class="invalid-feedback">
                            {{ $errors->first('email') ?: __('contact.error_email_invalid') }}
                        </div>
                    </div>

                    {{-- kalau mau subjek, aktifkan blok ini dan tambahkan validasi di controller --}}
                    {{-- 
                    <div class="mb-3">
                        <label for="subject" class="form-label">Subjek</label>
                        <input
                            type="text"
                            class="form-control @error('subject') is-invalid @enderror"
                            id="subject"
                            name="subject"
                            value="{{ old('subject') }}"
                            placeholder="Subjek pesan (opsional)"
                        >
                        <div class="invalid-feedback">
                            {{ $errors->first('subject') ?: 'Subjek tidak boleh kosong.' }}
                        </div>
                    </div>
                    --}}

                    <div class="mb-3">
                        <label for="message" class="form-label">{{ __('contact.form_message_label') }}</label>
                        <textarea
                            name="message"
                            id="message"
                            rows="4"
                            class="form-control @error('message') is-invalid @enderror"
                            placeholder="{{ __('contact.form_message_placeholder') }}"
                        >{{ old('message') }}</textarea>
                        <div class="invalid-feedback">
                            {{ $errors->first('message') ?: __('contact.error_message_required') }}
                        </div>
                    </div>

                    <button
                        type="submit"
                        id="submitBtn"
                        class="btn btn-primary w-100 mt-2 d-inline-flex align-items-center justify-content-center"
                        style="background: linear-gradient(90deg, #003d99, #0F78ED); border: none;"
                    >
                        <span class="spinner-border spinner-border-sm me-2 d-none" role="status" aria-hidden="true"></span>
                        <span class="btn-text">{{ __('contact.form_submit') }}</span>
                    </button>
                </form>
            </div>

        </div>
    </div>
</section>
@endsection

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(function () {
            const $form      = $('#contactForm');
            const $name      = $('#name');
            const $email     = $('#email');
            const $msg       = $('#message');
            const $submitBtn = $('#submitBtn');
            const $spinner   = $submitBtn.find('.spinner-border');
            const $btnText   = $submitBtn.find('.btn-text');

            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            function setError($el, hasError) {
                if (hasError) {
                    $el.addClass('is-invalid');
                } else {
                    $el.removeClass('is-invalid');
                }
            }

            function startLoading() {
                $submitBtn.prop('disabled', true);
                $spinner.removeClass('d-none');
                $btnText.text("{{ __('contact.form_sending') }}");
            }

            function stopLoading() {
                $submitBtn.prop('disabled', false);
                $spinner.addClass('d-none');
                $btnText.text("{{ __('contact.form_submit') }}");
            }

            $form.on('submit', function (e) {
                e.preventDefault();

                let valid = true;
                $form.find('.is-invalid').removeClass('is-invalid');

                if (!$name.val().trim()) {
                    setError($name, true);
                    valid = false;
                }

                const emailVal = $email.val().trim();
                if (!emailVal || !emailRegex.test(emailVal)) {
                    setError($email, true);
                    valid = false;
                }

                if (!$msg.val().trim()) {
                    setError($msg, true);
                    valid = false;
                }

                if (!valid) {
                    return;
                }

                startLoading();

                $.ajax({
                    url: $form.attr('action'),
                    method: 'POST',
                    data: $form.serialize(),
                    success: function (res) {
                        Swal.fire({
                            icon: res.icon,
                            title: res.title,
                            text: res.text,
                        });

                        if (res.status === 'ok') {
                            $form[0].reset();
                        }
                    },
                    error: function (xhr) {
                        if (xhr.status === 422) {
                            const errors = xhr.responseJSON.errors;

                            if (errors.name)    setError($name, true);
                            if (errors.email)   setError($email, true);
                            if (errors.message) setError($msg, true);

                            const firstError = Object.values(errors)[0][0];

                            Swal.fire({
                                icon: 'error',
                                title: 'Oops',
                                text: firstError,
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: "{{ __('contact.alert_error_title') }}",
                                text: "{{ __('contact.alert_error_text') }}",
                            });
                        }
                    },
                    complete: function () {
                        stopLoading();
                    }
                });
            });

            $form.on('input', 'input, textarea', function () {
                $(this).removeClass('is-invalid');
            });
        });
    </script>
@endpush
