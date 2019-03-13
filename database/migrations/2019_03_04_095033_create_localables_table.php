<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocalablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('localables', function (Blueprint $table) {
            $table->string('model');
            $table->integer('ru')->nullable();
            $table->integer('en')->nullable();
            $table->integer('de')->nullable();
            $table->integer('ar')->nullable();

            $table->integer('at')->nullable();
            $table->integer('aus')->nullable();
            $table->integer('ca')->nullable();
            $table->integer('ch')->nullable();
            $table->integer('uk')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('localables');
    }
}
