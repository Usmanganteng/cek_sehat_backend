<?php

use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Container\Attributes\Auth;
use App\Http\Controllers\SymtompsController;
use App\Models\Symtomps;
use Monolog\Handler\RotatingFileHandler;

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

Route::get('symtomps', [SymtompsController::class, 'index'])->name('symtomps');
Route::get('symtomps/create', [SymtompsController::class, 'create'])->name('symtomps.create');
Route::post('symtomps/store', [SymtompsController::class, 'store'])->name('symtomps.store');
Route::get('symtomps/{nama}/edit', [SymtompsController::class, 'edit'])->name('symtomps.edit');
Route::put('symtomps/{nama}/update', [SymtompsController::class, 'update'])->name('symtomps.update');
Route::delete('Symtomps/{nama}/delete', [SymtompsController::class, 'destroy'])->name('symtomps.delete');