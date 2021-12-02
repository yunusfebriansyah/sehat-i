{{-- main navbar --}}
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-green">
    <div class="container">
        <a class="navbar-brand" href="/home/">
            <img src="/assets/images/logo.png" alt="" srcset="">
        </a>
      <div>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item ms-lg-3 d-none d-lg-inline-block">
            <a class="nav-link text-end {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/home/">Home</a>
          </li>
          <li class="nav-item ms-lg-3 d-none d-lg-inline-block">
            <a class="nav-link text-end {{ Request::is('/home/ruang-bantu') ? 'active' : '' }}" aria-current="page" href="/home/ruang-bantu">Ruang Bantu</a>
          </li>
          <li class="nav-item ms-lg-3 d-none d-lg-inline-block">
            <a class="nav-link text-end {{ Request::is('/home/simpan') ? 'active' : '' }}" aria-current="page" href="/home/simpan">Simpan</a>
          </li>
          <li class="nav-item ms-lg-3 d-none d-lg-inline-block">
            <a class="nav-link text-end {{ Request::is('/home/akun') }}" aria-current="page" href="/home/akun">Akun</a>
          </li>
            <li class="nav-item ms-lg-3">
                <button class="btn bg-green" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                    <i class="fas fa-bars text-white"></i>
                </button>
            </li>
        </ul>
      </div>
    </div>
  </nav>

  {{-- end main navbar --}}

  {{-- off canvas content --}}
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
      <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasExampleLabel">Lainnya</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link" href="#">Daftar Kontak Faskes per Provinsi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Situs/Kontak Penting Terkait Covid-19</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Rumah Sakit</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Ambulans</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Info Oksigen</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Donor Plasma</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Isolasi Mandiri</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Edukasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Donasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Tentang Kami</a>
            </li>
          </ul>
    </div>
</div>
{{-- end off canvas content --}}

{{-- small navigation --}}
<div class="row small-navbar fixed-bottom bg-white justify-content-center d-lg-none">
    <div class="col text-center m-0 p-0 {{ Request::is('/') ? 'active' : '' }}">
        <a class="small-link mx-3 d-inline-block" aria-current="page" href="#"><i class="fas fa-home d-block mb-1 fs-3"></i>Home</a>
    </div>
    <div class="col text-center m-0 p-0">
        <a class="small-link mx-3 d-inline-block {{ Request::is('/home/ruang-bantu') ? 'active' : '' }}" aria-current="page" href="/home/ruang-bantu"><i class="fas fa-heart d-block mb-1 fs-3"></i>Ruang Bantu</a>
    </div>
    <div class="col text-center m-0 p-0">
        <a class="small-link mx-3 d-inline-block {{ Request::is('/home/simpan') ? 'active' : '' }}" aria-current="page" href="/home/simpan"><i class="fas fa-bookmark d-block mb-1 fs-3"></i>Simpan</a>
    </div>
    <div class="col text-center m-0 p-0">
        <a class="small-link mx-3 d-inline-block {{ Request::is('/home/akun') }}" aria-current="page" href="/home/akun"><i class="fas fa-user-circle d-block mb-1 fs-3"></i>Akun</a>
    </div>
</div>
{{-- end small navigation --}}
