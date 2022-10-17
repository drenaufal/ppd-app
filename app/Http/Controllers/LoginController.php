<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login.index', [
            'title' => 'Login'
        ]);
    }

    public function ceklogin(Request $req){
       $cek = $req->validate([
            'name' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($cek)){
            $req->session()->regenerate();
            return redirect()->intended('/home');
        }
       
        
        return back()->with('gagal','gagal login');

    }
}
