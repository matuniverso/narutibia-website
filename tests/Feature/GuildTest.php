<?php

namespace Tests\Feature;

use App\Models\Account;
use App\Models\Player;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GuildTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    public function testPlayerCanCreateGuild()
    {
        $user = Account::factory()
            ->has(Player::factory()->count(1))
            ->create();

        $payload = [
            'name' => $this->faker->realTextBetween(5, 16),
            'ownerid' => $user->players()->first()->id
        ];

        $response = $this->actingAs($user, 'web')
            ->followingRedirects()
            ->post(route('guilds.store'), $payload);

        $response->assertSee('Guild criada em');

        return $response;
    }

    public function testPlayerCannotHaveMoreThanOneGuild()
    {
        // $user = Account::factory()
        //     ->has(Player::factory()->count(1))
        //     ->create();

        // $payload = [
        //     'name' => $this->faker->realTextBetween(5, 16),
        //     'ownerid' => $user->players()->first()->id
        // ];

        $response = $this->testPlayerCanCreateGuild();

        dd($response);
    }
}
