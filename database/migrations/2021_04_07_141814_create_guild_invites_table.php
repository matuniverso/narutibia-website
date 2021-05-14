<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuildInvitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guild_invites', function (Blueprint $table) {
            $table->foreignId('player_id')
                ->primary()
                ->constrained('players')
                ->onDelete('cascade');
            $table->foreignId('guild_id')
                ->primary()
                ->constrained('guilds')
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
        Schema::dropIfExists('guild_invites');
    }
}
