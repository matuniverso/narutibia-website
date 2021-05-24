<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guild extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function players()
    {
        return $this->hasMany(Player::class, 'ownerid');
    }

    public function owner()
    {
        return Player::find($this->ownerid);
    }
}
