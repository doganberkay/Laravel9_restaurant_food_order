@extends('layouts.home')


@section('title','User Order Detail')

@section('content')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>User Panel</p>
                        <h1>User Order Detail</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- contact form -->
    <div class="contact-from-section mt-150 mb-150">

        <div class="container-lg">
            <div class="row">

                <div class="col-md-9">
                    <div class="form-title">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Order Items</h5>

                                <!-- Table with hoverable rows -->
                                <table class="table table-hover">
                                    <thead>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="col">Name :</th>
                                            <td>{{$order->name}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Phone :</th>
                                            <td>{{$order->phone}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Email :</th>
                                            <td>{{$order->email}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Address :</th>
                                            <td>{{$order->address}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Note :</th>
                                            <td>{{$order->note}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Status :</th>
                                            <td>{{$order->status}}</td>
                                        </tr>

                                    <tr class="total-data">
                                        <td><strong>Total: </strong></td>
                                        <td>${{$order->total}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <!-- End Table with hoverable rows -->


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="contact-form-wrap">
                        <h4><i class="fas fa-map"></i> User Menu</h4>
                        @include('Home.user.usermenu')
                    </div>
                </div>
            </div>
        </div>

    </div>


    <div class="contact-from-section mt-150 mb-150">

        <div class="container-lg">

    <div class="">
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
                    <th class="product-total">Status</th>
                </tr>
                </thead>
                <tbody>
                @php($total=0)
                @foreach($orderproduct as $rs)
                    <tr class="table-body-row">
                        <td class="product-remove">
                           @if($rs->status == "New")
                            <a href="{{route('userpanel.cancelproduct', ['id'=>$rs->id])}}" class="far fa-window-close" onclick="return confirm('You are deleting message! Are you sure?')"></i></a>
                            @endif
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
                        <td class="product-quantity">{{$rs->quantity}}
                        </td>
                        <td class="product-total"><b> ${{$rs->quantity * $rs->product->price}}</b></td>
                        <td>{{$rs->status}}</td>

                    </tr>
                    @php($total += $rs->quantity * $rs->product->price)
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
        </div>
    </div>

    <!-- end contact form -->

    <!-- end google map section -->
@endsection
