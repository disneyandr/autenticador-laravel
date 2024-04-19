<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashController extends Controller
{
    //
    public function index(Request $request){
        $credenciais = $request->session()->get('credenciais');
        // dd($credenciais);
        if($credenciais){
            return view('app.dash.index',['credenciais' => $credenciais]);
        }else{
            return view('site.login');
        }
    }

}
