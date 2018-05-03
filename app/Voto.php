<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voto extends Model
{
    protected $table = 'voto';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id', 'mesa_id', 'candidato_id', 'cantidad'
    ];

    public function candidato(){
      return $this->belongsTo('App/Candidato');
    }

    public function mesa(){
      return $this->belongsTo('App/Mesa');
    }

}
