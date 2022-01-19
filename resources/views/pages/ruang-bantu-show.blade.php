@extends('main-layout.main-use-navbar')

@section('container')

{{-- start of content --}}
<section class="ruang-bantu" id="ruangBantu">

    <div class="row">

        <div class="col-12 col-lg-4 mb-3">

            <div class="card border-0">
                <img src="{{ asset($post->photo) }}" class="card-img-top" alt="{{ $post->title }}">
                <div class="card-body px-0">
                    @can('my_content', $post)
                    <a class="btn btn-sm btn-success px-4" href="/ruang-bantu/{{ $post->slug }}/edit">Ubah</a>
                    <form action="/ruang-bantu/{{ $post->slug }}" method="post" class="d-inline-block">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-sm btn-danger px-4" onclick="return confirm('yakin dihapus?')">Hapus</button>
                    </form>
                    @elsecan('is_admin')
                    <form action="/ruang-bantu/{{ $post->slug }}" method="post" class="d-inline-block">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-sm btn-danger px-4" onclick="return confirm('yakin dihapus?')">Hapus</button>
                    </form>
                    @endcan
                  <h1 class="card-title fs-4 mb-1 mt-2">{{ $post->title }}</h1>
                  <small class="text-muted">{{ $post->created_at->diffForHumans() }}</small>
                  <p class="card-text my-1">Pengaju : {{ $post->user->nama }}</p>
                  {!! $post->description !!}
                </div>
            </div>

        </div>

        <div class="col-12 col-lg-8 mb-3 comments">
            <h5 class="mb-3">Komentar</h5>

            @if (session('message'))
                {!! session('message') !!}
            @endif


            @if ( count($comments) > 0 )

            @foreach ($comments as $comment)
            <div class="card border-0 border-bottom mb-3">
                <div class="card-body py-1">
                    <div class="row">
                        <div class="col-2">
                            <img src="{{ asset('user-photos/avatar.png') }}" height="50">
                        </div>
                        <div class="col-10">
                            <p class="card-text f-semi-bold mb-0">{{ $comment->user->nama }}</p>
                            <small class="text-muted m-0">{{ $comment->created_at->diffForHumans() }}</small>
                            <p class="card-text my-1">{{ $comment->comment }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            @else
            <p class="text-muted">Komentar belum ada</p>
            @endif

            @auth
            <div class="col-12 my-4">
                <form action="/ruang-bantu/{{ $post->slug }}/comment" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Silahkan berkomentar" aria-label="Komentar" name="comment" aria-describedby="button-addon2">
                        <button class="btn bg-green text-white" type="submit" id="button-addon2"><i class="fas fa-paper-plane"></i></button>
                      </div>
                </form>
            </div>
            @endauth


        </div>

    </div>


</section>



{{-- end of content --}}
@endsection
