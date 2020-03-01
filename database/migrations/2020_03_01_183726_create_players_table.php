<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('team_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('image');
            $table->integer('jersey_number');
            $table->integer('type')->default(3)->comment('1-batsman,2-bowler,3-allrounder'); // 
            $table->integer('player_role')->default(3)->comment('1-player,2-captain,3-vicecaptain,4-keeper'); // 
            $table->string('country'); // we can make it integer if we have country/state setup
            $table->string('status')->default(1)->comment('1-active,0-deactive,2-pending');
            $table->timestamps();
            
            /* if team deleted the all its players also deleted */
            $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
}
