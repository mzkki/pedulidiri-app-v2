<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('user.home', [
        'title' => 'Page Home'
    ]);
});

Route::get('/history', function () {
    $histories = [
        [
            'tanggal' => '2020-01-01',
            'waktu' => '10:00',
            'lokasi' => 'Kampus ITS',
            'suhu' => '25',
        ],
        [
            'tanggal' => '2020-01-02',
            'waktu' => '20:00',
            'lokasi' => 'Kampus ITK',
            'suhu' => '30',
        ],
        [
            'tanggal' => '2020-01-03',
            'waktu' => '12:00',
            'lokasi' => 'Sekolah',
            'suhu' => '20',
        ]
    ];
    return view('user.history', [
        'title' => 'Page History',
        'histories' => $histories
    ]);
});
