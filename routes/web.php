<?php

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

Route::get('/daftar-prestasi-mahasiswa', 'MainController@achievement');

Route::get('/pekan-kreativitas-mahasiswa', 'MainController@pkm');

Route::get('/sejarah', function () {
    return view('sejarah');
});

Route::get('/struktur', function () {
    return view('struktur');
});

Route::get('/pimpinan', function () {
    return view('pimpinan');
});

Route::get('/proker-restra', function () {
    return view('protra');
});

Route::get('/senat', function () {
    return view('senat');
});

Route::get('/ifmos-pelabuhanratu', function () {
    return view('ifmospelabuhanratu');
});

Route::get('/ifmos-ancol', function () {
    return view('ifmosAncol');
});

// Route::get('/pekan-kreativitas-mahasiswa', function () {
//     return view('pkm');
// });

Route::get('/daftar-kegiatan-mahasiswa', function () {
    return view('kegiatanMahasiswa');
});

// Route::get('/daftar-prestasi-mahasiswa', function () {
//     return view('prestasiMahasiswa');
// });

Route::get('/agenda', function () {
    return view('agenda');
});

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/berita-lengkap', function () {
    return view('beritaLengkap');
});

Route::get('/statistik', function () {
    return view('statistik');
});

Route::get('/sdg14-fakultas', function () {
    return view('sdgFakultas');
});

Route::get('/sdg14-lengkap', function () {
    return view('sdgFakultasLengkap');
});

Route::get('/visi-misi', function () {
    return view('visiMisi');
});
