@extends('main-layout.main-non-navbar')

@section('container')

{{-- start of content --}}
<section class="tips-isoma" id="tipsIsoma">

    <h1 class="fs-2">Informasi Mengenai COVID-19</h1>
    <p class="text-gray">Kami sudah merangkum informasi mengenai COVID-19 yang perlu untuk anda ketahui.</p>
    <p><a href="#" class="text-green">Cari informasi lainnya ...</a></p>

    {{-- tips item --}}

    <div class="card border-0 bg-white shadow p-2 tips-item mb-3">
        <div class="card-body bg-white">
            <button class="border-0 bg-white text-gray w-100 text-start m-0 p-0" type="button" data-bs-toggle="collapse" data-bs-target="#info1" aria-expanded="false" aria-controls="info1">
                <p class="card-title text-black fs-4 col-10"><i class="fab fa-gratipay text-green me-2"></i>Gejala COVID-19</p>
            </button>
            <div class="collapse mt-3" id="info1">
                <p>Ada 3 jenis gejala covid, antara lain :</p>
                <ol>
                    <li class="mt-3">Gejala Ringan(Isolasi Mandiri)</li>
                    <ul type="disc">
                        <li>Demam > 38 C</li>
                        <li>Batuk</li>
                        <li>Nyeri Tenggorokan</li>
                        <li>Hidung Tersumbat</li>
                        <li>Malaise(kelelahan, nyeri yang menyebar, atau kehilangan minat)</li>
                    </ul>

                    <li class="mt-3">Gejala Sedang(Rawat di RS Darurat)</li>
                    <ul type="disc">
                        <li>Demam > 38 C</li>
                        <li>Sesak Napas</li>
                        <li>Batuk menetap & sakit tenggorokan</li>
                        <li>Pada anak : Batuk & takipneu(Pernapasan yang sangat cepat dan sering kali pendek)</li>
                    </ul>

                    <li class="mt-3">Gejala Berat(Rawat di RS Rujukan)</li>
                    <ul type="disc">
                        <li>Demam >38 C yg menetap</li>
                        <li>Ada Inveksi saluran napas</li>
                        <li>Peningkatan frekuensi napas (30x/menit) hingga sesak napas</li>
                        <li>Batuk</li>
                        <li>Penurunan kesadaran</li>
                    </ul>
                </ol>

                <button class="btn bg-green text-white" type="button" data-bs-toggle="collapse" data-bs-target="#info1" aria-expanded="false" aria-controls="info1"> Sembunyikan</button>
            </div>
        </div>
    </div>

    <div class="card border-0 bg-white shadow p-2 tips-item mb-3">
        <div class="card-body bg-white">
            <button class="border-0 bg-white text-gray w-100 text-start m-0 p-0" type="button" data-bs-toggle="collapse" data-bs-target="#info2" aria-expanded="false" aria-controls="info2">
                <p class="card-title text-black fs-4 col-10"><i class="fab fa-gratipay text-green me-2"></i>Pencegahan Penyebaran COVID-19</p>
            </button>
            <div class="collapse mt-3" id="info2">
                <ol>
                    <li class="mt-3">Droplet: Virus dapat menular melalui udara.<br>Karena itu pasien dianjurkan untuk:</li>
                    <ul type="disc">
                        <li>Tinggal di kamar tidur sendiri dengan kamar mandi  terpisah dengan penghuni lainnya, bila memungkinkan.</li>
                        <li>Alat makan dan minum dipisahkan dengan penghuni lainnya.</li>
                        <li>Tetap menggunakan masker setiap saat, meskipun sendirian di kamar. Masker bisa menggunakan masker kain (dicuci setiap hari) atau masker medis diganti maksimal sehari sekali.</li>
                        <li>Sebisa mungkin tidak bercengkrama, makan, atau berada di ruangan bersama anggota keluarga lainnya</li>
                    </ul>

                    <li class="mt-3">Materi Fekal/Urin: Selain saluran, kandungan virus orang yang positif COVID-19 juga sangat tinggi di saluran buang air besar dan kecil. Karena itu pasien dianjurkan untuk:</li>
                    <ul type="disc">
                        <li>Menyediakan botol semprot cairan desinfektan khusus untuk kamar mandi dan toilet</li>
                        <li>Tidak menyiram toilet terlalu kencang dapat menyebarkan materi fekal keluar. Untuk toilet duduk, turunkan penutup toilet saat menyiram</li>
                        <li>Seusai pasien ODP/PDP/Positif COVID-19 menggunakan kamar mandi, disinfektan secara teliti permukaan-permukaan yang berpotensi terkena materi fekal. Ini berlaku untuk kamar mandi pribadi atau kamar mandi bersama</li>

                    </ul>

                    <li class="mt-3">Fomites: Virus dapat menyebar melalui media. Untuk itu, semua orang yang merawat harus: </li>
                    <ul type="disc">
                        <li>Menggunakan masker dan APD bila berinteraksi dan membantu pasien</li>
                        <li>Cuci tangan dengan sabun setelah berinteraksi dengan pasien, membersihkan kamar mandinya, masuk ke kamar tidurnya, mencuci piringnya, menyentuh permukaan yang mungkin terkena droplet atau materi fekal pasien</li>
                        <li>Menyediakan kantong plastik atau keranjang khusus untuk pakaian-pakaiannya</li>
                        <li>Memisahkan peralatan makan dan minumnya. Ingat, jangan makan bersama atau di meja yang sama. Sebaiknya pasien makan di dalam kamarnya sendiri</li>
                        <li>Cuci pakaian dan peralatan makan-minum pasien terpisah dari orang lain di rumah. Gunakan air panas atau disinfektan bila memungkinkan.</li>
                        <li>Bila Anda menerima paket atau kiriman, ikuti panduan ini untuk mencegah kontak dengan pengirim paket</li>
                        <li>Disinfektan juga permukaan yang setiap hari disentuh pasien atau orang luar seperti pegangan pintu, lemari, bel, remote, telepon, kotak pos, dan permukaan meja</li>

                    </ul>
                </ol>

                <button class="btn bg-green text-white" type="button" data-bs-toggle="collapse" data-bs-target="#info2" aria-expanded="false" aria-controls="info2"> Sembunyikan</button>
            </div>
        </div>
    </div>

    <div class="card border-0 bg-white shadow p-2 tips-item mb-3">
        <div class="card-body bg-white">
            <button class="border-0 bg-white text-gray w-100 text-start m-0 p-0" type="button" data-bs-toggle="collapse" data-bs-target="#info3" aria-expanded="false" aria-controls="info3">
                <p class="card-title text-black fs-4 col-10"><i class="fab fa-gratipay text-green me-2"></i>Persiapan Sebelum Isolasi</p>
            </button>
            <div class="collapse mt-3" id="info3">
                <p>Sebelum mulai isolasi, sediakan beberapa obat-obatan bebas sebagai berikut:</p>
                <ul type="disc">
                    <li>Paracetamol untuk demam dan sakit kepala</li>
                    <li>Pereda batuk (Guaifenesin, Dextromethorphan)</li>
                    <li>Pengatur lendir (Mucolytic/Expectorant)</li>
                    <li>Antihistamine (untuk hidung berlendir dan sinus) untuk mencegah post-nasal drip dan menghambat infeksi saluran pernapasan dalam</li>
                    <li>Obat kumur antiseptik untuk nyeri tenggorokan</li>
                    <li>Khusus untuk penderita asma dan alergi, siapkan obat-obatan serta inhaler standar. Konsultasikan dengan dokter Anda apakah anda perlu mengkonsumsi steroid oral atau inhaler</li>
                    <li>Begitu juga untuk pengidap komorbiditas lain seperti diabetes, kardiovaskuler, dan darah tinggi, mereka harus tetap dalam pengobatannya kecuali disarankan sebaliknya oleh dokter spesialis yang menanganinya</li>
                </ul>
                <p><strong>TIDAK DISARANKAN mengkonsumsi obat keras bila tidak disertai resep dokter.</strong></p>

                <button class="btn bg-green text-white" type="button" data-bs-toggle="collapse" data-bs-target="#info3" aria-expanded="false" aria-controls="info3"> Sembunyikan</button>
            </div>
        </div>
    </div>

    <div class="card border-0 bg-white shadow p-2 tips-item mb-3">
        <div class="card-body bg-white">
            <button class="border-0 bg-white text-gray w-100 text-start m-0 p-0" type="button" data-bs-toggle="collapse" data-bs-target="#info4" aria-expanded="false" aria-controls="info4">
                <p class="card-title text-black fs-4 col-10"><i class="fab fa-gratipay text-green me-2"></i>Mamantau Gejala Harian</p>
            </button>
            <div class="collapse mt-3" id="info4">
                <p>Berikut adalah hal-hal yang perlu diperhatikan sehari-hari:</p>
                <ul type="disc">
                    <li>Cek suhu tubuh, serta bila memungkinkan, tingkat oksigen dalam darah, tekanan darah, dan keadaan Anda. Catat dalam buku harian gejala</li>
                    <li>Buka jendela rumah setiap hari agar sirkulasi udara baik dan sinar matahari masuk. Sinar matahari sangat diperlukan untuk proses vitamin D di dalam tubuh</li>
                    <li>Berolahragalah bila memungkinkan terutama pada pagi hari. Olahraga membantu membangun daya tahan tubuh dan menjaga kesehatan mental. Boleh lakukan olahraga dengan intensitas rendah dan pernapasan dalam seperti yoga</li>
                    <li>Minum air yang cukup dan penuhi kebutuhan elektrolit, Vitamin B1, C, D, E, Zinc, Magnesium melalui makanan atau suplemen. Jangan sampai dehidrasi. Air merupakan mukolitik natural dan membantu menjaga agar ginjal tidak bekerja terlampau keras.</li>
                </ul>

                <button class="btn bg-green text-white" type="button" data-bs-toggle="collapse" data-bs-target="#info4" aria-expanded="false" aria-controls="info4"> Sembunyikan</button>
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
