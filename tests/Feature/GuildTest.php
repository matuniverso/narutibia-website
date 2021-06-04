<?php

use App\Models\Player;

use function Pest\Faker\faker;
use function Pest\Laravel\actingAs;
use function Pest\Laravel\assertDatabaseCount;
use function Pest\Laravel\assertDatabaseHas;

beforeEach(function () {
    $this->player = Player::factory()->create();
    $this->payload = [
        'name' => faker()->realTextBetween(5, 16),
        'ownerid' => $this->player->id
    ];

    $this->response = actingAs($this->player->account, 'web')
        ->followingRedirects()
        ->post(route('guilds.store'), $this->payload);

    $this->guild = $this->response['guild'];
});

test('make sure guild ranks are created', function () {
    assertDatabaseCount('guild_ranks', 3);

    assertDatabaseHas('guild_ranks', [
        'level' => 1,
        'level' => 2,
        'level' => 3
    ]);
});

test('make sure player becomes owner', function () {
    expect($this->guild->owner()->guild_id)
        ->toEqual($this->guild->id);
});
