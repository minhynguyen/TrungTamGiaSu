<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhuHuynhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PhuHuynh', function (Blueprint $table) {
            $table->unsignedTinyInteger('ph_ma')->autoIncrement()->comment('Mã Phụ Huynh');
            $table->string('ph_ten', 150)->comment('Tên Phụ Huynh');
            $table->string('ph_sdt', 11)->comment('SĐT Phụ Huynh');
            $table->string('ph_diachi', 190)->comment('Địa Chỉ');
            $table->timestamp('ph_taomoi')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('ph_capnhat')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->tinyInteger('ph_trangthai')->default('2')->comment('Trạng thái # Trạng thái : 1-khóa, 2-khả dụng');
            $table->unsignedInteger('id')->comment('Tài Khoản Gia Sư');
            $table->foreign('id')->references('id')->on('users')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
        DB::statement("ALTER TABLE `PhuHuynh` comment 'PhuHuynh'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('PhuHuynh');
    }
}
