<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBeneficiado;
use App\Http\Requests\StoreFilho;
use Illuminate\Http\Request;
use App\Models\Beneficiado;
use App\Models\Escola;
use App\Models\Filho;
use Illuminate\Support\Facades\Hash;

class BeneficiadoController extends Controller
{

    public function __construct()
    {
        //$this->middleware('auth');
    }

    // public function index(){
    //     return view('dashboard-beneficiado');
    // }

    //Retorna todos os registros de beneficiados
    public function index(){
        $beneficiados = Beneficiado::paginate();
        return view('beneficiado/index', compact('beneficiados'));
    }

    //Apresentar view de cadastro
    public function cadastro(){
        return view('beneficiado.cadastro');
    }

    //Realiza o cadastro de uma nova beneficiado
    public function store(StoreBeneficiado $request)
    {

        if(Beneficiado::create([
            'name' => $request->name,
            'localizacao' => $request->localizacao,
            'cpf' => $request->cpf,
            'telefone' => $request->telefone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ])){
            return redirect()
            ->route('beneficiado.login')
            ->with('message', "Adicionado!");
        }else{
            return redirect()
            ->route('beneficiado.index')
            ->with('message', "Erro ao adicionar!");
        }

    }

    //Mostra o perfil de uma beneficiado cadastrada
    public function show($id){
        if(!$beneficiado = Beneficiado::where('id',$id)->first()){
            return redirect()->route('beneficiado.index');
        }
        return view('beneficiado/show',compact('beneficiado'));
    }

    //Atualiza os dados de uma beneficiado
    public function update(StoreBeneficiado $request,$id){
        if(!$beneficiado = Beneficiado::where('id',$id)->first()){
            return redirect()->back();
        }

        $beneficiado->update($request->all());

        return redirect()
        ->route('beneficiado.index')
        ->with('message',"Atualizado!");
    }

    //Apaga um registro de beneficiado do banco de dados
    public function destroy($id)
    {

        if (!$beneficiado = Beneficiado::find($id)) {
            return redirect()
                ->route('beneficiado.index')
                ->with('message', "beneficiado não encontrado!");
        }

        $beneficiado->delete();
        return redirect()
            ->route('beneficiado.index')
            ->with('message', "Apagado!");
    }

    public function search(Request $request)
    {
        $filters = $request->except('token');

        $beneficiados = Beneficiado::where('name', 'LIKE', "%{$request->search}%")
            ->orWhere('localizacao', 'LIKE', "%{$request->search}%")
            ->orWhere('cpf', 'LIKE', "%{$request->search}%")
            ->orWhere('email', 'LIKE', "%{$request->search}%")
            ->orWhere('telefone', 'LIKE', "%{$request->search}%")
            ->paginate();
        return view("/beneficiado/index", compact('beneficiados', 'filters'));
    }

}
