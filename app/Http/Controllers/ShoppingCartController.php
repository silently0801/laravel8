<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    public function add(Request $request)
    {
        // 取得要加入購物車的產品資訊
        $product = Product::find($request->id);

        \Cart::add(array(
            'id' => $product->id, // inique row ID
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => $request->qty,
            'attributes' => array(
                'image_url' => $product->image_url,
            )
        ));

        return 'success';
    }

    public function content()
    {
        dd(\Cart::getContent());
    }

    public function clear()
    {
        \Cart::clear();
        return 'clear';
    }

    public function step01()
    {   
        $items = \Cart::getContent();
        return view('front.shopping-cart.step01',compact('items'));
    }
}
