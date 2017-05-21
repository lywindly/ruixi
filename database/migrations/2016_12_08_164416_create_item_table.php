<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item', function (Blueprint $table) {
            $table->increments('im_id')->comment('产品序号');
            $table->string('im_cpbh')->comment('产品编号');
            $table->integer('c_cqbh')->comment('城区编号');
            $table->string('c_cqmc', 60)->comment('城区名称');
            $table->integer('a_sqbh')->comment('商圈编号');
            $table->string('c_sqjc')->comment('商圈简称');
            $table->integer('ib_xmbh')->comment('项目编号');
            $table->string('ib_xmjc')->comment('项目简称');
            $table->string('im_fwtlh')->comment('房屋塔楼号');
            $table->string('im_fwlch')->comment('房屋楼层号');
            $table->string('im_fwfh')->comment('房屋房号');
            $table->float('im_fwjzmj')->comment('房屋建筑面积');
            $table->float('im_fwsymj')->comment('房屋使用面积');
            $table->float('im_fwdj')->comment('房屋单价');
            $table->float('im_fwhsdj')->comment('房屋含税单价');
            $table->float('im_fwwyf')->comment('房屋物业费');
            $table->string('im_fwzxzk')->comment('房屋装修状况');
            $table->string('im_fwfdsb')->comment('房屋附带设备');
            $table->string('im_fwzffs')->comment('房屋支付方式');
            $table->string('im_fwys')->comment('房屋钥匙');
            $table->string('im_bz')->comment('房屋备注');
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
        Schema::dropIfExists('item');
    }
}
