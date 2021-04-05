<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEscola;
use App\Http\Requests\StoreMaterial;
use Illuminate\Http\Request;
use App\Models\Escola;
use App\Models\Filho;
use App\Models\Material;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class EscolaController extends Controller
{

    //Retorna todos os registros de escolas
    public function index(){
        $id = Auth::guard('escola')->user()->id;
        if(!$escola = Escola::where('id',$id)->first()){
            return redirect()->route('escola.index');
        }
        return view('escola/index', compact('escola'));
    }

    //Apresentar view de cadastro
    public function cadastro(){
        return view('escola.cadastro');
    }

    //Apresentar view de cadastro
    public function cadastroMaterial(){
        if (!$escolas = Escola::all(['id', 'name'])) {
            return redirect()->route('beneficiado.index');
        }
        return view('escola.cadastro-material',compact('escolas'));
    }

    //Realiza o cadastro de uma nova escola
    public function store(StoreEscola $request)
    {
        /*
        if(Escola::where('telefone', $request->telefone){
            
        })
        */

        if(Escola::create([
            'name' => $request->name,
            'localizacao' => $request->localizacao,
            'tipo' => $request->tipo,
            'telefone' => $request->telefone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ])){
            return redirect()
            ->route('escola.index')
            ->with('message', "Adicionado!");
        }else{
            return redirect()
            ->route('escola.index')
            ->with('message', "Erro ao adicionar!");
        }

    }

    //Realiza o cadastro de uma nova escola
    public function storeMaterial(StoreMaterial $request)
    {
        if(Material::create($request->all())){
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
    public function show(){

        if(Auth::guard('escola')->check()){
            $id = Auth::guard('escola')->user()->id;
        }else{
            return redirect()->route('escola.index');
        }

        if(!$escola = Escola::where('id',$id)->first()){
            return redirect()->route('escola.index');
        }
        $alunos = $escola->filho;
        return view('escola/show',compact('escola','alunos'));
    }

    //Mostra o perfil de uma escola para um doador
    public function show2($id){
        if(!$escola = Escola::where('id',$id)->first()){
            return redirect()->route('doador.index');
        }
        $alunos = $escola->filho;
        return view('escola/show',compact('escola','alunos'));
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
