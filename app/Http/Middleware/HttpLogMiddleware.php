<?php

namespace App\Http\Middleware;

use App\Models\HttpLog;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class HttpLogMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $httpLog = new HttpLog([
            'method' => $request->method(),
            'path' => $request->path(),
            'ip' => $request->ip(),
            'data' =>$request->all(),
            'user_agent' => $request->userAgent(),
        ]);
        //dd($httpLog);
        $httpLog->save();

        return $next($request);
    }


}
