<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $sliderdata = Category::limit(4)->get();
        $productlist1 = Product::limit(6)->get();
        return view('home.index',[
            'sliderdata'=>$sliderdata,
            'productlist1'=>$productlist1
        ]);
    }

    public function about(){
        return view('home.about');
    }
    public function contact(){
        return view('home.contact');
    }
    public function shop(){
        return view('home.shop');
    }


}
