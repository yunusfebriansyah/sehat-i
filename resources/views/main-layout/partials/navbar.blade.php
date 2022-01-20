{{-- main navbar --}}
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-green">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="/assets/images/logo-white.png" alt="Logo Sehati" height="30">
        </a>
      <div>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item ms-lg-3 d-none d-lg-inline-block">
            <a class="nav-link text-end {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
          </li>
          <li class="nav-item ms-lg-3 d-none d-lg-inline-block">
            <a class="nav-link text-end {{ Request::is('ruang-bantu*') ? 'active' : '' }}" href="/ruang-bantu">Ruang Bantu</a>
          </li>
          <li class="nav-item ms-lg-3 d-none d-lg-inline-block">
            <a class="nav-link text-end {{ Request::is('kontribusi*') ? 'active' : '' }}" href="/kontribusi">Kontribusi</a>
          </li>
          <li class="nav-item ms-lg-3 d-none d-lg-inline-block">
            <a class="nav-link text-end {{ Request::is('simpan') ? 'active' : '' }}" href="/simpan">Simpan</a>
          </li>
          @guest
          <li class="nav-item ms-lg-3 d-none d-lg-inline-block">
              <a class="nav-link text-end {{ Request::is('login') ? 'active' : '' }}" href="/login"><i class="fas fa-sign-in-alt"></i> Login</a>
            </li>
            @else
            <li class="nav-item ms-lg-3 d-none d-lg-inline-block">
                <div class="dropdown">
                    <a class="nav-link text-end dropdown-toggle {{ Request::is('akun') ? 'active' : '' }}" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ auth()->user()->nama }}
                    </a>
                    <ul class="dropdown-menu py-0 rounded overflow-hidden" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item py-2" href="/akun"><i class="fas fa-user-circle"></i> Profil</a></li>
                        <li><a class="dropdown-item py-2" href="/logout"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                    </ul>
                </div>
            </li>
            @endguest
        </ul>
      </div>
    </div>
  </nav>

  {{-- end main navbar --}}

{{-- small navigation --}}
<div class="row small-navbar fixed-bottom bg-white justify-content-center d-lg-none">
    <div class="col text-center m-0 p-0">
        <a class="small-link mx-2 d-inline-block {{ Request::is('/') ? 'active' : '' }}" href="/"><i class="fas fa-home d-block mb-1"></i>Home</a>
    </div>
    <div class="col text-center m-0 p-0">
        <a class="small-link mx-2 d-inline-block {{ Request::is('ruang-bantu*') ? 'active' : '' }}" href="/ruang-bantu"><i class="fas fa-heart d-block mb-1"></i>Ruang Bantu</a>
    </div>
    <div class="col text-center m-0 p-0">
        <a class="small-link mx-2 d-inline-block {{ Request::is('kontribusi*') ? 'active' : '' }}" href="/kontribusi"><i class="fas fa-hand-holding-medical d-block mb-1"></i>Kontribusi</a>
    </div>
    <div class="col text-center m-0 p-0">
        <a class="small-link mx-2 d-inline-block {{ Request::is('simpan') ? 'active' : '' }}" href="/simpan"><i class="fas fa-bookmark d-block mb-1"></i>Simpan</a>
    </div>
    @auth
    <div class="col text-center m-0 p-0">
        <a class="small-link mx-2 d-inline-block {{ Request::is('akun') ? 'active' : '' }}" href="/akun"><i class="fas fa-user-circle d-block mb-1"></i>Akun</a>
    </div>
    @else
    <div class="col text-center m-0 p-0">
        <a class="small-link mx-2 d-inline-block {{ Request::is('login') ? 'active' : '' }}" href="/login"><i class="fas fa-sign-in-alt d-block mb-1"></i>Login</a>
    </div>
    @endauth
</div>
{{-- end small navigation --}}
