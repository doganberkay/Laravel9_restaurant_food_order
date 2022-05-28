@extends('layouts.admin')

@section('title','Product')
@section('description')
    You can order food without a waitress
@endsection
@section('keywords','food,order,order food')

@section('content')


    <div class="pagetitle">
        <h1>Product List</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                <li class="breadcrumb-item active">Products</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <a href="{{route('admin.order.create')}}" class="btn btn-primary" >Add new product</a>
                </div>


                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product Table</h5>

                        <!-- Table with hoverable rows -->
                        <table class="table table-hover">
                            <thead>
                            <tr >
                                <th scope="col">#</th>
                                <th scope="col">Category</th>
                                <th scope="col">Title</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Thumbnail</th>
                                <th style="text-align: center;" scope="col">Images</th>
                                <th style="text-align: center;" scope="col">Status</th>
                                <th style="text-align: center;" scope="col">Detail</th>
                                <th style="text-align: center;" scope="col">Edit</th>
                                <th style="text-align: center;" cope="col">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $data as $rs)
                            <tr >
                                <th scope="row">{{$rs->id}}</th>
                                <td>{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category, $rs->category->title)}}</td>
                                <td>{{$rs->title}}</td>
                                <td>{{$rs->price}}</td>
                                <td>{{$rs->quantity}}</td>
                                <td>
                                    @if(is_null($rs->image))
                                        <div class="img-container" style="position:relative; padding-top:66.59%;">
                                            <img src="/assets/admin/img/default.jpg" style="position: absolute; top: 0; left: 0; width:100%; height:100%; object-fit: cover;object-position: 50% 0%;" >
                                        </div>
                                    @else
                                        <div class="img-container" style="position:relative; padding-top:66.59%;">
                                            <img src="{{Storage::url($rs->image)}}" style="position: absolute; top: 0; left: 0; width:100%; height:100%; object-fit: cover;object-position: 50% 0%;" >
                                        </div>
                                    @endif
                                </td>
                                <td style="text-align: center;"><a onclick="return !window.open(this.href, '','top=50 left=100 width=1100, height=700')" href="{{route('admin.image.index', ['pid'=>$rs->id])}} " class="btn btn-outline-secondary"><i class="bi bi-card-image"></i> Images</a></td>
                                <td style="text-align: center;">{{$rs->status}}</td>
                                <td style="text-align: center;"><a href="{{route('admin.order.show', ['id'=>$rs->id])}} " class="btn btn-outline-info"><i class="bi bi-info-circle"></i> Show</a></td>
                                <td style="text-align: center;"><a href="{{route('admin.order.edit', ['id'=>$rs->id])}}" class="btn btn-outline-primary" ><i class="bi bi-pencil"></i> Edit</a></td>
                                <td style="text-align: center;"><a href="{{route('admin.order.delete', ['id'=>$rs->id])}}" class="btn btn-outline-danger" onclick="return confirm('You are deleting product! Are you sure?')"><i class="bi bi-trash"></i> Delete</a> </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <!-- End Table with hoverable rows -->

                    </div>
                </div>

            </div>

            <div class="col-lg-2">




            </div>
        </div>
    </section>
@endsection



