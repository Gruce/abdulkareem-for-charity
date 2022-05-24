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
        Schema::create('committees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('department')->nullable(); #### CS: 1, IS: 2 ###
            $table->integer('study_type')->nullable(); #### Morning: 1, Evening: 2 ###
            $table->integer('stage')->nullable(); #### first: 1, Second: 2, third: 3, fourth: 4 ###
            $table->string('phone');
            $table->string('photo')->nullable();
            
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
        Schema::dropIfExists('committees');
    }
};
