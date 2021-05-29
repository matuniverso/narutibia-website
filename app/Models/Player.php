<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Player extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    protected $hidden = ['lastip'];

    public const PLAYER_NORMAL = 1;
    public const PLAYER_GM = 2;
    public const PLAYER_ADMIN = 3;

    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    public function guild()
    {
        return $this->belongsTo(Guild::class);
    }
}
