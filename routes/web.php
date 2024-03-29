<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityTripsController;
use App\Http\Controllers\AuthController;

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
    return view('pages.home');
});

Route::get('login', function () {
    return view('pages.login');
})->name('login');

Route::get('register', function () {
    return view('pages.register');
})->name('register');

Route::get('city-trips', [CityTripsController::class, 'index'])->name('city-trips.index');

