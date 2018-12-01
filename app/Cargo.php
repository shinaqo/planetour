<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $table = 'cargo';
    protected $fillable = ['nombre_cargo'];
    protected $primaryKey = 'id_cargo';	
}
