<?php

namespace App\Http\Controllers;

use App\ModelUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function user() {
        $dataUser = DB::select("SELECT `user`.`id`, `user`.`email`, `user`.`nama`, `user`.`level`, `user`.`status`, `hak_akses`.`hak_akses`
        FROM `user` JOIN `hak_akses` ON `user`.`hak_akses` = `hak_akses`.`id` ORDER BY `user`.`id` ASC");

        return view('akun',['dataUser' => $dataUser]);
    }

    public function tambah_user() {
        $dataAkses = DB::table('hak_akses')->get();

        return view('tambah_akun',['dataAkses' => $dataAkses]);
    }

    public function save_user(Request $request) {
        DB::table('user')->insert([
            'username' => $request->username,
            'nama' => $request->nama_lengkap,
            'email' => $request->email,
            'telepon' => $request->telepon,
            'password' => md5($request->konfirm_password),
            'hak_akses' => $request->hak_akses,
            'status' => $request->status,
            'level' => $request->level
        ]);

        return redirect('pic');
    }

    public function edit_user($id) {
        $dataUser = DB::table('user')->where('id',$id)->get();
        $dataAkses = DB::table('hak_akses')->get();

        return view('edit_akun', ['dataUser' => $dataUser], ['dataAkses' => $dataAkses]);
    }

    public function update_user(Request $request) {
        DB::table('user')->where('id', $request->id )->update([
            'nama' => $request->nama_lengkap,
            'email' => $request->email,
            'telepon' => $request->telepon,
            'hak_akses' => $request->hak_akses,
            'status' => $request->status,
            'level' => $request->level
        ]);
        
        return redirect('pic');
    }

    public function delete_user($id) {
        DB::table('user')->where('id',$id)->delete();

        return redirect('pic');
    }
}
