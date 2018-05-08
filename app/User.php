<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;

class User extends Authenticatable
{
    use Notifiable;

    // protected $table = 'users';
    protected $primaryKey = 'codigo';
    public $incrementing = false;

    protected $fillable = [
        'codigo', 'nombre1', 'nombre2', 'apellido1', 'apellido2', 'email', 'password', 'rol_id', 'tipo_id', 'programa_id', 'mesa_id', 'estado_id'
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

    public function tipo(){
      return $this->belongsTo('App\Tipo');
    }

    public function estado(){
      return $this->belongsTo('App\Estado');
    }

    public function candidato(){
      return $this->hasOne('App\Candidato');
    }

}
