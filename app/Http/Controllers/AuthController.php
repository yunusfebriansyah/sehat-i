<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return redirect('/login')->with('message', '<div class="alert bg-green text-white alert-dismissible fade show mb-3" role="alert">
        <strong>Berhasil registrasi</strong>. Silahkan login.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>');
    }

    public function login(Request $request)
    {

        $credentials = $request->validate([
            'username' => 'required|min:3|max:255',
            'password' => 'required|min:8|max:255'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('/');
        }

        return back()->with('message', '<div class="alert alert-danger alert-dismissible fade show mb-3" role="alert">
        <strong>Login gagal!</strong> Pastikan username dan password benar.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');

    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }




}
