{{-- main navbar --}}
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-green">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="/assets/images/logo-white.png" alt="Logo Sehati" height="30">
        </a>
      <div>
        <ul class="navbar-nav ms-auto">
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
      <h5 class="offcanvas-title" id="offcanvasExampleLabel">Menu lainnya</h5>
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

