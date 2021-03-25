<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\beneficiado;

class BeneficiadoController extends Controller
{
    //Apresentar view de cadastro
    public function cadastro(){
        return view('beneficiado.cadastro');
    }

    //CRUD

    //Cadastrar beneficiado no BD
    public function store(Request $request){
        //cadastro no BD
        $beneficiado = beneficiado::create($request->all());
    return "Cadastro realizado com sucesso";
    }
}
