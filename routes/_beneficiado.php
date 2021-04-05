<?php

use App\Http\Controllers\BeneficiadoController;
use App\Http\Controllers\FilhoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\BeneficiadoLoginController;

Route::group(['middleware' => ['auth:beneficiado']], function () {

    //Rota post para cadastro de formulario de filho
    Route::post('/beneficiado/filho/cadastro', [FilhoController::class, 'store'])->name('filho.store');
    //Rota post para solicitar material escolar para o filho
    Route::post('/beneficiado/filho/solicitar-material', [FilhoController::class, 'storeSolicitarMaterial'])->name('filho.storeSolicitarMaterial');
    //Rota para mostrar o perfil de um filho do beneficiado
    Route::get('/beneficiado/filho/{id}', [FilhoController::class, 'show'])->name('filho.show');
    //Rota para atualizar os dados
    Route::put('/beneficiado/filho/{id}', [FilhoController::class, 'update'])->name('filho.update');
    //Rota delete para deletar beneficiado do banco de dados
    Route::delete('/beneficiado/filho/{id}', [FilhoController::class, 'destroy'])->name('filho.destroy');
    //Rota get para tela de solicitar material
    Route::get('/beneficiado/filho/solicitar-material/{id}', [FilhoController::class, 'solicitarMaterial'])->name('filho.solicitarMaterial');
    //Rota get para tela de cadastro do filho
    Route::get('/beneficiado/filho/cadastro/{id}', [FilhoController::class, 'cadastro'])->name('filho.cadastro');

    //Rota temporária para index
    Route::get('/beneficiado/index', [BeneficiadoController::class, 'index'])->name('beneficiado.index');
    //Rota para realizar pesquisa por beneficiados
    Route::any('/beneficiado/search', [BeneficiadoController::class, 'search'])->name('beneficiado.search');
    //Rota delete para deletar beneficiado do banco de dados
    Route::delete('/beneficiado/{id}', [BeneficiadoController::class, 'destroy'])->name('beneficiado.destroy');
    //Rota para mostrar o perfil de uma beneficiado
    Route::get('/beneficiado/perfil', [BeneficiadoController::class, 'show'])->name('beneficiado.show');
    //Rota para atualizar os dados
    Route::put('/beneficiado/{id}', [BeneficiadoController::class, 'update'])->name('beneficiado.update');

});

//Rota get para tela de cadastro de beneficiado
Route::get('/beneficiado/cadastro', [BeneficiadoController::class, 'cadastro'])->name('beneficiado.cadastro');
//Rota para realizar o cadastro
Route::post('/beneficiado/cadastro', [BeneficiadoController::class, 'store'])->name('beneficiado.store');
