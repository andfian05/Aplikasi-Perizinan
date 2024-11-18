<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MahasantriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasantri')->insert([
            'id' => 1,
            'nama' => 'Kaylo Ardian Arkanda',
            'email' => 'ardian.kay3@gmail.com',
            'password' => 'Arka.kay@333',
            'kelas' => 'PPL',
            'angkatan' => '2023',
            'kamar' => '2',
            'status_akun' => '1',
            'photo' => "",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
