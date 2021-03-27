<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->unsignedBigInteger('escola_id');
            $table->timestamps();
        });

<<<<<<< HEAD:database/migrations/2021_03_24_085723_create_materials_table.php
        // Schema::table('materials', function (Blueprint $table) {
        //     $table->foreign('escola_id')->references('id')->on("escolas");
        // });
=======
>>>>>>> DEV:database/migrations/2021_03_24_085723_create_material_table.php
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materials');
    }
}
