<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facultad extends Model
{
    protected $table = 'facultad';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id', 'nombre'
    ];

    public function programas(){
      return $this->hasMany('App\Programa');
    }
}
