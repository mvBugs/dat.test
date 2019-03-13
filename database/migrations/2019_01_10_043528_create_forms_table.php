<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->increments('id');
            $table->json('data')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->string('type');
            $table->string('locale');
            $table->ipAddress('ip')->nullable();
            $table->string('url', 512)->nullable();
            $table->string('referer', 512)->nullable();
            $table->unsignedInteger('user_id')->nullable();
            //$table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE');
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
        Schema::dropIfExists('forms');
    }
}
