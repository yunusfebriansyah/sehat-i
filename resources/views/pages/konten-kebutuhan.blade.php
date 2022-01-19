@extends('main-layout.main-non-navbar')

@section('container')

{{-- start of content --}}
<section class="tips-isoma" id="tipsIsoma">

    <h1 class="fs-2 text-center">{{ $heading }}</h1>

    <div class="row justify-content-center my-3">
        <div class="col-12 col-md-10 col-lg-6">
            <form action="" method="get">
                <div class="input-group rounded-pill shadow-sm overflow-hidden">
                    <input type="text" class="form-control border-0" name="search" placeholder="Cari info terkait" value="{{ request('search') }}">
                    <select name="lokasi" class="form-select border-0 border-start" style="max-width: 120px;">
                        <option value="" {{ request('lokasi') == '' ? 'selected' : '' }}>Semua</option>
                        <option value="bandar lampung" {{ request('lokasi') == 'bandar lampung' ? 'selected' : '' }}>Bandar Lampung</option>
                        <option value="metro" {{ request('lokasi') == 'metro' ? 'selected' : '' }}>Metro</option>
                        <option value="natar" {{ request('lokasi') == 'natar' ? 'selected' : '' }}>Natar</option>
                        <option value="lampung tengah" {{ request('lokasi') == 'lampung tengah' ? 'selected' : '' }}>Lampung Tengah</option>
                        <option value="lampung timur" {{ request('lokasi') == 'lampung timur' ? 'selected' : '' }}>Lampung Timur</option>
                        <option value="lampung selatan" {{ request('lokasi') == 'lampung selatan' ? 'selected' : '' }}>Lampung Selatan</option>
                        <option value="lampung utara" {{ request('lokasi') == 'lampung utara' ? 'selected' : '' }}>Lampung Utara</option>
                        <option value="pesawaran" {{ request('lokasi') == 'pesawaran' ? 'selected' : '' }}>Pesawaran</option>
                        <option value="mesuji" {{ request('lokasi') == 'mesuji' ? 'selected' : '' }}>Mesuji</option>
                        <option value="pringsewu" {{ request('lokasi') == 'pringsewu' ? 'selected' : '' }}>Pringsewu</option>
                        <option value="tanggamus" {{ request('lokasi') == 'tanggamus' ? 'selected' : '' }}>Tanggamus</option>
                        <option value="tulang bawang" {{ request('lokasi') == 'tulang bawang' ? 'selected' : '' }}>Tulang Bawang</option>
                        <option value="tulang bawang barat" {{ request('lokasi') == 'tulang bawang barat' ? 'selected' : '' }}>Tulang Bawang Barat</option>
                        <option value="way kanan" {{ request('lokasi') == 'way kanan' ? 'selected' : '' }}>Way Kanan</option>
                    </select>
                    <button type="submit" class="btn btn-sm btn-success px-3"><i class="fas fa-search"></i></button>
                </div>
            </form>
        </div>
    </div>

    <a href="/kontribusi/create" class="btn bg-green text-white px-4 mb-3">Ajukan Penyedia</a>

    @if (session('notif'))
        {!! session('notif') !!}
    @endif

    <div class="row my-4">
        @if( count($items) > 0)
            {{-- kabutuhan item --}}
            @foreach ($items as $item)

            <div class="col-12 col-md-6 col-lg-4 konten">
                <div class="card border-0 bg-white shadow p-2 tips-item mb-3">
                    <div class="card-body bg-white">
                        <h5 class="card-title mt-3">{{ $item->name }}</h5>
                        <span class="verified text-gray me-4">Terverifikasi <i class="fas fa-check-circle text-green ms-2"></i></span>
                        <p class="card-text text-muted">{{ $title }}</p>
                        <span class="card-text text-muted"><i class="fas fa-phone text-green"></i> {{ $item->hp }} </span>
                        <button type="button" class="btn btn-sm btn-success ms-4 button_salin" onclick="alert('Kontak berhasil disalin.')">Salin</button>
                        <p class="card-text text-muted mt-2"> <i class="fas fa-map-marker-alt text-green"></i> {{ $item->address }}</p>
                        @auth
                        <form action="/simpan/{{ $item->slug }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-success">Simpan <i class="fas fa-save"></i></button></p>
                        </form>
                        @endauth
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
                        @elsecan('is_admin')
                        <div class="dropdown need-overlay">
                            <a class="btn dropdown-toggle need-action" href="#" role="button" id="needAction" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-ellipsis-v"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="needAction">
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
            {{-- end kabutuhan item --}}

        </div>

        <div class="d-flex justify-content-center">
            {{ $items->links() }}
        </div>

        @else

        <p class="text-muted text-center mt-5">Data belum tersedia / tidak ditemukan</p>

        @endif

</section>



{{-- end of content --}}
@endsection
