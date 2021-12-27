@extends('layouts.template')
@section('title','產品詳細')

@section('css')
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
<link rel="stylesheet" href="{{asset('/css/product-content.css')}}">
@endsection

@section('main')
<header class="container header">
    <div class="title">
        <h2>產品詳細</h2>
    </div>
</header>
<!-- 商品 -->
<section id="product" class="mt-4">
    <div class="container">
        <div class="card border-0 mb-3">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="image-swiper">
                        <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                            class="swiper my-swiper2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="{{Storage::url($product->image_url)}}" />
                                </div>
                                @foreach ($productImages as $productImage)
                                <div class="swiper-slide">
                                    <img src="{{Storage::url($productImage->image_url)}}" />
                                </div>
                                @endforeach
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                        <div class="swiper my-swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="{{Storage::url($product->image_url)}}" />
                                </div>
                                @foreach ($productImages as $productImage)
                                <div class="swiper-slide">
                                    <img src="{{Storage::url($productImage->image_url)}}" />
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-12">
                    <div class="card-body">
                        <p class="text-muted my-0">新品上架</p>
                        <h3 class="card-title">{{$product->name}}</h3>
                        <p class="card-text">{{$product->description}}</p>
                        <hr>
                        <div class="d-flex card-btns">
                            <span class="price">${{$product->price}}</span>
                            <div class="qty-setting">
                                <div class="minus">-</div>
                                <input class="qty" type="text" min="1" value="1">
                                <div class="plus">+</div>
                            </div>
                            <button type="submit" class="btn btn-m px-3 ml-auto add-cart">加入購物車</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('js')
<!-- swiper JS CDN -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    let swiper = new Swiper(".my-swiper", {
        loop: true,
        spaceBetween: 10,
        slidesPerView: 3,
        freeMode: true,
        watchSlidesProgress: true,
    });
    let swiper2 = new Swiper(".my-swiper2", {
        loop: true,
        spaceBetween: 10,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        thumbs: {
            swiper: swiper,
        },
    });
</script>
@endsection