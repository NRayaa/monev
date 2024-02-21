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

// Route::get('/test', function(){
//     return view('test');
// })->name('test');

Route::resource('cabor', CaborController::class);
Route::resource('atlet', AtletController::class);
Route::resource('pelatih', PelatihController::class);

Route::resource('monev', MonevController::class);
Route::get('monev/createPres/{$id}', 'MonevController@createPres')->name('monev.createPres');
Route::post('monev/createPres/{$id}', 'MonevController@storePres')->name('monev.storePres');
