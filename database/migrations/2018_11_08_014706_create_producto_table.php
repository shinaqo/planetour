<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->increments('id_producto');
            $table->string('nombre_producto');
            $table->integer('precio_producto');
            $table->string('tipoMoneda_producto');
            $table->integer('dias_producto');
            $table->string('descripcion_producto',1500);
            $table->string('caracteristicasGira_producto',500);
            $table->string('portada_producto',255);

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
        Schema::dropIfExists('producto');
    }
}
