<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMonKhoaVaSinhVienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monKhoaVaSinhVien', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idMon');
            $table->integer('idKhoa');
            $table->integer('idSinhVien');
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
        Schema::dropIfExists('monKhoaVaSinhVien');
    }
}
