<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinhVucTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('LinhVuc', function (Blueprint $table) {
            $table->unsignedTinyInteger('lv_ma')->autoIncrement()->comment('Mã Lĩnh Vực');
            $table->string('lv_ten', 150)->comment('Tên Lĩnh Vực');
            $table->timestamp('lv_taomoi')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('lv_capnhat')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->tinyInteger('lv_trangthai')->default('2')->comment('Trạng thái # Trạng thái : 1-khóa, 2-khả dụng');
            
            $table->unique(['lv_ten']);
        });
        DB::statement("ALTER TABLE `LinhVuc` comment 'LinhVuc'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('LinhVuc');
    }
}
