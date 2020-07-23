<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
    protected $table = 'colaborador';
    protected $fillable = ['nombre_colaborador','ubicacion','estado'];
    protected $primaryKey = 'id_colaborador';
}
