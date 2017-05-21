<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemOwnerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_owner', function (Blueprint $table) {
            $table->increments('io_id')->comment('房屋业主序号');
            $table->integer('im_cpbh')->comment('产品编号');
            $table->string('io_yzlx')->comment('业主类型');
            $table->string('io_yzxm')->comment('业主姓名');
            $table->string('io_yzxb')->comment('业主性别');
            $table->integer('io_nl')->comment('业主年龄');
            $table->string('io_zy')->comment('业主职业');
            $table->string('io_wx')->comment('业主微信');
            $table->integer('io_qq')->comment('业主QQ');
            $table->string('io_email')->comment('业主email');
            $table->integer('io_dh')->comment('业主电话1');
            $table->integer('io_dh2')->comment('业主电话2');
            $table->string('io_dh3')->comment('业主电话3');
            $table->string('io_glr')->comment('业主关联人');
            $table->integer('io_glrdh')->comment('业主关联人电话');
            $table->string('io_bz')->comment('备注');
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
        Schema::dropIfExists('item_owner');
    }
}
