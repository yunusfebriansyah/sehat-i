@extends('main-layout.main-use-navbar')

@section('container')

{{-- start of content --}}

@if (session('message'))
    {!! session('message') !!}
@endif

{{-- banner section --}}
<section class="banner" id="banner">
    <div class="welcome">
        <span class="d-block f-bold fs-1">Hello!</span>
        @can('auth')
            <p class="text-gray">{{ auth()->user()->nama }}</p>
        @endcan
    </div>
    <div class="card bg-dark text-white border-0">
        <div class="card-body rounded p-0 py-5 hero">
            <div class="px-5">
                <h1 class="card-title text-white">Sehat.i</h1>
                <p class="card-text text-white">#SalingPeduliUntukEmpati</p>
            </div>
        </div>
    </div>
</section>
{{-- end banner section --}}


{{-- kategori kebutuhan --}}
<section class="kategori-kebutuhan" id="kategoriKebutuhan">
    <h2 class="mb-3">Kategori Kebutuhan</h2>
    <div class="row justify-content-center">
        <a href="/kebutuhan/oksigen" class="col-6 col-md-3 kebutuhan-item">
            <div class="text-center">
                <div class="card border-0 mb-2 shadow">
                    <div class="card-body">
                        <i class="fas fa-lungs d-block mb-1"></i>
                    </div>
                </div>
                <p>Oksigen</p>
            </div>
        </a>
        <a href="/kebutuhan/ambulans" class="col-6 col-md-3 kebutuhan-item">
            <div class="text-center">
                <div class="card border-0 mb-2 shadow">
                    <div class="card-body">
                        <i class="fas fa-ambulance d-block mb-1"></i>
                    </div>
                </div>
                <p>Ambulans</p>
            </div>
        </a>
        <a href="/kebutuhan/plasma" class="col-6 col-md-3 kebutuhan-item">
            <div class="text-center">
                <div class="card border-0 mb-2 shadow">
                    <div class="card-body">
                        <i class="fas fa-plus-square d-block mb-1"></i>
                    </div>
                </div>
                <p>Plasma</p>
            </div>
        </a>
        <a href="/kebutuhan/puskesmas" class="col-6 col-md-3 kebutuhan-item">
            <div class="text-center">
                <div class="card border-0 mb-2 shadow">
                    <div class="card-body">
                        <i class="fas fa-hospital d-block mb-1"></i>
                    </div>
                </div>
                <p>Puskesmas</p>
            </div>
        </a>
        <a href="/kebutuhan/test-swap" class="col-6 col-md-3 kebutuhan-item">
            <div class="text-center">
                <div class="card border-0 mb-2 shadow">
                    <div class="card-body">
                        <i class="fas fa-briefcase-medical d-block mb-1"></i>
                    </div>
                </div>
                <p>Test Swab</p>
            </div>
        </a>
        <a href="/kebutuhan/tempat-vaksin" class="col-6 col-md-3 kebutuhan-item">
            <div class="text-center">
                <div class="card border-0 mb-2 shadow">
                    <div class="card-body">
                        <i class="fas fa-syringe d-block mb-1"></i>
                    </div>
                </div>
                <p>Tempat Vaksin</p>
            </div>
        </a>
        <a href="/kebutuhan/tempat-isolasi" class="col-6 col-md-3 kebutuhan-item">
            <div class="text-center">
                <div class="card border-0 mb-2 shadow">
                    <div class="card-body">
                        <i class="fas fa-clinic-medical d-block mb-1"></i>
                    </div>
                </div>
                <p>Tempat Isolasi</p>
            </div>
        </a>
        <a href="https://www.halodoc.com/tanya-dokter" target="_blank" class="col-6 col-md-3 kebutuhan-item">
            <div class="text-center">
                <div class="card border-0 mb-2 shadow">
                    <div class="card-body">
                        <i class="fas fa-phone-square d-block mb-1"></i>
                    </div>
                </div>
                <p>Kontak Penting</p>
            </div>
        </a>
    </div>
    <div class="row">
        <div class="col-12 col-lg-6 bg-white my-3">
            <div class="card border-0 bg-white shadow-lg p-2 kontak-darurat">
                <div class="row g-0">
                    <div class="col-3 bg-white d-flex align-items-center justify-content-center">
                        <i class="fas fa-virus text-green"></i>
                    </div>
                    <div class="col-8">
                        <div class="card-body bg-white">
                            <p class="card-title text-black fs-3">Informasi COVID-19</p>
                            <p class="card-text text-gray">Ketahui informasi mengenai COVID-19</p>
                            <a href="/kebutuhan/info-covid" class="btn bg-green text-white border-0">Pelajari sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6 my-3 bg-white">
            <div class="card border-0 bg-white shadow-lg p-2 kontak-darurat">
                <div class="row g-0">
                    <div class="col-3 bg-white d-flex align-items-center justify-content-center">
                        <i class="fas fa-address-card text-green"></i>
                    </div>
                    <div class="col-8">
                        <div class="card-body bg-white">
                            <p class="card-title text-black fs-3">Kontak Darurat</p>
                            <p class="card-text text-gray">Situs & kontak penting terkait COVID-19</p>
                            <a href="https://www.halodoc.com/tanya-dokter" target="_blank" class="btn bg-green text-white border-0">Kontak sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- end kategori kebutuhan --}}

{{-- kontribusi  --}}
<section class="kontribusi" id="kontribusi">
    <h2 class="mb-3">Cara Berkontribusi</h2>
    <div class="row">
        <div class="col-12 col-lg-6 mb-3 bg-white">
            <div class="card mb-3 border-0 shadow-lg p-2">
                <div class="row g-0">
                  <div class="col-4 d-flex justify-content-center align-items-center">
                    <img src="/assets/images/kontribusi.png" class="img-fluid" width="80%" alt="Cara Berkontribusi">
                  </div>
                  <div class="col-8">
                    <div class="card-body bg-white">
                        <p class="card-title text-black fs-5">Daftar Donor Darah</p>
                        <p class="card-text text-gray">Berdonor darah plasma konvalesan (hanya diisi oleh calon pendonor).</p>
                        <a href="http://ayodonor.pmi.or.id/about.php" target="_blank" class="btn bg-green text-white border-0">Donor darah sekarang</a>
                    </div>
                  </div>
                </div>
              </div>
        </div>
        <div class="col-12 col-lg-6 mb-3 bg-white">
            <div class="card mb-3 border-0 shadow-lg p-2">
                <div class="row g-0">
                  <div class="col-4 d-flex justify-content-center align-items-center">
                    <img src="/assets/images/relawan.png" class="img-fluid" width="80%" alt="Daftar jadi relawan">
                  </div>
                  <div class="col-8">
                    <div class="card-body bg-white">
                        <p class="card-title text-black fs-5">Daftar Jadi Relawan</p>
                        <p class="card-text text-gray">Gabung jadi relawan untuk mengumpulkan data dan menjawab pertanyaan warga via hotline.</p>
                        <a href="https://sim.deskrelawanpb.bnpb.go.id/daftar-relawan" target="_blank" class="btn bg-green text-white border-0">Jadi relawan sekarang</a>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
    <div class="card mb-3 border-0 shadow-lg bg-green panduan-isoma">
        <div class="row g-0">
            <div class="card-body bg-green py-4 px-5 text-center">
                <h4 class="card-title text-white">Ketahui Informasi Mengenai COVID-19</h4>
                <a href="/kebutuhan/info-covid" class="btn-white rounded-pill">klik disini</a>
            </div>
        </div>
    </div>
</section>
{{-- end kontribusi  --}}


{{-- end of content --}}
@endsection

