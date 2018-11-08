<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
    protected $table = 'carousel';
    protected $fillable = ['titulo_carousel','ubicacion_carousel'];
    protected $primaryKey = 'id_carousel';
}
