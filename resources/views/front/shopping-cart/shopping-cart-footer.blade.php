<div class="cart-footer">
    <div class="d-flex flex-column  align-items-end mt-4 pt-4">
        <div class="w-25 d-flex justify-content-between align-items-center">
            <span>數量:</span><span class="count_price" id="qty">{{$totalQty ?? \Cart::getTotalQuantity()}}</span>
        </div>
        <div class="w-25 d-flex justify-content-between align-items-center">
            <span>小計:</span><span class="subtotal_price" id="subtotal">${{number_format($subtotal ?? \Cart::getSubTotal())}}</span>
        </div>
        <div class="w-25 d-flex justify-content-between align-items-center">
            <span>運費:</span><span class="freight_fee" id="charge">$60</span>
        </div>
        <div class="w-25 d-flex justify-content-between align-items-center">
            <span>總計:</span><span class="total_price" id="total">${{number_format(($subtotal??\Cart::getTotal())+60)}}</span>
        </div>
    </div>
    <div class="d-flex @if ($step == 4)justify-content-end @else justify-content-between @endif mt-4 pt-4">
        @if ($step == 1)
            <a href="{{route('product.list')}}" class="btn px-5 backToShop_btn"><i class="fas fa-arrow-left"></i>返回購物</a>
            <a href="{{route('shopping-cart.step02')}}" class="btn btn-lg px-5 nextStep_btn">下一步</a>
        @else
            @if ($step == 4)
                <a href="{{route('index')}}" class="btn btn-lg px-5 ms-auto nextStep_btn">返回首頁</a>
            @else
                <a href="{{route('shopping-cart.step0'.($step-1))}}" class="btn btn-lg px-5 backStep_btn">上一步</a>
                <button class="btn btn-lg px-5 nextStep_btn" id="next">下一步</button>
            @endif
        @endif
    </div>
</div>
</div>