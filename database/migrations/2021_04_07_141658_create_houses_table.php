<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('owner')
                ->nullable()
                ->constrained('players')
                ->onDelete(null);
            $table->integer('size');
            $table->unsignedInteger('paid')->nullable();
            $table->integer('warnings')->nullable();
            $table->integer('rent')->nullable();
            $table->integer('town_id')->nullable();
            $table->integer('beds')->nullable();
            $table->integer('bid')->nullable();
            $table->integer('bid_end')->nullable();
            $table->integer('last_bid')->nullable();
            $table->integer('highest_bidder')->nullable();
            $table->index(['owner', 'town_id']);
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
        Schema::dropIfExists('houses');
    }
}
