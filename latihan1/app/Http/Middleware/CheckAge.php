<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $umur = $request->session()->get('umur');
        if ($umur <=18){
            return back()->with('error', 'umur kamu belum mmencapai 18 Tahun');
        }
        return $next($request);
    }
}
