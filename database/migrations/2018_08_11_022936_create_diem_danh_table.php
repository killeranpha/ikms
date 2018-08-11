<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiemDanhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diemDanh', function (Blueprint $table) {
            $table->increments('id');
            $table->date('ngayDiemDanh');
            $table->integer('idGiaoVien');
            $table->integer('idKhoa');
            $table->integer('idMonHoc');
            $table->integer('idSinhVien');
            $table->tinyInteger('coMat');
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
        Schema::dropIfExists('diemDanh');
    }
}
