<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilhoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filho', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("ra");
            $table->unsignedBigInteger("id_escola");
            $table->unsignedBigInteger("id_beneficiado");
            $table->timestamps();
        });
        Schema::table('filhos', function (Blueprint $table) {
            $table->foreign('id_escola')->references('id')->on("escolas");
            $table->foreign('id_beneficiado')->references('id')->on("beneficiados");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('filho');
    }
}
