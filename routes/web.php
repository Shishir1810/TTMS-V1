<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransportController;
use App\Http\Controllers\hotelController;

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
    return view('master');
});
Route::get('transport/view',[TransportController::class, 'transport'])->name('transport');
Route::get('transport/craete',[TransportController::class, 'craete'])->name('craete');
Route::post('transport/store',[TransportController::class, 'store'])->name('transport.store');
Route::get('hotel/view',[hotelController::class, 'hotel'])->name('hotel');
Route::get('hotel/craete',[hotelController::class, 'craete'])->name('hotel.craete');
Route::post('hotel/store',[hotelController::class, 'store'])->name('hotel.store');
