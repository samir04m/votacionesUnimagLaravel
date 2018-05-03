<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lugar extends Model
{
    protected $table = 'lugar';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id', 'nombre'
    ];

    public function mesas(){
      return $this->hasMany('App/Mesa');
    }
}
