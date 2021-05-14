<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayerDepotlockeritemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_depotlockeritems', function (Blueprint $table) {
            $table->foreignId('player_id')
                ->primary()
                ->constrained('players')
                ->onDelete('cascade');
            $table->integer('sid');
            $table->integer('pid')->default(0);
            $table->smallInteger('itemtype');
            $table->smallInteger('count')->default(0);
            $table->binary('attributes');
            $table->unique(['player_id', 'sid']); // player_id_2
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player_depotlockeritems');
    }
}
