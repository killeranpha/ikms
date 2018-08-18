<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGiaoVienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('giaoVien', function (Blueprint $table) {
            $table->integer('id');
            $table->string('ma');
            $table->string('ghiChu');
            $table->tinyInteger('gioiTinh');
            $table->string('soDienThoai');
            $table->string('CMND');
            $table->date('ngaySinh');
            $table->string('queQuan');
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
        Schema::dropIfExists('giaoVien');
    }
}
