<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class TiketBantuanController extends Controller 
{
    public function index() {
        return view('tiket_bantuan');
    }
}