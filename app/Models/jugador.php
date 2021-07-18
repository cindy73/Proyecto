<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jugador extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table = 'jugadors';
    protected $primaryKey =  'id_jugador';
    protected $fillable = ['id_equipo', 'nombres','apellidos', 'cedula', 'capitan'];

}
