<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrabajadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trabajador', function (Blueprint $table) {
            $table->increments('id_trabajador');
            $table->string('nombre_trabajador');
            $table->string('apellidoPa_trabajador');
            $table->string('apellidoMa_trabajador');
            $table->string('correo',100);
            $table->integer('numero');
            $table->string('ubicacion_trabajador');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trabajador');
    }
}
