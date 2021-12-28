@extends('layouts.template')
@section('title','產品列表')

@section('css')
<link rel="stylesheet" href="{{asset('/css/product-list.css')}}">
@endsection

@section('main')
<header class="container header">
    <div class="title">
        <h2>產品列表</h2>
    </div>
    <div class="tabs">
        <a href="{{route('product.list','category_id=0')}}" class="tab">所有</a>
        @foreach ($productCategories as $productCategory)
        <a href="{{route('product.list','category_id='.$productCategory->id)}}" class="tab">{{$productCategory->name}}</a>
        @endforeach
    </div>

</header>
<!-- 商品區 -->
<section id="products">
    <div class="container">
        <div class="row cards">
            @foreach ($products as $product)
            <a href="{{route('product.content',['id' => $product->id])}}" class="col-12 col-sm-6 col-lg-3 product-card">
                <div class="card pb-3 mb-3">
                    <div class="card-img-top mb-2 img-container">
                        <img src="{{Storage::url($product->image_url)}}" alt="...">
                    </div>
                    <div class="card-body p-0 text-center">
                        <h3>活動免運費唷~</h3>
                        <span>{{$product->name}}</span>
                        <p>${{$product->price}}</p>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>
@endsection

@section('js')

@endsection