<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuildController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WebController::class, 'home'])
    ->name('home');

Route::get('download', [WebController::class, 'download'])
    ->name('download');

Route::get('ranking', [WebController::class, 'ranking'])
    ->name('ranking');

Route::get('shop', [WebController::class, 'shop'])
    ->name('shop');

Route::get('profile/{name}', [PlayerController::class, 'show'])
    ->name('player.profile');

Route::resource('guilds', GuildController::class)
    ->except(['edit']);

Route::middleware(['auth'])->group(function () {
    Route::get('account', [AccountController::class, 'index'])
        ->middleware('admin.redirect')
        ->name('account');

    Route::put('account/email', [AccountController::class, 'email'])
        ->name('account.email');

    Route::put('account/password', [AccountController::class, 'password'])
        ->name('account.password');

    Route::get('character/create', [PlayerController::class, 'create'])
        ->name('player.create');

    Route::post('character/create', [PlayerController::class, 'store'])
        ->name('player.store');

    Route::post('character/destroy/{id}', [PlayerController::class, 'destroy'])
        ->name('player.destroy');

    Route::post('character/restore/{id}', [PlayerController::class, 'restore'])
        ->name('player.restore');
});

Route::middleware(['auth', 'is_admin'])->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])
        ->name('admin.index');
});

require __DIR__ . '/auth.php';
