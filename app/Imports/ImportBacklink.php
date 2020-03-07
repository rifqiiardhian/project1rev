<?php

namespace App\Imports;

use App\Backlink;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportBacklink implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Backlink([
            'bahasa' => $row[1],
            'kategori' => $row[2],
            'nama_website' => $row[3],
            'link' => $row[4],
            'da' => $row[5],
            'pa' => $row[6],
            'jenis' => $row[7],
            'tipe' => $row[8],
            'syarat' => $row[9],
        ]);
    }
}
