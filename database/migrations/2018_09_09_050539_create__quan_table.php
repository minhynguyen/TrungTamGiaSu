<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Quan', function (Blueprint $table) {
            $table->unsignedTinyInteger('q_ma')->autoIncrement()->comment('Mã Quận');
            $table->string('q_ten', 150)->comment('Tên Quận');
            $table->Tinyinteger('t_ma')->unsigned()->comment('Mã Tỉnh');
            $table->timestamp('q_taomoi')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('q_capnhat')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->tinyInteger('q_trangthai')->default('2')->comment('Trạng thái # Trạng thái : 1-khóa, 2-khả dụng');
            $table->foreign('t_ma')->references('t_ma')->on('Tinh')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
        DB::statement("ALTER TABLE `Quan` comment 'Quan'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Quan');
    }
}
