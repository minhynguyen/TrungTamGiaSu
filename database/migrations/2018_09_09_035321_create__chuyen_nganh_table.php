<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChuyenNganhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ChuyenNganh', function (Blueprint $table) {
            $table->unsignedTinyInteger('cn_ma')->autoIncrement()->comment('Mã Chuyên Ngành');
            $table->Tinyinteger('lv_ma')->unsigned()->comment('Mã Lĩnh Vực');
            $table->string('cn_ten', 150)->comment('Tên Lĩnh Vực');
            $table->timestamp('cn_taomoi')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('cn_capnhat')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->tinyInteger('cn_trangthai')->default('2')->comment('Trạng thái # Trạng thái : 1-khóa, 2-khả dụng');
            $table->foreign('lv_ma')->references('lv_ma')->on('LinhVuc')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->unique(['cn_ten']);
        });
        DB::statement("ALTER TABLE `ChuyenNganh` comment 'ChuyenNganh'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ChuyenNganh');
    }
}
