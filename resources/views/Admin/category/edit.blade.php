@extends('layouts.admin')

@section('title','Edit Category: '.$data->title )
@section('description')
    You can order food without a waitress
@endsection
@section('keywords','food,order,order food')

@section('content')


    <div class="pagetitle">
        <h1>Edit Category: {{$data->title}}</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-8">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Horizontal Form</h5>

                        <!-- Horizontal Form -->
                        <form method="post" action="/admin/category/update/{{$data->id}}" >

                            @csrf
                            <div class="row mb-3">
                                <label for="title" class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" name="title" value="{{$data->title}}" class="form-control" id="title" placeholder="Title" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="keywords" class="col-sm-2 col-form-label">Keywords</label>
                                <div class="col-sm-10">
                                    <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control" placeholder="Keywords">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="description" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <input type="text" name="description" value="{{$data->description}}" class="form-control" placeholder="Description">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">Image Upload</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-10">
                                    <select class="form-select" name="status" value="{{$data->status}}" aria-label="Default select example">
                                        <option selected>{{$data->status}}</option>
                                        <option value="1">True</option>
                                        <option value="0">False</option>
                                    </select>
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form><!-- End Horizontal Form -->

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



