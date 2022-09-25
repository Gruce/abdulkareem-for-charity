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
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('cascade');
            $table->integer('department')->default(1)->nullable(); #### CS: 1, IS: 2 ###
            $table->integer('study_type')->default(1)->nullable(); #### Morning: 1, Evening: 2 ###
            $table->integer('stage')->default(1)->nullable(); #### first: 1, Second: 2, third: 3, fourth: 4 ###
            $table->integer('division')->default(1)->nullable(); #### A:1, B:2, C:3, D:4, E:5 #####
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
