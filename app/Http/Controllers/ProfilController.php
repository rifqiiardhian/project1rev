<?php

namespace App\Http\Controllers;

use App\ModelUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ProfilController extends Controller 
{
    public function index(){
        $id = Session::get('id');
        $dataProfil = DB::table('user')->where('id',$id)->get();
        return view('profil', ['dataProfil' => $dataProfil]);
    }

    public function updateProfil(Request $request) {
        DB::table('user')->where('id',$request->id)->update([
            'username' => $request->username,
            'nama' => $request->nama_lengkap,
            'email' => $request->email,
            'telepon' => $request->telepon
        ]);
        return redirect('profil');
    }
}