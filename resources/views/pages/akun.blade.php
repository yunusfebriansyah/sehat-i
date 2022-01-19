@extends('main-layout.main-use-navbar')

@section('container')

{{-- start of content --}}
<section>

    <div class="row justify-content-center mt-4">
        <div class="col-11 col-md-9 col-lg-7">

            @if (session('message'))
                {!! session('message') !!}
            @endif
            
            <div class="card border-0 text-center">
                <div class="card-body">
                    <img src="{{ asset('user-photos/avatar.png') }}" class="img-fluid rounded-start user-photo mb-4" alt="{{ auth()->user()->nama }}">
                    <h5 class="card-title fs-3">{{ auth()->user()->nama }}</h5>
                    <p class="card-text">{{ auth()->user()->username }}</p>
                    <a href="/akun/ganti-password" class="text-bold text-green d-block my-3">Ganti Password</a>
                    <a href="/logout" class="btn bg-green text-white border-0" onclick="return confirm('yakin logout?')"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </div>
            </div>
        </div>
    </div>

</section>



{{-- end of content --}}
@endsection
