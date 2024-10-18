<?php

use App\Http\Controllers\SeasonsController;
use App\Http\Controllers\SeriesController;
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
    return redirect('/series');
});

// Criado routes para exibir todas as tabelas e durante o desenvolvimento, percebi que usando o ONLY, ficaria muito extenso a escrita do route, entao usei o exception e pesquisei sobre as telas padrões do laravel, e show nao vou usar, acabei deixando ela de lado
Route::resource('/series', SeriesController::class)
    ->except(['show']);

Route::get('/series/{series}/seasons', [SeasonsController::class, 'index'])->name('seasons.index');
Route::get('/series/search', [SeriesController::class, 'search'])->name('series.search');
