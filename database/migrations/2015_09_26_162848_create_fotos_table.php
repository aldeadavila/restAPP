<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fotos', function (Blueprint $table) {
            $table->increments('id');
            $table->String('ruta');
            $table->String('nome')->nullable();
            $table->String('descricao')->nullable;
            $table->boolean('principal');
            $table->integer('imovel_id')->unsigned();
            $table->foreign('imovel_id')->references('id')->on('imovels')->onDelete('cascade');
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
        Schema::drop('fotos');
    }
}
