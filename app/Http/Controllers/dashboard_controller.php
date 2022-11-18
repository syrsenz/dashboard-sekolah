<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use  \App\Models\postingan;
use  \App\Models\kategori;
use  \App\Models\profile;

class dashboard_controller extends Controller
{
    public function index(){

        return view('index',[
            'berita'=>postingan::where('kategori_id','1')->latest()->limit(6)->get(),
            'prestasi'=>postingan::where('kategori_id','2')->latest()->limit(3)->get(),
            'profile'=>profile::find(1)
        ]);
    }
    public function berita(){
        return view('berita');
    }
    public function prestasi(){
        return view('prestasi');
    }
    public function galeri(){
        return view('galeri');
    }
    public function profile(){
        return view('profile');
    }
    public function login(){
        return view('admin/login');
    }
    public function proses_login(Request $request){
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        return redirect()->intended('/dashboard');
    }
    echo "gagal ";
   
    }
    public function proses_logout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/');
    }
}
