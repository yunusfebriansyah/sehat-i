@extends('main-layout.main-use-navbar')

@section('container')

{{-- start of content --}}
<section>

    <h1 class="fs-2 text-center">Halaman Registrasi</h1>

    <div class="row justify-content-center mt-4">
        <div class="col-11 col-md-9 col-lg-7">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <form action="/register" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" autofocus placeholder="Isi nama" name="nama"id="nama" value="{{ old('nama')}}">
                            @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control @error('username') is-invalid @enderror" placeholder="Isi username" name="username"id="username" value="{{ old('username')}}">
                            @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Isi password" name="password"id="password">
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="confirm_password" class="form-label">Password</label>
                            <input type="password" class="form-control @error('confirm_password') is-invalid @enderror" placeholder="Isi konfirmasi password" name="confirm_password"id="confirm_password">
                            @error('confirm_password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <button class="btn bg-green text-white border-0 f-semi-bold w-100" type="submit">Daftar</button>
                        </div>
                    </form>
                    <div class="mb-3">
                        <p class="text-center"><small class="text-muted">sudah punya akun? <a href="/login">login sekarang</a></small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>



{{-- end of content --}}
@endsection
