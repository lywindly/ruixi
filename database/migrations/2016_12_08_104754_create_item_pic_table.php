<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemPicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_pic', function (Blueprint $table) {
            $table->integer('im_cpbh')->comment('产品编号');
            $table->string('im_tpm')->comment('产品图片名');
            $table->string('im_sltm')->comment('产品缩略图名');
            $table->string('im_xx')->comment('产品图片信息');
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
        Schema::dropIfExists('item_pic');
    }
}




