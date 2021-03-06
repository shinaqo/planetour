<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnCargoIdCargoTrabajadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trabajador', function (Blueprint $table) {
        $table->integer('cargo_id_cargo')->unsigned();
        $table->foreign('cargo_id_cargo')->references('id_cargo')->on('cargo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('trabajador', function (Blueprint $table) {
        $table->dropForeign('trabajador_id_cargo_foreign');
         $table->dropColumn('cargo_id_cargo');
        }); 
    }
}
