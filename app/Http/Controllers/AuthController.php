<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function login(Request $request){
        $request->session()->put('credenciais','');
        return view('site.login');
    }
    public function logout(Request $request){
        $credenciais = $request->session()->put('credenciais','');
        return view('site.index');
    }
    public function authenticate(Request $request){
        $credentials = $request->only('email', 'password');
        $senhaHash = bcrypt($credentials['password']);

        \Log::info('Senha Hasheada: ',['senha_hasheada'=>$senhaHash]);
        if(Auth::attempt($credentials)){
            $request->session()->put('credenciais',$credentials);
            return redirect()->intended(route('app.dash.dash'));

        }else{
            $request->session()->flash('error','Credenciais inválidas');
            return redirect()->intended(route('site.login'));
        }
    }
}
