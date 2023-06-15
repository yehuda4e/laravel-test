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
    $countries = \App\Models\Country::all();
    return view('dashboard')->with('countries', $countries);
})->middleware(['auth'])->name('dashboard');

Route::get('/countries/{country}/edit', [\App\Http\Controllers\CountryController::class, 'edit'])->middleware(['auth'])->name('countries.edit');
Route::post('/countries', [\App\Http\Controllers\CountryController::class, 'store'])->middleware(['auth'])->name('countries.store');
Route::put('/countries/{country}', [\App\Http\Controllers\CountryController::class, 'update'])->middleware(['auth'])->name('countries.update');

require __DIR__.'/auth.php';
