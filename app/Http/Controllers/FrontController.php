<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Facility;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\Validator;

class FrontController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function contact(Request $request)
    {
        $validated = $request->validate([
            'g-recaptcha-response' => 'recaptcha',
            recaptchaFieldName() => recaptchaRuleName()
        ]);
        
        Contact::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'content' => $request->content,
        ]);
        
        return redirect()->route('index');
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

    public function facility()
    {
        $facilities = Facility::get();

        return view('front.facility.index',compact('facilities'));
    }
    
    public function productList(Request $request)
    {
        $productCategories = ProductCategory::get();

        if($request->category_id){
            $products = Product::where('product_category_id',$request->category_id)->get();
        }else{
            $products = Product::get();
        }

        return view('front.product.list',compact('productCategories','products'));
    }

    public function productContent($id)
    {
        $product = Product::with('productImages')->find($id);

        return view('front.product.content',compact('product'));
    }
}
