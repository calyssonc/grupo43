<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDoador;
use Illuminate\Http\Request;
use App\Models\Doador;
use App\Models\Escola;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DoadorController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth:doador');
    }

    //Retorna todos os registros de doadors
    public function index(){
        $escolas = Escola::paginate();
        return view('doador.index', compact('escolas'));
    }

    //Apresentar view de cadastro
    public function cadastro(){
        return view('doador.cadastro');
    }

    //Realiza o cadastro de uma nova doador
    public function store(StoreDoador $request)
    {

        if(Doador::create([
            'name' => $request->name,
            'localizacao' => $request->localizacao,
            'cpf' => $request->cpf,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ])){
            return redirect()
            ->route('doador.index')
            ->with('message', "Adicionado!");
        }else{
            return redirect()
            ->route('doador.index')
            ->with('message', "Erro ao adicionar!");
        }

    }

    //Mostra o perfil de uma doador cadastrada
    public function show(){
        $id = Auth::guard('doador')->user()->id;
        if(!$doador = Doador::where('id',$id)->first()){
            return redirect()->route('doador.index');
        }
        return view('doador/show',compact('doador'));
    }

    //Atualiza os dados de uma doador
    public function update(StoreDoador $request,$id){
        if(!$doador = Doador::where('id',$id)->first()){
            return redirect()->back();
        }

        $doador->update($request->all());

        return redirect()
        ->route('doador.index')
        ->with('message',"Atualizado!");
    }

    //Apaga um registro de doador do banco de dados
    public function destroy($id)
    {

        if (!$doador = Doador::find($id)) {
            return redirect()
                ->route('doador.index')
                ->with('message', "doador não encontrado!");
        }

        $doador->delete();
        return redirect()
            ->route('doador.index')
            ->with('message', "Apagado!");
    }

    public function search(Request $request)
    {
        $filters = $request->except('token');

        $doadors = Doador::where('name', 'LIKE', "%{$request->search}%")
            ->orWhere('localizacao', 'LIKE', "%{$request->search}%")
            ->orWhere('cpf', 'LIKE', "%{$request->search}%")
            ->orWhere('email', 'LIKE', "%{$request->search}%")
            ->paginate();
        return view("/doador/index", compact('doadors', 'filters'));
    }
}
