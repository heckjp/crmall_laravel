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
            $table->string('nome',300)->nullable(false)->charset('latin1')->collation('latin1_swedish_ci');
            $table->date('data_nascimento')->nullable(false);
            $table->char('sexo',1)->nullable(false)->charset('latin1')->collation('latin1_swedish_ci');
            $table->char('cep',8)->nullable()->charset('latin1')->collation('latin1_swedish_ci');
            $table->string('endereco',300)->nullable()->charset('latin1')->collation('latin1_swedish_ci');
            $table->string('complemento',200)->nullable()->charset('latin1')->collation('latin1_swedish_ci');
            $table->string('bairro',300)->nullable()->charset('latin1')->collation('latin1_swedish_ci');
            $table->integer('numero')->nullable();
            $table->string('cidade',300)->nullable()->charset('latin1')->collation('latin1_swedish_ci');
            $table->char('estado',2)->nullable()->charset('latin1')->collation('latin1_swedish_ci');
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
