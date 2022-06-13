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
    <form id="tableno" action="{{route('shopcart.storeorder')}}" method="post">
        @csrf

    <div class="cart-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="checkout-accordion-wrap">
                        <div id="accordionExample">
                            @include('Home.messages')

                            <div class="card single-accordion">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link " type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Select Table
                                        </button>
                                    </h5>
                                </div>

                                <div aria-labelledby="headingOne" style="">
                                    <div class="card-body">
                                        <div class="billing-address-form">
                                            <p><input class="form-control" type="hidden" name="total" value="{{$total}}"></p>
                                            <p><input class="form-control" type="text" name="name" value="{{Auth::user()->name}}" required></p>
                                                <select id="tableno" class="form-control" name="tableno" aria-label="Default select example">
                                                <option value="0" selected>Select your table number</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>

                                            </select></p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card single-accordion">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Card Information (Optional)
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
                                <td>Total</td>
                                <td>${{$total}}</td>
                            </tr>
                            </tbody>
                        </table>
                        <br>
                        <button class="cart-btnn" type="submit">Place Order</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
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

    <script>

        $('#tableno').submit(function () {
            if ($('#tableno').val() != '0')) {  //Check the value of select
                return true; //allow to submit the form
            }
        else {
                alert("Please select an option");
                return false;  //Prevent form being submitted
            }
        });
    </script>


@endsection
