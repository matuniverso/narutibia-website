<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function download()
    {
        return view('game.download');
    }

    public function ranking()
    {
        $players = Player::all();

        return view('game.ranking', compact('players'));
    }

    public function shop()
    {
        return view('game.shop');
    }
}
