<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;

class User extends Authenticatable
{
    use Notifiable;

    // protected $table = 'users';
    // protected $primaryKey = 'id';

    protected $fillable = [
        'id', 'codigo', 'nombre1', 'nombre2', 'apellido1', 'apellido2', 'email', 'password', 'rol_id', 'programa_id', 'tipo', 'mesa_id', 'estado'
    ];

    protected $hidden = [
        'remember_token'
    ];

    public function rol(){
      return $this->belongsTo('App\Rol');
    }

    public function programa(){
      return $this->belongsTo('App\Programa');
    }

    public function mesa(){
      return $this->belongsTo('App\Mesa');
    }

    public function candidato(){
      return $this->hasOne('App\Candidato');
    }

    // Obtener los valores del campo enum
    public static function tipos(){

        $tipo = DB::select( DB::raw("SHOW COLUMNS FROM users WHERE Field = 'tipo'") )[0]->Type;
        preg_match('/^enum\((.*)\)$/', $tipo, $matches);
        $enum = array();
        foreach( explode(',', $matches[1]) as $value ){
            $v = trim( $value, "'" );
            $enum = array_add($enum, $v, $v);
        }
        return $enum;
    }

}
