<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbOlahraga extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_olahraga',  function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('tingkatan_olahraga', ['pemula', 'menengah', 'atas']);
            $table->string('jenis_olahraga', '20');
            $table->string('nama_olahraga', '20');
            $table->string('info_olahraga');
            $table->string('info_kalori', '20');
        });//
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('tb_olahraga');//
    }
}
