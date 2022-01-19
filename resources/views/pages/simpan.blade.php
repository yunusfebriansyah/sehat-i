@extends('main-layout.main-use-navbar')

@section('container')

{{-- start of content --}}
<section class="simpan" id="simpan">

    <h1 class="fs-2">Item Tersimpan</h1>
    <p class="text-gray mb-3">Kumpulan informasi mengenai penyedia dan kebutuhan lainnya yang berhasil anda simpan.</p>
    @if (session('notif'))
        {!! session('notif') !!}
    @endif

    <div class="card border-0 bg-white shadow p-2 mt-4">
        <div class="card-body bg-white">
            <button class="border-0 bg-white text-gray w-100 text-start m-0 p-0" type="button" data-bs-toggle="collapse" data-bs-target="#ambulans" aria-expanded="false" aria-controls="ambulans">
                <h4 class="card-title text-black"><i class="fas fa-ambulance text-green me-2"></i>Ambulans</h4>
            </button>
            <div class="collapse mt-3" id="ambulans">
                @if ( count($ambulans) > 0 )
                <div class="row my-3">
                    @foreach ($ambulans as $item)
                    <div class="col-12 col-md-6 col-lg-4 mb-3">
                        <div class="card border-0 bg-white shadow p-2 tips-item mb-3">
                            <div class="card-body bg-white">
                                <h5 class="card-title mt-3">{{ $item->need->name }}</h5>
                                <span class="verified text-gray">Terverifikasi <i class="fas fa-check-circle text-green ms-2"></i></span>
                                <p class="card-text text-muted">{{ $title }}</p>
                                <span class="card-text text-muted"><i class="fas fa-phone text-green"></i> {{ $item->need->hp }} </span>
                                <button type="button" class="btn btn-sm btn-success ms-4 button_salin" onclick="alert('Kontak berhasil disalin.')">Salin</button>
                                <p class="card-text text-muted mt-2"> <i class="fas fa-map-marker-alt text-green"></i> {{ $item->need->address }}</p>
                                <p class="text-green">Disimpan sejak : {{ $item->need->created_at->diffForHumans() }}</p>
                                <form action="/simpan/{{ $item->id }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-sm btn-success">Hapus <i class="far fa-trash-alt"></i></button></p>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @else
                <p class="text-gray">- belum menyimpan apapun</p>
                @endif
                <button class="btn bg-green text-white" type="button" data-bs-toggle="collapse" data-bs-target="#ambulans" aria-expanded="false" aria-controls="ambulans"> Sembunyikan</button>
            </div>
        </div>
    </div>

    <div class="card border-0 bg-white shadow p-2 mt-4">
        <div class="card-body bg-white">
            <button class="border-0 bg-white text-gray w-100 text-start m-0 p-0" type="button" data-bs-toggle="collapse" data-bs-target="#oksigens" aria-expanded="false" aria-controls="oksigens">
                <h4 class="card-title text-black"><i class="fas fa-lungs text-green me-2"></i>Oksigens</h4>
            </button>
            <div class="collapse mt-3" id="oksigens">
                @if ( count($oksigens) > 0 )
                <div class="row my-3">
                    @foreach ($oksigens as $item)
                    <div class="col-12 col-md-6 col-lg-4 mb-3">
                        <div class="card border-0 bg-white shadow p-2 tips-item mb-3">
                            <div class="card-body bg-white">
                                <h5 class="card-title mt-3">{{ $item->need->name }}</h5>
                                <span class="verified text-gray">Terverifikasi <i class="fas fa-check-circle text-green ms-2"></i></span>
                                <p class="card-text text-muted">{{ $title }}</p>
                                <span class="card-text text-muted"><i class="fas fa-phone text-green"></i> {{ $item->need->hp }} </span>
                                <button type="button" class="btn btn-sm btn-success ms-4 button_salin" onclick="alert('Kontak berhasil disalin.')">Salin</button>
                                <p class="card-text text-muted mt-2"> <i class="fas fa-map-marker-alt text-green"></i> {{ $item->need->address }}</p>
                                <p class="text-green">Disimpan sejak : {{ $item->need->created_at->diffForHumans() }}</p>
                                <form action="/simpan/{{ $item->id }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-sm btn-success">Hapus <i class="far fa-trash-alt"></i></button></p>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @else
                <p class="text-gray">- belum menyimpan apapun</p>
                @endif
                <button class="btn bg-green text-white" type="button" data-bs-toggle="collapse" data-bs-target="#oksigens" aria-expanded="false" aria-controls="oksigens"> Sembunyikan</button>
            </div>
        </div>
    </div>

    <div class="card border-0 bg-white shadow p-2 mt-4">
        <div class="card-body bg-white">
            <button class="border-0 bg-white text-gray w-100 text-start m-0 p-0" type="button" data-bs-toggle="collapse" data-bs-target="#plasmas" aria-expanded="false" aria-controls="plasmas">
                <h4 class="card-title text-black"><i class="fas fa-plus-square text-green me-2"></i>Plasmas</h4>
            </button>
            <div class="collapse mt-3" id="plasmas">
                @if ( count($plasmas) > 0 )
                <div class="row my-3">
                    @foreach ($plasmas as $item)
                    <div class="col-12 col-md-6 col-lg-4 mb-3">
                        <div class="card border-0 bg-white shadow p-2 tips-item mb-3">
                            <div class="card-body bg-white">
                                <h5 class="card-title mt-3">{{ $item->need->name }}</h5>
                                <span class="verified text-gray">Terverifikasi <i class="fas fa-check-circle text-green ms-2"></i></span>
                                <p class="card-text text-muted">{{ $title }}</p>
                                <span class="card-text text-muted"><i class="fas fa-phone text-green"></i> {{ $item->need->hp }} </span>
                                <button type="button" class="btn btn-sm btn-success ms-4 button_salin" onclick="alert('Kontak berhasil disalin.')">Salin</button>
                                <p class="card-text text-muted mt-2"> <i class="fas fa-map-marker-alt text-green"></i> {{ $item->need->address }}</p>
                                <p class="text-green">Disimpan sejak : {{ $item->need->created_at->diffForHumans() }}</p>
                                <form action="/simpan/{{ $item->id }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-sm btn-success">Hapus <i class="far fa-trash-alt"></i></button></p>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @else
                <p class="text-gray">- belum menyimpan apapun</p>
                @endif
                <button class="btn bg-green text-white" type="button" data-bs-toggle="collapse" data-bs-target="#plasmas" aria-expanded="false" aria-controls="plasmas"> Sembunyikan</button>
            </div>
        </div>
    </div>

    <div class="card border-0 bg-white shadow p-2 mt-4">
        <div class="card-body bg-white">
            <button class="border-0 bg-white text-gray w-100 text-start m-0 p-0" type="button" data-bs-toggle="collapse" data-bs-target="#puskesmass" aria-expanded="false" aria-controls="puskesmass">
                <h4 class="card-title text-black"><i class="fas fa-hospital text-green me-2"></i>Puskesmas</h4>
            </button>
            <div class="collapse mt-3" id="puskesmass">
                @if ( count($puskesmass) > 0 )
                <div class="row my-3">
                    @foreach ($puskesmass as $item)
                    <div class="col-12 col-md-6 col-lg-4 mb-3">
                        <div class="card border-0 bg-white shadow p-2 tips-item mb-3">
                            <div class="card-body bg-white">
                                <h5 class="card-title mt-3">{{ $item->need->name }}</h5>
                                <span class="verified text-gray">Terverifikasi <i class="fas fa-check-circle text-green ms-2"></i></span>
                                <p class="card-text text-muted">{{ $title }}</p>
                                <span class="card-text text-muted"><i class="fas fa-phone text-green"></i> {{ $item->need->hp }} </span>
                                <button type="button" class="btn btn-sm btn-success ms-4 button_salin" onclick="alert('Kontak berhasil disalin.')">Salin</button>
                                <p class="card-text text-muted mt-2"> <i class="fas fa-map-marker-alt text-green"></i> {{ $item->need->address }}</p>
                                <p class="text-green">Disimpan sejak : {{ $item->need->created_at->diffForHumans() }}</p>
                                <form action="/simpan/{{ $item->id }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-sm btn-success">Hapus <i class="far fa-trash-alt"></i></button></p>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @else
                <p class="text-gray">- belum menyimpan apapun</p>
                @endif
                <button class="btn bg-green text-white" type="button" data-bs-toggle="collapse" data-bs-target="#puskesmass" aria-expanded="false" aria-controls="puskesmass"> Sembunyikan</button>
            </div>
        </div>
    </div>

    <div class="card border-0 bg-white shadow p-2 mt-4">
        <div class="card-body bg-white">
            <button class="border-0 bg-white text-gray w-100 text-start m-0 p-0" type="button" data-bs-toggle="collapse" data-bs-target="#testSwap" aria-expanded="false" aria-controls="testSwap">
                <h4 class="card-title text-black"><i class="fas fa-briefcase-medical text-green me-2"></i>Test Swap</h4>
            </button>
            <div class="collapse mt-3" id="testSwap">
                @if ( count($testSwaps) > 0 )
                <div class="row my-3">
                    @foreach ($testSwaps as $item)
                    <div class="col-12 col-md-6 col-lg-4 mb-3">
                        <div class="card border-0 bg-white shadow p-2 tips-item mb-3">
                            <div class="card-body bg-white">
                                <h5 class="card-title mt-3">{{ $item->need->name }}</h5>
                                <span class="verified text-gray">Terverifikasi <i class="fas fa-check-circle text-green ms-2"></i></span>
                                <p class="card-text text-muted">{{ $title }}</p>
                                <span class="card-text text-muted"><i class="fas fa-phone text-green"></i> {{ $item->need->hp }} </span>
                                <button type="button" class="btn btn-sm btn-success ms-4 button_salin" onclick="alert('Kontak berhasil disalin.')">Salin</button>
                                <p class="card-text text-muted mt-2"> <i class="fas fa-map-marker-alt text-green"></i> {{ $item->need->address }}</p>
                                <p class="text-green">Disimpan sejak : {{ $item->need->created_at->diffForHumans() }}</p>
                                <form action="/simpan/{{ $item->id }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-sm btn-success">Hapus <i class="far fa-trash-alt"></i></button></p>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @else
                <p class="text-gray">- belum menyimpan apapun</p>
                @endif
                <button class="btn bg-green text-white" type="button" data-bs-toggle="collapse" data-bs-target="#testSwap" aria-expanded="false" aria-controls="testSwap"> Sembunyikan</button>
            </div>
        </div>
    </div>

    <div class="card border-0 bg-white shadow p-2 mt-4">
        <div class="card-body bg-white">
            <button class="border-0 bg-white text-gray w-100 text-start m-0 p-0" type="button" data-bs-toggle="collapse" data-bs-target="#tempatVaksins" aria-expanded="false" aria-controls="tempatVaksins">
                <h4 class="card-title text-black"><i class="fas fa-syringe text-green me-2"></i>Tempat Vaksin</h4>
            </button>
            <div class="collapse mt-3" id="tempatVaksins">
                @if ( count($tempatVaksins) > 0 )
                <div class="row my-3">
                    @foreach ($tempatVaksins as $item)
                    <div class="col-12 col-md-6 col-lg-4 mb-3">
                        <div class="card border-0 bg-white shadow p-2 tips-item mb-3">
                            <div class="card-body bg-white">
                                <h5 class="card-title mt-3">{{ $item->need->name }}</h5>
                                <span class="verified text-gray">Terverifikasi <i class="fas fa-check-circle text-green ms-2"></i></span>
                                <p class="card-text text-muted">{{ $title }}</p>
                                <span class="card-text text-muted"><i class="fas fa-phone text-green"></i> {{ $item->need->hp }} </span>
                                <button type="button" class="btn btn-sm btn-success ms-4 button_salin" onclick="alert('Kontak berhasil disalin.')">Salin</button>
                                <p class="card-text text-muted mt-2"> <i class="fas fa-map-marker-alt text-green"></i> {{ $item->need->address }}</p>
                                <p class="text-green">Disimpan sejak : {{ $item->need->created_at->diffForHumans() }}</p>
                                <form action="/simpan/{{ $item->id }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-sm btn-success">Hapus <i class="far fa-trash-alt"></i></button></p>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @else
                <p class="text-gray">- belum menyimpan apapun</p>
                @endif
                <button class="btn bg-green text-white" type="button" data-bs-toggle="collapse" data-bs-target="#tempatVaksins" aria-expanded="false" aria-controls="tempatVaksins"> Sembunyikan</button>
            </div>
        </div>
    </div>

    <div class="card border-0 bg-white shadow p-2 mt-4">
        <div class="card-body bg-white">
            <button class="border-0 bg-white text-gray w-100 text-start m-0 p-0" type="button" data-bs-toggle="collapse" data-bs-target="#tempatIsolasis" aria-expanded="false" aria-controls="tempatIsolasis">
                <h4 class="card-title text-black"><i class="fas fa-clinic-medical text-green me-2"></i>Tempat Isolasi</h4>
            </button>
            <div class="collapse mt-3" id="tempatIsolasis">
                @if ( count($tempatIsolasis) > 0 )
                <div class="row my-3">
                    @foreach ($tempatIsolasis as $item)
                    <div class="col-12 col-md-6 col-lg-4 mb-3">
                        <div class="card border-0 bg-white shadow p-2 tips-item mb-3">
                            <div class="card-body bg-white">
                                <h5 class="card-title mt-3">{{ $item->need->name }}</h5>
                                <span class="verified text-gray">Terverifikasi <i class="fas fa-check-circle text-green ms-2"></i></span>
                                <p class="card-text text-muted">{{ $title }}</p>
                                <span class="card-text text-muted"><i class="fas fa-phone text-green"></i> {{ $item->need->hp }} </span>
                                <button type="button" class="btn btn-sm btn-success ms-4 button_salin" onclick="alert('Kontak berhasil disalin.')">Salin</button>
                                <p class="card-text text-muted mt-2"> <i class="fas fa-map-marker-alt text-green"></i> {{ $item->need->address }}</p>
                                <p class="text-green">Disimpan sejak : {{ $item->need->created_at->diffForHumans() }}</p>
                                <form action="/simpan/{{ $item->id }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-sm btn-success">Hapus <i class="far fa-trash-alt"></i></button></p>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @else
                <p class="text-gray">- belum menyimpan apapun</p>
                @endif
                <button class="btn bg-green text-white" type="button" data-bs-toggle="collapse" data-bs-target="#tempatIsolasis" aria-expanded="false" aria-controls="tempatIsolasis"> Sembunyikan</button>
            </div>
        </div>
    </div>

    <hr class="bg-success my-5" style="height:2px;">

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



    <p class="text-center"><a href="https://covid19.go.id/" target="_blank" class="text-green">Cari informasi lainnya ...</a></p>


</section>



{{-- end of content --}}
@endsection
