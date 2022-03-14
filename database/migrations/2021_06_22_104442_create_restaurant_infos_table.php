<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurant_infos', function (Blueprint $table) {
            $table->id()->from(1000);
            $table->string('restaurant_name');
            $table->foreign('restaurant_name')->references('restaurant_name')->on('restaurants');
            $table->string('address');
            $table->string('city');
            $table->string('icon');
            $table->string('image');
            $table->boolean('top');
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
        Schema::dropIfExists('restaurant_infos');
    }
}
