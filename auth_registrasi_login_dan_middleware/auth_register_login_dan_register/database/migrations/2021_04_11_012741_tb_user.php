<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_user',  function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username', '50');
            $table->string('password', '50');
            $table->string('nama', '50');
            $table->integer('umur');
            $table->enum('jenis_kelamin', ['pria', 'wanita']);
        });//
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_user');//
    }
}
