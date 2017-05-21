<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemBaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_base', function (Blueprint $table) {
            $table->increments('ib_xmbh')->comment('项目编号');
            $table->string('ib_xmmc')->comment('项目名称');
            $table->integer('ib_xmlsh')->comment('项目已有产品流水号');
            $table->string('ib_xmjc')->comment('项目简称');
            $table->string('ib_xmmcyw')->comment('项目名称英文');
            $table->string('ib_xmpy')->comment('项目拼音');
            $table->string('ib_xmfj',10)->comment('项目分级');
            $table->string('ib_xmdz')->comment('项目地址');
            $table->string('ib_xmkfs')->comment('项目开发商');
            $table->string('ib_wytgs')->comment('物业提供商');
            $table->float('ib_xmztmj')->comment('项目整体面积');
            $table->float('ib_xmdcmj')->comment('项目单层面积');
            $table->integer('ib_xmzcs')->comment('项目总层数');
            $table->float('ib_xmgt')->comment('项目公摊');
            $table->integer('ib_xmcws')->comment('项目车位数');
            $table->float('ib_xmcwzj')->comment('项目车位租金');
            $table->float('ib_xmfwcg')->comment('项目房屋层高');
            $table->float('ib_xmdtpb')->comment('项目电梯配备');
            $table->float('ib_xmrzl')->comment('项目入住率');
            $table->string('ib_bz')->comment('项目备注');
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
        Schema::dropIfExists('item_base');
    }
}
