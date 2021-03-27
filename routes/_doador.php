<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth', 'role:doador']], function () {
    Route::get('/dashboard-doador', [DashboardController::class, 'index'])->name('dashboard');
});

//Rota get para tela de cadastro do doador
Route::get('doador/cadastro', [DoadorController::class, 'cadastro'])->name('doador.cadastro');
//Rota post para cadastro de formulário de doador
Route::post('doador/cadastro', [DoadorController::class, 'store'])->name('doador.store');
//Rota get para retornar lista de doadores
Route::get('doador/apresentarTodos', [DoadorController::class, 'apresentarTodos'])->name('doador.apresentartodos');
//Rota put para atualizar doador por Id
Route::get('doador/atualizarPeloId/{id}', [DoadorController::class, 'editar'])->name('doador.editar');
//Rota put para atualizar doador por Id
Route::put('doador/atualizarPeloId/{id}', [DoadorController::class, 'atualizarDadoPeloId'])->name('doador.atualizarpeloid');
