<section class="section-padding">
    <div class="container">
        <div class="section-header text-center mb-5" data-aos="fade-up">
            <span class="section-subtitle">{{__('home.titleClient')}}</span>
            <h2 class="section-title">{{__('home.titleClient')}}</h2>
            <p class="section-desc">{{__('home.descriptionClient')}}</p>
        </div>

        {{-- Row 1 – client 1–10 --}}
        <div class="clients-marquee mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="marquee-track marquee-ltr">
                @for ($i = 1; $i <= 10; $i++)
                    <div class="client-logo">
                        <img src="{{ asset('assets/template/img/clients/client-' . $i . '.jpg') }}"
                            alt="Client {{ $i }}" loading="lazy">
                    </div>
                @endfor
                @for ($i = 1; $i <= 10; $i++)
                    <div class="client-logo">
                        <img src="{{ asset('assets/template/img/clients/client-' . $i . '.jpg') }}"
                            alt="Client {{ $i }}" loading="lazy">
                    </div>
                @endfor
            </div>
        </div>

        {{-- Row 2 – client 11–20 --}}
        <div class="clients-marquee mb-4" data-aos="fade-up" data-aos-delay="150">
            <div class="marquee-track marquee-rtl">
                @for ($i = 11; $i <= 20; $i++)
                    <div class="client-logo">
                        <img src="{{ asset('assets/template/img/clients/client-' . $i . '.jpg') }}"
                            alt="Client {{ $i }}" loading="lazy">
                    </div>
                @endfor
                @for ($i = 11; $i <= 20; $i++)
                    <div class="client-logo">
                        <img src="{{ asset('assets/template/img/clients/client-' . $i . '.jpg') }}"
                            alt="Client {{ $i }}" loading="lazy">
                    </div>
                @endfor
            </div>
        </div>

        {{-- Row 3 – client 21–31 --}}
        <div class="clients-marquee" data-aos="fade-up" data-aos-delay="200">
            <div class="marquee-track marquee-ltr">
                @for ($i = 21; $i <= 28; $i++)
                    <div class="client-logo">
                        <img src="{{ asset('assets/template/img/clients/client-' . $i . '.jpg') }}"
                            alt="Client {{ $i }}" loading="lazy">
                    </div>
                @endfor
                @for ($i = 21; $i <= 29; $i++)
                    <div class="client-logo">
                        <img src="{{ asset('assets/template/img/clients/client-' . $i . '.jpg') }}"
                            alt="Client {{ $i }}" loading="lazy">
                    </div>
                @endfor
            </div>
        </div>
    </div>
</section>

