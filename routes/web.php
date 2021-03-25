<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EscolaController;
use App\Http\Controllers\FilhoController;

//Rota get para tela de cadastro de escola
Route::get('escola/cadastro',[EscolaController::class, 'cadastro'])->name('escola.cadastro');
//Rota post para cadastro de formulario de escola
Route::post('escola/cadastro',[EscolaController::class, 'store'])->name('escola.store');

//Rota get para tela de cadastro do filho
Route::get('filho/cadastro',[FilhoController::class, 'cadastro'])->name('filho.cadastro');
//Rota post para cadastro de formulario de escola
Route::post('filho/cadastro',[FilhoController::class, 'store'])->name('filho.store');



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


