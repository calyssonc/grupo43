<?php

use App\Http\Controllers\EscolaController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth', 'role:escola']], function () {
    Route::get('/dashboard-escola', [EscolaController::class, 'index'])->name('escola.dashboard');
});

//Rota temporária para index
Route::get('/escola/index', [EscolaController::class, 'index'])->name('escola.index');
//Rota get para tela de cadastro de escola
Route::get('/escola/cadastro', [EscolaController::class, 'cadastro'])->name('escola.cadastro');
//Rota para realizar o cadastro
Route::post('/escola/cadastro', [EscolaController::class, 'store'])->name('escola.store');
//Rota get para mostrar a tela cadstro de material
Route::get('/escola/cadastro-material', [EscolaController::class, 'cadastroMaterial'])->name('escola.cadastroMaterial');
//Rota para realizar o cadastro do material
Route::post('/escola/cadastro-material', [EscolaController::class, 'storeMaterial'])->name('escola.storeMaterial');
//Rota para realizar o cadastro de materiais
Route::any('/escola/search',[EscolaController::class,'search'])->name('escola.search');
//Rota para mostrar o perfil de uma escola
Route::get('/escola', [EscolaController::class, 'show'])->name('escola.show');
//Rota para atualizar os dados
Route::put('/escola/{id}',[EscolaController::class,'update'])->name('escola.update');
//Rota delete para deletar escola do banco de dados
Route::delete('/escola/{id}',[EscolaController::class, 'destroy'])->name('escola.destroy');
