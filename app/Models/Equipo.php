<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class equipo extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table = 'equipos';
    protected $primaryKey =  'id_equipo';
    protected $fillable = ['nombre_equipo', 'fecha_creacion', ];
}
