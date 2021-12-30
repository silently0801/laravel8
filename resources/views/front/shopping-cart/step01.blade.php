@extends('layouts.template')
@section('title','確認購物車')

@section('css')
<link rel="stylesheet" href="{{asset('css/checkout.css')}}">
<style>
    body{
        font-size: 18px;
    }
    .img{
        width: 80px;
        height: 80px;
        background-size: cover;
        background-position: center;
        border-radius: 50%;
        margin-right: 10px;
    }
    .order-item-price>span{
        display: inline-block;
        text-align: end;
        min-width: 70px;
        font-size: 18px !important;
    }
</style>
@endsection

@section('main')
<section id="cart" class="py-5">
    <div class="container">
        <div class="card">
            <div class="card-body p-5">
                <!-- 購物車的header -->
                <div class="cart_header">
                    <h2 class="card-title ">購物車</h2>
                    <div class="d-flex progress-block pb-4 mb-4">
                        <!-- 進度條 -->
                        <div class="d-flex flex-column align-items-center w-25 position-relative">
                            <div class="progress position-absolute">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 30%"
                                    aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex justify-content-center align-items-center step active">1</div>
                            <span>確認購物車</span>
                        </div>
                        <div class="d-flex flex-column align-items-center w-25  position-relative">
                            <div class="progress position-absolute">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 0"
                                    aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex justify-content-center align-items-center step">2</div>
                            <span>付款與運送方式</span>
                        </div>
                        <div class="d-flex flex-column align-items-center w-25  position-relative">
                            <div class="progress position-absolute">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 0"
                                    aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex justify-content-center align-items-center step">3</div>
                            <span>填寫資料</span>
                        </div>
                        <div class="d-flex flex-column align-items-center w-25  position-relative">
                            <div class="d-flex justify-content-center align-items-center step">4</div>
                            <span>完成訂購</span>
                        </div>
                    </div>
                </div>
                <!-- 訂單明細 -->
                <div class="mt-4 pt-4">
                    <h3 class="mb-4">訂單明細</h3>
                    @foreach ($items as $item)
                        <div class="d-flex justify-content-between align-items-center mt-4 pt-4 order-item">
                            <div class="d-flex align-items-center order-item-info">
                                <div class="img" style="background-image: url('{{Storage::url($item->attributes->image_url)}}')"></div>
                                <div>
                                    <p>{{$item->name}}</p>
                                </div>
                            </div>
                            <div class="order-item-price">
                                <button class="minus" type="button">-</button>
                                <input class="qty" type="number" value="{{$item->quantity}}">
                                <button class="plus" type="button">+</button>
                                <span class="item-total" data-single="{{$item->price}}">${{number_format($item->price*$item->quantity)}}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- 購物車的footer -->
                <div class="cart-footer">
                    <div class="d-flex flex-column  align-items-end mt-4 pt-4">
                        <div class="w-25 d-flex justify-content-between align-items-center">
                            <span class="count">數量:</span><span class="count_price">3</span>
                        </div>
                        <div class="w-25 d-flex justify-content-between align-items-center">
                            <span class="subtotal">小計:</span><span class="subtotal_price">$24.90</span>
                        </div>
                        <div class="w-25 d-flex justify-content-between align-items-center">
                            <span class="freight">運費:</span><span class="freight_fee">$24.90</span>
                        </div>
                        <div class="w-25 d-flex justify-content-between align-items-center">
                            <span class="total">總計:</span><span class="total_price">$24.90</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between mt-4 pt-4">
                        <a href="./index.html" class="btn px-5 backToShop_btn"><i
                                class="fas fa-arrow-left"></i>&nbsp;&nbsp;返回購物</a>
                        <a href="./checkout2.html" class="btn btn-lg px-5 nextStep_btn">下一步</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
<script>
    function itemQtyCalc(element,compute){
        const qtyElement = element.parentElement.querySelector('.qty');
        let answer = Number(qtyElement.value) + compute;
        qtyElement.value = answer < 1 ? 1 : answer;
    }
    function itemTotalCalc(element) {
        const priceElement = element.parentElement.querySelector('.item-total');
        const qtyElement = element.parentElement.querySelector('.qty');
        let price = priceElement.getAttribute('data-single');
        let qty = qtyElement.value;
        let total = price * qty;
        priceElement.textContent = `\$${total}`;
    }
    const minusElements = document.querySelectorAll('.minus');
    const plusElements = document.querySelectorAll('.plus');
    minusElements.forEach(function (minusElement) {
        minusElement.addEventListener('click',function () {
            itemQtyCalc(this,-1);
            itemTotalCalc(this);
        });
    });

    plusElements.forEach(function (plusElement) {
        plusElement.addEventListener('click',function () {
            itemQtyCalc(this,1);
            itemTotalCalc(this);
        });
    });
</script>
@endsection