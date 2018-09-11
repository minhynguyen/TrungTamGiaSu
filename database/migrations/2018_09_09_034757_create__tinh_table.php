<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTinhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tinh', function (Blueprint $table) {
            $table->unsignedTinyInteger('t_ma')->autoIncrement()->comment('Mã Tỉnh');
            $table->string('t_ten', 150)->comment('Tên Tỉnh');
            $table->timestamp('t_taomoi')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('t_capnhat')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->tinyInteger('t_trangthai')->default('2')->comment('Trạng thái # Trạng thái : 1-khóa, 2-khả dụng');
            
            $table->unique(['t_ten']);
        });
        DB::statement("ALTER TABLE `Tinh` comment 'Tinh'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Tinh');
    }
}
