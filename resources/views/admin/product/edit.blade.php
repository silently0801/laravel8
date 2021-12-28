@extends('layouts.app')
@section('css')
<style>
    .img {
        width: 200px;
        height: 200px;
        background-size: cover;
        background-position: center;
        border: 1px solid #000;
        margin-right: 15px;
        margin-bottom: 15px;
        position: relative;
    }

    .delete-btn {
        position: absolute;
        top: 0;
        right: 0;
        transform: translate(50%, -50%);
        width: 25px;
        height: 25px;
        border-radius: 50%;
        background: red;
        color: #FFF;
        font-size: 18px;
        font-weight: 600;
        line-height: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
    }
</style>
@endsection

@section('main')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{asset('/admin')}}">首頁</a></li>
            <li class="breadcrumb-item"><a href="{{route('products.index')}}">產品管理</a></li>
            <li class="breadcrumb-item active" aria-current="page">編輯產品</li>
        </ol>
    </nav>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h2 class="card-header pt-3 pb-2">產品 - 編輯</h2>

                <div class="card-body">
                    <form method="POST" action="{{route('products.update',['product'=>$product->id])}}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group row py-2">
                            <label for="category" class="col-sm-2 col-form-label">類別<span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <select class="form-control" name="product_category_id" id="category" required>
                                    <option value="" hidden>請選擇類別</option>
                                    @foreach ($productCategories as $productCategory)
                                    <option value="{{$productCategory->id}}" @if($productCategory->id == $product->product_category_id)selected @endif>{{$productCategory->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="name" class="col-sm-2 col-form-label">名稱<span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name" value="{{$product->name}}"
                                    required>
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="price" class="col-sm-2 col-form-label">價格<span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="number" min="0" class="form-control" id="price" name="price"
                                    value="{{$product->price}}" required>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row py-2">
                            <label for="image-url" class="col-sm-2 col-form-label">主要圖片</label>
                            <div class="col-sm-10">
                                <img src="{{Storage::url($product->image_url)}}" alt="" width="200">
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="image-url" class="col-sm-2 col-form-label">主要圖片(重新上傳)</label>
                            <div class="col-sm-10">
                                <input type="file" accept="image/*" class="form-control" id="image-url"
                                    name="image_url">
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row py-2">
                            <label for="image-urls" class="col-sm-2 col-form-label">其他圖片</label>
                            <div class="col-sm-10 row">
                                @foreach ($product->productImages as $productImage)
                                <div class="img"
                                    style="background-image: url({{Storage::url($productImage->image_url)}})">
                                    <div class="delete-btn" data-id="{{$productImage->id}}">X</div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="image-urls" class="col-sm-2 col-form-label">其他圖片(上傳)</label>
                            <div class="col-sm-10">
                                <input type="file" accept="image/*" class="form-control" id="image-urls"
                                    name="image_urls[]" multiple>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row py-2">
                            <label for="description" class="col-sm-2 col-form-label">描述<span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="description" id="description" rows="5"
                                    required>{{$product->description}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-primary">更新</button>
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
<script>
    let deleteBtns = document.querySelectorAll('.delete-btn');
    deleteBtns.forEach(function (deleteBtn) {
        deleteBtn.addEventListener('click',function(e){
            // 獲取要刪除的image id
            let imageId = e.target.getAttribute('data-id');
            // 利用JS建立表單
            let formData = new FormData();
            // @csrf
            formData.append('_token','{{csrf_token()}}');
            // @method('delete')
            formData.append('_method','delete');
            formData.append('id',imageId);

            // 送出請求至後端刪除檔案及資料
            let url = '{{route('product.image-delete')}}';
            fetch(url,{
                'method':'post',
                'body':formData
            }).then(function(response) {
                return response.text();
            }).then(function(data) {
                if(data == 'success'){
                    // 刪除畫面上圖片
                    e.target.parentElement.remove();
                }
            });
        });
    });
</script>
@endsection