<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Faq;
use App\Models\Message;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public static function maincategorylist(){
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }

    public static function getParentId($id){
        $data = Category::find($id);
        return $data->parent_id;
    }
    public function index(){
        $setting=Setting::first();
        $sliderdata = Category::limit(4)->get();
        $productlist1 = Product::limit(6)->get();
        return view('home.index',[
            'setting'=>$setting,
            'sliderdata'=>$sliderdata,
            'productlist1'=>$productlist1
        ]);
    }

    public function product($id){

        $comments = Comment::where('product_id',$id)->where('status','True')->get();
        $data = Product::find($id);
        $images = DB::table('images')->where('product_id', $id)->get();
        return view('home.product',[
            'data'=>$data,
            'images'=>$images,
            'comments'=>$comments
        ]);
    }

    public function categoryproducts($id){

        $category = Category::find($id);
        $products = DB::table('products')->where('category_id', $id)->get();
        return view('home.categoryproducts',[
            'category'=>$category,
            'products'=>$products
        ]);
    }

    public function about(){
        $setting=Setting::first();
        return view('home.about',[
            'setting'=>$setting
        ]);
    }
    public function references(){
        $setting=Setting::first();
        return view('home.references',[
            'setting'=>$setting
        ]);
    }

    public function login1(){
        $setting=Setting::first();
        return view('home.login',[
            'setting'=>$setting
        ]);
    }

    public function contact(){
        $setting=Setting::first();
        return view('home.contact',[
            'setting'=>$setting
        ]);
    }
    public function faq(){
        $setting=Setting::first();
        $datalist=Faq::all();
        return view('home.faq',[
            'setting'=>$setting,
            'datalist'=>$datalist,
        ]);
    }

    public function storemessage(Request $request){
        $data = new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->ip = request()->ip();
        $data->save();

        return redirect()->route('contact')->with('info', 'Your message has been sent. Thank You!');
    }
    public function storecomment(Request $request){
        $data = new Comment();
        $data->user_id = Auth::id();
        $data->product_id = $request->input('product_id');
        $data->subject = $request->input('subject');
        $data->rate = $request->input('rate');
        $data->review = $request->input('review');
        $data->ip = request()->ip();
        $data->save();

        return redirect()->route('product',['id'=>$request->input('product_id')])->with('success', 'Your comment has been sent. Thank You!');
    }

    public function shop(){
        $setting=Setting::first();
        $category = Category::all();
        $products = Product::all();
        return view('home.shop',[
            'setting'=>$setting,
            'category'=>$category,
            'products'=>$products,
        ]);
    }


    public function logout(Request $request){

        Auth::logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function loginadmincheck(Request $request)
    {
        // dd($request);
        $messages = [
            'email.required' => 'Email is required!',
            'password.required' => 'Password is required!'
        ];

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ],$messages);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

}
