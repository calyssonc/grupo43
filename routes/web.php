<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EscolaController;
<<<<<<< HEAD
use App\Http\Controller\DoadorController;
use App\Http\Controller\FilhoController;
=======
use App\Http\Controllers\FilhoController;
>>>>>>> df08ac2bf720e129673d2f58028977f87c5c6044

//Rota get para tela de cadastro de escola
Route::get('escola/cadastro',[EscolaController::class, 'cadastro'])->name('escola.cadastro');
//Rota post para cadastro de formulario de escola
Route::post('escola/cadastro',[EscolaController::class, 'store'])->name('escola.store');

//Rota get para tela de cadastro do filho
Route::get('filho/cadastro',[FilhoController::class, 'cadastro'])->name('filho.cadastro');
<<<<<<< HEAD
//Rota post para cadastro de formulário de filho
Route::post('filho/cadastro', [FilhoController::class, 'store'])->name('filho.store');

//Rota get para tela de cadastro do filho
Route::get('doador/cadastro',[DoadorController::class, 'cadastro'])->name('doador.cadastro');
//Rota post para cadastro de formulário de filho
Route::post('doador/cadastro', [DoadorController::class, 'store'])->name('doador.store');
=======
//Rota post para cadastro de formulario de escola
Route::post('filho/cadastro',[FilhoController::class, 'store'])->name('filho.store');
>>>>>>> df08ac2bf720e129673d2f58028977f87c5c6044



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


