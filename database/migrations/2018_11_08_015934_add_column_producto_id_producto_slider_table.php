<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnProductoIdProductoSliderTable extends Migration
{
     /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('slider', function (Blueprint $table) {
        $table->integer('producto_id_producto')->unsigned();
        $table->foreign('producto_id_producto')->references('id_producto')->on('producto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('slider', function (Blueprint $table) {
        $table->dropForeign('producto_id_producto_foreign');
         $table->dropColumn('producto_id_producto');
        });
    }
}
