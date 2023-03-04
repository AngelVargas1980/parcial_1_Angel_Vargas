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
    return view('home');
});


Route::get('/funcPag1', [\App\Http\Controllers\Controlador::class,  'funcPag1'])->name('pag1');

Route::get('/funcPag2', [\App\Http\Controllers\Controlador::class,  'funcPag2'])->name('pag2');

Route::get('/funHome', [\App\Http\Controllers\Controlador::class,  'funHome'])->name('home');

Route::get('/funcLayout', [\App\Http\Controllers\Controlador::class,  'funcLayout'])->name('layout');
