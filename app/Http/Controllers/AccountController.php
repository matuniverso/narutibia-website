<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {
        /** @var Account */
        $user = auth()->user();

        $players = $user->players()
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
