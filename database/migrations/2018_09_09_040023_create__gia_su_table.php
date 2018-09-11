<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGiaSuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('GiaSu', function (Blueprint $table) {
            $table->unsignedTinyInteger('gs_ma')->autoIncrement()->comment('Mã Gia Sư');
            $table->string('gs_ten', 150)->comment('Tên Gia Sư');
            $table->unsignedTinyInteger('gs_gioitinh')->comment('0: Nam - 1: Nữ');
            $table->string('gs_sdt', 11)->comment('SĐT Gia Sư');
            $table->string('gs_cmnd', 20)->comment('CMND Gia Sư');
            $table->string('gs_diachi', 190)->comment('Địa Chỉ');
            $table->string('gs_hocvi', 150)->comment('Học Vị');
            $table->text('gs_gioithieu')->comment('Gia Sư Giới Thiệu');
            $table->timestamp('gs_taomoi')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('gs_capnhat')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->tinyInteger('gs_trangthai')->default('2')->comment('Trạng thái # Trạng thái : 1-khóa, 2-khả dụng');
            $table->unsignedInteger('id')->comment('Tài Khoản Gia Sư');
            $table->foreign('id')->references('id')->on('users')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
        DB::statement("ALTER TABLE `GiaSu` comment 'GiaSu'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('GiaSu');
    }
}
