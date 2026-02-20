<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.dashboard');
})->name('dashboard');

Route::resource('categories', App\Http\Controllers\Admin\CategoryController::class)->except(['show']);