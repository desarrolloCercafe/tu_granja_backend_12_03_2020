<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    protected $fillable = ['id', 'nombre_sede', 'descripcion_sede', 'telefono_sede'];
}
