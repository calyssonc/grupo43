<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EscolaController;
use App\Http\Controllers\DoadorController;
use App\Http\Controllers\FilhoController;

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

//Rota get para tela de cadastro de escola
Route::get('escola/cadastro', [EscolaController::class, 'cadastro'])->name('escola.cadastro');
//Rota post para cadastro de formulario de escola
Route::post('escola/cadastro', [EscolaController::class, 'store'])->name('escola.store');
//Rota get retorna lista de escolas
Route::get('escola/apresentarTodos',[EscolaController::class, 'apresentarTodos'])->name('escola.apresentarTodos');
//Rota delete para deletar escola do banco de dados
Route::delete('escola/delete',[EscolaController::class, 'delete'])->name('escola.delete');

//Rota get para tela de cadastro do filho
Route::get('filho/cadastro', [FilhoController::class, 'cadastro'])->name('filho.cadastro');
//Rota post para cadastro de formulario de filho
Route::post('filho/cadastro', [FilhoController::class, 'store'])->name('filho.store');

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

//Rota get para tela de cadastro de material
Route::get('material/cadastro/{id}', [MaterialController::class, 'cadastro'])->name('material.cadastro');
//Rota post para cadastro de formulario de Material
Route::post('material/cadastro', [MaterialController::class, 'store'])->name('material.store');
//Rota get para retornar lista de Materiais
Route::get('material/apresentarTodos', [MaterialController::class, 'apresentarTodos'])->name('material.apresentartodos');

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
