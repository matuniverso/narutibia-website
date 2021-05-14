<?php

namespace App\Http\Controllers;

use App\Models\Guild;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class GuildController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
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
        return view('guild.create');
    }

    public function store(Request $request)
    {
        $rules = $this->validate($request, [
            'name' => [
                'required', 'min:5', 'max:16', 'string',
                Rule::unique('guilds')
            ],
        ]);

        $guild = Guild::create($rules);

        return redirect()->route('guild.show', [
            'id' => $guild->id
        ]);
    }

    public function update(Request $request, $id)
    {
        $guild = Guild::find($id);

        $rules = $this->validate($request, [
            'name' => [
                'min:5', 'max:16', 'string',
                Rule::unique('guilds')->ignore($guild->id)
            ],
            'motd' => ['max:80', 'string']
        ]);

        $guild = $guild->update($rules);

        return redirect()->route('guild.show', [
            'id' => $guild->id
        ]);
    }

    public function destroy($id)
    {
        $guild = Guild::find($id);
        $guild->delete();

        return redirect()->route('guilds.index');
    }
}
