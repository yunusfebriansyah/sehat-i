@extends('main-layout.main-use-navbar')

@section('container')

{{-- start of content --}}
<section class="simpan" id="simpan">

    <h1 class="fs-2">{{ $title }}</h1>
    <p class="text-gray mb-3">Kumpulan data ruang bantu dan pengajuan penyedia kebutuhan yang anda sarankan</p>
    @can('auth')
        <a href="/ruang-bantu/create" class="btn bg-green text-white border-0 mb-3">Buat Postingan Ruang Bantu</a>
        <a href="/kontribusi/create" class="btn bg-green text-white px-4 mb-3">Ajukan Penyedia</a>
    @endcan
    @if (session('notif'))
        {!! session('notif') !!}
    @endif
    @if (session('message'))
        {!! session('message') !!}
    @endif
    <section class="ruang-bantu mt-0" id="ruangBantu">
    <div class="card border-0 bg-white shadow p-2">
        <div class="card-body bg-white">
            <button class="border-0 bg-white text-gray w-100 text-start m-0 p-0" type="button" data-bs-toggle="collapse" data-bs-target="#ruangBantus" aria-expanded="false" aria-controls="ruangBantus">
                <h4 class="card-title text-black"><i class="fas fa-heart text-green me-2"></i>Ruang Bantu</h4>
            </button>
            <div class="collapse mt-3" id="ruangBantus">
                @if ( count($ruangBantu) > 0 )
                <div class="row my-3">
                    @foreach ($ruangBantu as $post)
                    <div class="col-12 col-md-6 col-lg-4 mb-3">
                        <a href="/ruang-bantu/{{ $post->slug }}">
                            <div class="card border-0 shadow bg-white">
                                <img src="{{ asset($post->photo) }}" class="card-img-top" alt="Artikel Donasi">
                                <h2 class="overlay-article fs-6">{{ $post->title }}</h2>
                                @if ($post->is_verified)
                                <span class="verified text-gray bg-white rounded-pill px-4">Terverifikasi <i class="fas fa-check-circle text-green ms-2"></i></span>
                                @else
                                <span class="verified text-gray bg-white rounded-pill px-4">Belum terverifikasi <i class="fas fa-spinner text-danger ms-2"></i></span>
                                @endif
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
                                                <button type="submit" class="dropdown-item" onclick="return confirm('yakin dihapus?')">Hapus</button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                                @endcan
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
                @else
                <p class="text-gray">- belum menyimpan apapun</p>
                @endif
                <button class="btn bg-green text-white" type="button" data-bs-toggle="collapse" data-bs-target="#ruangBantus" aria-expanded="false" aria-controls="ruangBantus"> Sembunyikan</button>
            </div>
        </div>
    </div>
    </section>

    <div class="card border-0 bg-white shadow p-2">
        <div class="card-body bg-white">
            <button class="border-0 bg-white text-gray w-100 text-start m-0 p-0" type="button" data-bs-toggle="collapse" data-bs-target="#needs" aria-expanded="false" aria-controls="needs">
                <h4 class="card-title text-black"><i class="fas fa-plus-square text-green me-2"></i>Pengajuan Penyedia</h4>
            </button>
            <div class="collapse mt-3" id="needs">
                @if ( count($needs) > 0 )
                <div class="row my-3">
                    @foreach ($needs as $item)
                    <div class="col-12 col-md-6 col-lg-4 mb-3">
                        <div class="card border-0 bg-white shadow p-2 tips-item mb-3">
                            <div class="card-body bg-white">
                                <h5 class="card-title mt-3">{{ $item->name }}</h5>
                                @if ($item->is_verified)
                                <span class="verified text-gray me-4">Terverifikasi <i class="fas fa-check-circle text-green ms-2"></i></span>
                                @else
                                <span class="verified text-gray me-4">Belum terverifikasi <i class="fas fa-spinner text-danger ms-2"></i></span>
                                @endif
                                <p class="card-text text-muted">{{ $title }}</p>
                                <span class="card-text text-muted"><i class="fas fa-phone text-green"></i> {{ $item->hp }} </span>
                                <button type="button" class="btn btn-sm btn-success ms-4 button_salin" onclick="alert('Kontak berhasil disalin.')">Salin</button>
                                <p class="card-text text-muted mt-2"> <i class="fas fa-map-marker-alt text-green"></i> {{ $item->address }}</p>
                                <p class="card-text text-muted mt-2"> <i class="fas fa-heartbeat text-green"></i> Kategori : {{ $item->category->name }}</p>
                                <p class="text-green">Disimpan sejak : {{ $item->created_at->diffForHumans() }}</p>
                                @can('my_need', $item)
                                <div class="dropdown need-overlay">
                                    <a class="btn dropdown-toggle need-action" href="#" role="button" id="needAction" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="needAction">
                                        <li><a class="dropdown-item" href="/kontribusi/{{ $item->slug }}/edit">Ubah</a></li>
                                        <li>
                                            <form action="/kontribusi/{{ $item->slug }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="dropdown-item" onclick="return confirm('yakin dihapus?')">Hapus</button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                                @endcan
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @else
                <p class="text-gray">- belum menyimpan apapun</p>
                @endif
                <button class="btn bg-green text-white" type="button" data-bs-toggle="collapse" data-bs-target="#needs" aria-expanded="false" aria-controls="needs"> Sembunyikan</button>
            </div>
        </div>
    </div>

    <hr class="bg-success my-5 mb-4" style="height:2px;">

    @can('is_admin')
    <h2 class="fs-3">Kontribusi User</h2>
    <p class="text-gray mb-2">Kumpulan data ruang bantu dan pengajuan penyedia kebutuhan yang disarankan oleh user</p>

    <section class="ruang-bantu mt-0" id="ruangBantu">
        <div class="card border-0 bg-white shadow p-2">
            <div class="card-body bg-white">
                <button class="border-0 bg-white text-gray w-100 text-start m-0 p-0" type="button" data-bs-toggle="collapse" data-bs-target="#userRuangBantus" aria-expanded="false" aria-controls="userRuangBantus">
                    <h4 class="card-title text-black"><i class="fas fa-heart text-green me-2"></i>Ruang Bantu</h4>
                </button>
                <div class="collapse mt-3" id="userRuangBantus">
                    @if ( count($userRuangBantu) > 0 )
                    <div class="row my-3">
                        @foreach ($userRuangBantu as $post)
                        <div class="col-12 col-md-6 col-lg-4 mb-3">
                            <a href="/ruang-bantu/{{ $post->slug }}">
                                <div class="card border-0 shadow bg-white">
                                    <img src="{{ asset($post->photo) }}" class="card-img-top" alt="Artikel Donasi">
                                    <h2 class="overlay-article fs-6">{{ $post->title }}</h2>
                                    @if ($post->is_verified)
                                    <span class="verified text-gray bg-white rounded-pill px-4">Terverifikasi <i class="fas fa-check-circle text-green ms-2"></i></span>
                                    @else
                                    <span class="verified text-gray bg-white rounded-pill px-4">Belum terverifikasi <i class="fas fa-spinner text-danger ms-2"></i></span>
                                    @endif
                                    @can('is_admin', $post)
                                    <div class="dropdown more-overlay">
                                        <a class="btn dropdown-toggle more-action" href="#" role="button" id="moreAction" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="moreAction">
                                            <li>
                                                <form action="/ruang-bantu/{{ $post->slug }}/verified" method="post">
                                                    @csrf
                                                    @method('put')
                                                    <button type="submit" class="dropdown-item">Verifikasi</button>
                                                </form>
                                            </li>
                                            <li>
                                                <form action="/ruang-bantu/{{ $post->slug }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="dropdown-item" onclick="return confirm('yakin dihapus?')">Hapus</button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                    @endcan
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                    @else
                    <p class="text-gray">- belum menyimpan apapun</p>
                    @endif
                    <button class="btn bg-green text-white" type="button" data-bs-toggle="collapse" data-bs-target="#userRuangBantus" aria-expanded="false" aria-controls="userRuangBantus"> Sembunyikan</button>
                </div>
            </div>
        </div>
        </section>

        <div class="card border-0 bg-white shadow p-2">
            <div class="card-body bg-white">
                <button class="border-0 bg-white text-gray w-100 text-start m-0 p-0" type="button" data-bs-toggle="collapse" data-bs-target="#userNeeds" aria-expanded="false" aria-controls="userNeeds">
                    <h4 class="card-title text-black"><i class="fas fa-plus-square text-green me-2"></i>Pengajuan Penyedia</h4>
                </button>
                <div class="collapse mt-3" id="userNeeds">
                    @if ( count($userNeeds) > 0 )
                    <div class="row my-3">
                        @foreach ($userNeeds as $item)
                        <div class="col-12 col-md-6 col-lg-4 mb-3">
                            <div class="card border-0 bg-white shadow p-2 tips-item mb-3">
                                <div class="card-body bg-white">
                                    <h5 class="card-title mt-3">{{ $item->name }}</h5>
                                    @if ($item->is_verified)
                                    <span class="verified text-gray me-4">Terverifikasi <i class="fas fa-check-circle text-green ms-2"></i></span>
                                    @else
                                    <span class="verified text-gray me-4">Belum terverifikasi <i class="fas fa-spinner text-danger ms-2"></i></span>
                                    @endif
                                    <p class="card-text text-muted">{{ $title }}</p>
                                    <span class="card-text text-muted"><i class="fas fa-phone text-green"></i> {{ $item->hp }} </span>
                                    <button type="button" class="btn btn-sm btn-success ms-4 button_salin" onclick="alert('Kontak berhasil disalin.')">Salin</button>
                                    <p class="card-text text-muted mt-2"> <i class="fas fa-map-marker-alt text-green"></i> {{ $item->address }}</p>
                                    <p class="card-text text-muted mt-2"> <i class="fas fa-heartbeat text-green"></i> Kategori : {{ $item->category->name }}</p>
                                    <p class="card-text text-muted mt-2"> <i class="fas fa-user text-green"></i> Pengaju : {{ $item->user->nama }}</p>
                                    <p class="text-green">Disimpan sejak : {{ $item->created_at->diffForHumans() }}</p>
                                    @can('is_admin', $item)
                                    <div class="dropdown need-overlay">
                                        <a class="btn dropdown-toggle need-action" href="#" role="button" id="needAction" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="needAction">
                                            <li>
                                                <form action="/kontribusi/{{ $item->slug }}/verified" method="post">
                                                    @csrf
                                                    @method('put')
                                                    <button type="submit" class="dropdown-item">Verifikasi</button>
                                                </form>
                                            </li>
                                            <li>
                                                <form action="/kontribusi/{{ $item->slug }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="dropdown-item" onclick="return confirm('yakin dihapus?')">Hapus</button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                    @endcan
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @else
                    <p class="text-gray">- belum menyimpan apapun</p>
                    @endif
                    <button class="btn bg-green text-white" type="button" data-bs-toggle="collapse" data-bs-target="#userNeeds" aria-expanded="false" aria-controls="userNeeds"> Sembunyikan</button>
                </div>
            </div>
        </div>

    <hr class="bg-success my-5 mb-4" style="height:2px;">
    @endcan


    <div class="row my-2 mb-5">
        <div class="col-12 col-md-10 my-3 bg-white">
            <div class="card border-0 bg-white shadow-lg p-2 kontak-darurat">
                <div class="row g-0">
                    <div class="col-3 bg-white d-flex align-items-center justify-content-center">
                        <i class="fas fa-address-card text-green"></i>
                    </div>
                    <div class="col-8">
                        <div class="card-body bg-white">
                            <p class="card-title text-black fs-3 text-bold">Kontak Darurat</p>
                            <p class="card-text text-gray">Situs & kontak penting terkait COVID-19</p>
                            <a href="/kebutuhan/kontak-darurat" class="btn bg-green text-white border-0">Kontak sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <p class="text-center"><a href="#" class="text-green">Cari informasi lainnya ...</a></p>


</section>



{{-- end of content --}}
@endsection
