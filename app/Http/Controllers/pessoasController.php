<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use App\Models\Pessoa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function GuzzleHttp\Promise\all;

class pessoasController extends Controller
{
    //ver pessoas
    public function view(){
        $pessoas = Pessoa::where('estado','!=','Removido')->get();
        return view('ver_pessoas_existente',[
            'Pessoa' => $pessoas,
        ]);
    }

    //ver pessoas
    public function create(){
        return view('add_pessoas');
    }

    //store_pessoas
    public function store(Request $request){

        //Validação do requisito
        $request->validate([
            'nome' => ['string','min:5'],
            'email' => ['email','unique:pessoas,email']
        ]);

        $dados = $request->all();
        $dados['imagem'] = 'https://app.pixelencounter.com/api/basic/monsters/random';

        //guardar na base de dado
        Pessoa::create(
            $dados
        );

        return back()->with('msg','Pessoa inserida com sucesso!');
    }

    //Delete
    public function delete(){

        $delete = Pessoa::where('id' ,request('id'))->first();
        $delete->update([
            'estado' => 'Removido',
        ]);
        return back()->with('msg','Removido com sucesso!');
    }

    //create_update
    public function create_update(){
        $pessoas = Pessoa::find(request('id'));
        return view('edit_pessoa',[
            'Pessoa' => $pessoas,
        ]);
    }

    //create_update
    public function update_pessoa(Request $request){
        $pessoas = Pessoa::find(request('id'));

        $pessoas->update($request->all());

        return back()->with('msg','Pessoa atualizada com sucesso!');
    }

    //detalhes
    public function detalhes (){

        $pessoas = Pessoa::find(request('id'));
        $contacto= Contato::where('pessoa_id',Auth::user()->id)->get();
        return view('detalhes',[
            'Pessoa' => $pessoas,
            'contacto' => $contacto,
        ]);

    }
}
