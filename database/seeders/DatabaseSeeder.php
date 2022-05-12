<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\TahunLulus;
use App\Models\Status;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nama' => 'Admin',
            'nisn' => 1342434,
            'status_id' => mt_rand(1, 2),
            'tahun_lulus_id' => mt_rand(1, 5),
            'email' => 'admin@email.com',
            'password' => bcrypt('password'),
            'handphone' => '3274682376',
            'alamat' => 'Jakarta',
            'is_admin' => true
        ]);

        User::factory(400)->create();

        Status::create([
            'status' => 'Bekerja'
        ]);
        Status::create([
            'status' => 'Kuliah'
        ]);

        TahunLulus::create([
            'thn_lulus' => '2011'
        ]);
        TahunLulus::create([
            'thn_lulus' => '2014'
        ]);
        TahunLulus::create([
            'thn_lulus' => '2017'
        ]);
        TahunLulus::create([
            'thn_lulus' => '2020'
        ]);
        TahunLulus::create([
            'thn_lulus' => '2023'
        ]);
    }
}
