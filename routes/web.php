<?php

use App\Http\Controllers\MhsController;
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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/mhs', function () {
    return view('mhs');
});

Route::get('/form_tambah_mhs', function () {
    return view('form_tambah_mhs');
});
Route::resource('mhs', MhsController::class);
