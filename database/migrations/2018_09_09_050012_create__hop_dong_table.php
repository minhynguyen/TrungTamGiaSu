<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHopDongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('HopDong', function (Blueprint $table) {
            $table->Tinyinteger('gs_ma')->unsigned()->comment('Mã Gia Sư');
            $table->Tinyinteger('ph_ma')->unsigned()->comment('Mã Phụ Huynh');
            $table->text('hd_noidung')->comment('Nội Dung Hợp Đồng');
            $table->timestamp('hd_ngaybatdau')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('hd_ngayketthuc')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('hd_taomoi')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('hd_capnhat')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->tinyInteger('hd_trangthai')->default('2')->comment('Trạng thái # Trạng thái : 1-khóa, 2-khả dụng');


            $table->primary(['gs_ma', 'ph_ma']);
            $table->foreign('ph_ma')->references('ph_ma')->on('PhuHuynh')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('gs_ma')->references('gs_ma')->on('GiaSu')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
        DB::statement("ALTER TABLE `HopDong` comment 'HopDong'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('HopDong');
    }
}
