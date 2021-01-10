<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Votes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vote', function (Blueprint $blueprint) {
            $blueprint->bigIncrements('id');
            $blueprint->unsignedBigInteger('kandidat_id');
            $blueprint->unsignedBigInteger('user_id');
            $blueprint->foreign('kandidat_id')->references('id')->on('kandidat')->onDelete('cascade');
            $blueprint->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vote');
    }
}
