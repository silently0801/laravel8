<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ShoppingCartCheck
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
        if(\Cart::isEmpty()){
            return redirect()->route('product.list')->with([
                'message'=>'請先將商品加入購物車!'
            ]);
        }
        return $next($request);
    }
}
