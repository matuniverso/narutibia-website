<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Player extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'vocation',
        'looktype',
        'account_id'
    ];

    protected $hidden = ['lastip'];

    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    public function guild()
    {
        return $this->belongsTo(Guild::class);
    }
}
