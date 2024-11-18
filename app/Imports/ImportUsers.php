<?php

namespace App\Imports;

use App\Models\User;
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
        return new User([
            'nama'     => $row['nama'],
            'username' => $row['username'], 
            'password' => Hash::make($row['password']),
            'role'     => $row['role'], 
            'penempatan' => $row['penempatan'], 
        ]);
    }
}
