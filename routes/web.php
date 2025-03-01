<?php

use App\Http\Controllers\RemisionController;
use App\Http\Controllers\TrabajosController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    if (Auth::check()) {
        return to_route('dashboard');
    } else {
        return to_route('login');
    }
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::controller(TrabajosController::class)->group(function(){
        Route::get('trabajos/','index')->name('trabajos');
    });
    Route::controller(RemisionController::class)->group(function(){
        Route::get('remision/','index')->name('remision');
        Route::get('remision/create','create')->name('remision.create');
    });
});
