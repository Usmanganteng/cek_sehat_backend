<?php

use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Container\Attributes\Auth;
use App\Http\Controllers\SymtompsController;

Route::get('/', function () {
    return view('Frontend.main');
});

Route::get('/dashboard', [AuthController::class, 'backendDashboard']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', function () {
    return view('auth.ragister');
});

Route::resource('/diases', \App\Http\Controllers\DiasesController::class);
Route::resource('/symtomps', \App\Http\Controllers\SymtompsController::class);