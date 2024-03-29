@extends('layouts.admin')

@section('title','User List')
@section('description')
    You can order food without a waitress
@endsection
@section('keywords','food,order,order food')

@section('content')


    <div class="pagetitle">
        <h1>User List</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                <li class="breadcrumb-item active">User List</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">



                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">User Table</h5>

                        <!-- Table with hoverable rows -->
                        <table class="table table-hover">
                            <thead>
                            <tr >
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">E-mail</th>
                                <th scope="col">Role</th>
                                <th scope="col">Status</th>
                                <th style="text-align: center;" scope="col">Detail</th>
                                <th style="text-align: center;" cope="col">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $data as $rs)
                            <tr >
                                <th scope="row">{{$rs->id}}</th>
                                <td>{{$rs->name}}</td>
                                <td>{{$rs->email}}</td>
                                <td>    @foreach($rs->roles as $role)
                                        {{$role->name}}
                                        @endforeach
                                </td>
                                <td>{{$rs->status}}</td>
                                <td style="text-align: center;"><a href="{{route('admin.user.show', ['id'=>$rs->id])}} " onclick="return !window.open(this.href, '','top=50 left=100 width=1100,height=700')" class="btn btn-outline-info"><i class="bi bi-info-circle"></i> Show</a></td>
                                <td style="text-align: center;"><a href="{{route('admin.user.delete', ['id'=>$rs->id])}}" class="btn btn-outline-danger" onclick="return confirm('You are deleting message! Are you sure?')"><i class="bi bi-trash"></i> Delete</a> </td>
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



