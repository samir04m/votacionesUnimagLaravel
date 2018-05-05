<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Voto;


class VotanteController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth');
    }

    public function votante_index(){
    

        return view('usuario.votante.inicio-votante');
    }
}
