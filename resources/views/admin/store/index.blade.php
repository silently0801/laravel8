@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
<style>
    th,td{
        text-align: center;
        vertical-align: middle;
    }
</style>
@endsection

@section('main')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <h2 class="card-header lh-1 pt-3 pb-2">門市管理</h2>
                <div class="form-group pt-4 px-3 m-0">
                    <a href="{{route('stores.create')}}" class="btn btn-success">新增門市</a>
                </div>
                <hr>
                <div class="card-body">
                    <table id="my-table" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>區域</th>
                                <th>名稱</th>
                                <th>電話</th>
                                <th>地址</th>
                                <th>照片</th>
                                <th width="120">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($stores as $store)
                                <tr>
                                    <td>{{$store->storeArea->name}}</td>
                                    <td>{{$store->name}}</td>
                                    <td>{{$store->phone}}</td>
                                    <td>{{$store->address}}</td>
                                    <td><img src="{{Storage::url($store->image_url)}}" alt="" width="200"></td>
                                    <td>
                                        <a href="{{route('stores.edit',['store'=>$store->id])}}" class="btn btn-primary">編輯</a>
                                        <button class="btn btn-danger delete-btn">刪除</button>
                                        <form class="d-none" action="{{route('stores.destroy',['store'=>$store->id])}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script>
    // 初始化datatable
    $(document).ready( function () {
        $('#my-table').DataTable({
            "order": [],
            language:{
                url: "{{asset('js/datatable-zh.json')}}"
            }
        });
    });

    const deleteElements = document.querySelectorAll('.delete-btn');
    deleteElements.forEach(function(deleteElement){
        deleteElement.addEventListener('click',function () {
            if(confirm('你確定要刪除這筆資料嗎？')){
                this.nextElementSibling.submit();
            }
        });
    });

</script>
@endsection