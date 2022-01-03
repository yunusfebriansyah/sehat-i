@extends('main-layout.main-use-navbar')

@section('container')

{{-- start of content --}}
<section>

    <div class="row justify-content-center mt-4">
        <div class="col-11 col-md-9 col-lg-7">
            <div class="card border-0 text-center">
                <div class="card-body">
                    <img src="{{ asset('user-photos/avatar.png') }}" class="img-fluid rounded-start user-photo mb-4" alt="{{ auth()->user()->nama }}">
                    <h5 class="card-title fs-3">{{ auth()->user()->nama }}</h5>
                    <p class="card-text">{{ auth()->user()->username }}</p>
                    <a href="/logout" class="btn bg-green text-white border-0"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </div>
            </div>
        </div>
    </div>

</section>



{{-- end of content --}}
@endsection
