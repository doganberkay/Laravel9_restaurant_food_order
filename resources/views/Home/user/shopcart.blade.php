@extends('layouts.home')


@section('title','User Shopcart')

@section('content')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>User Panel</p>
                        <h1>User Shopcart</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <div class="cart-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="cart-table-wrap">
                        <table class="cart-table">
                            <thead class="cart-table-head">
                            <tr class="table-head-row">
                                <th class="product-remove"></th>
                                <th class="product-image">Product Image</th>
                                <th class="product-name">Name</th>
                                <th class="product-price">Price</th>
                                <th class="product-quantity">Quantity</th>
                                <th class="product-total">Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php($total=0)
                            @foreach($data as $rs)
                                <tr class="table-body-row">
                                    <td class="product-remove"><a href="{{route('shopcart.delete', ['id'=>$rs->id])}}" class="far fa-window-close" onclick="return confirm('You are deleting message! Are you sure?')"></i></a>
                                    </td>
                                    <td class="">
                                        @if(is_null($rs->product->image))
                                            <div class="img-container" style="position:relative; padding-top:66.59%;">
                                                <img src="/assets/admin/img/default.jpg" style="position: absolute; top: 0; left: 0; width:100%; height:100%; object-fit: cover;object-position: 50% 0%;" >
                                            </div>
                                        @else
                                            <div class="img-container" style="position:relative; padding-top:66.59%;">
                                                <img src="{{Storage::url($rs->product->image)}}" style="position: absolute; top: 0; left: 0; width:100%; height:100%; object-fit: cover;object-position: 50% 0%;" >
                                            </div>
                                        @endif</td>
                                    <td class="product-name">{{$rs->product->title}}</td>
                                    <td class="product-price">${{$rs->product->price}}</td>
                                    <td class="product-quantity">
                                        <form action="{{route('shopcart.update',['id'=> $rs->id])}}" method="post">
                                            @csrf
                                            <input name="quantity" type="number" value="{{$rs->quantity}}" min="1" max="{{$rs->product->quantity}}" onchange="this.form.submit()"  >
                                        </form>
                                    </td>
                                    <td class="product-total"><b> ${{$rs->quantity * $rs->product->price}}</b></td>
                                </tr>
                                @php($total += $rs->quantity * $rs->product->price)
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="total-section">
                        <table class="total-table">
                            <thead class="total-table-head">
                            <tr class="table-total-row">
                                <th>Total</th>
                                <th>Price</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="total-data">
                                <td><strong>Total: </strong></td>
                                <td>${{$total}}</td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="cart-buttons">
                            <form action="{{route('shopcart.order')}}" method="post">
                                @csrf
                                <input name="total" value="{{$total}}" type="hidden">
                                <button type="submit" class="cart-btnn">Check Out</button>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- end google map section -->

    <style>
        .cart-btnn{
            font-family: 'Poppins', sans-serif;
            display: inline-block;
            background-color: #F28123;
            color: #fff;
            padding: 10px 20px;
        }
        .cart-btnn {
            -webkit-transition: 0.3s;
            -o-transition: 0.3s;
            transition: 0.3s;
        }
        .cart-btnn i {
            margin-right: 5px;
        }
        .single-product-form a.cart-btnn {
            margin-bottom: 15px;
        }
        .cart-btnn {
            border-radius: 50px;
        }

        .cart-btnn:hover {
            background-color: #051922;
            color: #F28123;
        }
    </style>
@endsection
