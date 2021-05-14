<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Player;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {
        $players = auth()->user()->players()
            ->withTrashed()
            ->orderBy('deleted_at')
            ->get();

        return view('account.index', compact('players'));
    }

    public function password(Request $request, $id)
    {
    }

    public function email(Request $request, $id)
    {
    }
}
