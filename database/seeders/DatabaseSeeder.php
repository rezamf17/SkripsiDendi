<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
         DB::table('users')->insert([
            [
               'name' => 'Dendi',
               'address' => 'Garut',
               'telp' => '08523525524',
               'email' => 'dendi@gmail.com',
               'role' => '1',
               'password' => Hash::make('123456'),
            ],
            [
               'name' => 'Hiruzen Uchiha Senju Akagami',
               'address' => 'Konohagakure',
               'telp' => '08523525524',
               'email' => 'hiruzen@gmail.com',
               'role' => '3',
               'password' => Hash::make('123456'), 
            ],
            [
               'name' => 'Uzumaki Bayu',
               'address' => 'Konohagakure',
               'telp' => '2434534134',
               'email' => 'uzumaki@gmail.com',
               'role' => '2',
               'password' => Hash::make('123456'), 
            ]
     ]);
         DB::table('nama_produk')->insert([
            [
               'nama' => 'MOVIN',
               'created_at' => now()
            ],
            [
               'nama' => 'INDIHOME GAMER',
               'created_at' => now()
            ],
            [
               'nama' => 'OTT',
               'created_at' => now()
            ],
            [
               'nama' => 'IH MUSIC',
               'created_at' => now()
            ]
         ]);  
         DB::table('jenis_produk')->insert([
            [
               'jenis' => 'Wifi'
            ],
            [
               'jenis' => 'Digital'
            ]
     ]);
    }
}
