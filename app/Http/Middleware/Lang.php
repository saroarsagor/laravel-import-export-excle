<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class Lang
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
        /* $user = auth()->user();
        dd($user);*/
         /*if (Session()->has('lang')) {
            App::setLocale(Session()->get('lang'));
        }*/
         if ($lang = Session::get('lang')) {
           /* \Lang::setLocale($lang);*/
            App::setLocale(Session::get('lang'));
        }
        return $next($request);
    }
}
