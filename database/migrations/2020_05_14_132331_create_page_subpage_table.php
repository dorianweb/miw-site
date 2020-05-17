<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageSubpageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_subpage', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->id();
            $table->unsignedBigInteger('page_id');
            $table->foreign('page_id')->references('id')->on('pages');
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
        Schema::dropIfExists('page_subpage');
    }
}
