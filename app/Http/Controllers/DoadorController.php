<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doador;

class DoadorController extends Controller
{
    //Apresentar view de cadastro
    public function cadastro(){
        return view('doador.cadastro');
    }
    //Apresentar view de Edição
    public function editar(Request $request, $id){
        $doador = Doador::find($id);
        return view('doador.editar', compact('doador'));
    }

    //CRUD
    //Retorna todos doadores do BD
    public function apresentarTodos(){
        //Busca no bd
        $doadores['doadores'] = Doador::all();
        return $doadores;
    }
    
    //Atualiza um doador do BD
    //Não foi resolvido pois há problemas com laravel
    public function atualizarDadoPeloId(Request $request,  $id){
        //Busca no BD com parametro ID
        $doador = Doador::find($id);
        $doador($request->all());
        $doador.save();

        return "Atualizado com sucesso";
    }

    //Cadastrar doador no BD
    public function store(Request $request){
        //cadastro no BD
        $doador = Doador::create($request->all());
        return "Cadastro realizado com sucesso";
    }
}
