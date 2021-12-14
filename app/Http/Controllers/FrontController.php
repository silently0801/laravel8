<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Contact;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function newsList()
    {
        $news = News::get();

        return view('front.news.list',compact('news'));
    }

    public function newsContent($id)
    {
        $news = News::find($id);
        
        return view('front.news.content',compact('news'));
    }
    
    public function contact(Request $request)
    {
        Contact::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'content' => $request->content,
        ]);
        
        return redirect('/news');
    }
}
