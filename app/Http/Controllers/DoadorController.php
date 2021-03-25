<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\doador;

class DoadorController extends Controller
{
    //Apresentar view de cadastro
    public function cadastro(){
        return view('doadors.create');
    }

    //CRUD

    //Cadastrar escola no BD
    public function store(Request $request){
        //cadastro no BD
        $escola = doador::create($request->all());
        return "Cadastro realizado com sucesso";
    }

}
