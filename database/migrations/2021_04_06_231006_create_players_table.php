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
            $table->id();
            $table->foreignId('account_id')
                ->constrained('accounts')
                ->onDelete('cascade');
            $table->integer('group_id')->default(1);
            $table->string('name')->unique();
            $table->integer('level')->default(1);
            $table->integer('vocation');
            $table->foreignId('guild_id')
                ->nullable()
                ->constrained('guilds')
                ->onDelete(null);
            $table->integer('health')->default(300);
            $table->integer('healthmax')->default(300);
            $table->integer('mana')->default(300);
            $table->integer('manamax')->default(300);
            $table->unsignedBigInteger('manaspent')->default(0);
            $table->unsignedBigInteger('experience')->default(0);
            $table->integer('maglevel')->default(1);
            $table->integer('looktype');
            $table->integer('lookbody')->default(0);
            $table->integer('lookfeet')->default(0);
            $table->integer('lookhead')->default(0);
            $table->integer('looklegs')->default(0);
            $table->integer('lookaddons')->default(0);
            $table->unsignedTinyInteger('direction')->default(2);
            $table->integer('soul')->default(100);
            $table->integer('town_id')->default(1);
            $table->integer('posx')->default(1024);
            $table->integer('posy')->default(1023);
            $table->integer('posz')->default(7);
            $table->integer('cap')->default(400);
            $table->integer('sex')->default(0);
            $table->binary('conditions')->nullable();
            $table->unsignedInteger('lastip')->default(0);
            $table->tinyInteger('save')->default(1);
            $table->tinyInteger('skull')->default(0);
            $table->bigInteger('skulltime')->default(0);
            $table->tinyInteger('blessings')->default(0);
            $table->bigInteger('onlinetime')->default(0);
            $table->bigInteger('deletion')->default(0);
            $table->unsignedBigInteger('balance')->default(0);
            $table->unsignedSmallInteger('stamina')->default(2520);
            $table->unsignedInteger('skill_fist')->default(10);
            $table->unsignedBigInteger('skill_fist_tries')->default(0);
            $table->unsignedInteger('skill_club')->default(10);
            $table->unsignedBigInteger('skill_club_tries')->default(0);
            $table->unsignedInteger('skill_sword')->default(10);
            $table->unsignedBigInteger('skill_sword_tries')->default(0);
            $table->unsignedInteger('skill_axe')->default(10);
            $table->unsignedBigInteger('skill_axe_tries')->default(0);
            $table->unsignedInteger('skill_dist')->default(10);
            $table->unsignedBigInteger('skill_dist_tries')->default(0);
            $table->unsignedInteger('skill_shielding')->default(10);
            $table->unsignedBigInteger('skill_shielding_tries')->default(0);
            $table->unsignedInteger('skill_fishing')->default(10);
            $table->unsignedBigInteger('skill_fishing_tries')->default(0);
            $table->unsignedBigInteger('lastlogin')->nullable();
            $table->unsignedBigInteger('lastlogout')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('players');
    }
}
