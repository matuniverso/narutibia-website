<?php

namespace App\Observers;

use App\Models\Guild;
use Illuminate\Support\Facades\DB;

class GuildObserver
{
    public function created(Guild $guild)
    {
        DB::table('guild_ranks')->insert([
            [
                'level' => 1,
                'name' => 'a Member',
                'guild_id' => $guild->id
            ],
            [
                'level' => 2,
                'name' => 'a Vice-Leader',
                'guild_id' => $guild->id
            ],
            [
                'level' => 3,
                'name' => 'the Leader',
                'guild_id' => $guild->id
            ]
        ]);
    }
}
