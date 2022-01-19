@extends('main-layout.main-use-navbar')

@section('container')

{{-- start of content --}}
<section>

    <h1 class="fs-2">{{ $title }}</h1>
    <div class="row mt-4">
        <div class="col-12 col-md-10 col-lg-8">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <form action="/kontribusi" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Penyedia</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Isi nama penyedia" name="name" id="name" value="{{ old('name')}}">
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="category_id" class="form-label">Kategori Kebutuhan</label>
                            <select class="form-select @error('category_id') is-invalid @enderror" placeholder="Isi kategori kebutuhan" name="category_id" id="category_id">
                                @foreach ($categories as $category)
                                <option value="{{ $category->slug }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Alamat Penyedia</label>
                            <textarea class="form-control @error('address') is-invalid @enderror" placeholder="Isi alamat penyedia" name="address"  rows="5">{{ old('address')}}</textarea>
                            @error('address')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="hp" class="form-label">Nomor Kontak Penyedia</label>
                            <input type="text" class="form-control @error('hp') is-invalid @enderror" placeholder="Isi nomor kontak penyedia" name="hp" id="hp" value="{{ old('hp')}}">
                            @error('hp')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <button class="btn bg-green text-white border-0 f-semi-bold" type="submit">Ajukan</button>
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
