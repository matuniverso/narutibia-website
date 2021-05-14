<?php

namespace Database\Seeders;

use App\Models\Account;
use App\Models\Player;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Player::factory(10)->create();
        Account::factory()->create();
    }
}
