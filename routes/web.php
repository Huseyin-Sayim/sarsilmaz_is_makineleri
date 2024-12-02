<?php

use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\ServiceController;
use App\Http\Controllers\admin\SliderController;
use App\Http\Controllers\admin\SettingsController;
use App\Http\Controllers\HomeController;

Route::get("/", [HomeController::class, "index"])->name("home");

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

    Route::prefix("blog")->group(function () {
        Route::get("/", [BlogController::class, "index"])->name("blog");
        Route::get("/create", [BlogController::class, "create"])->name("blog.create");
        Route::post("/create", [BlogController::class, "store"])->name("blog.store");
        Route::get('/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit');
        Route::post('/update/{id}', [BlogController::class, 'update'])->name('blog.update');
        Route::get('/delete/{id}', [BlogController::class, 'delete'])->name('blog.delete');
    });

    Route::prefix("service")->group(function () {
        Route::get("/", [ServiceController::class, "index"])->name("service");
        Route::get("/create", [ServiceController::class, "create"])->name("service.create");
        Route::post("/create", [ServiceController::class, "store"])->name("service.store");
        Route::get("/edit/{id}", [ServiceController::class, "edit"])->name("service.edit");
        Route::post("/edit/{id}", [ServiceController::class, "update"])->name("service.update");
        Route::get("/delete/{id}", [ServiceController::class, "delete"])->name("service.delete");
    });

    Route::prefix("slider")->group(function () {
        Route::get("/", [SliderController::class, "index"])->name("slider");
        Route::get("/create", [SliderController::class, "create"])->name("slider.create");
        Route::post("/create", [SliderController::class, "store"])->name("slider.store");
        Route::get("/edit/{id}", [SliderController::class, "edit"])->name("slider.edit");
        Route::post("/edit/{id}", [SliderController::class, "update"])->name("slider.update");
        Route::get("/delete/{id}", [SliderController::class, "delete"])->name("slider.delete");
    });

    Route::prefix("settings")->group(function () {
        Route::get("/", [SettingsController::class, "index"])->name("settings");
        Route::get("/edit/{id}", [SettingsController::class, "edit"])->name("settings.edit");
        Route::post("/edit&/{id}", [SettingsController::class, "update"])->name("settings.update");
    });
});

//<<<<<<< HEAD


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//=======


Route::get('/home', [HomeController::class, 'index'])->name('home');
//>>>>>>> 0e16e20bdb6186c0565783fd9be17796317ddcb8
