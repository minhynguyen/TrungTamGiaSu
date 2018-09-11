<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateYeuCauTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('YeuCau', function (Blueprint $table) {
            $table->Tinyinteger('ph_ma')->unsigned()->comment('Mã Phụ Huynh');
            $table->Tinyinteger('m_ma')->unsigned()->comment('Mã Môn Học');
            $table->Tinyinteger('tdd_ma')->unsigned()->comment('Mã Trình Độ');
            $table->string('yc_diachi', 190)->comment('Địa Chỉ');
            $table->unsignedTinyInteger('yc_gioitinh')->comment('0: Nam - 1: Nữ');
            $table->string('yc_hocvi', 190);
            $table->string('yc_ngayhoc', 190);
            $table->unsignedTinyInteger('yc_sobuoi');
            $table->unsignedTinyInteger('yc_songuoi');
            $table->timestamp('yc_taomoi')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('yc_capnhat')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->tinyInteger('yc_trangthai')->default('2')->comment('Trạng thái # Trạng thái : 1-khóa, 2-khả dụng');


            $table->primary(['tdd_ma', 'ph_ma', 'm_ma']);
            $table->foreign('m_ma')->references('m_ma')->on('mon')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('ph_ma')->references('ph_ma')->on('PhuHuynh')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('tdd_ma')->references('tdd_ma')->on('TrinhDoDay')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
        DB::statement("ALTER TABLE `YeuCau` comment 'YeuCau'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('YeuCau');
    }
}
