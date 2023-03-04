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
    return view('layout');
});

Route::get('/pagina1', [\App\Http\Controllers\ParcialController::class,  'pagina1'])->name('pagina1');
Route::get('/pagina2', [\App\Http\Controllers\ParcialController::class,  'pagina2'])->name('pagina2');
Route::get('/retorno', [\App\Http\Controllers\ParcialController::class,  'retorno'])->name('layout');
