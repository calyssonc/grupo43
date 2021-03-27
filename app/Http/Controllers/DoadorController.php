<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDoador;
use Illuminate\Http\Request;
use App\Models\Doador;
use App\Models\User;

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
    public function atualizarDadoPeloId(StoreDoador $request,  $id){
        //Busca no BD com parametro ID
        $doador = Doador::find($id);

        if($doador->update($request->all())){
            return "Atualizado com sucesso";
        } else {
            return "Falha";
        }
    }

    //Deletar doador do BD
    public function delete(Request $request, $id){
        $escola = Doador::where('id',$id)->delete();

        return "Doador Deletado com sucesso";
    }

    //Cadastrar doador no BD
    public function store(Request $request, $idUser){
        //cadastro no BD
        $doador = new Doador($request->all());

        $user = User::find($idUser);

        $user->doadores()->save($doador);

        return "Cadastro realizado com sucesso";
    }
}
