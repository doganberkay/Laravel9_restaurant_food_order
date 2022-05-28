@extends('layouts.adminwindow')

@section('title','User Detail: '.$data->title )
@section('description')
    You can order food without a waitress
@endsection
@section('keywords','food,order,order food')

@section('content')


    <div class="pagetitle">
        <h1>User Detail: {{$data->name}}</h1>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <a href="/admin/message/delete/{{$data->id}}" onclick="return confirm('You are deleting {{$data->name}} message! Are you sure?')" class="btn btn-danger" >Delete Category</a>
                        </div>
                    </div>
                </div>


                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Detailed Information of user: <b>{{$data->name}}</b> </h5>

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
                                <td>{{$data->name}}</td>
                            </tr>
                            <tr>
                                <th scope="row">E-mail</th>
                                <td>{{$data->email}}</td>
                            </tr>

                            <tr> <th>Roles</th>
                                <td>    @foreach($data->roles as $role)
                                            <a href="{{route('admin.user.deleterole', ['uid'=>$data->id,'rid'=>$role->id])}}" onclick="return confirm('You are deleting role! Are you sure?')">
                                                <button  class="button1 btn btn-outline-danger">
                                                    <span class="name">{{$role->name}}</span>
                                                    <span class="delete"> {{$role->name}}<i class="bi bi-trash"></i></span>
                                                </button>
                                            </a>
                                    @endforeach
                                </td>
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
                                <th scope="row">Add Role to User</th>
                                <td>
                                    <form role="form" action="{{route('admin.user.addrole',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <select name="role_id">
                                            @foreach($roles as $role)
                                                <option value="{{$role->id}}">{{$role->name}}</option>
                                                 @endforeach
                                        </select>
                                        <div><br>
                                            <button type="submit" class="btn btn-primary">Add Role</button>
                                        </div><br>
                                    </form>

                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <!-- End Default Table Example -->
                    </div>
                </div>

            </div>

        </div>
    </section>


    <style>
        .button1 .delete {
            display: none;
        }

        .button1:hover .name {
            display: none;
        }

        .button1:hover .delete {
            display: inline;
        }

    </style>
    <script>

    </script>
@endsection




