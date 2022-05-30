<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Closure;
use Illuminate\Support\Facades\Log;

use function Psy\debug;

class CORS
{

    public function handle(Request $request, Closure $next)
    {
        header('Acess-Control-Allow-Origin: *');
        header('Acess-Control-Allow-Origin: Content-type, X-Auth-Token, Authorization, Origin');
        return $next($request);
    }
}
