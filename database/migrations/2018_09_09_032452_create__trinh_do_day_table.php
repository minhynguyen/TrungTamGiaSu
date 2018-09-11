<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrinhDoDayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TrinhDoDay', function (Blueprint $table) {
            $table->unsignedTinyInteger('tdd_ma')->autoIncrement()->comment('Mã Trình Độ Dạy');
            $table->string('tdd_ten', 150)->comment('Tên Trình Độ Dạy');
            $table->timestamp('tdd_taomoi')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('tdd_capnhat')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->tinyInteger('tdd_trangthai')->default('2')->comment('Trạng thái # Trạng thái Trường: 1-khóa, 2-khả dụng');
            
            $table->unique(['tdd_ten']);
        });
        DB::statement("ALTER TABLE `TrinhDoDay` comment 'Trình Độ Dạy'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TrinhDoDay');
    }
}
