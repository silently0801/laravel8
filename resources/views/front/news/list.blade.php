@extends('layouts.template')

@section('css')
<link rel="stylesheet" href="{{asset('css/list-page.css')}}">
@endsection

@section('main')
<header class="container header">
    <div class="title">
        <img src="./images/icon.svg" alt="">
        <h2>最新消息</h2>
    </div>
    <div class="page-info">
        <div class="calc">
            資料總筆數：<span>42</span>
        </div>
        <div class="calc">
            每頁筆數：<span>10</span>
        </div>
        <div class="calc">
            總頁數：<span>5</span>
        </div>
        <div class="calc">
            目前頁次：<span>1</span>
        </div>
    </div>
</header>
<section class="container cards">
    @foreach ($news as $item)
    <div class="news-card">
        <div class="img" style="background-image: url({{$item->image_url}})"></div>
        <div class="content">
            <span class="tag">最新消息</span>
            <a href="/news/{{$item->id}}">{{$item->title}}</a>
            <span class="date">{{$item->date}}</span>
            <p>{{$item->content}}</p>
        </div>
    </div>
    @endforeach

</section>
@endsection

@section('js')

@endsection