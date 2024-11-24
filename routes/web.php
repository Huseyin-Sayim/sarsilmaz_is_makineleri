<?php

use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(["prefix" => "panel", 'middleware' => 'auth'], function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name('admin.home');
    Route::prefix('gallery')->group(function () {
        Route::get("/", [GalleryController::class, "index"])->name("gallery");
        Route::get("/create", [GalleryController::class, "create"])->name("gallery.create");
        Route::post("store", [GalleryController::class, "store"])->name("gallery.store");
        Route::get("/edit/{id}", [GalleryController::class, "edit"])->name("gallery.edit");
        Route::post("/update/{id}", [GalleryController::class, "update"])->name("gallery.update");
        Route::get("/delete/{id}", [GalleryController::class, "delete"])->name("gallery.delete");
    });
});

//<<<<<<< HEAD


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//=======


Route::get('/home', [HomeController::class, 'index'])->name('home');
//>>>>>>> 0e16e20bdb6186c0565783fd9be17796317ddcb8
