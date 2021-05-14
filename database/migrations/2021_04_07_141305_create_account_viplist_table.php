<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountViplistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_viplist', function (Blueprint $table) {
            $table->foreignId('account_id')
                ->primary()
                ->constrained('accounts')
                ->onDelete('cascade');
            $table->foreignId('player_id')
                ->constrained('players')
                ->onDelete('cascade');
            $table->string('description')->default('');
            $table->unique(['account_id', 'player_id'], 'account_player_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('account_viplist');
    }
}
