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
    	if(Auth::User()->rol_id == 'A'){
            // redireccion si es un administrador
            return redirect()->route('admin.index');
        }elseif (Auth::User()->rol_id == 'V'){
            // redireccion si es un votante
            return redirect()->route('votante.index');
    	}
    	return view('usuario.noEncontrado');
    }

    public function admin_index($extra = null){

        $usuarios = User::where('rol_id', '<>', 'A')->get();

        $datos_select = $this->datos_select_usuario();
        // dd($datos_select['roles'][1]->nombre[0]);

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
        $usuario->estado = 'No ha votado';
        // $result = $usuario->save();
        // dd($usuario);
        if ($usuario->save()){
            $mensaje = "Registro exitoso";
        }else{
            $mensaje = "No se pudo completar el Registro ";

        }
        return $this->admin_index(['key'=>'mensaje','value'=>$mensaje]);

    }

    public function datos_select_usuario(){
         // para los valores de los select en formulario de registro
        $roles = Rol::where('id', '<>', 'A')->get();
        $programas = Programa::all();
        $mesas = Mesa::all();
        $tipos = User::tipos();

        return ['roles'=>$roles, 'programas'=>$programas, 'mesas'=>$mesas, 'tipos'=>$tipos];
    }

    public function usuario_form_edit($codigo){
        $usuario = User::where('codigo', $codigo)->first();
        $datos_select = $this->datos_select_usuario();
        return view('usuario.admin.usuario-form-edit')->with('usuario', $usuario)->with('datos_select', $datos_select);
    }

     public function usuario_update($id, Request $request){
        $usuario = User::find($id);
        $usuario->fill($request->all());
        // dd($usuario);
        if ($usuario->save()){
            $mensaje = "Actualizacion exitoso";
        }else{
            $mensaje = "No se pudo completar el Actualizacion ";

        }
        return $this->admin_index(['key'=>'mensaje','value'=>$mensaje]);
     }

    public function votante_index(){
        return view('usuario.votante.inicio-votante');
    }

}
