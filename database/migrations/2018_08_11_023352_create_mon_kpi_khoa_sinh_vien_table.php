<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMonKpiKhoaSinhVienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monKpiKhoaSinhVien', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idMon');
            $table->integer('idKhoa');
            $table->integer('idSinhVien');
            $table->integer('idKpi');
            $table->integer('idChiTiet');
            $table->float('diem');
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
        Schema::dropIfExists('monKpiKhoaSinhVien');
    }
}
