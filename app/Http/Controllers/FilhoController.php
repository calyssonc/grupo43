<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\filho;

class FilhoController extends Controller
{
    //Apresentar view de cadastro
    public function cadastro(){
        return view('filho.cadastro');
    }
    //CRUD

    //Cadastrar filho no BD

    public function store(Request $request){
        //Cadastro no BD
        $filho = Filho::create($request->all());
        return "Cadastro realizado com sucesso";
    }
    
    
    
    //Remover cadastro da escola no BD
   
}