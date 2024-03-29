@extends('layouts.admin')

@section('title','Show Category: '.$data->title )
@section('description')
    You can order food without a waitress
@endsection
@section('keywords','food,order,order food')

@section('content')


    <div class="pagetitle">
        <h1>Show Category: {{$data->title}}</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('admin.category.index')}}">Categories</a></li>
                <li class="breadcrumb-item active">Category Detail</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <a href="/admin/category/edit/{{$data->id}}" class="btn btn-primary" >Edit Category</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <a href="/admin/category/delete/{{$data->id}}" onclick="return confirm('You are deleting {{$data->title}} category! Are you sure?')" class="btn btn-danger" >Delete Category</a>
                        </div>
                    </div>
                </div>


                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Detailed Information of Category: <b>{{$data->title}}</b> </h5>

                        <!-- Default Table -->
                        <table class="table table-striped table-hover ">
                            <thead>
                            <tr>
                                <th scope="col">Table Names</th>
                                <th scope="col">Detailed Information</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">Id</th>
                                <td>{{$data->id}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Title</th>
                                <td>{{$data->title}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Keywords</th>
                                <td>{{$data->keywords}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Description</th>
                                <td>{{$data->description}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Status</th>
                                <td>{{$data->status}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Creation Date</th>
                                <td>{{$data->created_at}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Update Date</th>
                                <td>{{$data->updated_at}}</td>
                            </tr>
                            </tbody>
                        </table>
                        <!-- End Default Table Example -->
                    </div>
                </div>

            </div>

            <div class="col-lg-4">
                <div class="card">
                        @if(is_null($data->image))
                            <div class="img-container" style="position:relative; padding-top:66.59%;">
                                <img class="img-responsive" src="/assets/admin/img/default.jpg" style="position: absolute; top: 0; left: 0; height:100%; width:100%;object-fit: cover;object-position: 50% 0%;" >
                            </div>
                        @else
                            <div class="img-container" style="position:relative; padding-top:66.59%;">
                                <img src="{{Storage::url($data->image)}}" style="position: absolute; top: 0; left: 0; width:100%; height:100%; object-fit: cover;object-position: 50% 0%;" >
                            </div>
                        @endif


                    <div class="card-body">
                        <h5 class="card-title">Image of your category!</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, cupiditate est harum hic laboriosam neque repellat reprehenderit? Aperiam cupiditate distinctio dolores magnam molestiae natus, numquam odit quisquam sequi similique, ut?   </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection



