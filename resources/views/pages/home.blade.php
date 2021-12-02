@extends('main-layout.main')

@section('container')

{{-- start of content --}}

{{-- banner section --}}
<section class="banner mt-5" id="banner">
    <div class="welcome">
        <span class="d-block f-bold fs-1">Hello!</span>
        <p class="text-gray">Verdian Galang Pratama</p>
    </div>
    <div class="card bg-dark text-white border-0">
        {{-- <img src="https://source.unsplash.com/1200x400/?doctor" class="card-img img-fluid rounded" alt="banner"> --}}
        {{-- <div class="card-img-overlay d-flex align-items-center"> --}}
        <div class="card-body bg-green rounded py-5">
            <div class="ps-3">
                <h1 class="card-title text-white">Sehat.i</h1>
                <p class="card-text text-white">Gotong Royong Saling Bantu Sesama</p>
            </div>
        </div>
    </div>
</section>
{{-- end banner section --}}


{{-- kategori kebutuhan --}}
<section class="kategori-kebutuhan" id="kategoriKebutuhan">
    <h2 class="mb-3">Kategori Kebutuhan</h2>
    <div class="row justify-content-center">
        <a href="/kebutuhan/oksigen" class="col-6 col-md-3">
            <div class="text-center">
                <div class="card bg-green border-0 mb-2">
                    <div class="card-body">
                        <i class="fas fa-user-circle d-block mb-1 text-white"></i>
                    </div>
                </div>
                <p>Oksigen</p>
            </div>
        </a>
        <a href="/kebutuhan/ambulans" class="col-6 col-md-3">
            <div class="text-center">
                <div class="card bg-green border-0 mb-2">
                    <div class="card-body">
                        <i class="fas fa-ambulance d-block mb-1 text-white"></i>
                    </div>
                </div>
                <p>Ambulans</p>
            </div>
        </a>
        <a href="/kebutuhan/plasma" class="col-6 col-md-3">
            <div class="text-center">
                <div class="card bg-green border-0 mb-2">
                    <div class="card-body">
                        <i class="fas fa-plus-square d-block mb-1 text-white"></i>
                    </div>
                </div>
                <p>Plasma</p>
            </div>
        </a>
        <a href="/kebutuhan/puskesmas" class="col-6 col-md-3">
            <div class="text-center">
                <div class="card bg-green border-0 mb-2">
                    <div class="card-body">
                        <i class="fas fa-hospital d-block mb-1 text-white"></i>
                    </div>
                </div>
                <p>Puskesmas</p>
            </div>
        </a>
        <a href="/kebutuhan/swab" class="col-6 col-md-3">
            <div class="text-center">
                <div class="card bg-green border-0 mb-2">
                    <div class="card-body">
                        <i class="fas fa-briefcase-medical d-block mb-1 text-white"></i>
                    </div>
                </div>
                <p>Test Swab</p>
            </div>
        </a>
        <a href="/kebutuhan/vaksin" class="col-6 col-md-3">
            <div class="text-center">
                <div class="card bg-green border-0 mb-2">
                    <div class="card-body">
                        <i class="fas fa-stethoscope d-block mb-1 text-white"></i>
                    </div>
                </div>
                <p>Tempat Vaksin</p>
            </div>
        </a>
        <a href="/kebutuhan/isolasi" class="col-6 col-md-3">
            <div class="text-center">
                <div class="card bg-green border-0 mb-2">
                    <div class="card-body">
                        <i class="fas fa-clinic-medical d-block mb-1 text-white"></i>
                    </div>
                </div>
                <p>Tempat Isolasi</p>
            </div>
        </a>
        <a href="/kebutuhan/kontak" class="col-6 col-md-3">
            <div class="text-center">
                <div class="card bg-green border-0 mb-2">
                    <div class="card-body">
                        <i class="fas fa-phone-square d-block mb-1 text-white"></i>
                    </div>
                </div>
                <p>Kontak Penting</p>
            </div>
        </a>
    </div>
</section>
{{-- end kategori kebutuhan --}}

<section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
</section>



{{-- end of content --}}
@endsection
