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

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function admin_index(){

        $usuarios = User::where('rol_id', '<>', 'A')->get();

        $datos_select = $this->datos_select_usuario();
        // dd($datos_select['roles'][1]->nombre[0]);

        return view('usuario.admin.inicio-admin')->with('usuarios',$usuarios)->with('datos_select', $datos_select);
    }

    public function usuario_create(Request $request){
        $usuario = new User($request->all());
        $usuario->password = bcrypt($request->password);
        $usuario->email = $request->codigo.'@gmail.com';
        $usuario->estado = 'No ha votado';
        // $result = $usuario->save();
        // dd($usuario);
        $usuario->save();

        Session::flash('message', 'Registro exitoso!');
        return Redirect::to('/admin');
        
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
        $usuario->save();

        Session::flash('message', 'Actualizacion exitosa!');
        return Redirect::to('/admin');
     }

     public function usuario_delete($id){
        $usuario = User::find($id);
        $usuario->delete();

        Session::flash('message', 'Eliminacion exitosa!');
        return Redirect::to('/admin');
     }


     public function autorizar_usuario($codigo){
        $usuario = User::where('codigo','=',$codigo)->first();
        $usuario->estado = 'Autorizado';
        $usuario->save();

        Session::flash('message', 'El usuario '.$usuario->codigo.' ahora se encuentra autorizado para votar');
        return Redirect::to('/admin');
     }

     public function desautorizar_usuario($codigo){
        $usuario = User::where('codigo','=',$codigo)->first();
        $usuario->estado = 'No ha votado';
        $usuario->save();

        Session::flash('message', 'El usuario '.$usuario->codigo.' se ha desautorizado para votar');
        return Redirect::to('/admin');
     }
}
