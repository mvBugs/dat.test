<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blocks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('system_name')->unique();
            $table->string('alias');
            $table->text('body')->nullable();
            $table->json('data')->nullable();
            $table->string('blade')->nullable();
            $table->string('locale', 2)->nullable();
            $table->tinyInteger('status')->default(1);
            $table->unique(['alias', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blocks');
    }
}
