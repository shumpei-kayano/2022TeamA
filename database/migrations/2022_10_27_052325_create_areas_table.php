<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('areas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('area_name');
            $table->double('left_bottom_ido');
            $table->double('left_bottom_keido');
            $table->double('left_top_ido');
            $table->double('left_top_keido');
            $table->double('right_bottom_ido');
            $table->double('right_bottom_keido');
            $table->double('right_top_ido');
            $table->double('right_top_keido');
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
        Schema::dropIfExists('areas');
    }
}
