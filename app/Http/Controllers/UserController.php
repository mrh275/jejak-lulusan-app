<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function updateAccount(Request $request)
    {
        if ($request->input('username') == Auth::user()->username) {
            $rules = [
                'username' => 'required|min:8',
                'password' => 'min:8|alpha_num',
                'name' => 'required|min:3',
                'email' => 'required|email'
            ];
            $errorMessage = [
                'username.required' => 'Username tidak boleh kosong',
                'name.required' => 'Nama tidak boleh kosong',
                'email.required' => 'Email tidak boleh kosong',
                'username.min' => 'Minimal wajib 8 karakter',
                'password.min' => 'Minimal wajib 8 karakter',
                'name.min' => 'Minimal wajib 3 karakter',
                'password.alpha_num' => 'Kata sandi harus gabungan huruf dan angka',
                'email.email' => 'Harap masukan email yang valid'
            ];
        } else {
            $rules = [
                'username' => 'required|min:8|unique:users',
                'password' => 'min:8|alpha_num',
                'name' => 'required|min:3',
                'email' => 'required|email'
            ];
            $errorMessage = [
                'username.required' => 'Username tidak boleh kosong',
                'name.required' => 'Nama tidak boleh kosong',
                'email.required' => 'Email tidak boleh kosong',
                'username.min' => 'Minimal wajib 8 karakter',
                'password.min' => 'Minimal wajib 8 karakter',
                'name.min' => 'Minimal wajib 3 karakter',
                'username.unique' => 'Username sudah digunakan',
                'password.alpha_num' => 'Kata sandi harus gabungan huruf dan angka',
                'email.email' => 'Harap masukan email yang valid'
            ];
        }


        $credentials = $request->validate($rules, $errorMessage);
        if ($request->input('password') != null) {
            if ($credentials['password'] == $request->input('password-confirm')) {
                try {
                    User::where('username', $credentials['username'])->update($credentials);
                    return response()->json([
                        'success' => 'Akun berhasil diperbaharui!'
                    ]);
                } catch (Exception $error) {
                    return response()->json([
                        'errorMessage' => $error->getMessage()
                    ]);
                }
            }
        } else {
            try {
                unset($credentials['password']);
                User::where('username', $credentials['username'])->update($credentials);
                return response()->json([
                    'success' => 'Akun berhasil diperbaharui!'
                ]);
            } catch (Exception $error) {
                return response()->json([
                    'errorMessage' => $error->getMessage()
                ]);
            }
        }
    }
}
