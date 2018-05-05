<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
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
    	if(Auth::User()->rol_id == 1){
            // redireccion si es un administrador
            return redirect()->route('admin.index');
        }elseif (Auth::User()->rol_id == 2){
            // redireccion si es un votante
            return redirect()->route('votante.index');
    	}
    	return view('usuario.noEncontrado');
    }

    public function admin_index($extra = null){

        $usuarios = User::where('rol_id', 2)->get();

        // para los valores de los select en formulario de registro
        $roles = Rol::where('id', '<>', 1)->get();
        $programas = Programa::all();
        $mesas = Mesa::all();

        $datos_select = ['roles'=>$roles, 'programas'=>$programas, 'mesas'=>$mesas];
        // dd($datos_select);
        if ($extra == null){
            return view('usuario.admin.inicio-admin')->with('usuarios',$usuarios)->with('datos_select', $datos_select);
        }else{
            return view('usuario.admin.inicio-admin')->with('usuarios',$usuarios)->with('datos_select', $datos_select)->with($extra['key'],$extra['value']);
        }
    }

    public function registar_usuario(Request $request){
        $usuario = new User($request->all());
        $usuario->password = bcrypt($request->password);
        $usuario->email = $request->codigo.'@gmail.com';
        // $result = $usuario->save();
        // dd($result);
        if ($usuario->save()){
            $mensaje = "Registro exitoso";
        }else{
            $mensaje = "No se pudo completar el Registro ";

        }
        return $this->admin_index(['key'=>'mensaje','value'=>$mensaje]);

    }

    public function votante_index(){
        return view('usuario.votante.inicio-votante');
    }

}
