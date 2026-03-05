@php
    $urls = [
        url('/'),
        url('/pengelolaan-limbah-b3-batam'),
        url('/transporter-pengumpul-limbah-b3-batam'),
        url('/pembersihan-tangki-kapal-tank-cleaning'),
        url('/profil/tentang-kami'),
        url('/profil/visi-misi'),
        url('/profil/struktur-organisasi'),
        url('/layanan-kami'),
        route('contact'),
        url('/dokumen'),
        route('gallery'),
        url('/fasilitas'),
    ];
@endphp
{!! '<'.'?xml version="1.0" encoding="UTF-8"?'.'>' !!}
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach($urls as $url)
        <url>
            <loc>{{ $url }}</loc>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach
</urlset>
