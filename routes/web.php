<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('dashboard');
});

//Redireciona automaticamente para o dashboard correspondente
Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

Route::get('/login',[LoginController::class,'showLoginForm'])->name('login');
Route::post('/login',[LoginController::class,'login'])->name('login.submit');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');


require __DIR__ . '/_beneficiado.php';
require __DIR__ . '/_doador.php';
require __DIR__ . '/_escola.php';
require __DIR__ . '/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
