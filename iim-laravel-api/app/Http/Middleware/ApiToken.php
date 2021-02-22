<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;

class ApiToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {   //on récpère le header présent dans le header
        $apiToken = $request->headers->get('api-token');

    //  dump($apiToken);

        $user = User::Where('api_token', $apiToken)->get()->first();

        /**  on verifie qu'il y a bien un utilisateur */

        if(!$user instanceof User){
            return response()->json('Unauthorised', 401);
        }

    //  dd($request->headers->get('api_token'));
        return $next($request);
    }
}
