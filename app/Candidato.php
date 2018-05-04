<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    protected $table = 'candidato';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id', 'numero', 'organo_id', 'foto'
    ];

    public function usuario(){
      return $this->belongsTo('App\User');
    }

    public function organo(){
      return $this->belongsTo('App\Organo');
    }

    public function votos(){
      return $this->hasMany('App\Voto');
    }

}
