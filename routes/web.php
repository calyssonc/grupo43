<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EscolaController;

//Rota get para tela de cadastro de escola
Route::get('escola/cadastro',[EscolaController::class, 'cadastro']);
//Rota post para cadastro de formulario de escola
Route::post('escola/cadastro',[EscolaController::class, 'store']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


