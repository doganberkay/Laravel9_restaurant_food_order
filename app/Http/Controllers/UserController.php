<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Echo_;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting=Setting::first();
        return view('home.user.index',[
        'setting'=>$setting,
        ]);
    }



    public function reviews(){
        $reviews=Comment::where('user_id','=',Auth::id())->get();
        return view('home.user.comments',[
            'reviews'=>$reviews
        ]);
    }

    public function orders(){
        $data=Order::where('user_id','=',Auth::id())->get();
        return view('home.user.orders',[
            'data'=>$data
        ]);
    }
    public function orderdetail($id){
        $order = Order::find($id);
        $orderproduct= OrderProduct::where('order_id','=',$id)->get();

        return view('Home.user.orderdetail',[
            'order'=>$order,
            'orderproduct'=>$orderproduct,
        ]);
    }

    public function cancelproduct($id)
    {

        $data= OrderProduct::find($id);
        $data->status = 'Cancelled';
        $data->save();
        return redirect()->back();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data= Comment::find($id);
        $data->delete();

        return redirect(route('userpanel.reviews'));
    }
}
