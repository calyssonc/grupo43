<?php

use App\Http\Controllers\DoadorController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth', 'role:doador']], function () {
    Route::get('/dashboard-doador', [DashboardController::class, 'index'])->name('dashboard');
});

//Rota temporária para index
Route::get('/doador/index', [DoadorController::class, 'index'])->name('doador.index');
//Rota get para tela de cadastro de doador
Route::get('/doador/cadastro', [DoadorController::class, 'cadastro'])->name('doador.cadastro');
//Rota para realizar o cadastro
Route::post('/doador/cadastro', [DoadorController::class, 'store'])->name('doador.store');
//Rota para realizar pesquisa por doadors
Route::any('/doador/search', [DoadorController::class, 'search'])->name('doador.search');
//Rota delete para deletar doador do banco de dados
Route::delete('/doador/{id}', [DoadorController::class, 'destroy'])->name('doador.destroy');
//Rota para mostrar o perfil de uma doador
Route::get('/doador/{id}', [DoadorController::class, 'show'])->name('doador.show');
//Rota para atualizar os dados
Route::put('/doador/{id}', [DoadorController::class, 'update'])->name('doador.update');
