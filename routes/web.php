<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('panel')->group(function () {

    Route::get('service-orders', fn() => view('pages.service-orders'))->name('service-orders');


    Route::prefix('customers')->name('customers.')->group(function () {
        Route::get('', fn() => view('pages.customers.index'))->name('index');
        Route::get('form', fn() => view('pages.customers.form'))->name('form');
    });

    Route::prefix('cars')->name('cars.')->group(function () {
        Route::get('', fn() => view('pages.cars.index'))->name('index');
        Route::get('cars', fn() => view('pages.cars.form'))->name('form');
    });

    Route::prefix('services')->name('services.')->group(function () {
        Route::get('', fn() => view('pages.services.index'))->name('index');
        Route::get('form', fn() => view('pages.services.form'))->name('form');
    });

    Route::prefix('transactions')->name('transactions.')->group(function () {
        Route::get('', fn() => view('pages.transactions.index'))->name('index');
        Route::get('form', fn() => view('pages.transactions.form'))->name('form');
    });

});

