<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDangKiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DangKi', function (Blueprint $table) {
            $table->unsignedTinyInteger('dk_ma')->autoIncrement()->comment('Mã Đăng Kí');
            $table->Tinyinteger('gs_ma')->unsigned()->comment('Mã Gia SưSS');
            $table->Tinyinteger('m_ma')->unsigned()->comment('Mã Môn Học');
            $table->Tinyinteger('tdd_ma')->unsigned()->comment('Mã Trình Độ');
            $table->string('dk_hocphi', 190)->comment('Học Phí');
            $table->timestamp('dk_taomoi')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('dk_capnhat')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->tinyInteger('dk_trangthai')->default('2')->comment('Trạng thái # Trạng thái : 1-khóa, 2-khả dụng');
            $table->foreign('m_ma')->references('m_ma')->on('mon')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('gs_ma')->references('gs_ma')->on('GiaSu')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('tdd_ma')->references('tdd_ma')->on('TrinhDoDay')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
        DB::statement("ALTER TABLE `DangKi` comment 'DangKi'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_dang_ki');
    }
}
