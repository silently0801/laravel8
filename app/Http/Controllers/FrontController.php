<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\AssignOp\Concat;

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
        $news = News::get();

        return view('news-list',compact('news'));
    }

    public function newsContent($id)
    {
        // 透過id尋找資料
        $news = News::find($id);

        // $news = DB::table('news')->where('id',1)->first();
        // dd($news->title);
        
        return view('news-content',compact('news'));
    }
    public function createNews()
    {
        News::create([
            'title'=>'11111交通部觀光局呼籲旅宿業者協力抗漲',
            'date'=>'2021-12-10',
            'content'=>'1111因應近期各界關切物價，行政院積極穩定國內民生消費物品市場。',
            'image_url'=>'https://www.taiwan.net.tw/pic.ashx?qp=/0042228/13_0042228_2.jpg&sizetype=2'
        ]);
        
        return 'create success';
    }

    public function updateNews($id)
    {
        News::find($id)->update([
            'title'=>'55555',
            'date'=>'3021-12-10',
        ]);

        return 'update success';
    }

    public function destroyNews($id)
    {
        News::find($id)->delete();
        return 'delete success';
    }

    public function contact(Request $request)
    {
        // $request->all()
        Contact::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'content' => $request->content,
        ]);
        
        return redirect('/news');
    }
}
