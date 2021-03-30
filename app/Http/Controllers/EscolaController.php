<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEscola;
use Illuminate\Http\Request;
use App\Models\Escola;

class EscolaController extends Controller
{
    // public function index(){
    //     return view('dashboard-escola');
    // }

    //Retorna todos os registros de escolas
    public function index(){
        echo csrf_token(); 
        $escolas = Escola::paginate();
        return view('escola/index', compact('escolas'));
    }

    //Apresentar view de cadastro
    public function cadastro(){
        return view('escola.cadastro');
    }

    //Realiza o cadastro de uma nova escola
    public function store(StoreEscola $request)
    {
        dd($request->all());
        if(Escola::create($request->all())){
            return redirect()
            ->route('escola.index')
            ->with('message', "Adicionado!");
        }else{
            return redirect()
            ->route('escola.index')
            ->with('message', "Erro ao adicionar!");
        }

    }

    //Mostra o perfil de uma escola cadastrada
    public function show($id){
        if(!$escola = Escola::where('id',$id)->first()){
            return redirect()->route('escola.index');
        }
        return view('escola/show',compact('escola'));
    }

    //Atualiza os dados de uma escola
    public function update(StoreEscola $request,$id){
        if(!$escola = Escola::where('id',$id)->first()){
            return redirect()->back();
        }

        $escola->update($request->all());

        return redirect()
        ->route('escola.index')
        ->with('message',"Atualizado!");
    }

    //Apaga um registro de escola do banco de dados
    public function destroy($id)
    {

        if (!$escola = Escola::find($id)) {
            return redirect()
                ->route('escola.index')
                ->with('message', "Escola não encontrada!");
        }

        $escola->delete();
        return redirect()
            ->route('escola.index')
            ->with('message', "Apagado!");
    }

    public function search(Request $request)
    {
        $filters = $request->except('token');

        $escolas = Escola::where('name', 'LIKE', "%{$request->search}%")
            ->orWhere('localizacao', 'LIKE', "%{$request->search}%")
            ->orWhere('tipo', 'LIKE', "%{$request->search}%")
            ->orWhere('telefone', 'LIKE', "%{$request->search}%")
            ->orWhere('email', 'LIKE', "%{$request->search}%")
            ->paginate();
        return view("/escola/index", compact('escolas', 'filters'));
    }
}
