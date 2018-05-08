<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Voto;
use App\Organo;
use App\Candidato;


class VotanteController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth');
    }

    public function votante_index(){
    	$organos = Organo::all();

        return view('usuario.votante.inicio-votante')->with('organos',$organos);
    }

    public function votar(Request $request){

    	foreach ($request->all() as $key => $candidato_id){
            if ($key != "_token" && $key != "mesa_id"){
                echo $candidato_id.'<br>';
                $voto = new Voto();
                $voto->mesa_id = $request->mesa_id;
                $voto->candidato_id = $candidato_id;
                $voto->save();
            }
        }

        $usuario = User::find(Auth::User()->codigo);
        $usuario->estado_id = 4;
        $usuario->save();
        // dd($usuario);

        return Redirect()->route('votante.index');
    }
}
