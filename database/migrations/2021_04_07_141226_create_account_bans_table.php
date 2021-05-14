<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountBansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_bans', function (Blueprint $table) {
            $table->foreignId('account_id')
                ->primary()
                ->constrained('accounts')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('banned_by')
                ->constrained('players')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('reason');
            $table->timestamp('banned_at'); // big integer
            $table->timestamp('expires_at'); // big integer
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('account_bans');
    }
}
