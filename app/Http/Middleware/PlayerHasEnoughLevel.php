<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PlayerHasEnoughLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user()->playersOver100->count() <= 0) {
            return back()->with([
                'msg' => 'Você precisa ter um personagem level 100 e que não pertença a nenhuma guild.'
            ]);
        }

        return $next($request);
    }
}
