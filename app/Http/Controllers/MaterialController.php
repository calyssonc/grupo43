<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Material;
use App\Models\Escola;

class MaterialController extends Controller
{
    //Apresentar view de cadastro
    public function cadastro($id){
        $idEscola = $id;
        return view('material.cadastro', compact('idEscola'));
    }    

    //CRUD
    //Retornar todos materials no BD
    public function apresentarTodos(){
        //Busca no bd
        $materiais['materiais'] = Material::all();
        return $materiais;
    }

    //Atualiza uma escola do BD
    public function atualizarDadoPeloId(StoreMaterial $request,  $id){
        //Busca no BD com parametro ID
        $material = Material::find($id);

        if($material->update($request->all())){
            return "Atualizado com sucesso";
        } else {
            return "Falha";
        }
    }

    //Cadastrar material no BD
    public function store(Request $request){
        //cadastro no bd
        $material = new Material(['nome' => $request->nome]);

        $escola = Escola::find($request->escola_id);

        $escola->materiais()->save($material);

        return "Cadastro  concluido";
    }

    //Deletar material do BD
    public function delete(Request $request,$id){
        Material::where('id', $id)->delete($id);

        return "Material Deletado";
    }
}
