<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImovelCaracteristicaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imovel_caracteristica', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('imovel_id');
            $table->integer('caracteristica_id');
            $table->integer('numero');
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
        Schema::drop('imovel_caracteristica');
    }
}
