<?php

namespace App\Imports;

use App\Models\Penempatan;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Hash;

class ImportUsers implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Penempatan([
           
            'kab_id' => $row['kab_id'],
            'kec_id' => $row['kec_id'],
            'desa_id' => $row['desa_id'],
            'alamat' => $row['alamat'],

           
        ]);
    }
}
