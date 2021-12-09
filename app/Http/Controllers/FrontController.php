<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }

    public function hello()
    {
        $name = 'leo';
        $age = 18;
        $gender = 'male';

        // dd(compact('name','age','gender'));
        // return view('hello',['name' => $name,'age' => $age,'gender' => $gender,'id'=>$id]);
        return view('hello', compact('name', 'age', 'gender'));
    }

    
    public function news()
    {
        $news = DB::table('news')->get();
        
        return view('news-list',compact('news'));
    }

    public function newsContent($id)
    {
        // 透過id尋找資料
        $news = DB::table('news')->find($id);

        return view('news-content',compact('news'));
    }
}
