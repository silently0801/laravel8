@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
<style>
    th,
    td {
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
                <h2 class="card-header lh-1 pt-3 pb-2">設施介紹管理</h2>
                <div class="form-group pt-4 px-3 m-0">
                    <a href="{{route('facility.create')}}" class="btn btn-success">新增設施</a>
                </div>
                <hr>
                <div class="card-body">
                    <table id="my-table" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>標題</th>
                                <th width="250">圖片</th>
                                <th width="120">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($facilities as $facility)
                            <tr>
                                <td>{{$facility->title}}</td>
                                <td><img src="{{Storage::url($facility->image_url)}}" alt="" width="200"></td>
                                <td>
                                    <a href="" class="btn btn-primary">編輯</a>
                                    <button class="btn btn-danger delete-btn">刪除</button>
                                    <form class="d-none" action="" method="post">
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script>
    // 初始化datatable
    $(document).ready( function () {
        $('#my-table').DataTable({
            "order": [],
            language:{
                "processing":   "處理中...",
                "loadingRecords": "載入中...",
                "lengthMenu":   "顯示 _MENU_ 項結果",
                "zeroRecords":  "沒有符合的結果",
                "info":         "顯示第 _START_ 至 _END_ 項結果，共 _TOTAL_ 項",
                "infoEmpty":    "顯示第 0 至 0 項結果，共 0 項",
                "infoFiltered": "(從 _MAX_ 項結果中過濾)",
                "infoPostFix":  "",
                "search":       "搜尋:",
                "paginate": {
                    "first":    "第一頁",
                    "previous": "上一頁",
                    "next":     "下一頁",
                    "last":     "最後一頁"
                },
                "aria": {
                    "sortAscending":  ": 升冪排列",
                    "sortDescending": ": 降冪排列"
                }
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