<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Mon', function (Blueprint $table) {
            $table->unsignedTinyInteger('m_ma')->autoIncrement()->comment('Mã Môn');
            $table->string('m_ten', 150)->comment('Tên Môn');
            $table->timestamp('m_taomoi')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('m_capnhat')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->tinyInteger('m_trangthai')->default('2')->comment('Trạng thái # Trạng thái Môn: 1-khóa, 2-khả dụng');
            
            $table->unique(['m_ten']);
        });
        DB::statement("ALTER TABLE `Mon` comment 'Môn'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Mon');
    }
}
