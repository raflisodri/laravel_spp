<?php

namespace App\Http\Controllers;
use Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        if (Auth::attempt($request->only('username', 'password'))){
            return redirect('/dashboard')->with('succes', 'Berhasil');
        }else{
            return redirect('/login')->with('error', 'Maaf Username dan Password yang Anda Masukan Salah!');
        }
        
    }

    public function logout()
    {
        Auth::logout();
        return view('login');
    }
}
