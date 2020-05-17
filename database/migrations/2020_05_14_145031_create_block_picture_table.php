<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlockPictureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('block_picture', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->id();
            $table->unsignedBigInteger('block_id');
            $table->foreign('block_id')->references('id')->on('blocks');
            $table->unsignedBigInteger('picture_id');
            $table->foreign('picture_id')->references('id')->on('pictures');
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
        Schema::dropIfExists('block_picture');
    }
}
