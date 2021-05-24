<?php

use App\Models\Account;
use App\Models\Player;

use function Pest\Faker\faker;

test('player can create a guild', function () {
    $user = Account::factory()->create();
    $player = Player::factory()->for($user)->create();

    $response = being($user)->post(route('guilds.store'), [
        'name' => faker()->realTextBetween(5, 16),
        'ownerid' => $player->id
    ]);

    $response->assertSee('Guild criada em');
});
