<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('store_name');
            $table->string('address');
            $table->string('link');
            $table->string('tel');
            $table->text('service');
            $table->string('picture1');
            $table->string('picture2');
            $table->string('picture3');
            $table->time('bussiness_hours');
            $table->string('parking');
            $table->string('area_id');
            $table->integer('perfecture_id');
            $table->double('latitude');
            $table->double('longitude');
            $table->integer('review_count');
            $table->integer('star');
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
        Schema::dropIfExists('stores');
    }
}
