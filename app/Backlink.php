<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Backlink extends Model
{
    protected $table = "backlink";

    protected $fillable = ['bahasa','kategori','nama_website','link','da','pa','jenis','tipe','syarat'];
}
