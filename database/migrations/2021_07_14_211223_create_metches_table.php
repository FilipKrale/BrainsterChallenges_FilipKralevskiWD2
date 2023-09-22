<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMetchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metches', function (Blueprint $table) {
            $table->id();
            $table->foreignId('home')->constrained('teams')->onDelete('cascade');
            $table->foreignId('away')->constrained('teams')->onDelete('cascade');
            $table->dateTime('scheduled_at');
            $table->string('result')->default("NULL");
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
        Schema::dropIfExists('metches');
    }
}
