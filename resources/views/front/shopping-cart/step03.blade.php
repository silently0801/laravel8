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
                    <form action="{{route('shopping-cart.step03-store')}}" method="post" id="step03-form" class="paymentMethod_form-group">
                        @csrf
                        <fieldset>
                            <legend>寄送資料</legend>
                            <div class="form-group">
                                <label for="name">姓名</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="王小明" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">電話</label>
                                <input type="tel" class="form-control" id="phone" name="phone" placeholder="0912345678" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="abc123@gmail.com" required>
                            </div>
                            <div class="form-group">
                                <label for="address">地址</label>
                                <div class="d-flex flex-column">
                                    <input type="text" class="form-control" id="address" name="address" placeholder="地址" required>
                                </div>
                            </div>
                        </fieldset>
                        <button id="submit-btn" hidden></button>
                    </form>
                </div>
                <!-- 購物車的footer -->
                @include('front.shopping-cart.shopping-cart-footer',['step'=>3])
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
    <script>
        const nextElement = document.querySelector('#next');
        nextElement.addEventListener('click',function () {
            document.querySelector('#submit-btn').click();
        });
    </script>
@endsection