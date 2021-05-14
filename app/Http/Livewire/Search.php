<?php

namespace App\Http\Livewire;

use App\Models\Guild;
use App\Models\Player;
use Livewire\Component;

class Search extends Component
{
    public $search;
    public $isOpen = false;

    protected $queryString = [
        'search' => ['except' => ''],
    ];

    public function close()
    {
        $this->reset('search');
        $this->isOpen = false;
    }

    public function render()
    {
        $players = Player::where('name', 'like', $this->search . '%')
            ->limit(3)
            ->get();
        $guilds = Guild::where('name', 'like', $this->search . '%')
            ->limit(3)
            ->get();

        return view('livewire.search', compact('players', 'guilds'));
    }
}
