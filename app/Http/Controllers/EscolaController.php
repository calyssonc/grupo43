<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Escola;

class EscolaController extends Controller
{
    //Apresentar view de cadastro
    public function cadastro(){
        return view('escolas.create');
    }

    //CRUD

    //Cadastrar escola no BD
    public function store(Request $request){
        $validado = $request->validate([
            'nome' => 'required|max:255',
            'tipo' => 'required',
            'localizacao' => 'required',
            'email' => 'required',
            'senha' => 'required|max:15|min:5'
        ]);

        
        
        $escola = Escola::create([
            'nome' =>$request->nome,
            'tipo' =>$request->tipo,
            'localizacao' =>$request->localizacao,
            'email' =>$request->email,
            'senha' =>$request->senha            
        ]);
        return $escola;
    }
    
    //Remover cadastro da escola no BD
   
}