@extends('layouts.template')
@section('title','付款與運送方式')

@section('css')
<link rel="stylesheet" href="{{asset('css/checkout.css')}}">

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
                                <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                                    aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex justify-content-center align-items-center step active">1</div>
                            <span>確認購物車</span>
                        </div>
                        <div class="d-flex flex-column align-items-center w-25  position-relative">
                            <div class="progress position-absolute">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 30%"
                                    aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex justify-content-center align-items-center step active">2</div>
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
                <form action="{{route('shopping-cart.step02-store')}}" method="post" class="container" id="step02-form">
                    @csrf
                    <h3 class="fs-2">付款方式</h3>
                    <div class="form-group row py-2 px-4">
                        <div class="form-check">
                            <input class="form-check-input m-r-3" type="radio" name="payment" id="credit-card" value="0" checked>
                            <label class="form-check-label fs-3" for="credit-card">信用卡付款</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input m-r-3" type="radio" name="payment" id="atm" value="1">
                            <label class="form-check-label fs-3" for="atm">網路 ATM</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input m-r-3" type="radio" name="payment" id="cvs-code" value="2">
                            <label class="form-check-label fs-3" for="cvs-code">超商代碼</label>
                        </div>
                    </div>
                    <h3 class="fs-2">運送方式</h3>
                    <div class="form-group row py-2 px-4">
                        <div class="form-check">
                            <input class="form-check-input m-r-3" type="radio" name="shipment" id="home" value="0" checked>
                            <label class="form-check-label fs-3" for="home">黑貓宅配</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input m-r-3" type="radio" name="shipment" id="cvs" value="1">
                            <label class="form-check-label fs-3" for="cvs">超商店到店</label>
                        </div>
                    </div>
                </form>
                <!-- 購物車的footer -->
                <div class="cart-footer">
                    <div class="d-flex flex-column  align-items-end mt-4 pt-4">
                        <div class="w-25 d-flex justify-content-between align-items-center">
                            <span class="count">數量:</span><span class="count_price">{{\Cart::getTotalQuantity()}}</span>
                        </div>
                        <div class="w-25 d-flex justify-content-between align-items-center">
                            <span class="subtotal">小計:</span><span class="subtotal_price">${{number_format(\Cart::getSubTotal())}}</span>
                        </div>
                        <div class="w-25 d-flex justify-content-between align-items-center">
                            <span class="freight">運費:</span><span class="freight_fee">$60</span>
                        </div>
                        <div class="w-25 d-flex justify-content-between align-items-center">
                            <span class="total">總計:</span><span class="total_price">${{number_format(\Cart::getTotal()+60)}}</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between mt-4 pt-4">
                        <a href="{{route('shopping-cart.step01')}}" class="btn btn-lg px-5 backStep_btn">上一步</a>
                        <button class="btn btn-lg px-5 nextStep_btn" id="next">下一步</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
    <script>
        const nextElement = document.querySelector('#next');
        nextElement.addEventListener('click',function () {
            document.querySelector('#step02-form').submit();
        });
    </script>
@endsection