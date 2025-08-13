<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
    return view('admin.index');
    }
    public function login(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'name' => 'required|string',
            'password' => 'required',
        ]);

        $credentials = [
            'name' => $request->name,
            'password' => $request->password,
        ];
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); // keamanan sesi

            // $admin = Auth::admin();


            return redirect('/dashboard')->with('success', 'Login berhasil! Selamat Datang');
        }

        return back()->with('error', 'Nomor Handphone atau password salah.');
    }
}
