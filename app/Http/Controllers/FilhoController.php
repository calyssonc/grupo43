<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filho;
use App\Models\Escola;
use App\Http\Requests\StoreFilho;
use App\Models\Beneficiado;

class FilhoController extends Controller
{

    //Apresentar view de cadastro
    public function cadastro()
    {
        if (!$escolas = Escola::all(['id', 'name'])) {
            return redirect()->route('beneficiado.index');
        }
        if (!$beneficiados = Beneficiado::all(['id', 'name'])) {
            return redirect()->route('beneficiado.index');
        }
        return view('beneficiado.filho.cadastro',compact('escolas','beneficiados'));
    }

    //Mostra os dados de um filho
    public function show($id)
    {
        if (!$filho = Filho::where('id', $id)->first()) {
            return redirect()->route('beneficiado.index');
        }
        if (!$escolas = Escola::all(['id', 'name'])) {
            return redirect()->route('beneficiado.index');
        }
        return view('beneficiado/filho/show', compact('filho', 'escolas'));
    }

    //Atualiza os dados de um filho
    public function update(StoreFilho $request, $id)
    {
        if (!$filho = Filho::where('id', $id)->first()) {
            return redirect()->back();
        }

        $filho->update($request->all());

        return redirect()
            ->route('beneficiado.index')
            ->with('message', "Atualizado!");
    }

    //Apaga um registro do filho
    public function destroy($id)
    {

        if (!$filho = Filho::find($id)) {
            return redirect()
                ->route('beneficiado.index')
                ->with('message', "filho não encontrado!");
        }

        $filho->delete();
        return redirect()
            ->route('beneficiado.index')
            ->with('message', "Apagado!");
    }

    //Realiza o cadastro de uma nova beneficiado
    public function store(StoreFilho $request)
    {
        if (Filho::create($request->all())) {
            return redirect()
                ->route('beneficiado.index')
                ->with('message', "Adicionado!");
        } else {
            return redirect()
                ->route('beneficiado.index')
                ->with('message', "Erro ao adicionar!");
        }
    }
}
