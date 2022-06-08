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
                        <h1>User Order</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <div class="cart-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="checkout-accordion-wrap">
                        <div class="accordion" id="accordionExample">
                            @include('Home.messages')
                            <form action="{{route('shopcart.storeorder')}}" method="post">
                                @csrf
                            <div class="card single-accordion">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            Shipping Address
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample" style="">
                                    <div class="card-body">
                                        <div class="billing-address-form">
                                            <p><input class="form-control" type="hidden" name="total" value="{{$total}}"></p>
                                            <p><input class="form-control" type="text" name="name" value="{{Auth::user()->name}}" required></p>
                                            <p><input class="form-control" type="email" name="email" placeholder="Email"></p>
                                            <p><input class="form-control" type="tel" name="phone" placeholder="Phone"></p>
                                            <p><input class="form-control" type="text" name="address" placeholder="Address" required></p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card single-accordion">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Card Information
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample" style="">
                                    <div class="card-body">
                                        <div class="sbilling-address-form">
                                            <p><input class="form-control" type="hidden" name="total" value="{{$total}}"></p>
                                            <p><input class="form-control" type="tel" name="holder" placeholder="Card Holder" ></p>
                                            <p><input class="form-control" type="number" name="number" placeholder="Card Number"></p>
                                            <p><input class="form-control" type="text" name="date" placeholder="Exp. Date" ></p>
                                            <p><input class="form-control" type="text" name="code" placeholder="Security Code" ></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                                <button class="cart-btnn" type="submit">Place Order</button>
                            </form>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="order-details-wrap">
                        <table class="order-details">
                            <thead>
                            <tr>
                                <th>Your order Details</th>
                                <th>Price</th>
                            </tr>
                            </thead>
                            <tbody class="order-details-body">
                            <tr>
                                <td>Product</td>
                                <td>Total</td>
                            </tr>
                            <tr>
                                <td>Strawberry</td>
                                <td>$85.00</td>
                            </tr>
                            <tr>
                                <td>Berry</td>
                                <td>$70.00</td>
                            </tr>
                            <tr>
                                <td>Lemon</td>
                                <td>$35.00</td>
                            </tr>
                            </tbody>
                            <tbody class="checkout-details">
                            <tr>
                                <td>Subtotal</td>
                                <td>$190</td>
                            </tr>
                            <tr>
                                <td>Shipping</td>
                                <td>$50</td>
                            </tr>
                            <tr>
                                <td>Total</td>
                                <td>${{$total}}</td>
                            </tr>
                            </tbody>
                        </table>
                        <a href="#" class="boxed-btn">Place Order</a>
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
