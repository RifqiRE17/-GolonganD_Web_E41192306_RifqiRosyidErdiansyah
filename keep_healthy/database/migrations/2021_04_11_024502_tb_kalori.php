<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbKalori extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_kalori',  function (Blueprint $table) { 
            $table->bigIncrements('id');
            $table->integer('id_user');
            $table->integer('usia');
            $table->integer('tinggi_badan');
            $table->integer('berat_badan');
            $table->integer('jumlah_kalori');
        });//
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_kalori');//
    }
}
