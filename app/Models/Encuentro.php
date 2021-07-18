<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encuentro extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table = 'encuentros';
    protected $primaryKey =  'id_encuentro';
    protected $fillable = ['id_encuentro', 'id_horario', 'id_equipo1', 'id_equipo2','estado', 'fecha' ];

    public function Local(){
        return $this->belongsTo('App\Models\Equipo','id_equipo1');
    }
     public function Visitante(){
        return $this->belongsTo('App\Models\Equipo','id_equipo2');
    }
     public function Horario(){
        return $this->belongsTo('App\Models\Horario','id_horario');
    }
}
