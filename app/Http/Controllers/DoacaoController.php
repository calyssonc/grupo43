<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoacaoController extends Controller
{
    //Apresentar view cadastro recebendo o Id do Doador e da Necessidade
    public function cadastro($idDoador, $idNecessita){
        return view('doacao.cadastro', compact('idDoador', 'idNecessita'));
    }

    //CRUD
    //Retornar todos as doacoes no BD
    public function apresentar(){
        
    }

}
