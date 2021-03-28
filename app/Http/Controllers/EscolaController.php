<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEscola;
use Illuminate\Http\Request;
use App\Models\Escola;
use App\Models\User;


class EscolaController extends Controller
{
    public function index(){
        return view('dashboard-escola');
    }

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

    //Atualiza uma escola do BD
    public function atualizarDadoPeloId(StoreEscola $request,  $id){
        //Busca no BD com parametro ID
        $escola = Escola::find($id);

        if($escola->update($request->all())){
            return "Atualizado com sucesso";
        } else {
            return "Falha";
        }
    }

    //Cadastrar escola no BD
    public function store(Request $request, $idUser){
        //cadastro no BD
        $escola = new Escola($request->all());

        $user = User::find($idUser);

        $user->escolas()->save($escola);

        return "Cadastro realizado com sucesso";
    }

    //Deletar escolar do BD
    public function delete(Request $request, $id){
        $escola = Escola::where('id',$id)->delete();

        return "Escola Deletada com sucesso";
    }
}
