@extends('main-layout.main-non-navbar')

@section('container')

{{-- start of content --}}
<section class="tips-isoma" id="tipsIsoma">

    <h1 class="fs-2 text-center">{{ $heading }}</h1>
    <div class="row my-4">

        @if( count($items) > 0)
            {{-- kabutuhan item --}}
            @foreach ($items as $item)

            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                <div class="card border-0 bg-white shadow p-2 tips-item mb-3">
                    <div class="card-body bg-white">
                        <h5 class="card-title">{{ $item->nama }}</h5>
                        <p class="card-text text-muted">{{ $title }}</p>
                        <p class="card-text text-muted"><i class="fas fa-phone"></i> {{ $item->hp }} <button type="button" class="btn btn-sm btn-success ms-4 button_salin" onclick="alert('Kontak berhasil disalin.')">Salin</button></p>
                        <p class="card-text text-muted">{{ $item->alamat }}</p>
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

        <p class="text-muted">Data belum tersedia</p>

        @endif

</section>



{{-- end of content --}}
@endsection
