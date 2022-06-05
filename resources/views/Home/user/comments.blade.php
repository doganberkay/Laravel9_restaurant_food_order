@extends('layouts.home')


@section('title','User Comments & Reviews')

@section('content')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>User Panel</p>
                        <h1>User Comments & Reviews</h1>
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
                                <h5 class="card-title">Comments Table</h5>

                                <!-- Table with hoverable rows -->
                                <table class="table table-hover">
                                    <thead>
                                    <tr >
                                        <th scope="col">#</th>
                                        <th scope="col">Product</th>
                                        <th scope="col">Subject</th>
                                        <th scope="col">Review</th>
                                        <th scope="col">Rate</th>
                                        <th scope="col">Status</th>
                                        <th style="text-align: center;" cope="col">Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($reviews as $rs)
                                        <tr>
                                            <th scope="row">{{$rs->id}}</th>
                                            <td><a href="{{route('product',['id'=>$rs->product_id])}}">{{$rs->product->title}}</a></td>
                                            <td>{{$rs->subject}}</td>
                                            <td>{{$rs->review}}</td>
                                            <td>{{$rs->rate}}</td>
                                            <td>{{$rs->status}}</td>
                                            <td style="text-align: center;"><a href="{{route('userpanel.reviewdelete', ['id'=>$rs->id])}}" class="btn btn-outline-danger" onclick="return confirm('You are deleting message! Are you sure?')"><i class="bi bi-trash"></i> Delete</a> </td>
                                        </tr>
                                    @endforeach
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
    <!-- end contact form -->

    <!-- end google map section -->
@endsection
