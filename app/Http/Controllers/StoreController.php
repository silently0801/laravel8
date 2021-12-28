<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Models\StoreArea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stores = Store::orderBy('created_at', 'desc')->get();

        return view('admin.store.index', compact('stores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $storeAreas = StoreArea::get();

        return view('admin.store.create', compact('storeAreas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 檢查主要圖片
        if ($request->hasFile('image_url')) {
            $path = Storage::put('/store', $request->image_url);
        }
        Store::create([
            'store_area_id' => $request->store_area_id,
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'image_url' => $path
        ]);

        return redirect()
            ->route('stores.index')
            ->with([
                'message' => '門市新增成功!!!',
                'color' => 'alert-success'
            ]);
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
        $storeAreas = StoreArea::get();
        $store = Store::find($id);

        return view('admin.store.edit',compact('storeAreas','store'));
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
        $store = Store::find($id);
        // 判斷是否有新照片
        if($request->hasFile('image_url')){
            // 刪除舊照片
            Storage::delete($store->image_url);
            // 儲存新圖片
            $path = Storage::put('/store',$request->image_url);
        }else{
            $path = $store->image_url;
        }

        $store->update([
            'store_area_id' => $request->store_area_id,
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'image_url' => $path
        ]);

        return redirect()
            ->route('stores.index')
            ->with([
                'message' => '門市編輯成功!!!',
                'color' => 'alert-success'
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $store = Store::find($id);
        Storage::delete($store->image_url);
        $store->delete();
        
        return redirect()
            ->route('stores.index')
            ->with([
                'message' => '門市刪除成功!!!',
                'color' => 'alert-success'
            ]);
    }
}
