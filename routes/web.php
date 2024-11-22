<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(AdminController::class)->group(function () {
    Route::get("/adminn", [AdminController::class, "index"]);

    Route::get("/admin/home", [AdminController::class, "index"]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
