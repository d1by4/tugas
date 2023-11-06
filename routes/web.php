<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $intro = [
        'nama' => 'I Kadek Dibya Wardhana Dinata'
    ];

    return view('home', compact('intro'));
});

Route::get('/profile', function () {
    $profile = [
        'nama' => 'I Kadek Dibya Wardhana Dinata',
        'tanggal' => '28-Februari-2004',
        'asal' => 'Karangasem, Bali, Indonesia',
        'pendidikan' => [
            'pendidikanTerakhir' => 'SMA Negeri 2 Amlapura',
            'pendidikanSaatIni' => 'Institut Bisnis dan Teknologi Indonesia',
        ],
    ];
    return view('profile', compact('profile'));
});

Route::get('/work', function () {
    $work = [
        'work' => 'QA website',
        'place' => 'timedoor Indonesia',
        'time' => 'part time',
    ];

    return view('work', compact('work'));
});
