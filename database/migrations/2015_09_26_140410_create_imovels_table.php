<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImovelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imovels', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('tipo_de_imovel', ['Apartamento', 'Casa em Condominio', 'Casa Bairro', 'Sitio', 'Chacara', 'Terreno Residencial', 'Terreno Industrial', 'Terreno Comercial', 'Gapão', 'Casa Litoral', 'Chacara Litoral', 'Sobrado Bairro', 'Ponto Comercial', 'Salão Comercial', 'Belo Sitio', 'Predio Comercial', 'Imóvel Comercial']);
            $table->enum('negocio', ['Venda', 'Aluguel', 'Venda e Locação']);
            $table->string('bairro')->nullable();
            $table->string('cidade');
            $table->string('valor')->nullable();
            $table->string('area')->nullable();
            $table->string('descricao', 1000)->nullable();
            $table->boolean('status');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::drop('imovels');
    }
}
    