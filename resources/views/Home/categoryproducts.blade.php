@extends('layouts.home')

@section('title',$category->title . ' Products')

@section('description')
    You can order food without a waitress
@endsection
@section('keywords','food,order,order food')


@section('content')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section" style="background-image: url({{Storage::url($category->image)}});">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>{{$category->description}}</p>
                        <h1>{{$category->title}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- products -->
    <div class="product-section mt-150 mb-150">
        <div class="container">



            <div class="row product-lists">



                @foreach($products as $rs)
                <div class="col-lg-4 col-md-6 text-center {{$rs->id}}">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="{{route('product',['id'=>$rs->id])}}">
                                @if(is_null($rs->image))
                                        <img src="/assets/admin/img/default.jpg" >
                                @else
                                        <img src="{{Storage::url($rs->image)}}" >
                                @endif</a>
                        </div>
                        <h3>{{$rs->title}}</h3>

                        <p class="product-price"><span>Per Portion</span> {{$rs->price}} $ </p>

                        <a href="{{route('shopcart.add',['id'=>$rs->id])}}" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>
                @endforeach

            </div>

            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="pagination-wrap">
                        <ul>
                            <li><a href="#">Prev</a></li>
                            <li><a href="#">1</a></li>
                            <li><a class="active" href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end products -->

    <!-- logo carousel -->
    <div class="logo-carousel-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo-carousel-inner">
                        <div class="single-logo-item">
                            <img src="/assets/img/company-logos/1.png" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="/assets/img/company-logos/2.png" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="/assets/img/company-logos/3.png" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="/assets/img/company-logos/4.png" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="/assets/img/company-logos/5.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end logo carousel -->
@endsection

