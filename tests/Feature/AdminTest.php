<?php

use App\Models\Account;

use function Pest\Laravel\actingAs;

test('make sure normal user can not use access', function () {
    $user = Account::factory()->create();

    $response = actingAs($user, 'web')
        ->followingRedirects()
        ->get(route('admin.index'));

    $response->assertStatus(404);
});

test('make sure super user has access', function () {
    $user = Account::factory()
        ->state([
            'type' => Account::ACCOUNT_ADMIN
        ])->create();

    $response = actingAs($user, 'web')
        ->followingRedirects()
        ->get(route('admin.index'));

    $response->assertStatus(200);
});
