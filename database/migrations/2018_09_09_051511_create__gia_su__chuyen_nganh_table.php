<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGiaSuChuyenNganhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('GiaSu_ChuyenNganh', function (Blueprint $table) {
            $table->Tinyinteger('gs_ma')->unsigned()->comment('Mã Gia Sư');
            $table->Tinyinteger('cn_ma')->unsigned()->comment('Mã Phụ Huynh');
            

            $table->primary(['gs_ma', 'cn_ma']);
            $table->foreign('cn_ma')->references('cn_ma')->on('ChuyenNganh')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('gs_ma')->references('gs_ma')->on('GiaSu')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
        DB::statement("ALTER TABLE `GiaSu_ChuyenNganh` comment 'GiaSu_ChuyenNganh'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('GiaSu_ChuyenNganh');
    }
}
