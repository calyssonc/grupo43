<?php

namespace App\Http\Controllers;

use App\Models\Doacao;
use App\Models\Doador;
use App\Models\Necessita;
use Illuminate\Http\Request;

class DoacaoController extends Controller
{
    //Apresentar view cadastro recebendo o Id do Doador e da Necessidade
    public function cadastro($idDoador, $idNecessita){
        return view('doacao.cadastro', compact('idDoador', 'idNecessita'));
    }

    //CRUD

    //Retornar todos as doacoes no BD
    public function apresentarTodos(){
        //Busca todos as doações do BD
        $doacoes['doacoes'] = Doacao::all();
        return $doacoes;
    }

    //Atualiza uma doacao do BD
    public function atualizarDadoPeloId(StoreDoacao $request,  $id){
        //Busca no BD com parametro ID
        $doacao = Doacao::find($id);

        if($doacao->update($request->all())){
            return "Atualizado com sucesso";
        } else {
            return "Falha";
        }
    }

    //Cadastrar Doacao no BD
    public function store(Request $request){
       //cadastro no bd
       $doacao = new Doacao($request->all());

       $doador = Doador::find($request->doador_id);

       $doador->doacoes()->save($doacao);

       $necessita = Necessita::find($request->necessita_id);

       $necessita->doacao()->save($doacao);

       return "Cadastro  concluido";
    }

    //Deletar doacao do BD
    public function delete(Request $request, $id){
        $doacao = Doacao::where('id',$id)->delete();

        return "Doacao Deletada com sucesso";
    }
}
