<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlockSubpageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('block_subpage', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->id();
            $table->unsignedBigInteger('block_id');
            $table->foreign('block_id')->references('id')->on('blocks');
            $table->unsignedBigInteger('subpage_id');
            $table->foreign('subpage_id')->references('id')->on('subpages');
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
        Schema::dropIfExists('block_subpage');
    }
}
