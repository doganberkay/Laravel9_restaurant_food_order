@extends('layouts.adminwindow')

@section('title','Image')
@section('description')
    You can order food without a waitress
@endsection
@section('keywords','food,order,order food')

@section('content')


    <div class="pagetitle">
        <h1>Image Gallery of: {{$product->title}} </h1>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">


                <div class="card">
                    <div class="card-body">
                    <br>
                    <form  action="{{route('admin.image.store' ,['pid'=>$product->id])}}" method="post" enctype="multipart/form-data" >

                        @csrf
                        <div class="row mb-3">
                            <label for="title" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                                <input type="text" name="title" class="form-control" id="title" placeholder="Title" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">Image Upload</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" name="image" id="formFile" required>
                            </div>
                        </div>
                        <br>
                            <div class="card">
                                <button type="submit" class="btn btn-primary">Add new image</button>
                            </div>

                    </form><!-- End Horizontal Form -->
                    </div>
                </div>


                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Images Table</h5>

                        <!-- Table with hoverable rows -->
                        <table class="table table-hover ">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th style="text-align: center;"  scope="col">Thumbnail</th>
                                <th style="text-align: center;" scope="col">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $images as $rs)
                            <tr >
                                <th scope="row">{{$rs->id}}</th>
                                <td>{{$rs->title}}</td>
                                <td>
                                    @if(is_null($rs->image))
                                        <div class="img-container" style="position:relative; padding-top:66.59%;">
                                            <img src="/assets/admin/img/default.jpg" style="position: absolute; top: 0; left: 0; width:50%; height:50%; object-fit: cover;object-position: 50% 0%;" >
                                        </div>
                                    @else
                                        <div class="img-container" style="position:relative; padding-top:66.59%;">
                                            <img src="{{Storage::url($rs->image)}}" style="position: absolute; top: 0; left: 0; width:100%; height:100%; object-fit: cover;object-position: 50% 0%;" >
                                        </div>
                                    @endif

                                </td>
                                <td style="text-align: center;"><a href="{{route('admin.image.delete', ['pid'=>$product->id,'id'=>$rs->id])}}" class="btn btn-outline-danger " onclick="return confirm('You are deleting category! Are you sure?')"><i class="bi bi-trash"></i> Delete</a> </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <!-- End Table with hoverable rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection



