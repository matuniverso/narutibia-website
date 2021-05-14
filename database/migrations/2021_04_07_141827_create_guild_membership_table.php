<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuildMembershipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guild_membership', function (Blueprint $table) {
            $table->foreignId('player_id')
                ->primary()
                ->constrained('players')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreignId('guild_id')
                ->constrained('guilds')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreignId('rank_id')
                ->constrained('guild_ranks')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('nick')->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guild_membership');
    }
}
