<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table = 'slider';
    protected $fillable = ['carpeta','src'];
    protected $primaryKey = 'id_slider';
}
