<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\hotelController;
use App\Http\Controllers\placecontroller;
use App\Http\Controllers\resortcontroller;
use App\Http\Controllers\gallerycontroller;
use App\Http\Controllers\touristcontroller;
use App\Http\Controllers\tourguidecontroller;
use App\Http\Controllers\TransportController;
use App\Http\Controllers\Packagelistcontroller;
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
})->name('master');
// packagelist route

Route::get('packagelist/view',[Packagelistcontroller::class, 'packagelist'])->name('packagelist');
Route::get('packagelist/create',[Packagelistcontroller::class, 'create'])->name('packagelist.create');
Route::post('packagelist/store',[Packagelistcontroller::class, 'store'])->name('packagelist.store');
Route::get('packagelist/delete/{id}',[Packagelistcontroller::class,'delete'])->name('packagelist.delete');
//  packageedit route
Route::get('packagelist/edit/{id}',[Packagelistcontroller::class,'edit'])->name('packagelist.edit');
Route::put('packagelist/update/{id}',[Packagelistcontroller::class,'update'])->name('packagelist.update');

// tourguidecontroller route

Route::get('tourguide/view',[tourguidecontroller::class, 'tourguide'])->name('tourguide');
Route::get('tourguide/create',[tourguidecontroller::class, 'create'])->name('tourguide.create');
Route::post('tourguide/store',[tourguidecontroller::class, 'store'])->name('tourguide.store');
Route::get('tourguide/delete/{id}',[tourguidecontroller::class,'delete'])->name('tourguide.delete');
//  tourguideedit route
Route::get('tourguide/edit/{id}',[tourguidecontroller::class,'edit'])->name('tourguide.edit');
Route::put('tourguide/update/{id}',[tourguidecontroller::class,'update'])->name('tourguide.update');

//admin controller
Route::get('admin/view',[admincontroller::class,'admin'])->name('admin');
Route::get('admin/create',[admincontroller::class,'create'])->name('admin.create');
Route::post('admin/store',[admincontroller::class,'store'])->name('admin.store');
Route::get('admin/delete/{id}',[admincontroller::class,'delete'])->name('admin.delete');
Route::get('admin/edit/{id}',[admincontroller::class,'edit'])->name('admin.edit');
Route::put('admin//update/{id}',[admincontroller::class,'update'])->name('admin.update');
//tourist controller
Route::get('tourist/view',[touristcontroller::class,'tourist'])->name('tourist');
Route::get('tourist/create',[touristcontroller::class,'create'])->name('tourist.create');
Route::post('tourist/store',[touristcontroller::class,'store'])->name('tourist.store');
Route::get('tourist/delete/{id}',[touristcontroller::class,'delete'])->name('tourist.delete');
Route::get('tourist/edit/{id}',[touristcontroller::class,'edit'])->name('tourist.edit');
Route::put('tourist//update/{id}',[touristcontroller::class,'update'])->name('tourist.update');


// gallerycontroller route

Route::get('gallery/view',[gallerycontroller::class, 'gallery'])->name('gallery');
Route::get('gallery/create',[gallerycontroller::class, 'create'])->name('gallery.create');
Route::post('gallery/store',[gallerycontroller::class, 'store'])->name('gallery.store');
Route::get('gallery/delete/{id}',[gallerycontroller::class, 'delete'])->name('gallery.delete');
// galleryedit route

Route::get('gallery/edit/{id}',[gallerycontroller::class,'edit'])->name('gallery.edit');
Route::put('gallery/update/{id}',[gallerycontroller::class,'update'])->name('gallery.update');


// TransportController route

Route::get('transport/view',[TransportController::class, 'transport'])->name('transport');
Route::get('transport/create',[TransportController::class, 'create'])->name('create');
Route::post('transport/store',[TransportController::class, 'store'])->name('transport.store');
Route::get('transport/delete/{id}',[TransportController::class,'delete'])->name('transport.delete');

// transportedit route

Route::get('transport/edit/{id}',[TransportController::class,'edit'])->name('transport.edit');
Route::put('transport/upadte/{id}',[TransportController::class,'update'])->name('transport.update');
// hotelController route

Route::get('hotel/view',[hotelController::class, 'hotel'])->name('hotel');
Route::get('hotel/create',[hotelController::class, 'create'])->name('hotel.create');
Route::post('hotel/store',[hotelController::class, 'store'])->name('hotel.store');
Route::get('hotel/delete/{id}',[hotelcontroller::class,'delete'])->name('hotel.delete');

// hoteledit route
Route::get('hotel/edit/{id}',[hotelcontroller::class,'edit'])->name('hotel.edit');
Route::put('hotel/update/{id}',[hotelcontroller::class,'update'])->name('hotel.update');

// placeController route

Route::get('place/view',[placecontroller::class, 'place'])->name('place');
Route::get('place/create',[placecontroller::class, 'create'])->name('place.create');
Route::post('place/store',[placecontroller::class, 'store'])->name('place.store');
Route::get('place/delete/{id}',[placecontroller::class,'delete'])->name('place.delete');

// placeedit route
Route::get('place/edit/{id}',[placecontroller::class,'edit'])->name('place.edit');
Route::put('place/update/{id}',[placecontroller::class,'update'])->name('place.update');

// resortController route

Route::get('resort/view',[resortcontroller::class, 'resort'])->name('resort');
Route::get('resort/create',[resortcontroller::class, 'create'])->name('resort.create');
Route::post('resort/store',[resortcontroller::class, 'store'])->name('resort.store');
Route::get('resort/delete/{id}',[resortcontroller::class,'delete'])->name('resort.delete');

// resortedit route
Route::get('resort/edit/{id}',[resortcontroller::class,'edit'])->name('resort.edit');
Route::put('resort/update/{id}',[resortcontroller::class,'update'])->name('resort.update');
