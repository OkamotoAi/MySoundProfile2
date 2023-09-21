<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Music extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('musics', function(Blueprint $table){
            $table->string('music_id')->primary();
            $table->string('name');
            $table->string('artist');
            $table->int('popularity');
            $table->float('danceability');
            $table->float('energy');
            $table->int('scale');
            $table->float('loudness');
            $table->int('mode');
            $table->float('speechiness');
            $table->float('acousticness');
            $table->float('instrumentalness');
            $table->float('liveness');
            $table->float('valence');
            $table->float('tempo');
            $table->int('time_signature');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('musics');
    }
}
