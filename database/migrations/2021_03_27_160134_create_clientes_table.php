<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome',300)->nullable(false);
            $table->date('data_nascimento')->nullable(false);
            $table->char('sexo',1)->nullable(false);
            $table->char('cep',8)->nullable();
            $table->string('endereco',300)->nullable();
            $table->string('bairro',200)->nullable();
            $table->string('complemento',100)->nullable();
            $table->integer('numero')->nullable();
            $table->string('cidade',300)->nullable();
            $table->char('estado',2)->nullable();
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
        Schema::dropIfExists('clientes');
    }
}
