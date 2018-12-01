<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $table = 'perfil';
    protected $fillable = ['name','email','password'];
    protected $primaryKey = 'id';
}
