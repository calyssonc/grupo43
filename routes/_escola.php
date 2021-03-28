<?php

use App\Http\Controllers\EscolaController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth', 'role:escola']], function () {
    Route::get('/dashboard-escola', [EscolaController::class, 'index'])->name('dashboard');
});

//Rota get para tela de cadastro de escola
Route::get('escola/cadastro', [EscolaController::class, 'cadastro'])->name('escola.cadastro');
//Rota post para cadastro de formulario de escola
Route::post('escola/cadastro', [EscolaController::class, 'store'])->name('escola.store');
//Rota get retorna lista de escolas
Route::get('escola/apresentarTodos',[EscolaController::class, 'apresentarTodos'])->name('escola.apresentarTodos');
//Rota delete para deletar escola do banco de dados
Route::delete('escola/delete',[EscolaController::class, 'delete'])->name('escola.delete');
