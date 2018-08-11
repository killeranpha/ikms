<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKhoaVaMonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khoaVaMon', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idKhoa');
            $table->integer('idMon');
            $table->integer('soLuong');
            $table->date('ngayBatDau');
            $table->date('ngayKetThuc');
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
        Schema::dropIfExists('khoaVaMon');
    }
}
