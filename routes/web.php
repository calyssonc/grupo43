<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
=======
use App\Http\Controllers\EscolaController;
use App\Http\Controllers\DoadorController;
use App\Http\Controllers\FilhoController;
use App\Http\Controllers\MaterialController;

>>>>>>> DEV

Route::get('/', function () {
    return view('dashboard');
});

<<<<<<< HEAD
Route::get('/dashboard', function () {
    return view('dashboard');
});
=======
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
>>>>>>> DEV

// A rota de material é dividida por muita coisa então só
// vou fazer a organização futuramente
// Ass: Alysson

//Rota get para tela de cadastro de material
Route::get('material/cadastro/{id}', [MaterialController::class, 'cadastro'])->name('material.cadastro');
//Rota post para cadastro de formulario de Material
Route::post('material/cadastro', [MaterialController::class, 'store'])->name('material.store');
//Rota get para retornar lista de Materiais
Route::get('material/apresentarTodos', [MaterialController::class, 'apresentarTodos'])->name('material.apresentartodos');

require __DIR__ . '/_beneficiado.php';
require __DIR__ . '/_doador.php';
require __DIR__ . '/_escola.php';
require __DIR__ . '/auth.php';
