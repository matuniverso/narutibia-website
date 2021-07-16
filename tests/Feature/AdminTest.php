<?php

use App\Models\Account;

use function Pest\Laravel\actingAs;

test('make sure normal user can not use access', function () {
    /** @var Account */
    $user = Account::factory()->create();

    $response = actingAs($user, 'web')
        ->followingRedirects()
        ->get(route('admin.index'));

    $response->assertStatus(404);
});

test('make sure super user has access', function () {
    /** @var Account */
    $user = Account::factory()
        ->state([
            'type' => Account::ACCOUNT_ADMIN
        ])->create();

    $response = actingAs($user, 'web')
        ->followingRedirects()
        ->get(route('admin.index'));

    $response->assertStatus(200);
});
