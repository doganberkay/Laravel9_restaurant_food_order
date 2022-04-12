@extends('layouts.admin')

@section('title','Category')
@section('description')
    You can order food without a waitress
@endsection
@section('keywords','food,order,order food')

@section('content')


    <div class="pagetitle">
        <h1>Category List</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                <li class="breadcrumb-item active">Categories</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-8">

                <div class="card">
                    <a href="/admin/category/create" class="btn btn-primary" >Add new category</a>
                </div>


                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Category Table</h5>

                        <!-- Table with hoverable rows -->
                        <table class="table table-hover ">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Keywords</th>
                                <th scope="col">Description</th>
                                <th scope="col">Image</th>
                                <th scope="col">Status</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $data as $rs)
                            <tr>
                                <th scope="row">{{$rs->id}}</th>
                                <td>{{$rs->title}}</td>
                                <td>{{$rs->keywords}}</td>
                                <td>{{$rs->description}}</td>
                                <td>{{$rs->image}}</td>
                                <td>{{$rs->status ? 'True' : 'False'}}</td>
                                <td><a href="/admin/category/show/{{$rs->id}}" class="btn btn-outline-info">Show</a> </td>
                                <td><a href="/admin/category/edit/{{$rs->id}}" class="btn btn-outline-primary" >Edit</a></td>
                                <td><a href="/admin/category/delete/{{$rs->id}}" class="btn btn-outline-danger">Delete</a> </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <!-- End Table with hoverable rows -->

                    </div>
                </div>

            </div>

            <div class="col-lg-4">

                <div class="card">
                    <img src="/assets/admin/img/card.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">You can create a category here</h5>
                        <p class="card-text">You can use this page to create a food category for your restaurant such as burgers or salads.</p>
                    </div>
                </div>


            </div>
        </div>
    </section>
@endsection



