<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Proses;
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

Route::get('/index', function () {
    return view('home');
});

Route::get('/tabung', function () {
    return view('tabung');
});

Route::get('/bola', function () {
    return view('bola');
});

Route::get('/kerucut', function () {
    return view('kerucut');
});

Route::post('/tabung',[Proses::class, 'tabung']);
Route::post('/bola',[Proses::class, 'bola']);
Route::post('/kerucut',[Proses::class, 'kerucut']);