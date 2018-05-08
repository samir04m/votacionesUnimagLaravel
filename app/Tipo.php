<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    protected $table = 'tipo';
    protected $primaryKey = 'id';
    public $incrementing = false;

    protected $fillable = [
        'id', 'nombre', 'descripcion'
    ];

    public function usuarios(){
      return $this->hasMany('App\User');
    }
}
