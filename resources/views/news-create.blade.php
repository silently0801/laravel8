@extends('layouts.template')

@section('css')
    <style>
        main{
            padding: 50px 0 ;
        }
    </style>
@endsection

@section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">新增最新消息</div>

                <div class="card-body">
                    <form method="POST" action="{{asset('/store-news')}}">
                        @csrf
                        <div class="form-group row">
                            <label for="title" class="col-sm-2 col-form-label">標題</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="title" name="title" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="date" class="col-sm-2 col-form-label">日期</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="date" name="date" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="image-url" class="col-sm-2 col-form-label">圖片連結</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="image-url" name="image_url" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="content" class="col-sm-2 col-form-label">內文</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="content" id="content" cols="30" rows="10" required></textarea>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-primary">新增</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    
@endsection