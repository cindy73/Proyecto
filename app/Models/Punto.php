<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Punto extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table = 'puntos';
    protected $primaryKey =  'id_puntos';
    protected $fillable = [ 'id_encuentro', 'id_equipo', 'puntos' ];

    public function Equipo(){
        return $this->belongsTo('App\Models\Equipo','id_equipo');
    }
}
