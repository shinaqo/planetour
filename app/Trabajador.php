<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    protected $table = 'trabajador';
    protected $fillable = ['nombre_trabajador','apellidoPa_trabajador','apellidoMa_trabajador','correo','numero','ubicacion_trabajador'];
    protected $primaryKey = 'id_trabajador';
}
