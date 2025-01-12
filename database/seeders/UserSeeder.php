<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'id' => 1,
            'nama' => 'PeTIKJombang',
            'username' => 'petik_jombang',
            'email' => 'p3t1kj0mbang@gmail.com',
            'password' => Hash::make('Aruq13@admin'),
            'role' => 'Administrator',
            'photo' => "",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'id' => 2,
            'nama' => 'Reza A',
            'username' => 'arez57',
            'email' => 'rezaA@gmail.com',
            'password' => Hash::make('Rezaaa@555'),
            'role' => 'Security',
            'photo' => "",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'id' => 3,
            'nama' => 'Kaylo Ardian Arkanda',
            'username' => 'ardi354',
            'email' => 'ardian.kay3@gmail.com',
            'password' => Hash::make('Arka.kay@333'),
            'role' => 'Mahasantri',
            'photo' => "",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
