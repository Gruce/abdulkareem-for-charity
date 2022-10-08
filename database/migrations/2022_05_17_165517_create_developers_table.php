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
        Schema::create('developers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('department');
            $table->string('stage');
            $table->integer('type')->default(1); // developer = 1 : manager = 2
            $table->string('photo');
            $table->string('email')->nullable();
            $table->string('linkedln')->nullable();
            $table->string('github')->nullable();
            $table->string('phone')->nullable();
            $table->string('adjective')->nullable();
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
        Schema::dropIfExists('developers');
    }
};
