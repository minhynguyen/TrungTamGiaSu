<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNhanXetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('NhanXet', function (Blueprint $table) {
            $table->Tinyinteger('ph_ma')->unsigned()->comment('Mã Phụ Huynh');
            $table->Tinyinteger('gs_ma')->unsigned()->comment('Mã Gia Sư');
            $table->text('nx_noidung')->comment('Nội Dung');
            $table->timestamp('nx_taomoi')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->tinyInteger('nx_trangthai')->default('2')->comment('Trạng thái # Trạng thái : 1-khóa, 2-khả dụng');
            $table->primary(['ph_ma', 'gs_ma']);
            $table->foreign('ph_ma')->references('ph_ma')->on('PhuHuynh')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('gs_ma')->references('gs_ma')->on('GiaSu')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
        DB::statement("ALTER TABLE `NhanXet` comment 'NhanXet'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('NhanXet');
    }
}
