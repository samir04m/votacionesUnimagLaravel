<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
}
