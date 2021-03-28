<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaterialController;

Route::get('/', function () {
    return view('dashboard');
});

//Redireciona para o dash correto
Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

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
