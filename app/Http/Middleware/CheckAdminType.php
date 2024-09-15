<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckAdminType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  int  $type
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $type)
    {
        $admin = Auth::guard('admin')->user();
        if ($admin && $admin->admin_type_ID == $type) {
            return $next($request);
        }

        return redirect()->route('home')->withErrors('Unauthorized access.');
    }
}
