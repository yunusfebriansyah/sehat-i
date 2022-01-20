<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function register(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|min:3|max:255',
            'username' => 'required|min:3|max:255|unique:users,username',
            'password' => 'required|min:8|max:255',
            'confirm_password' => 'same:password'
        ]);
        unset($validated['confirm_password']);
        $validated['password'] = bcrypt($validated['password']);
        User::create($validated);
        return redirect('/login')->with('message', "<script>Swal.fire('Berhasil!','Registrasi berhasil. Silahkan login.','success')</script>");
    }

    public function login(Request $request)
    {

        $credentials = $request->validate([
            'username' => 'required|min:3|max:255',
            'password' => 'required|min:8|max:255'
        ]);

        if (Auth::attempt($credentials)) :
            $request->session()->regenerate();
            $user = User::firstWhere('username', $credentials['username'])->nama;
            return redirect('/')->with('message', "<script>Swal.fire('Hai ". $user ."!','Login berhasil.','success')</script>");
        endif;

        return back()->with('message', "<script>Swal.fire('Login Gagal!','Pastikan username dan password benar!','error')</script>");

    }

    public function logout(Request $request)
    {
        $user = User::firstWhere('id', Auth::user()->id)->nama;

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/')->with('message', "<script>Swal.fire('Logout Berhasil!','Sampai jumpa lagi " . $user ."','success')</script>");
    }

    public function gantiPassword()
    {
        return view('pages.ganti-password', [
            'title' => "Ganti Password " . auth()->user()->nama
        ]);
    }

    public function validatePassword( Request $request )
    {
        $validated = $request->validate([
            'old_password' => 'required|min:8|max:255',
            'new_password' => 'required|min:8|max:255',
            'confirm_password' => 'same:new_password'
        ]);

        // The passwords not match...
        if( $validated['old_password'] === $validated['new_password'] ) :
            return redirect('/akun/ganti-password')->with('message', "<script>Swal.fire('Gagal!','Password baru harus beda dengan yang lama.','warning')</script>");
        else :
            if (!Hash::check($validated['old_password'], User::firstWhere('id', Auth::user()->id)->password )) :
                    return redirect('/akun/ganti-password')->with('message', "<script>Swal.fire('Gagal!','Pastikan semua data benar!','error')</script>");
            else:
                User::where('id', Auth::user()->id)->update(['password' => bcrypt($validated['new_password'])]);
                return redirect('/akun')->with('message', "<script>Swal.fire('Sukses!','Password berhasil diubah.','success')</script>");
            endif;
        endif;

    }




}
