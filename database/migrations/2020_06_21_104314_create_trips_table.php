<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->bigInteger('from_city')->unsigned()->nullable();
            $table->foreign('from_city')->references('id')->on('cities')->onUpdate('set null')->onDelete('set null');

            $table->bigInteger('to_city')->unsigned()->nullable();
            $table->foreign('to_city')->references('id')->on('cities')->onUpdate('set null')->onDelete('set null');

            $table->integer('seats_num')->nullable();

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
        Schema::dropIfExists('trips');
    }
}
