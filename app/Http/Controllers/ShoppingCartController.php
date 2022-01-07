<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use TsaiYiHua\ECPay\Checkout;
use TsaiYiHua\ECPay\Services\StringService;
use TsaiYiHua\ECPay\Collections\CheckoutResponseCollection;

class ShoppingCartController extends Controller
{
    public function __construct(Checkout $checkout,CheckoutResponseCollection $checkoutResponse)
    {
        $this->checkout = $checkout;
        $this->checkoutResponse = $checkoutResponse;
    }

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

    public function update(Request $request)
    {
        // 從資料庫中取得要更新的產品資料
        $product = Product::find($request->id);

        // 更新購物車
        \Cart::update($product->id, array(
            'quantity' => array(
                'relative' => false,
                'value' => $request->qty
            ),
        ));
        // 取出購物車中該產品資料
        $item = \Cart::get($product->id);

        // 返回該產品目前購物車內的數量
        return $item;
    }

    public function delete(Request $request)
    {
        \Cart::remove($request->id);

        return 'success';
    }

    public function step01()
    {
        $items = \Cart::getContent()->sortBy('id');

        return view('front.shopping-cart.step01', compact('items'));
    }
    public function step02()
    {
        return view('front.shopping-cart.step02');
    }
    public function step02Store(Request $request)
    {
        //payment 0:信用卡付款 1:網路 ATM 2:超商代碼
        //shipment 0:黑貓宅配 1:超商店到店
        session([
            'payment' => $request->payment,
            'shipment' => $request->shipment,
        ]);

        return redirect()->route('shopping-cart.step03');
    }
    public function step03()
    {
        return view('front.shopping-cart.step03');
    }
    public function step03Store(Request $request)
    {
        $order = Order::create([
            'order_no'=>'DP'.time(),
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'payment' => session('payment'),
            'shipment' => session('shipment'),
        ]);

        $items = \Cart::getContent();
        $itemInfo=[];
        foreach ($items as  $item) {
            $product = Product::find($item->id);
            OrderDetail::create([
                'order_id' => $order->id,
                'product_id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'qty' => $item->quantity,
                'image_url' => $product->image_url,
            ]);

            $new_ary = [
                'name' => $product->name,
                'qty' => $item->quantity,
                'price' => $product->price,
                'unit' => '個'
            ];

            array_push($itemInfo, $new_ary);
        }
        $new_ary = [
            'name' => '運費',
            'qty' => 1,
            'price' => 60,
            'unit' => '個'
        ];
        array_push($itemInfo, $new_ary);
        
        //第三方支付
        $formData = [
            'UserId' => 1, // 用戶ID , Optional
            'ItemDescription' => '產品簡介',
            'Items' => $itemInfo,
            'OrderId' => $order->order_no,
            'PaymentMethod' => 'Credit', // ALL, Credit, ATM, WebATM
        ];

        //清空購物車
        \Cart::clear();
        
        return $this->checkout->setNotifyUrl(route('notify'))->setReturnUrl(route('return'))->setPostData($formData)->send();
    }
    public function step04($orderNo)
    {
        $order = Order::with('orderDetails')->where('order_no',$orderNo)->first();
        return view('front.shopping-cart.step04',compact('order'));
    }

    public function notifyUrl(Request $request){
        $serverPost = $request->post();
        $checkMacValue = $request->post('CheckMacValue');
        unset($serverPost['CheckMacValue']);
        $checkCode = StringService::checkMacValueGenerator($serverPost);
        if ($checkMacValue == $checkCode) {
            $order = Order::where('order_no',$request->MerchantTradeNo)->first();
            if($request->RtnCode == 1){
                $order->update([
                    'is_paid' => 1
                ]);
            }
            return '1|OK';
        } else {
            return '0|FAIL';
        }
    }

    public function returnUrl(Request $request){
        $serverPost = $request->post();
        $checkMacValue = $request->post('CheckMacValue');
        unset($serverPost['CheckMacValue']);
        $checkCode = StringService::checkMacValueGenerator($serverPost);
        if ($checkMacValue == $checkCode) {
            if (!empty($request->input('redirect'))) {
                return redirect($request->input('redirect'));
            } else {
                //付款完成，下面接下來要將購物車訂單狀態改為已付款
                $order = Order::where('order_no',$request->MerchantTradeNo)->first();
                if($request->RtnCode == 1){
                    $order->update([
                        'is_paid' => 1
                    ]);
                }
                return redirect()->route('shopping-cart.step04',['order_no'=>$request->MerchantTradeNo]);
            }
        }
    }
}
