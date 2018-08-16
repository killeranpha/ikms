<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class GiaoVienMiddlerware
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
            if($user->level == 2){
                return $next($request);
            }else{
                return redirect('loi')->with('thongBao','Không có quyền truy cập');
            }
        }
        else{
          //chưa đăng nhập.
          return redirect('login')->with('thongBao','Không có quyền truy cập');
        }
    }
}
