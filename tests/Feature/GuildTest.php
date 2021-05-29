<?php

use App\Models\Player;

use function Pest\Faker\faker;
use function Pest\Laravel\actingAs;
use function Pest\Laravel\assertDatabaseCount;

test('make sure player becomes owner', function () {
    $player = Player::factory()->create();

    $payload = [
        'name' => faker()->realTextBetween(5, 16),
        'ownerid' => $player->id
    ];

    $response = actingAs($player->account, 'web')
        ->followingRedirects()
        ->post(route('guilds.store'), $payload);

    $response->assertOk();

    assertDatabaseCount('guild_ranks', 3);

    expect($response['guild']->owner()->guild_id)
        ->toEqual($response['guild']->id);
});
