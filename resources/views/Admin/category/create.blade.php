@extends('layouts.admin')

@section('title','Laravel9 restaurant')
@section('description')
    You can order food without a waitress
@endsection
@section('keywords','food,order,order food')

@section('content')


    <div class="pagetitle">
        <h1>Create Category</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-6">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Horizontal Form</h5>

                        <!-- Horizontal Form -->
                        <form action="/admin/category/store" method="POST">

                            @csrf
                            <div class="row mb-3">
                                <label for="validationDefault01" class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="validationDefault01" placeholder="Title" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword2" class="col-sm-2 col-form-label">Keywords</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Keywords">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Description">
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
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="1">True</option>
                                        <option value="2">False</option>
                                    </select>
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form><!-- End Horizontal Form -->

                    </div>
                </div>
            </div>

            <div class="col-lg-6">


            </div>
        </div>
    </section>
@endsection



