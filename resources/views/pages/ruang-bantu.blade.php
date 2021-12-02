@extends('main-layout.main-use-navbar')

@section('container')

{{-- start of content --}}
<section class="ruang-bantu" id="ruangBantu">

    <h1 class="fs-2">Donasi & Penggalangan Dana</h1>
    <p class="text-gray">Kumpulan informasi mengenai donasi, nomor rekening dan lainnya yang relevan dengan bantuan COVID-19</p>

    <div class="row my-3">
        @for ($i = 1; $i < mt_rand(12, 20); $i++)

            <article class="mb-3 col-12 col-md-6 col-lg-4">
                <a href="#">
                    <div class="card border-0 shadow">
                        <img src="https://source.unsplash.com/500x400/" class="card-img-top" alt="Artikel Donasi">
                        <h2 class="overlay-article">Bantuan {{ $i }}</h2>
                    </div>
                </a>
            </article>

        @endfor
    </div>



</section>



{{-- end of content --}}
@endsection
