@extends('main-layout.main-non-navbar')

@section('container')

{{-- start of content --}}
<section class="tips-isoma" id="tipsIsoma">

    <h1 class="fs-2">Panduam Isoma</h1>
    <p class="text-gray">Kami sudah merangkum panduan isolasi mandiri yang baik untuk anda.</p>
    <p><a href="#" class="text-green">Cari informasi lainnya ...</a></p>

    {{-- tips item --}}

    <div class="card border-0 bg-white shadow p-2 tips-item mb-3">
        <div class="card-body bg-white">
            <button class="border-0 bg-white text-gray w-100 text-start m-0 p-0" type="button" data-bs-toggle="collapse" data-bs-target="#hari1" aria-expanded="false" aria-controls="hari1">
                <p class="card-title text-black fs-4 col-10"><i class="fab fa-gratipay text-green me-2"></i>Hari Pertama</p>
            </button>
            <div class="collapse mt-3" id="hari1">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo in debitis veritatis repellendus minus laborum quod labore aperiam eveniet ab mollitia numquam sint, nisi id voluptatibus blanditiis beatae consectetur. Vitae aut molestiae totam, sint eum ducimus beatae. Odio nihil voluptatibus officia, commodi iste laborum dolores illo alias et voluptates, neque nulla! Rem nam officia quasi rerum ratione, soluta eum libero vel, deserunt magnam porro eos quos veritatis assumenda. Nemo adipisci sed debitis accusantium commodi, aspernatur deserunt tempora ad dignissimos praesentium corporis amet non quae eligendi mollitia in. Modi voluptates deserunt odio. Provident non dolorum incidunt, laudantium repellendus distinctio dolor deserunt!</p>
                <button class="btn bg-green text-white" type="button" data-bs-toggle="collapse" data-bs-target="#hari1" aria-expanded="false" aria-controls="hari1"> Sembunyikan</button>
            </div>
        </div>
    </div>

    <div class="card border-0 bg-white shadow p-2 tips-item mb-3">
        <div class="card-body bg-white">
            <button class="border-0 bg-white text-gray w-100 text-start m-0 p-0" type="button" data-bs-toggle="collapse" data-bs-target="#hari2" aria-expanded="false" aria-controls="hari2">
                <p class="card-title text-black fs-4 col-10"><i class="fab fa-gratipay text-green me-2"></i>Hari Kedua</p>
            </button>
            <div class="collapse mt-3" id="hari2">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo in debitis veritatis repellendus minus laborum quod labore aperiam eveniet ab mollitia numquam sint, nisi id voluptatibus blanditiis beatae consectetur. Vitae aut molestiae totam, sint eum ducimus beatae. Odio nihil voluptatibus officia, commodi iste laborum dolores illo alias et voluptates, neque nulla! Rem nam officia quasi rerum ratione, soluta eum libero vel, deserunt magnam porro eos quos veritatis assumenda. Nemo adipisci sed debitis accusantium commodi, aspernatur deserunt tempora ad dignissimos praesentium corporis amet non quae eligendi mollitia in. Modi voluptates deserunt odio. Provident non dolorum incidunt, laudantium repellendus distinctio dolor deserunt!</p>
                <button class="btn bg-green text-white" type="button" data-bs-toggle="collapse" data-bs-target="#hari2" aria-expanded="false" aria-controls="hari2"> Sembunyikan</button>
            </div>
        </div>
    </div>

    <div class="card border-0 bg-white shadow p-2 tips-item mb-3">
        <div class="card-body bg-white">
            <button class="border-0 bg-white text-gray w-100 text-start m-0 p-0" type="button" data-bs-toggle="collapse" data-bs-target="#hari3" aria-expanded="false" aria-controls="hari3">
                <p class="card-title text-black fs-4 col-10"><i class="fab fa-gratipay text-green me-2"></i>Hari Ketiga</p>
            </button>
            <div class="collapse mt-3" id="hari3">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo in debitis veritatis repellendus minus laborum quod labore aperiam eveniet ab mollitia numquam sint, nisi id voluptatibus blanditiis beatae consectetur. Vitae aut molestiae totam, sint eum ducimus beatae. Odio nihil voluptatibus officia, commodi iste laborum dolores illo alias et voluptates, neque nulla! Rem nam officia quasi rerum ratione, soluta eum libero vel, deserunt magnam porro eos quos veritatis assumenda. Nemo adipisci sed debitis accusantium commodi, aspernatur deserunt tempora ad dignissimos praesentium corporis amet non quae eligendi mollitia in. Modi voluptates deserunt odio. Provident non dolorum incidunt, laudantium repellendus distinctio dolor deserunt!</p>
                <button class="btn bg-green text-white" type="button" data-bs-toggle="collapse" data-bs-target="#hari3" aria-expanded="false" aria-controls="hari3"> Sembunyikan</button>
            </div>
        </div>
    </div>

    {{-- end tips item --}}

    <div class="row mt-5">
        <div class="col-12 col-lg-6 my-3 bg-white">
            <div class="card border-0 bg-white shadow-lg p-2 kontak-darurat">
                <div class="row g-0">
                    <div class="col-3 bg-white d-flex align-items-center justify-content-center">
                        <i class="fas fa-user-md text-green"></i>
                    </div>
                    <div class="col-8">
                        <div class="card-body bg-white">
                            <p class="card-title text-black fs-3">Konsultasi Ahli</p>
                            <p class="card-text text-gray">Jika ada pertanyaan kendala, segera konsultasi langsung ke ahlinya.</p>
                            <a href="https://www.halodoc.com/tanya-dokter" target="_blank" class="btn bg-green text-white border-0">Konsultasi sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>



{{-- end of content --}}
@endsection
