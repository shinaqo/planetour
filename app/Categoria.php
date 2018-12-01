<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categoria';
    protected $fillable = ['nombre_categoria','tipo_categoria'];
    protected $primaryKey = 'id_categoria';
}
