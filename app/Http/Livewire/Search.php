<?php

namespace App\Http\Livewire;

use App\Models\Guild;
use App\Models\Player;
use Livewire\Component;

class Search extends Component
{
    public $search = '';
    public $isOpen = false;

    protected $queryString = [
        'search' => ['except' => ''],
    ];

    public function close()
    {
        $this->reset();
    }

    public function render()
    {
        $players = (object) [];
        $guilds = clone $players;

        return view('livewire.search', compact('players', 'guilds'));
    }
}
