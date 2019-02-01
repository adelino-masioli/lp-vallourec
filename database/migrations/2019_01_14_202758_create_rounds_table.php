<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rounds', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('game_id');
            $table->foreign('game_id')
                    ->references('id')->on('games')
                    ->onDelete('cascade');
            $table->unsignedInteger('team_a_id');
            $table->foreign('team_a_id')
                ->references('id')->on('teams')
                ->onDelete('cascade');
            $table->unsignedInteger('team_b_id');
            $table->foreign('team_b_id')
                ->references('id')->on('teams')
                ->onDelete('cascade');
            $table->string('date')->nullable();
            $table->integer('result_a')->nullable();
            $table->integer('result_b')->nullable();
            $table->integer('order')->nullable();
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
        Schema::dropIfExists('rounds');
    }
}
