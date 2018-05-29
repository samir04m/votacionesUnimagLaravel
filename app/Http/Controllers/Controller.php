<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Http\Request;
use Auth;
use Redirect;
use App\User;
use App\Mesa;
use App\Organo;
use App\Candidato;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function mi_login(){
    	return view('usuario.login');
    }

    public function index(){
        $organos = Organo::all();
        $candidatos = Candidato::all();
        $date = getDate();
        // dd($organos);
        return view('usuario.index')->with('organos', $organos)->with('candidatos', $candidatos)->with('date',$date);
    }

    public function buscarMesa(Request $request){
        $user = User::find($request->all()['codigo']);
        // dd($user);
        return view('usuario.mi-mesa')->with('user', $user);
    }
}
