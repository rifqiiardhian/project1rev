<?php

namespace App\Http\Controllers;

use App\Backlink;
use App\Imports\ImportBacklink;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class BacklinkController extends Controller 
{
    public function index() {
        $dataBacklink = Backlink::all();
        return view('admin_backlink',['dataBacklink' => $dataBacklink]);
    }

    public function index_user() {
        $dataBacklink = Backlink::all();
        return view('backlink',['dataBacklink' => $dataBacklink]);
    }

    public function tambah_backlink() {
        return view('admin_add_backlink');
    }

    public function import(Request $request) {
        $this->validate($request, [
            'file_excel' => 'required|mimes:csv,xls,xlsx',
        ]);

        $file = $request->file('file_excel');

        $nama_file = rand().$file->getClientOriginalName();

        $file->move('data_backlink',$nama_file);

        Excel::import(new ImportBacklink, public_path('/data_backlink/'.$nama_file));

        session::flash('Sukses','Data Backlink berhasil Diimpor !');

        return redirect('/a/backlink');
    }

    public function save_backlink(Request $request) {
        DB::table('backlink')->insert([
            'bahasa' => $request->bahasa,
            'kategori' => $request->kategori,
            'nama_website' => $request->nama_website,
            'link' => $request->link,
            'da' => $request->DA,
            'pa' => $request->PA,
            'jenis' => $request->jenis,
            'tipe' => $request->tipe,
            'syarat' => $request->syarat,
        ]);

        return redirect('/a/backlink');
    }
}