<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;




Route::controller(ProductController::class)->group(function (){
    Route::get('/','index')->name('index');
    Route::get('create','create')->name('create');
    Route::post('store','store')->name('store');
    Route::get('show/{id}','show')->name('show');
    Route::get('edit/{id}','edit')->name('edit');
    Route::put('update/{id}','update')->name('update');
});