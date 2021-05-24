<?php

namespace App\Models;

use Illuminate\Auth\Passwords\CanResetPassword as CanReset;
use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Account extends Authenticatable implements CanResetPassword
{
    use HasFactory, Notifiable, CanReset;

    protected $guarded = [];

    protected $hidden = [
        'password',
        'remember_token',
        'secret',
        'premdays'
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function players()
    {
        return $this->hasMany(Player::class);
    }

    public function playersOver100()
    {
        return $this->players()->where('level', '>=', 100);
    }
}
