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
                <div class="card bg-white border-0 mb-2 shadow">
                    <div class="card-body">
                        <i class="fas fa-user-circle d-block mb-1 text-green"></i>
                    </div>
                </div>
                <p>Oksigen</p>
            </div>
        </a>
        <a href="/kebutuhan/ambulans" class="col-6 col-md-3">
            <div class="text-center">
                <div class="card bg-white border-0 mb-2 shadow">
                    <div class="card-body">
                        <i class="fas fa-ambulance d-block mb-1 text-green"></i>
                    </div>
                </div>
                <p>Ambulans</p>
            </div>
        </a>
        <a href="/kebutuhan/plasma" class="col-6 col-md-3">
            <div class="text-center">
                <div class="card bg-white border-0 mb-2 shadow">
                    <div class="card-body">
                        <i class="fas fa-plus-square d-block mb-1 text-green"></i>
                    </div>
                </div>
                <p>Plasma</p>
            </div>
        </a>
        <a href="/kebutuhan/puskesmas" class="col-6 col-md-3">
            <div class="text-center">
                <div class="card bg-white border-0 mb-2 shadow">
                    <div class="card-body">
                        <i class="fas fa-hospital d-block mb-1 text-green"></i>
                    </div>
                </div>
                <p>Puskesmas</p>
            </div>
        </a>
        <a href="/kebutuhan/swab" class="col-6 col-md-3">
            <div class="text-center">
                <div class="card bg-white border-0 mb-2 shadow">
                    <div class="card-body">
                        <i class="fas fa-briefcase-medical d-block mb-1 text-green"></i>
                    </div>
                </div>
                <p>Test Swab</p>
            </div>
        </a>
        <a href="/kebutuhan/vaksin" class="col-6 col-md-3">
            <div class="text-center">
                <div class="card bg-white border-0 mb-2 shadow">
                    <div class="card-body">
                        <i class="fas fa-syringe d-block mb-1 text-green"></i>
                    </div>
                </div>
                <p>Tempat Vaksin</p>
            </div>
        </a>
        <a href="/kebutuhan/isolasi" class="col-6 col-md-3">
            <div class="text-center">
                <div class="card bg-white border-0 mb-2 shadow">
                    <div class="card-body">
                        <i class="fas fa-clinic-medical d-block mb-1 text-green"></i>
                    </div>
                </div>
                <p>Tempat Isolasi</p>
            </div>
        </a>
        <a href="/kebutuhan/kontak" class="col-6 col-md-3">
            <div class="text-center">
                <div class="card bg-white border-0 mb-2 shadow">
                    <div class="card-body">
                        <i class="fas fa-phone-square d-block mb-1 text-green"></i>
                    </div>
                </div>
                <p>Kontak Penting</p>
            </div>
        </a>
    </div>
</section>
{{-- end kategori kebutuhan --}}

{{-- kontribusi  --}}
<section class="kontribusi" id="kontribusi">
    <h2 class="mb-3">Cara Berkontribusi</h2>
    <div class="row">
        <div class="col-12 col-lg-6 mb-3 bg-white">
            <div class="card mb-3 border-0 shadow-lg p-2">
                <div class="row g-0 justify-content-center">
                  <div class="col-4 d-flex align-content-center">
                    <img src="/assets/images/kontribusi.png" class="img-fluid" alt="Cara Berkontribusi">
                  </div>
                  <div class="col-8">
                    <div class="card-body bg-white">
                        <p class="card-title text-black fs-5">Daftar Donor Darah</p>
                        <p class="card-text text-gray">Berdonor darah plasma konvalesan (hanya diisi oleh calon pendonor).</p>
                        <a href="/kontribusi/donor-darah" class="btn bg-green text-white border-0">Donor darah sekarang</a>
                    </div>
                  </div>
                </div>
              </div>
        </div>
        <div class="col-12 col-lg-6 mb-3 bg-white">
            <div class="card mb-3 border-0 shadow-lg p-2">
                <div class="row g-0 justify-content-center">
                  <div class="col-4 d-flex align-content-center">
                    <img src="/assets/images/relawan.png" class="img-fluid" alt="Daftar jadi relawan">
                  </div>
                  <div class="col-8">
                    <div class="card-body bg-white">
                        <p class="card-title text-black fs-5">Daftar Jadi Relawan</p>
                        <p class="card-text text-gray">Gabung jadi relawan untuk mengumpulkan data dan menjawab pertanyaan warga via hotline.</p>
                        <a href="/kontribusi/jadi-relawan" class="btn bg-green text-white border-0">Jadi relawan sekarang</a>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
    <div class="card mb-3 border-0 shadow-lg bg-green panduan-isoma">
        <div class="row g-0 justify-content-center">
            <div class="card-body bg-green py-4 px-5 text-center">
                <h4 class="card-title text-white">Panduan Isolasi Mandiri</h4>
                <a href="/kontribusi/panduan-isoma" class="btn-white rounded-pill">klik disini</a>
            </div>
        </div>
    </div>
</section>
{{-- end kontribusi  --}}




{{-- end of content --}}
@endsection
