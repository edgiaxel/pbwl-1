<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PegawaiSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('pegawai')->insert([
            'nama_lengkap' => 'Christ Patt',
            'jabatan' => 'Manager',
            'email' => 'chrispatt@gmail.com',
            'no_hp' => '081234567890',
            'tanggal_lahir' => '1998-05-12',
            'alamat' => 'Jakarta, Indonesia',
            'gaji' => 10000000.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('pegawai')->insert([
            'nama_lengkap' => 'Loid Visp',
            'jabatan' => 'Marketing',
            'email' => 'Loid12@gmail.com',
            'no_hp' => '089876543210',
            'tanggal_lahir' => '1995-02-14',
            'alamat' => 'Tokyo, Japan',
            'gaji' => 5000000.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}