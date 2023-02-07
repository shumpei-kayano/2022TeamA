<?php

namespace App\Http\Middleware;

use Closure;
use App\Coupon;
use Carbon\Carbon;

class providemiddleware
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
        $now=\Carbon\Carbon::now()->format('Y-m-d H:i:s');
        $closeteimes=Coupon::All();
        foreach($closeteimes as $closetime){
            if($now>=$closetime->closetime){
                Coupon::where('id','=',$closetime->id)->update([
                    'provideflg'=>1,
                    ]);
            }
        }
        return $next($request);
    }
}
