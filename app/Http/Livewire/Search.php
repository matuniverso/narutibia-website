<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Search extends Component
{
    public $search, $open = false;

    public function close()
    {
        $this->reset();
    }

    public function render()
    {
        $players = new \stdClass;
        $guilds = clone $players;

        return view('livewire.search', compact('players', 'guilds'));
    }
}
