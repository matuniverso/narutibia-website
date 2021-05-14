<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Auth\Passwords\CanResetPassword as CanReset;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Account extends Authenticatable implements CanResetPassword
{
    use HasFactory, Notifiable, CanReset;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

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

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
