<?php

use App\Http\Controllers\AtletController;
use App\Http\Controllers\CaborController;
use App\Http\Controllers\MonevController;
use App\Http\Controllers\PelatihController;
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

Route::get('/test', function(){
    return view('monev.show');
})->name('test');

Route::resource('cabor', CaborController::class);
Route::resource('atlet', AtletController::class);
Route::resource('pelatih', PelatihController::class);

Route::resource('monev', MonevController::class);
Route::get('monev/createPres/{idMonev}/{caborMonev}', [MonevController::class, 'createPres'])->name('monev.createpres');
Route::post('monev/storePres/{idMonev}', [MonevController::class, 'storePres'])->name('monev.storePres');
Route::get('monev/createAverage/{idMonev}', [MonevController::class, 'createAverage'])->name('monev.createaverage');
Route::post('monev/storeAverage/{idMonev}', [MonevController::class, 'storeAverage'])->name('monev.storeAverage');

