<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayerNamelocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_namelocks', function (Blueprint $table) {
            $table->foreignId('player_id')
                ->primary()
                ->constrained('players')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('reason');
            $table->foreignId('namelocked_by')
                ->constrained('players')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->timestamp('namelocked_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player_namelocks');
    }
}
