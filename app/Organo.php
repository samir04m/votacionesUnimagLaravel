<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organo extends Model
{
    protected $table = 'organo';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id', 'nombre', 'descripcion'
    ];

    public function candidatos(){
      return $this->hasMany('App/Candidato');
    }
}
