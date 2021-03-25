<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EscolaController;
use App\Http\Controllers\DoadorController;
use App\Http\Controllers\FilhoController;

//Rota get para tela de cadastro de escola
Route::get('escola/cadastro',[EscolaController::class, 'cadastro'])->name('escola.cadastro');
//Rota post para cadastro de formulario de escola
Route::post('escola/cadastro',[EscolaController::class, 'store'])->name('escola.store');
//Rota get retorna lista de escolas
Route::get('escola/apresentarTodos',[EscolaController::class, 'apresentarTodos'])->name('escola.apresentarTodos');

//Rota get para tela de cadastro do filho
Route::get('filho/cadastro',[FilhoController::class, 'cadastro'])->name('filho.cadastro');
//Rota post para cadastro de formulario de escola
Route::post('filho/cadastro',[FilhoController::class, 'store'])->name('filho.store');

//Rota get para tela de cadastro do filho
Route::get('doador/cadastro',[DoadorController::class, 'cadastro'])->name('doador.cadastro');
//Rota post para cadastro de formulário de filho
Route::post('doador/cadastro',[DoadorController::class, 'store'])->name('doador.store');
//Rota get para retornar lista de doadores
Route::get('doador/apresentarTodos',[DoadorController::class, 'apresentarTodos'])->name('doador.apresentartodos');
//Rota put para atualizar doador por Id
Route::get('doador/atualizarPeloId/{id}',[DoadorController::class, 'editar'])->name('doador.editar');
//Rota put para atualizar doador por Id
Route::put('doador/atualizarPeloId/{id}',[DoadorController::class, 'atualizarDadoPeloId'])->name('doador.atualizarpeloid');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


