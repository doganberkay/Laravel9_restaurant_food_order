@extends('layouts.adminwindow')

@section('title','Show Comment: '.$data->subject )
@section('description')
    You can order food without a waitress
@endsection
@section('keywords','food,order,order food')

@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection

@section('content')


    <div class="pagetitle">
        <h1>Order Detail</h1>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <a href="/admin/message/delete/{{$data->id}}" onclick="return confirm('You are deleting order! Are you sure?')" class="btn btn-danger" >Delete Order</a>
                        </div>
                    </div>
                </div>


                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Detailed Information of order <b></b> </h5>

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
                                <th scope="row">Name</th>
                                <td>{{$data->user->name}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Username</th>
                                <td>{{$data->user->name}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Phone</th>
                                <td>{{$data->phone}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Email</th>
                                <td>{{$data->email}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Address</th>
                                <td>{{$data->address}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Status</th>
                                <td>{{$data->status}}</td>
                            </tr>
                            <tr>
                                <th scope="row">IP Address</th>
                                <td>{{$data->IP}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Creation Date</th>
                                <td>{{$data->created_at}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Update Date</th>
                                <td>{{$data->updated_at}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Admin Note:
                                    <br><br><br>
                                Status:
                                </th>
                                <td>
                                    <form role="form" action="{{route('admin.order.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <textarea cols="80" name="note">
                                            {{$data->note}}
                                        </textarea>
                                        <br>
                                        <select  name="status" value="{{$data->status}}" aria-label="Default select example">
                                            <option >Accepted</option>
                                            <option >Shipped</option>
                                            <option >Cancelled</option>
                                            <option >Completed</option>
                                        </select>
                                        <div><br>
                                            <button type="submit" class="btn btn-primary">Update Now</button>
                                        </div><br>
                                    </form>

                                </td>
                            </tr>
                            </tbody>
                        </table>

                        <!-- End Default Table Example -->
                        <table class="table table-hover">
                            <thead>
                            <tr >
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Amount</th>
                                <th style="text-align: center;" scope="col">Thumbnail</th>
                                <th style="text-align: center;" scope="col">Status</th>
                                <th style="text-align: center;" cope="col">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $datalist as $rs)
                                <tr >
                                    <th scope="row">{{$rs->id}}</th>
                                    <td>{{$rs->product->title}}</td>
                                    <td>$ {{$rs->price}}</td>
                                    <td>{{$rs->quantity}}</td>
                                    <td>{{$rs->amount}}</td>
                                    <td>
                                        @if(is_null($rs->product->image))
                                            <div class="img-container" style="position:relative; padding-top:66.59%;">
                                                <img src="/assets/admin/img/default.jpg" style="position: absolute; top: 0; left: 0; width:100%; height:100%; object-fit: cover;object-position: 50% 0%;" >
                                            </div>
                                        @else
                                            <div class="img-container" style="position:relative; padding-top:66.59%;">
                                                <img src="{{Storage::url($rs->product->image)}}" style="position: absolute; top: 0; left: 0; width:100%; height:100%; object-fit: cover;object-position: 50% 0%;" >
                                            </div>
                                        @endif
                                    </td>
                                    <td style="text-align: center;">{{$rs->status}}</td>
                                    <td style="text-align: center;">
                                        <a href="{{route('admin.order.acceptproduct', ['id'=>$rs->id])}}" class="btn btn-outline-success"
                                           onclick="return confirm('You are canceling order! Are you sure?')"><i class="bi bi-arrow-90deg-left"></i> Accept</a>

                                        <a href="{{route('admin.order.cancelproduct', ['id'=>$rs->id])}}" class="btn btn-outline-danger" o
                                           nclick="return confirm('You are canceling order! Are you sure?')"><i class="bi bi-trash"></i> Cancel</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>

            </div>

        </div>
    </section>
@endsection


@section('foot')
@endsection



