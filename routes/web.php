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
Route::get('/licenciement', [PageController::class, 'licenciement'])->name('licenciement');
Route::get('/indemnite', [PageController::class, 'indemnite'])->name('indemnite');
Route::get('/inaptitude', [PageController::class, 'inaptitude'])->name('inaptitude');
Route::get('/disciplinaire', [PageController::class, 'disciplinaire'])->name('disciplinaire');
Route::get('/economique', [PageController::class, 'economique'])->name('economique');
Route::get('/personnel', [PageController::class, 'personnel'])->name('personnel');
Route::get('/harcelement', [PageController::class, 'harcelement'])->name('harcelement');
Route::get('/reparation', [PageController::class, 'reparation'])->name('reparation');
Route::get('/plainte', [PageController::class, 'plainte'])->name('plainte');
Route::get('/juridique', [PageController::class, 'juridique'])->name('juridique');
Route::get('/legislation', [PageController::class, 'legislation'])->name('legislation');
Route::get('/definition', [PageController::class, 'definition'])->name('definition');
