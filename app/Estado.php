<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table = 'estado';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id', 'nombre', 'descripcion'
    ];

    public function usuarios(){
      return $this->hasMany('App\User');
    }
}
