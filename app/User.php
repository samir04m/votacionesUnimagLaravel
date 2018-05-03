<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id', 'codigo', 'nombre1', 'nombre2', 'apellido1', 'apellido2', 'email', 'password', 'rol_id', 'programa_id', 'mesa_id', 'estado'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function rol(){
      return $this->belongsTo('App/Rol');
    }

    public function programa(){
      return $this->belongsTo('App/Programa');
    }

    public function mesa(){
      return $this->belongsTo('App/Mesa');
    }

}
