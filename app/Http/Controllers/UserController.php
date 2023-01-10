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
        $data = [
            'username' => ($request->input('username') == Auth::user()->username) ? Auth::user()->username : $request->input('username'),
            'name' => ($request->input('name') == Auth::user()->name) ? Auth::user()->name : $request->input('name'),
            'email' => ($request->input('email') == Auth::user()->email) ? Auth::user()->email : $request->input('email'),
        ];

        if ($request->input('password')) {
            if ($request->input('password') == $request->input('password-confirm')) {
                $data['password'] = Hash::make($request->input('password'));
                try {
                    User::where('username', $data['username'])->update($data);
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
                User::where('username', $data['username'])->update($data);
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

    public function updateRole($id, Request $request)
    {
        $data = [
            'is_admin' => $request->input('role')
        ];

        try {
            User::where('username', $id)->update($data);
            return response()->json([
                'status' => 200,
                'message' => 'Data berhasil diperbaharui'
            ]);
        } catch (Exception $error) {
            return response()->json([
                'status' => $error->getCode(),
                'error' => $error->getMessage()
            ]);
        }
    }
}
