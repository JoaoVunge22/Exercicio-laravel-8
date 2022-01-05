<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class contactController extends Controller
{


    //view contacto
    public function index () {
        $contacto = Contacto::all();
        return view('index',[
            'contacto' => $contacto
        ]);
    }

     //store
     public function store(Request $request){
         $request->validate([
             'nome' => ['required','string','min:6'],
             'contacto' => ['required','max:9'],
             'email' => ['required','email'],
         ]);

         Contacto::create(
             $request->all()
         );

         return back()->with('msg','Ensirido com sucesso!');

    }

    //create_update
    public function create_update(){

        $contacto = Contacto::find(request('id'));
        return view('edit',[
            'edit' => $contacto
        ]);
    }

    //update
    public function update(Request $request){

        $contacto = Contacto::find($request->id);
        $contacto->update($request->all());
        return redirect('/')->with('msg','Atualizado com sucesso!');
    }

    //delete
    public function delete(){

        Contacto::where('id', request('id'))->delete();
        return redirect('/')->with('msg','Excluido com sucesso!');
    }

    //detalhes
    public function detalhes () {

        //dd(request('id'));

        $contacto = Contacto::find(request('id'));
        return view('detalhes',[
            'contacto' => $contacto
        ]);
    }
}
