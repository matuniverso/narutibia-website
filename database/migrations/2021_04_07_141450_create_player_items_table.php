<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayerItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_items', function (Blueprint $table) {
            $table->foreignId('player_id')
                ->primary()
                ->constrained('players')
                ->onDelete('cascade');
            $table->integer('pid')->default(0);
            $table->integer('sid')->default(0);
            $table->smallInteger('itemtype')->default(0);
            $table->smallInteger('count')->default(0);
            $table->binary('attributes');
            $table->index(['sid']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player_items');
    }
}
