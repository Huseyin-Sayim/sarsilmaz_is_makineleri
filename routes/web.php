<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(["prefix" => "panel", 'middleware' => 'auth'], function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name('admin.home');
});



Route::get('/home', [HomeController::class, 'index'])->name('home');
