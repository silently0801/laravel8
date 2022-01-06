@extends('layouts.template')
@section('title','填寫運送資料')

@section('css')
<link rel="stylesheet" href="{{asset('css/checkout.css')}}">

@endsection

@section('main')
<section id="cart" class="py-5">
    <div class="container">
        <div class="card">
            <div class="card-body p-5">
                <!-- 購物車的header -->
                @include('front.shopping-cart.shopping-cart-header',['step'=>3])
                <!-- 寄送資料 -->
                <div class="mt-4 pt-4">
                    <form action="" class="paymentMethod_form-group">
                        <fieldset>
                            <legend>寄送資料</legend>
                            <div class="form-group">
                                <label for="name">姓名</label>
                                <input type="text" class="form-control" id="name" aria-describedby="emailHelp"
                                    placeholder="王小明">
                            </div>
                            <div class="form-group">
                                <label for="phoneNumber">電話</label>
                                <input type="tel" class="form-control" id="phoneNumber" placeholder="0912345678">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="abc123@gmail.com">
                            </div>
                            <div class="form-group">
                                <label for="city">地址</label>
                                <div class="d-flex flex-column">
                                    <div class="d-flex">
                                        <input type="text" class="form-control mr-2 mb-2" id="city" placeholder="城市">
                                        <input type="text" class="form-control mb-2" id="zipCode" placeholder="郵遞區號">
                                    </div>
                                    <input type="text" class="form-control" id="address" placeholder="地址">
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <!-- 購物車的footer -->
                @include('front.shopping-cart.shoppinf-cart-footer',['step'=>3])
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')

@endsection