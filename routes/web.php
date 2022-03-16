<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransportController;
use App\Http\Controllers\hotelController;
use App\Http\Controllers\placecontroller;
use App\Http\Controllers\tourguidecontroller;
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
// tourguidecontroller route

route::get('tourguide/view',[tourguidecontroller::class, 'tourguide'])->name('tourguide');
route::get('tourguide/create',[tourguidecontroller::class, 'create'])->name('tourguide.create');
route::post('tourguide/store',[tourguidecontroller::class, 'store'])->name('tourguide.store');

// placecontroller route

route::get('place/view',[placecontroller::class, 'place'])->name('place');
route::get('place/create',[placecontroller::class, 'create'])->name('place.create');
route::post('place/store',[placecontroller::class, 'store'])->name('place.store');

// TransportController route

Route::get('transport/view',[TransportController::class, 'transport'])->name('transport');
Route::get('transport/create',[TransportController::class, 'create'])->name('create');
Route::post('transport/store',[TransportController::class, 'store'])->name('transport.store');

// hotelController route

Route::get('hotel/view',[hotelController::class, 'hotel'])->name('hotel');
Route::get('hotel/create',[hotelController::class, 'create'])->name('hotel.create');
Route::post('hotel/store',[hotelController::class, 'store'])->name('hotel.store');
