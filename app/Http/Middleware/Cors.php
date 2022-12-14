<?php
namespace App\Http\Middleware;
use Closure;


class Cors
{
 public function handle($request, Closure $next)
 {
 $request->header('Access-Control-Allow-Origin', '*');
 $request->header('Access-Control-Allow-Methods', 'GET, POST, PUT, PATCH,
DELETE, OPTIONS');
 $request->header('Access-Control-Allow-Headers', 'Content-Type,
Authorization');
 return $next($request);
 }
}