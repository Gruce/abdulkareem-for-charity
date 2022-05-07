<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->
            $table->integer('department'); #### CS: 0, IS: 1 ###
            $table->integer('study_type'); #### Morning: 0, Evening: 1 ###
            $table->integer('stage'); #### first: 1, Second: 2, third: 3, fourth: 4 ###
            $table->integer('division'); #### A:0, B:1, C:2, D:3, E:4 #####
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
        Schema::dropIfExists('students');
    }
};
