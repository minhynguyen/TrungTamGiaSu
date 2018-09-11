<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Anh', function (Blueprint $table) {
            $table->unsignedTinyInteger('ha_ma')->autoIncrement()->comment('Mã Ảnh');
            $table->text('ha_ten')->comment('Tên Ảnh');
            $table->unsignedInteger('id')->comment('Tài Khoản Gia Sư');
            $table->foreign('id')->references('id')->on('users')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Anh');
    }
}
