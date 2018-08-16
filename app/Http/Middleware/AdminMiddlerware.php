<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class AdminMiddlerware
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
        if (Auth::check()) {
            // Đã đăng nhập.
            $user = Auth::user();
            if($user->level == 1){
                return $next($request);
            }else{
                return redirect('loi');
            }
        }
        else{
          //chưa đăng nhập.
          return redirect('login');
        }
    }
}
