<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/panel/service-orders', fn() => view('pages.service-orders'))->name('service-orders');
Route::get('/panel/clients', fn() => view('pages.clients'))->name('clients');
Route::get('/panel/cars', fn() => view('pages.cars'))->name('cars');
Route::get('/panel/services', fn() => view('pages.services'))->name('services');
