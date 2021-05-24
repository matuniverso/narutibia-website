<?php

namespace App\Http\Controllers;

use App\Http\Requests\Guilds\StoreGuildRequest;
use App\Http\Requests\Guilds\UpdateGuildRequest;
use App\Models\Guild;

class GuildController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
        $this->middleware('guild.level')->only(['create']);
    }

    public function index()
    {
        $guilds = Guild::all();

        return view('guild.index', compact('guilds'));
    }

    public function show($id)
    {
        $guild = Guild::findOrFail($id);

        return view('guild.show', compact('guild'));
    }

    public function create()
    {
        $players = auth()->user()->playersOver100;

        return view('guild.create', compact('players'));
    }

    public function store(StoreGuildRequest $request)
    {
        // TODO: player can only have and create 1 guild.
        $guild = Guild::create($request->validated());

        return redirect()->route('guilds.show', [
            'guild' => $guild->id
        ]);
    }

    public function update(UpdateGuildRequest $request, $id)
    {
        $guild = Guild::find($id);
        $guild = $guild->update($request->validated());

        return redirect()->route('guilds.show', [
            'guild' => $guild->id
        ]);
    }

    public function destroy($id)
    {
        $guild = Guild::find($id);
        $guild->delete();

        return redirect()->route('guilds.index');
    }
}
