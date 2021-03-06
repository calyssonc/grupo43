<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDoacao;
use App\Http\Requests\StoreDoador;
use App\Http\Requests\StoreNecessita;
use App\Models\Doacao;
use Illuminate\Http\Request;
use App\Models\Doador;
use App\Models\Escola;
use App\Models\Necessita;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DoadorController extends Controller
{

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
            ->route('login')
            ->with('message', "Adicionado!");
        }else{
            return redirect()
            ->route('doador.index')
            ->with('message', "Erro ao adicionar!");
        }

    }

    //Realiza o cadastro de uma nova doador
    public function doarMaterial($necessita_id)
    {

        if(Auth::guard('doador')->check()){
            $id = Auth::guard('doador')->user()->id;
        }else{
            $id = null;
        }

        if(!$necessita = Necessita::where('id',$necessita_id)->first()){
            return redirect()->back();
        }

        if($necessita->update([
            'status' => '1',
        ]) &&
            Doacao::create([
                'id_doador' => $id,
                'id_necessita' => $necessita_id,
            ])
        ){
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
        if (!$doacoes = Doacao::where(['id_doador' => $id])->get()) {
            return redirect()->route('doador.index');
        }
        return view('doador/show',compact('doador','doacoes'));
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
                ->with('message', "doador n??o encontrado!");
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
