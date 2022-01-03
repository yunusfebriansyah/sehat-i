@extends('main-layout.main-use-navbar')

@section('container')

{{-- start of content --}}
<section>

    <h1 class="fs-2">{{ $title }}</h1>
    <div class="row mt-4">
        <div class="col-12 col-md-10 col-lg-8">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <form action="/ruang-bantu" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Judul</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Isi judul" name="title" id="title" value="{{ old('title')}}">
                            @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Deskripsi</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" placeholder="Isi deskripsi" name="description"id="editor" value="{{ old('description')}}"></textarea>
                            @error('description')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="photo" class="form-label">Foto</label>
                            <img src="" id="imagePreview" class="rounded d-none my-2" height="100">
                            <input type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" id="photo">
                            @error('photo')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <button class="btn bg-green text-white border-0 f-semi-bold w-100" type="submit">Buat</button>
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
