<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMonKhoaVaGiaoVienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monKhoaVaGiaoVien', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idMon');
            $table->integer('idKhoa');
            $table->integer('idGiaoVien');
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
        Schema::dropIfExists('monKhoaVaGiaoVien');
    }
}
