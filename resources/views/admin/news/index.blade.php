@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
@endsection

@section('main')
<div class="container">
    <table id="my-table" class="display">
        <thead>
            <tr>
                <th>標題</th>
                <th>日期</th>
                <th>圖片</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($news as $item)
                <tr>
                    <td>{{$item->title}}</td>
                    <td>{{$item->date}}</td>
                    <td><img src="{{$item->image_url}}" alt="" width="200"></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
        $('#my-table').DataTable();
    });
</script>
@endsection