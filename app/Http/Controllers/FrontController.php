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
        return view('welcome');
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
        return view('news-create');
    }

    public function storeNews(Request $request)
    {
        // News::create([
        //     'title' => $request->title,
        //     'date' => $request->date,
        //     'image_url' => $request->image_url,
        //     'content' => $request->content,
        // ]);

        News::create($request->all());
        
        return redirect('/news');
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
