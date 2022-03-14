<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFloorPlanesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('floor_planes', function (Blueprint $table) {
            $table->id();
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->integer('restaurnt_id');
            $table->string('hall_name');
            $table->string('background_img');
            $table->integer('table_x');
            $table->integer('table_y');
            $table->json('data_json');
            $table->mediumText('description');
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
        Schema::dropIfExists('floor_planes');
    }
}
