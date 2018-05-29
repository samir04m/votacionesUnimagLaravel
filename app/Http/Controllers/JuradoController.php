<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Redirect;
use App\User;
use App\Mesa;
use App\Organo;
use App\Candidato;

class JuradoController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function jurado_index(){
        $mesa = Mesa::where('id', Auth::User()->mesa_id)->first();
        $date = getDate();
         // dd($date['hours']);
        return view('usuario.jurado.inicio-jurado')->with('usuarios',$mesa->usuarios)->with('date',$date);
    }

    public function autorizar($codigo){
       $usuario = User::find($codigo);
       $usuario->estado_id = 2;
       $usuario->save();
       return Redirect::to('/jurado');
    }

    public function desautorizar($codigo){
       $usuario = User::find($codigo);
       $usuario->estado_id = 1;
       $usuario->save();
       return Redirect::to('/jurado');
    }

    public function buscarVotante(Request $request){
        // $mesa = Mesa::where('id', Auth::User()->mesa_id)->first();
        $date = getDate();
        $user = User::where('codigo',$request->all()['codigo'])->get();
        if ((count($user)>0) && ($user[0]->mesa_id != (int) $request->all()['mesa_id'] )){
            // dd( $user[0]);
            return view('usuario.jurado.inicio-jurado')->with('usuarios',$user)->with('date',$date)->with("useri",$user[0]);
        }
        return view('usuario.jurado.inicio-jurado')->with('usuarios',$user)->with('date',$date);
    }

    public function resultados(){
        $organos = Organo::all();
        $candidatos = Candidato::all();
        // dd($organos);
        return view('usuario.jurado.resultados')->with('organos', $organos)->with('candidatos', $candidatos);
    }
}
