<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\RuangBantu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;


class RuangBantuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.ruang-bantu', [
            'title' => 'Ruang Bantu',
            'posts' => RuangBantu::where('is_verified', true)->orderBy('id', 'desc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('auth')) {
            return redirect('/login');
        }

        return view('pages.ruang-bantu-create', [
            'title' => 'Tambah Postingan Ruang Bantu'
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (! Gate::allows('auth')) {
            return redirect('/login');
        }

        $validated = $request->validate([
            'title' => 'required|min:10|max:255',
            'description' => 'required|min:10|max:255',
            'photo' => 'required|image|file|max:1024'
        ]);

        $validated['photo'] = $request->file('photo')->store('forum-photos');
        $validated['user_id'] = auth()->user()->id;

        if( Auth::user()->is_admin ) :
            $validated['is_verified'] = true;
        endif;

        RuangBantu::create($validated);

        return redirect('/kontribusi')->with('message', '<div class="alert bg-green text-white alert-dismissible fade show mb-3" role="alert">
        Postingan <strong>berhasil dibuat</strong>.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RuangBantu  $ruangBantu
     * @return \Illuminate\Http\Response
     */
    public function show(RuangBantu $ruangBantu)
    {
        return view('pages.ruang-bantu-show', [
            'title' => 'Ruang bantu ' . $ruangBantu->title,
            'post' => $ruangBantu->load(['user', 'comment']),
            'comments' => Comment::with(['user'])->where('ruang_bantu_id', $ruangBantu->id)->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RuangBantu  $ruangBantu
     * @return \Illuminate\Http\Response
     */
    public function edit(RuangBantu $ruangBantu)
    {
        if (! Gate::allows('my_content', $ruangBantu)) {
            abort(403);
        }

        return view('pages.ruang-bantu-edit', [
           'title' => 'Ubah Postingan',
           'post' => $ruangBantu
        ]);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RuangBantu  $ruangBantu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RuangBantu $ruangBantu)
    {
        if (! Gate::allows('my_content', $ruangBantu)) {
            abort(403);
        }

        $validated = $request->validate([
            'title' => 'required|min:10|max:255',
            'description' => 'required|min:10|max:255',
            'photo' => 'image|file|max:1024'
        ]);

        if( $request->file('photo') != null ) :
            Storage::delete($ruangBantu->image);
            $validated['photo'] = $request->file('photo')->store('forum-photos');
        else :
            $validated['photo'] = $ruangBantu->photo;
        endif;

        if( !Auth::user()->is_admin ) :
            $validated['is_verified'] = false;
        endif;

        RuangBantu::where('id', $ruangBantu->id)->update($validated);

        return redirect('/kontribusi')->with('message', '<div class="alert bg-green text-white alert-dismissible fade show mb-3" role="alert">
        Postingan <strong>berhasil diubah</strong>.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RuangBantu  $ruangBantu
     * @return \Illuminate\Http\Response
     */
    public function destroy(RuangBantu $ruangBantu)
    {
        if (! Gate::allows('my_content', $ruangBantu) || ! Gate::allows('is_admin') ) {
            abort(403);
        }

        Storage::delete($ruangBantu->photo);

        $ruangBantu->delete();

        return redirect('/kontribusi')->with('message', '<div class="alert bg-green text-white alert-dismissible fade show mb-3" role="alert">
        Postingan <strong>Berhasil dihapus</strong>.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>');

    }

    public function comment(RuangBantu $ruangBantu, Request $request)
    {
        if (! Gate::allows('auth')) {
            return redirect('/login');
        }

        $validated = $request->validate([
            'comment' => 'required|max:255'
        ]);

        $validated['user_id'] = auth()->user()->id;
        $validated['ruang_bantu_id'] = $ruangBantu->id;

        Comment::create($validated);

        return redirect("/ruang-bantu/$ruangBantu->slug")->with('message', '<div class="alert bg-green text-white alert-dismissible fade show mb-3" role="alert">
        Komentar <strong>berhasil dikirim</strong>.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>');
    }

    public function verified ( RuangBantu $ruangBantu )
    {
        RuangBantu::where('id', $ruangBantu->id)->update(['is_verified' => true]);

        return redirect('/kontribusi')->with('message', '<div class="alert bg-green text-white alert-dismissible fade show mb-3" role="alert">
        Postingan ruang bantu <strong>berhasil diverifikasi</strong>.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>');
    }






}
