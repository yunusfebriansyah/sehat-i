@extends('main-layout.main-use-navbar')

@section('container')

{{-- start of content --}}
<section class="ruang-bantu" id="ruangBantu">

    <h1 class="fs-2">Forum Diskusi, Donasi & Penggalangan Dana</h1>
    <p class="text-gray">Kumpulan informasi mengenai donasi, nomor rekening dan lainnya yang relevan dengan bantuan COVID-19</p>
    @can('auth')
        <a href="/ruang-bantu/create" class="btn bg-green text-white border-0 mb-3">Buat Postingan</a>
    @endcan

    @if (session('message'))
        {!! session('message') !!}
    @endif

    <div class="row my-3">
        @foreach ($posts as $post)

            <article class="mb-3 col-6 col-lg-4">
                <a href="/ruang-bantu/{{ $post->slug }}">
                    <div class="card border-0 shadow bg-white">
                        <img src="{{ asset($post->photo) }}" class="card-img-top" alt="Artikel Donasi">
                        <h2 class="overlay-article fs-6">{{ $post->title }}</h2>
                        @can('my_content', $post)
                        <div class="dropdown more-overlay">
                            <a class="btn dropdown-toggle more-action" href="#" role="button" id="moreAction" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-ellipsis-v"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="moreAction">
                                <li><a class="dropdown-item" href="/ruang-bantu/{{ $post->slug }}/edit">Ubah</a></li>
                                <li>
                                    <form action="/ruang-bantu/{{ $post->slug }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="dropdown-item" onclick="return confirm('yakin?')">Hapus</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                        @elsecan('is_admin')
                        <div class="dropdown more-overlay">
                            <a class="btn dropdown-toggle more-action" href="#" role="button" id="moreAction" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-ellipsis-v"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="moreAction">
                                <li>
                                    <form action="/ruang-bantu/{{ $post->slug }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="dropdown-item" onclick="return confirm('yakin?')">Hapus</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                        @endcan
                    </div>
                </a>
            </article>

        @endforeach
    </div>



</section>



{{-- end of content --}}
@endsection
