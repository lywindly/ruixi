<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCityAreasTable extends Migration
{
    /**
     * Run the migrations.
     * @table city_area
     *
     * @return void
     */
    public function up()
    {
        Schema::create('city_areas', function (Blueprint $table) {
            $table->increments('c_no')->comment('城区编号表');
            $table->string('c_area', 60)->comment('城区名称');
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
       Schema::dropIfExists('city_areas');
     }
}
