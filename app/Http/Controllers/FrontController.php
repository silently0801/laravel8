<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
