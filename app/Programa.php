<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    protected $table = 'programa';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id', 'nombre', 'facultad_id'
    ];

    public function usuarios(){
      return $this->hasMany('App/User');
    }

    public function facultad(){
      return $this->belongsTo('App/Facultad');
    }
}
