<?php

namespace App\Http\Controllers;

use App\Models\Need;
use App\Models\Save;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SaveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.simpan', [
            'title' => 'Item Tersimpan',
            'ambulans' => Save::with(['need'])->where('user_id', Auth::user()->id)->ambulans()->orderBy('id', 'desc')->get(),
            'oksigens' => Save::with(['need'])->where('user_id', Auth::user()->id)->oksigen()->orderBy('id', 'desc')->get(),
            'plasmas' => Save::with(['need'])->where('user_id', Auth::user()->id)->plasma()->orderBy('id', 'desc')->get(),
            'puskesmass' => Save::with(['need'])->where('user_id', Auth::user()->id)->puskesmas()->orderBy('id', 'desc')->get(),
            'testSwaps' => Save::with(['need'])->where('user_id', Auth::user()->id)->testSwap()->orderBy('id', 'desc')->get(),
            'tempatVaksins' => Save::with(['need'])->where('user_id', Auth::user()->id)->tempatVaksin()->orderBy('id', 'desc')->get(),
            'tempatIsolasis' => Save::with(['need'])->where('user_id', Auth::user()->id)->tempatIsolasi()->orderBy('id', 'desc')->get(),
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Need $need)
    {

        if( count( Save::where('need_id', $need->id)->where('user_id', Auth::user()->id)->get() ) > 0 ) :
            return back()->with('notif', '<div class="alert bg-green text-white" role="alert">
                Item <strong>sudah anda disimpan!</strong>
            </div>');
        else:
            Save::create([
                'user_id' => Auth::user()->id,
                'need_id' => $need->id
            ]);

            return back()->with('notif', '<div class="alert bg-green text-white" role="alert">
                Item <strong>berhasil disimpan!</strong>
            </div>');
        endif;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Save  $save
     * @return \Illuminate\Http\Response
     */
    public function destroy(Save $save)
    {
        Save::destroy($save->id);

        return back()->with('notif', '<div class="alert bg-green text-white" role="alert">
            Item <strong>berhasil dihapus!</strong>
        </div>');
    }
}
