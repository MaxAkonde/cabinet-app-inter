<?php

use App\Http\Controllers\PageController;
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
    return view('welcome');
});

Route::get('/expatriation', [PageController::class, 'expatriation'])->name('expatriation');
Route::get('/protection_social', [PageController::class, 'protection_social'])->name('protection_social');
Route::get('/regime_social', [PageController::class, 'regime_social'])->name('regime_social');
Route::get('/regime_fiscal', [PageController::class, 'regime_fiscal'])->name('regime_fiscal');
Route::get('/detachement', [PageController::class, 'detachement'])->name('detachement');
Route::get('/rupture', [PageController::class, 'rupture'])->name('rupture');
Route::get('/rupture_conventionnelle', [PageController::class, 'rupture_conventionnelle'])->name('rupture_conventionnelle');
Route::get('/resiliation_judiciaire', [PageController::class, 'resiliation_judiciaire'])->name('resiliation_judiciaire');
