<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateServerConfigTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('server_config', function (Blueprint $table) {
            $table->string('config')->primary();
            $table->integer('value')->nullable();
        });

        DB::table('server_config')->insert([
            [
                'config' => 'db_version',
                'value' => 0
            ],
            [
                'config' => 'motd_hash',
                'value' => null
            ],
            [
                'config' => 'motd_num',
                'value' => 0
            ],
            [
                'config' => 'players_record',
                'value' => 0
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('server_config');
    }
}
