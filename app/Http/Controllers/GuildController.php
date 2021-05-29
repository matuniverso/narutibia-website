<?php

namespace App\Http\Controllers;

use App\Http\Requests\Guilds\StoreGuildRequest;
use App\Http\Requests\Guilds\UpdateGuildRequest;
use App\Models\Guild;
use Illuminate\Support\Facades\DB;

class GuildController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        $guilds = Guild::latest()->get();

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
        $this->authorize('create', Guild::class);

        $guild = Guild::create($request->validated());

        return redirect()->route('guilds.show', [
            'guild' => $guild->id
        ])->with(['msg' => 'Sua nova guild foi criada com sucesso.']);
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
