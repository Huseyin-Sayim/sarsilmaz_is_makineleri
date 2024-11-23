<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware("auth")->group(function () {
    Route::get("/adminn", [AdminController::class, "index"]);
});

Route::get("/gallery", function () {
    return view("admin.gallery.create_gallery");
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
