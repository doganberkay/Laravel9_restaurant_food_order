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
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('admin.category.index')}}">Categories</a></li>
                <li class="breadcrumb-item active">Edit Category</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-8">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Category: {{$data->title}}</h5>

                        <!-- Horizontal Form -->
                        <form method="post" action="{{route('admin.category.update' ,['id'=>$data->id])}}" enctype="multipart/form-data" >

                            @csrf
                            <div class="row mb-3">
                                <label for="title" class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" name="title" value="{{$data->title}}" class="form-control" id="title" placeholder="Title" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Parent Category</label>
                                <div class="col-sm-10">
                                    <select class="form-select" name="parent_id" aria-label="Default select example">
                                        <option value="0" selected="selected">Main Category</option>
                                        @foreach($datalist as $rs)
                                            <option value="{{ $rs->id }}" @if($rs->id == $data->parent_id) selected="selected" @endif>
                                                {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title)}}</option>
                                        @endforeach
                                    </select>
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
                                    <input class="form-control" type="file" name="image" id="formFile">
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
                    @if(is_null($data->image))
                        <div class="img-container" style="position:relative; padding-top:66.59%;">
                            <img src="/assets/admin/img/default.jpg" style="position: absolute; top: 0; left: 0; width:100%; height:100%; object-fit: cover;object-position: 50% 0%;" >
                        </div>
                    @else
                        <div class="img-container" style="position:relative; padding-top:66.59%;">
                            <img src="{{Storage::url($data->image)}}" style="position: absolute; top: 0; left: 0; width:100%; height:100%; object-fit: cover;object-position: 50% 0%;" >
                        </div>
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">You can create a category here</h5>
                        <p class="card-text">You can use this page to create a food category for your restaurant such as burgers or salads.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection



