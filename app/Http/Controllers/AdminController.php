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
use App\Tipo;
use App\Estado;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function admin_index(){

        $usuarios = User::where('rol_id', '<>', 'A')->orderBy('estado_id', 'asc')->get();

        $datos_select = $this->datos_select_usuario();
        // dd($datos_select['roles'][1]->nombre[0]);

        return view('usuario.admin.inicio-admin')->with('usuarios',$usuarios)->with('datos_select', $datos_select);
    }

    public function usuario_create(Request $request){
        $usuario = new User($request->all());
        $usuario->password = bcrypt($request->password);
        $usuario->estado_id = 1;
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
        $tipos = Tipo::all();
        $estados = Estado::all();

        return ['roles'=>$roles, 'programas'=>$programas, 'mesas'=>$mesas, 'tipos'=>$tipos, 'estados'=>$estados];
    }

    public function usuario_form_edit($codigo){
        $usuario = User::find($codigo);
        $datos_select = $this->datos_select_usuario();
        return view('usuario.admin.usuario-form-edit')->with('usuario', $usuario)->with('datos_select', $datos_select);
    }

     public function usuario_update($codigo, Request $request){
        $usuario = User::find($codigo);
        $usuario->fill($request->all());
        // dd($usuario);
        $usuario->save();

        Session::flash('message', 'Actualizacion exitosa!');
        return Redirect::to('/admin');
        // return redirect()->back();
     }

     public function usuario_delete($codigo){
        $usuario = User::find($codigo);
        $usuario->delete();

        Session::flash('message', 'Eliminacion exitosa!');
        return Redirect::to('/admin');
     }


     public function autorizar_usuario($codigo){
        // $usuario = User::where('codigo','=',$codigo)->first();
        $usuario = User::find($codigo);
        $usuario->estado = 'Autorizado';
        $usuario->save();

        Session::flash('message', 'El usuario '.$usuario->codigo.' ahora se encuentra autorizado para votar');
        return Redirect::to('/admin');

     }

     public function desautorizar_usuario($codigo){
        // $usuario = User::where('codigo','=',$codigo)->first();
        $usuario = User::find($codigo);
        $usuario->estado = 'No ha votado';
        $usuario->save();

        Session::flash('message', 'El usuario '.$usuario->codigo.' se ha desautorizado para votar');
        return Redirect::to('/admin');
     }
}
