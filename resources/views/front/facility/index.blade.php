@extends('layouts.template')


@section('css')
<style>
    main{
        padding: 50px 0 ;
    }
    .img{
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
    }
    .card-body{
        min-height: 250px;
    }
</style>
@endsection


@section('main')
<h2 class="text-center p-5">設施介紹</h2>
<div class="container">
    @foreach ($facilities as $facility) 
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <div class="img" style="background-image: url('{{Storage::url($facility->image_url)}}')"></div>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{$facility->title}}</h5>
                        <div class="card-text">{!!$facility->content!!}</div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection


@section('js')

@endsection