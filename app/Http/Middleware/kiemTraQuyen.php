<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\NguoiDungVaChucNang;
class kiemTraQuyen
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
            $name = $request->path();
            $user = Auth::user();
            $nguoiDung =  NguoiDungVaChucNang::where('idNguoiDung',$user->id)->firstOrFail()->get();
            $query =  $chucNang->join('chucnang', 'idChucNang', '=', 'chucnang.id');
            $r = $query->where('chucnang.ma','=', $name)->get();    
            if(count($r) >= 1){
                return $next($request);
            }else{
                return redirect('loi');
            }
        }else{
          //chưa đăng nhập.
          return redirect('login');
        }
    }
}
