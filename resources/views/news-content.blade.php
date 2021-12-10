@extends('layouts.template')

@section('css')
<style>
    .container {
        width: 100%;
        max-width: 1400px;
    }

    @media(max-width:1460px) {
        .container {
            padding: 0 30px;
        }
    }
</style>
@endsection


@section('main')

<div class="container">
    <h2>{{$news->title}}</h2>
    <div>發布日期：<span>{{$news->date}}</span> 瀏覽次數：<span>174</span></div>
    <hr>
    <p>{{$news->content}}</p>
</div>
@endsection


@section('js')

@endsection