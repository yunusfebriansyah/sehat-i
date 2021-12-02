@extends('main-layout.main-use-navbar')

@section('container')

{{-- start of content --}}
<section class="simpan" id="simpan">

    <h1 class="fs-2">Item Tersimpan</h1>
    <p class="text-gray">Kumpulan informasi mengenai penyedia dan kebutuhan lainnya yang berhasil anda simpan.</p>

    <div class="row my-3 mb-5">
        <div class="col-12 col-md-10 my-3 bg-white">
            <div class="card border-0 bg-white shadow-lg p-2 kontak-darurat">
                <div class="row g-0">
                    <div class="col-3 bg-white d-flex align-items-center justify-content-center">
                        <i class="fas fa-address-card text-green"></i>
                    </div>
                    <div class="col-8">
                        <div class="card-body bg-white">
                            <p class="card-title text-black fs-3">Kontak Darurat</p>
                            <p class="card-text text-gray">Situs & kontak penting terkait COVID-19</p>
                            <a href="/kebutuhan/kontak-darurat" class="btn bg-green text-white border-0">Kontak sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row my-3">

        <div class="col-12 col-lg-6 mb-3">
            <div class="card bg-white border-0 shadow">
                <div class="card-body bg-white">
                    <p class="card-title fs-4 text-green">PT. Oksigen Bersama</p>
                    <span class="verified text-gray">Terverifikasi <i class="fas fa-check-circle text-green ms-2"></i></span>
                    <p class="card-text text-gray">Isi Ulang Oksigen</p>
                    <p class="card-text text-gray"><i class="fas fa-phone me-3"></i> 0812345678911</p>
                    <p class="card-text text-gray"><i class="fas fa-map-marker-alt me-3"></i> Jl. Misalnya jauh disana</p>
                    <a href="#" class="btn bg-green text-white">Cek lagi</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6 mb-3">
            <div class="card bg-white border-0 shadow">
                <div class="card-body bg-white">
                    <p class="card-title fs-4 text-green">Oxy Fit Bandar Lampung</p>
                    <span class="verified text-gray">Terverifikasi <i class="fas fa-check-circle text-green ms-2"></i></span>
                    <p class="card-text text-gray">Isi Ulang Oksigen</p>
                    <p class="card-text text-gray"><i class="fas fa-phone me-3"></i> 0812345678911</p>
                    <p class="card-text text-gray"><i class="fas fa-map-marker-alt me-3"></i> Jl. Misalnya jauh disana</p>
                    <a href="#" class="btn bg-green text-white">Cek lagi</a>
                </div>
            </div>
        </div>

    </div>

    <p class="text-center"><a href="#" class="text-green">Cari informasi lainnya ...</a></p>


</section>



{{-- end of content --}}
@endsection
