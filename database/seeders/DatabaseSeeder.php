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
        User::factory(7)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'nik' => 6471040812040001,
            'fullname' => 'Haris Muzakki Indra',
            'admin' => true,
        ]);

        User::create([
            'nik' => 6471040812040002,
            'fullname' => 'Alif Mulawarman'
        ]);

        User::create([
            'nik' => 6471020810040023,
            'fullname' => 'Muhammad Selli'
        ]);

        User::create([
            'nik' => 12345,
            'fullname' => 'admin',
            'admin' => true
        ]);

        History::factory(10)->create();

        History::create([
            'user_id' => 8,
            'tanggal' => '2021-09-13',
            'waktu' => '12:05:30',
            'lokasi' => 'Kampung Halaman',
            'suhu' => '36.4'
        ]);
        History::create([
            'user_id' => 8,
            'tanggal' => '2021-09-13',
            'waktu' => '08:00',
            'lokasi' => 'Toko Buku Hangat',
            'suhu' => '36.2'
        ]);
        History::create([
            'user_id' => 10,
            'tanggal' => '2021-09-13',
            'waktu' => '10:00',
            'lokasi' => 'Bulan Dept Store',
            'suhu' => '36.2'
        ]);
        History::create([
            'user_id' => 9,
            'tanggal' => '2021-09-16',
            'waktu' => '15:00',
            'lokasi' => 'Pagi Jogging Area',
            'suhu' => '37.0'
        ]);
        History::create([
            'user_id' => 9,
            'tanggal' => '2021-09-14',
            'waktu' => '11:00',
            'lokasi' => 'Kelapa Gading',
            'suhu' => '36.4'
        ]);
    }
}
