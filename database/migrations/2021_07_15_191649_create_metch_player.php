<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMetchPlayer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metch_player', function (Blueprint $table) {
   
                $table->id();
                $table->unsignedBigInteger('player_id');
                $table->unsignedBigInteger('metch_id');
                $table->unsignedBigInteger('team_id');
                $table->timestamps();
    
                $table->foreign('player_id')->on('players')->references('id')->onDelete('cascade');
                $table->foreign('metch_id')->on('metches')->references('id')->onDelete('cascade');
                $table->foreign('team_id')->on('teams')->references('id')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('metch_player');
    }
}
