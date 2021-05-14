<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function create()
    {
        $vocations = config('vocations.free');

        return view('player.create', compact('vocations'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'min:4', 'max:16', 'regex:/^[a-z\s]/i', 'unique:players'],
            'vocation' => ['required']
        ]);

        $vocation = config("vocations.free.$request->vocation");
        
        Player::create([
            'name' => ucwords(strtolower($request->name)),
            'vocation' => $vocation['vocation'],
            'looktype' => $vocation['looktype'],
            'account_id' => auth()->id()
        ]);

        return redirect()->route('account')
            ->with('msg', 'Seu novo personagem foi criado com sucesso!');
    }

    public function show($name)
    {
        $player = Player::where('name', $name)->firstOrFail();

        return view('player.profile', compact('player'));
    }

    public function destroy($id)
    {
        $player = Player::withTrashed()->find($id);

        $player->delete();

        return back();
    }

    public function restore($id)
    {
        $player = Player::withTrashed()->find($id);

        $player->restore();

        return back();
    }
}
