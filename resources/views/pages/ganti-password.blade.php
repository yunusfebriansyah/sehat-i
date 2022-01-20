@extends('main-layout.main-use-navbar')

@section('container')

{{-- start of content --}}
<section>

    <h1 class="fs-2">{{ $title }}</h1>
    <div class="row mt-4">
        <div class="col-12 col-md-10 col-lg-8">

            @if ($errors->any())
            <script>Swal.fire('Gagal!','Pastikan semua data benar!','error')</script>
            @endif

            @if (session('message'))
                {!! session('message') !!}
            @endif

            <div class="card border-0 shadow">
                <div class="card-body">
                    <form action="/akun/ganti-password" method="post">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label for="old_password" class="form-label">Password Lama</label>
                            <input type="password" class="form-control" placeholder="Isi password lama" name="old_password" id="old_password">
                        </div>
                        <div class="mb-3">
                            <label for="new_password" class="form-label">Password Baru</label>
                            <input type="password" class="form-control" placeholder="Isi password baru" name="new_password" id="new_password">
                        </div>
                        <div class="mb-3">
                            <label for="confirm_password" class="form-label">Konfirmasi Password Baru</label>
                            <input type="password" class="form-control" placeholder="Konfirmasi password baru" name="confirm_password" id="confirm_password">
                        </div>
                        <div class="mb-3">
                            <button class="btn bg-green text-white border-0 f-semi-bold" type="submit">Ganti</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>



{{-- end of content --}}
@endsection

@section('script')
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="/assets/js/ckeditor.js"></script>
    <script src="/assets/js/script.js"></script>
@endsection
