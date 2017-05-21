<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_info', function (Blueprint $table) {
            $table->integer('im_cpbh')->comment('产品编号');
            $table->float('ii_cbj')->comment('产品成本价');
            $table->string('ii_yjbz')->comment('产品佣金标准');
            $table->string('ii_bz')->comment('备注');
            $table->integer('cr_cjzgh')->comment('创建者工号');
            $table->string('cr_name')->comment('创建者姓名');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_info');
    }
}
