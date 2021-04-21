<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbAdmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_admin',  function (Blueprint $table) { 
            $table->bigIncrements('id');
            $table->string('username', '50');
            $table->string('password_admin', '50');
            $table->string('nama_lengkap', '50');
            $table->string('foto_admin', '50');
        });//
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_admin');//
    }
}
