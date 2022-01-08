<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class authController extends Controller
{
    //
    public function view(){
        return view('login');
    }

    public function login(Request $request){
        if ( Auth::attempt([ 'email' => $request->email, 'password' => $request->password,]) ) {
            //
            $request->session()->regenerate();
            return back()->with('msg','Login bem sucedido!');

        }else{
            return back()->withErrors([
                'email' => 'As credencias nao conscidem.',
            ]);
        }
    }

    //register
    public function register(){
        return view('register');
    }

    public function store_user(Request $request){
        //Validacao de credencias
        $credencias= $request->validate([
            'email' => ['string'],
            'password' => ['string', 'min:3'],
        ]);

        User::create([
            'email'=>$request->email,
            'password'=> Hash::make($request->password),
        ]);

        // autenticar usuario e redireciona lo para o dashboard
        if(Auth::attempt(
            ['email' => $request->email,
            'password' => $request->password
            ])
        ){
            return back()->with('msg','Login bem sucedido!');
        }
    }

    public function logout_user(Request $request){
        Auth::logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();
        return back()->with('msg','Sessão encerrada!');
    }
}
