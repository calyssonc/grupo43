<?php

use Illuminate\Routing\Route;

//Rota get para tela de cadastro do filho
Route::get('filho/cadastro', [FilhoController::class, 'cadastro'])->name('filho.cadastro');
//Rota post para cadastro de formulario de filho
Route::post('filho/cadastro', [FilhoController::class, 'store'])->name('filho.store');
