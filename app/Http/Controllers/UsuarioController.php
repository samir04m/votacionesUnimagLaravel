<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use Redirect;

use App\User;
use App\Rol;
use App\Programa;
use App\Mesa;


class UsuarioController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function redirect(){
    	if(Auth::User()->rol_id == 'A'){
            // redireccion si es un administrador
            return redirect()->route('admin.index');
        }elseif (Auth::User()->rol_id == 'V'){
            // redireccion si es un votante
            return redirect()->route('votante.index');
    	}
    	return view('usuario.noEncontrado');
    }


}
