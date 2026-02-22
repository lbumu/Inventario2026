<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.dashboard');
})->name('dashboard');

Route::resource('categories', App\Http\Controllers\Admin\CategoryController::class)->except(['show']);

Route::resource('customers', App\Http\Controllers\Admin\CustomerController::class)->except(['show']);

Route::resource('clientes', App\Http\Controllers\Admin\ClientesController::class)->except(['show']);