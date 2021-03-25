<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeneficiadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beneficiado', function (Blueprint $table) {
            $table->id();
            $table->string('nome',220);
            $table->string('endereco',220);
            $table->string('uf');
            $table->string('cpf')->unique();
            $table->string('email')->unique();
            $table->string('senha',220);
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
        Schema::dropIfExists('beneficiado');
    }
}
