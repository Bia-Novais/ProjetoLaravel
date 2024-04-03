<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    
    public function index(Request $req){
        $contato = Contato::all();
        return view('welcome')->with("contato", $contato);
    }

    public function adicionar(Request $req){
        $contato = new Contato;
        $contato->nome = $req->nome;
        $contato->telefone = $req->telefone;
        $contato->origem = $req->origem;
        $contato->datacontato = $req->datacontato;
        $contato->observacoes = $req->observacoes;
        $contato->save();
        return redirect()->back();
    }

    public function editar(Request $req){
        //find = o select form * contatos where id = id 
        $contato = Contato::find($req->id);
        return view('editar')->with("contato", $contato);
    }

    public function atualizar(Request $req){
        $contato = Contato::find($req->id);
        $contato->update(
            [
                "nome" => $req->nome,
                "telefone" => $req->telefone,
                "origem" => $req->origem,
                "datacontato" => $req->datacontato,
                "observacoes"  => $req->observacoes
            ]
            );
            return redirect()->back();
    }

    public function excluir(Request $req){
        $contato = Contato::find($req->id);
        $contato->delete();
        return redirect()->back();
    }
}

//-> faça (independente da infromação)
//=> faça se a informação for diferente