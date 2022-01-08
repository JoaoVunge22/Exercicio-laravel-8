<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class contatosController extends Controller
{
    //

    //create contatos
    public function create(){
        return view('add_contatos');
    }

    //store_contatos
    public function store(Request $request){

        //Validação do requisito
        $request->validate([
            'Numero' => ['min:9','max:9']
        ]);

        //guardar na base de dado
        $dados= $request->all();
        $dados['pessoa_id'] = Auth::user()->id;
        Contato::create(
            $dados
        );

        return back()->with('msg','Contato inserido com sucesso!');
    }

    //delete_contato
    public function delete_contato(){
        $delete_contato = Contato::find(request('id'))->delete();
        return back()->with('msg','Contato eliminado!');
    }
}
