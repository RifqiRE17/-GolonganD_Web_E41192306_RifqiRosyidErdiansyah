<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbNutrisi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_nutrisi',  function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('jenis_nutrisi');
            $table->string('nama_nutrisi');
            $table->string('kalori');
        });//
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_nutrisi');//
    }
}