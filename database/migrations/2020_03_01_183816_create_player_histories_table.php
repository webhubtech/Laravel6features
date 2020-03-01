<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayerHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_histories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('player_id');
            $table->integer('match_id');
            $table->integer('run');
            $table->integer('fifty');
            $table->integer('hundred');
            $table->timestamps(); 
            /* if player deleted the all its history also deleted */
            $table->foreign('player_id')
            ->references('id')->on('players')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player_histories');
    }
}
