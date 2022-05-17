<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\History;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'nik' => 6471040812040001,
            'fullname' => 'Haris Muzakki Indra',
        ]);

        User::create([
            'nik' => 6471040812040002,
            'fullname' => 'Alif Mulawarman'
        ]);

        User::create([
            'nik' => 6471020810040023,
            'fullname' => 'Muhammad Selli'
        ]);

        History::create([
            'user_id' => 1,
            'tanggal' => '2021-09-13',
            'waktu' => '08:00',
            'lokasi' => 'Toko Buku Hangat',
            'suhu' => '36.2'
        ]);
        History::create([
            'user_id' => 3,
            'tanggal' => '2021-09-13',
            'waktu' => '10:00',
            'lokasi' => 'Bulan Dept Store',
            'suhu' => '36.2'
        ]);
        History::create([
            'user_id' => 1,
            'tanggal' => '2021-09-16',
            'waktu' => '15:00',
            'lokasi' => 'Pagi Jogging Area',
            'suhu' => '37.0'
        ]);
        History::create([
            'user_id' => 2,
            'tanggal' => '2021-09-14',
            'waktu' => '11:00',
            'lokasi' => 'Kelapa Gading',
            'suhu' => '36.4'
        ]);
    }
}
