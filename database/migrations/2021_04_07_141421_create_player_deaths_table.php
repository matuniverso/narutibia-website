<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayerDeathsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_deaths', function (Blueprint $table) {
            $table->foreignId('player_id')
                ->primary()
                ->constrained('players')
                ->onDelete('cascade');
            $table->timestamp('time');
            $table->integer('level');
            $table->string('killed_by');
            $table->tinyInteger('is_player')->default(1);
            $table->string('mostdamage_by');
            $table->tinyInteger('mostdamage_is_player')->default(0);
            $table->tinyInteger('unjustified')->default(0);
            $table->tinyInteger('mostdamage_unjustified')->default(0);
            $table->index(['killed_by', 'mostdamage_by']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player_deaths');
    }
}
