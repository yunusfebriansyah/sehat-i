@extends('main-layout.main-use-navbar')

@section('container')

{{-- start of content --}}
<section>

    <h1 class="fs-2 text-center">Halaman Login</h1>

    <div class="row justify-content-center mt-4">
        <div class="col-11 col-md-9 col-lg-7">
            @if (session('message'))
                {!! session('message') !!}
            @endif
            @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show mb-3" role="alert">
                <strong>Login gagal!</strong> Pastikan username dan password benar.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <div class="card border-0 shadow">
                <div class="card-body">
                    <form action="/login" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" autofocus placeholder="Isi username" name="username"id="username">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" placeholder="Isi password" name="password"id="password">
                        </div>
                        <div class="mb-3">
                            <button class="btn bg-green text-white border-0 f-semi-bold w-100" type="submit">Login</button>
                        </div>
                    </form>
                    <div class="mb-3">
                        <p class="text-center"><small class="text-muted">belum punya akun? <a href="/register">daftar sekarang</a></small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>



{{-- end of content --}}
@endsection
