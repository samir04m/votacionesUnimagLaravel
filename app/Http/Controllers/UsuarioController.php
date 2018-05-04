<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;


class UsuarioController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function redirect(){
    	if(Auth::User()->rol_id == 1){
            // redireccion si es un administrador
            return redirect()->route('admin.index');
        }elseif (Auth::User()->rol_id == 2){
            // redireccion si es un votante
            return redirect()->route('votante.index');
    	}
    	return view('usuario.noEncontrado');
    }

    public function admin_index(){

        $usuarios = User::where('rol_id', 2)->get();
        
        return view('usuario.admin.inicio-admin')->with('usuarios',$usuarios);
    }

    public function votante_index(){
        return view('usuario.votante.inicio-votante');
    }

}
