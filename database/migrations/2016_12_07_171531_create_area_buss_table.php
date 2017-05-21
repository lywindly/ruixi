<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAreaBussTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('area_buss', function (Blueprint $table) {
            $table->increments('a_sqbh')->comment('商圈编号');
            $table->integer('c_cqbh')->comment('城区编号');
            $table->string('c_sq')->comment('商圈名');
            $table->string('c_sqjc')->comment('商圈简称');
            $table->string('c_sqpy')->comment('商圈拼音');
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
       Schema::dropIfExists('area_buss');
    }
}
