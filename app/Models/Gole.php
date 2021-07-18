<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gole extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table = 'goles';
    protected $primaryKey =  'id_goles';
    protected $fillable = ['id_jugador', 'id_encuentro', 'total_goles' ];

    public function Goles(){
        return $this->belongsTo('App\Models\Jugador','id_jugador');
    }
    public function Encuentro(){
        return $this->belongsTo('App\Models\Encuentro','id_encuentro');
    }
}
