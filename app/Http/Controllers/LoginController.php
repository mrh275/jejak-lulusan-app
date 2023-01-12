<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function auth(Request $request)
    {
        $loginData = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($loginData)) {
            $request->session()->put('username', $loginData['username']);
            return redirect()->intended('/admin');
        }

        return back()->withErrors(['loginError' => 'Username atau password salah']);
    }

    public function alumni(Request $request)
    {
        $loginData = $request->validate([
            'nisn' => 'required',
            'nis' => 'required'
        ]);

        if (Biodata::where($loginData)->exists()) {
            $request->session()->put([
                'nisn' => $loginData['nisn'],
                'name' => Biodata::where($loginData)->first()->nama
            ]);
            return redirect('/alumni');
        }

        return back()->withErrors(['loginError' => 'Username atau password salah']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
