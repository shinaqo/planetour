<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnPaisIdPaisProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('producto', function (Blueprint $table) {
        $table->integer('id_pais')->unsigned();
        $table->foreign('id_pais')->references('id_pais')->on('pais');
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
        $table->dropForeign('producto_id_pais_foreign');
         $table->dropColumn('id_pais');
        });     
    }
}
