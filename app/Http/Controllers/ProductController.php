<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::get();

        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 判斷主要圖片有沒有上傳
        if ($request->hasFile('image_url')) {
            $path = Storage::put('/product', $request->image_url);
        }
        // 建立產品
        $product = Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'image_url' => $path,
            'description' => $request->description,
        ]);
        // 儲存其他圖片，利用迴圈讀出檔案
        if ($request->hasFile('image_urls')) {
            foreach ($request->image_urls as $image_url) {
                $path = Storage::put('/product', $image_url);

                ProductImage::create([
                    'product_id' => $product->id,
                    'image_url' => $path
                ]);
            }
        }

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::with('productImages')->find($id);

        return view('admin.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        // 判斷是否有上傳新的主要圖片
        if ($request->hasFile('image_url')) {
            // 刪除舊的主要圖片
            Storage::delete($product->image_url);
            // 上傳新圖片
            $path = Storage::put('/product', $request->image_url);
        } else {
            // 沿用舊圖片
            $path = $product->image_url;
        }
        // 更新產品資料
        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'image_url' => $path,
            'description' => $request->description,
        ]);
        // 判斷是否有上傳新的其他圖片
        if($request->hasFile('image_urls')){
            foreach ($request->image_urls as $image_url) {
                $path = Storage::put('/product', $image_url);

                ProductImage::create([
                    'product_id' => $product->id,
                    'image_url' => $path
                ]);
            }
        }

        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::with('productImages')->find($id);
        // 刪除主要圖片檔案
        Storage::delete($product->image_url);
        
        // 利用迴圈將每一張圖片刪除
        foreach ($product->productImages as $productImage) {
            // 刪除其他圖片檔案
            Storage::delete($productImage->image_url);
            // 刪除圖片資料
            $productImage->delete();
        }
        // 刪除產品資料
        $product->delete();

        return redirect()->route('products.index');
    }

    public function imageDelete(Request $request)
    {
        // 找出對應的其他圖片
        $productImage = ProductImage::find($request->id);
        // 將圖片檔案刪除
        Storage::delete($productImage->image_url);
        // 將資料從資料庫移除
        $productImage->delete();

        return 'success';
    }
}
