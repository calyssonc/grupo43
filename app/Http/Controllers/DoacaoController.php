<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Escola;

class EscolaController extends Controller
{
    //Apresentar view de cadastro
    public function cadastro(){
        return view('escola.cadastro');
    }

    //CRUD

    //Retorna todas as escolas do BD
    public function apresentarTodos(){
        $escolas['escolas'] = Escola::all();
        return $escolas;
    }

    //Cadastrar escola no BD
    public function store(Request $request){
        //cadastro no BD
        $escola = Escola::create($request->all());
        return "Cadastro realizado com sucesso";
    }

    //Deletar escolar do BD
    public function delete(Request $request, $id){
        Escola::delete($id);

        return "Escola Deletada com sucesso";
    }
}