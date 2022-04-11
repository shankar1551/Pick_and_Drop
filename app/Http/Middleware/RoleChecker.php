<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class RoleChecker
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // $i = Auth::check();
        // echo ($i);
        // dd($request);
        Auth::user()->role;
        // dd(Auth::user()->role);
        if(Auth::check())
        {
            $role = Auth::user()->role;
            if($role=='user')
            {
                
                return redirect()->route('Rhome');
                // return view('admin.index');
            }

            else if($role == 'delivery_man')
            {
                return redirect()->route('delivery_home');
            }

            else if($role == 'pickup_man')
            {
                return redirect()->route('delivery_home');
            }

            else if($role=='admin')
            {
                return redirect()->route('admin.index');
                
            }
        }

        return redirect('login');
        // dd($request);
        // return $next($request);
    }
}
