<?php

use App\Models\Account;

use function Pest\Laravel\actingAs;
use function Pest\Laravel\artisan;

it('has admin page', function () {
    $user = artisan('superuser')
        ->expectsQuestion('Username', 'test')
        ->expectsQuestion('Email', 'test@test.com')
        ->expectsQuestion('Password', 'secret')
        ->expectsQuestion('Confirm Password', 'secret')
        ->expectsOutput('Superuser created successfully.');

    // $response = actingAs($user, 'web')
    //     ->followingRedirects()
    //     ->get(route('admin.index'));

    // $response->assertStatus(200);
});
