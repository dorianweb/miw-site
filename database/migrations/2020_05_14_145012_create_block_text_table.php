<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlockTextTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('block_text', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->id();
            $table->unsignedBigInteger('block_id');
            $table->foreign('block_id')->references('id')->on('blocks');
            $table->unsignedBigInteger('text_id');
            $table->foreign('text_id')->references('id')->on('texts');
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
        Schema::dropIfExists('block_text');
    }
}
