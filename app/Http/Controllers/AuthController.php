<?php

namespace App\Http\Controllers;

use App\ModelUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends COntroller
{
    public function index() {
        if(!Session::get('login')){
            return redirect('login')->with('alert','Anda harus login terlebih dahulu !');
        }else{
            return view('dashboard');
        }
    }

    public function login() {
        return view('login');
    }

    public function cekLogin(Request $request) {
        
        $this->validate($request,[
            'useremail' => 'required',
            'password' => 'required',
            'g-recaptcha-response' => 'required|captcha',
        ]);

        $userEmail = $request->useremail;
        $password = $request->password;
        $hash = md5($password);

        $check = DB::select("SELECT * FROM `user` WHERE `username` = '$userEmail' OR `email` = '$userEmail'");

        foreach($check as $data) {
            $id = $data->id;
            $nama = $data->nama;
            $pass = $data->password;
            $level = $data->level;
        }

        if($check) {
            if($hash == $pass){
                Session::put('id',$id);
                Session::put('nama',$nama);
                Session::put('level',$level);
                Session::put('login',TRUE);
    
                return redirect('dashboard');
            }else {
                return redirect('/')->with('alert','Email atau password anda salah !');
            }
        }else {
            return redirect('/')->with('alert','Email atau password anda salah !');
        }
    }

    public function logout(){
        Session::flush();
        return redirect('/')->with('alert','Anda telah logout');
    }
}