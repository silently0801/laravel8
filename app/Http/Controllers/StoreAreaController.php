<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Models\StoreArea;
use Illuminate\Http\Request;

class StoreAreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $storeAreas = StoreArea::orderBy('created_at','desc')->get();
        
        return view('admin.store-area.index',compact('storeAreas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.store-area.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        StoreArea::create($request->all());
        return redirect()
        ->route('store-areas.index')
        ->with([
            'message'=>'區域新增成功!!',
            'color'=>'alert-success'
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
        $storeArea = StoreArea::find($id);

        return view('admin.store-area.edit',compact('storeArea'));
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
        StoreArea::find($id)->update($request->all());

        return redirect()
        ->route('store-areas.index')
        ->with([
            'message'=>'區域更新成功!!!',
            'color'=>'alert-success'
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
        $storeArea = StoreArea::with('stores')->find($id);

        if($storeArea->stores->count()){
            return redirect()
            ->route('store-areas.index')
            ->with([
                'message'=>'目前'.$storeArea->name.'區域，尚有'.$storeArea->stores->count().'間門市，無法刪除。',
                'color'=>'alert-danger'
            ]);
        }

        $storeArea->delete();
        return redirect()
        ->route('store-areas.index')
        ->with([
            'message'=>'區域刪除成功!!!',
            'color'=>'alert-success'
        ]);
    }
}
