<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservedListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserved_lists', function (Blueprint $table) {
            $table->id()->from(1000);
            $table->bigInteger('restaurant_id')->unsigned();
            $table->foreign('restaurant_id')->references('id')->on('restaurant_infos');
            $table->bigInteger('table_id')->unsigned();
            $table->foreign('table_id')->references('id')->on('floor_planes');
            $table->string('date');
            $table->string('address');
            $table->string('image');
            $table->string('path');
            $table->string('time');
            $table->boolean('status');
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
        Schema::dropIfExists('reserved_lists');
    }
}
