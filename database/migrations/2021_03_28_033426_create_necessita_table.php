<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNecessitaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('necessita', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('material_qty');
            $table->string('status');
            $table->unsignedBigInteger('id_material');
            $table->unsignedBigInteger('id_filho');
            $table->timestamps();
        });
        Schema::table('necessita', function (Blueprint $table) {
            $table->foreign('id_material')->references('id')->on("material");
            $table->foreign('id_filho')->references('id')->on("filhos");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('necessita');
    }
}
