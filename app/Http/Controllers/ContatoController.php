<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    
    public function index(Request $req){
        $contato = Contato::all();
        return view('index')->with("contato", $contato);
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
}
