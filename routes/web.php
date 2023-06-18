<?php

use App\Models\Country;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;

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
    $countries = Country::all();
    return view('dashboard')->with('countries', $countries);
})->middleware(['country-restriction', 'auth'])->name('dashboard');

Route::get('/countries/{country}/edit', [CountryController::class, 'edit'])->middleware(['auth'])->name('countries.edit');
Route::post('/countries', [CountryController::class, 'store'])->middleware(['auth'])->name('countries.store');
Route::put('/countries/{country}', [CountryController::class, 'update'])->middleware(['auth'])->name('countries.update');

require __DIR__.'/auth.php';
