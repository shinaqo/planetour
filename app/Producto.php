<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'producto';
    protected $fillable = ['nombre_producto','precio_producto','tipoMoneda_producto','dias_producto','descripcion_producto','caracteristicasGira_producto','portada_producto'];
    protected $primaryKey = 'id_producto';
}
