<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Config;
use App;
use Route;
class CheckType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$guard = null)
    {
        if($guard=='auth')
        {
            if(Session::has('authId'))
            {
                if(Session::has('lang'))
                {
                    $local = Session::get('lang');
                
                App::setLocale($local);
                return $next($request);
                }
            }
            else
            {
                return redirect('admin/login')->with('error', 'Please Login to Access application');  
            }
        }
        else if($guard=='customer')
        {
            if(Session::has('customerId'))
            {
                if(Session::has('lang'))
                {
                    $local = Session::get('lang');
                
                App::setLocale($local);
                return $next($request);
                }
            }
            else
            {
                return redirect('/login')->with('error', 'Please Login to Access application');  
            }

        }
        return $next($request); 
    }


}