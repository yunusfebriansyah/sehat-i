<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Need;
use App\Models\RuangBantu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class NeedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.kontribusi', [
            'title' => 'Kontribusi Saya',
            'ruangBantu' => RuangBantu::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->get(),
            'needs' => Need::with(['category'])->where('user_id', Auth::user()->id)->orderBy('id', 'desc')->get(),
            'userRuangBantu' => RuangBantu::where('user_id', '!=', Auth::user()->id)->orderBy('id', 'desc')->get(),
            'userNeeds' => Need::with(['category', 'user'])->where('user_id', '!=', Auth::user()->id)->orderBy('id', 'desc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.need-create', [
            'title' => 'Pengajuan Penyedia',
            'categories' => Category::all()
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
        $validated = $request->validate([
            'name' => 'required|min:10|max:255',
            'category_id' => 'required|exists:categories,slug',
            'address' => 'required|min:10',
            'hp' => 'required|min:12|max:14'
        ]);

        $validated['category_id'] = Category::firstWhere('slug', $request->category_id)->id;
        $validated['user_id'] = Auth::user()->id;

        if( Auth::user()->is_admin ) :
            $validated['is_verified'] = true;
        endif;

        Need::create($validated);

        return redirect('/kontribusi')->with('message', '<div class="alert bg-green text-white alert-dismissible fade show mb-3" role="alert">
        Postingan <strong>berhasil dibuat</strong>.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Need  $need
     * @return \Illuminate\Http\Response
     */
    public function show(Need $need)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Need  $need
     * @return \Illuminate\Http\Response
     */
    public function edit($need)
    {
        $need = Need::firstWhere('slug', $need);

        if (! Gate::allows('my_need', $need)) {
            abort(403);
        }

        return view('pages.need-edit', [
            'title' => 'Ubah Penyedia',
            'categories' => Category::all(),
            'need' => $need
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Need  $need
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $need)
    {
        $need = Need::firstWhere('slug', $need);

        if (! Gate::allows('my_need', $need)) {
            abort(403);
        }

        $validated = $request->validate([
            'name' => 'required|min:10|max:255',
            'category_id' => 'required|exists:categories,slug',
            'address' => 'required|min:10',
            'hp' => 'required|min:12|max:14'
        ]);

        $validated['category_id'] = Category::firstWhere('slug', $request->category_id)->id;
        if( !Auth::user()->is_admin ) :
            $validated['is_verified'] = false;
        endif;

        Need::where('slug', $need->slug)->update($validated);

        return redirect('/kontribusi')->with('message', '<div class="alert bg-green text-white alert-dismissible fade show mb-3" role="alert">
        Postingan <strong>berhasil diubah</strong>.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Need  $need
     * @return \Illuminate\Http\Response
     */
    public function destroy($need)
    {
        $need = Need::firstWhere('slug', $need);

        if (! Gate::allows('my_need', $need) || ! Gate::allows('is_admin') ) {
            abort(403);
        }

        $need->delete();

        return redirect('/kontribusi')->with('message', '<div class="alert bg-green text-white alert-dismissible fade show mb-3" role="alert">
        Pengajuan penyedia <strong>berhasil dihapus</strong>.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>');
    }


    public function verified ( Need $need )
    {
        Need::where('id', $need->id)->update(['is_verified' => true]);

        return redirect('/kontribusi')->with('message', '<div class="alert bg-green text-white alert-dismissible fade show mb-3" role="alert">
        Pengajuan penyedia <strong>berhasil diverifikasi</strong>.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>');
    }


}
