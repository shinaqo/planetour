<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnCategoriaIdCategoriaProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('producto', function (Blueprint $table) {
        $table->integer('id_categoria')->unsigned();
        $table->foreign('id_categoria')->references('id_categoria')->on('categoria');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {   
        Schema::table('producto', function (Blueprint $table) {
        $table->dropForeign('categoria_id_categoria_foreign');
         $table->dropColumn('id_categoria');
        });     
    }
}
