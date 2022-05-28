@extends('layouts.home')

@section('title',$data->title)

@section('keywords','food,order,order food')


@section('content')

    <!-- breadcrumb-section -->
    <div class="breadcrumb-section" style="background-image: url({{Storage::url($data->image)}});">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>See more Details</p>
                        <h1>{{$data->title}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- single product -->
    <div class="single-product mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-md-5">

                    <div class="carousel slide" data-ride="carousel" id="carousel-1">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active"><img class=""
                                                                   style="height:400px; width:500px; object-fit: contain"
                                                                   src="{{Storage::url($data->image)}}"
                                                                   alt="Slide Image" loading="lazy"></div>
                            @foreach($images as $rs)
                                <div class="carousel-item"><img style="height:400px; width:500px; object-fit: contain"
                                                                src="{{Storage::url($rs->image)}}" alt="Slide Image">
                                </div>
                                @if(is_null($rs->image))

                                @else
                                    <a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span
                                            class="carousel-control-prev-icon"></span><span
                                            class="sr-only">Previous</span></a>
                                    <a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><span
                                            class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a>

                                @endif

                            @endforeach
                        </div>

                    </div>


                </div>
                <div class="col-md-7">
                    <div class="single-product-content">
                        <h3>{{$data->title}}</h3>
                        <p class="single-product-pricing"><span>Per Kg</span> ${{$data->price}}</p>
                        @php
                        $average = $data->comment->average('rate')
                        @endphp
                        <i class="fa fa-star"></i>
                         {{number_format($average,1)}} / {{$data->comment->count('id')}} Reviews

                        <p>{{$data->description}}</p>
                        <div class="single-product-form">
                            <form action="index.html">
                                <input type="number" placeholder="0">
                            </form>
                            <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                            <p><strong>Categories: </strong>{{$data->category->title}}</p>
                        </div>
                        <h4>Share:</h4>
                        <ul class="product-share">
                            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href=""><i class="fab fa-twitter"></i></a></li>
                            <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href=""><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>


            <div>
                <div class="single-product-content">
                    <h3>Details</h3>
                    {!!$data->detail!!}
                </div>
            </div>


            <div class="comments-list-wrap">
                <h3 class="comment-count-title">{{$data->comment->count('id')}} Comments</h3>
                <div class="comment-list">
                    @foreach($comments as $rs)
                        <div class="single-comment-body">
                            <div class="comment-user-avater">
                                <img src="/assets/img/avaters/avatar1.png" alt="">
                            </div>
                            <div class="comment-text-body">
                                <h4>{{$rs->user->name}} <span class="comment-date">Aprl 26, 2020</span></h4>
                                <p> {{$rs->review}}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            @include('home.messages')
            <div class="comment-template">
                <h4>Leave a comment</h4>
                <p>If you have a comment dont feel hesitate to send us your opinion.</p>
                <form action="{{route('storecomment')}}" method="post">
                    @csrf


                    <input class="input" type="hidden" name="product_id" value="{{$data->id}}"/>
                    <p>
                        <input type="text" name="subject" placeholder="Subject">
                        <input type="text" name="rate" placeholder="Rate">
                    </p>
                    <p><textarea name="review" id="review" cols="30" rows="10" placeholder="Your Message"></textarea>
                    </p>
                    @auth
                        <p><input type="submit" value="Submit"></p>
                    @else
                        <a href="/login" class="cart-btn"><i class="fas fa-user"></i> For Submit Your Comment, Please
                            Login</a>
                    @endauth
                </form>
            </div>
        </div>
    </div>
    <!-- end single product -->

    <!-- more products -->
    <div class="more-products mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">
                        <h3><span class="orange-text">Related</span> Products</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet
                            beatae optio.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-product-item">
                        <div class="product-image">

                            <a href="single-product.html"><img src="/assets/img/products/product-img-1.jpg" alt=""></a>
                        </div>
                        <h3>Strawberry</h3>
                        <p class="product-price"><span>Per Kg</span> 85$ </p>
                        <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="single-product.html"><img src="/assets/img/products/product-img-2.jpg" alt=""></a>
                        </div>
                        <h3>Berry</h3>
                        <p class="product-price"><span>Per Kg</span> 70$ </p>
                        <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="single-product.html"><img src="/assets/img/products/product-img-3.jpg" alt=""></a>
                        </div>
                        <h3>Lemon</h3>
                        <p class="product-price"><span>Per Kg</span> 35$ </p>
                        <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end more products -->

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

@section('foot')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap');

        body {
            background: #fff;
        }

        .carousel-item {
            width: 100%
        }

        .carousel-control-prev-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23000' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath d='M5.25 0l-4 4 4 4 1.5-1.5L4.25 4l2.5-2.5L5.25 0z'/%3e%3c/svg%3e");
        }

        .carousel-control-next-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23000' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath d='M2.75 0l-1.5 1.5L3.75 4l-2.5 2.5L2.75 8l4-4-4-4z'/%3e%3c/svg%3e");
        }


        /* Modified from: https://github.com/mukulkant/Star-rating-using-pure-css */
    </style>
@endsection
