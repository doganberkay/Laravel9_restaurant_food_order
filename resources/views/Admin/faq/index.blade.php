@extends('layouts.admin')

@section('title','F.A.Q.')
@section('description')
    You can order food without a waitress
@endsection
@section('keywords','food,order,order food')

@section('content')


    <div class="pagetitle">
        <h1>F.A.Q. List</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                <li class="breadcrumb-item active">F.A.Q.</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <a href="{{route('admin.faq.create')}}" class="btn btn-primary" >Add new question</a>
                </div>


                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">F.A.Q Table</h5>

                        <!-- Table with hoverable rows -->
                        <table class="table table-hover">
                            <thead>
                            <tr >
                                <th scope="col">Id</th>
                                <th scope="col">Question</th>
                                <th scope="col">Answer</th>
                                <th style="text-align: center;" scope="col">Status</th>
                                <th style="text-align: center;" scope="col">Edit</th>
                                <th style="text-align: center;" scope="col">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $data as $rs)
                            <tr >
                                <th scope="row">{{$rs->id}}</th>
                                <td>{{$rs->question}}</td>
                                <td>{!! $rs->answer !!}</td>
                                <td style="text-align: center;">{{$rs->status}}</td>
                                <td style="text-align: center;"><a href="{{route('admin.faq.edit', ['id'=>$rs->id])}}" class="btn btn-outline-primary" ><i class="bi bi-pencil"></i> Edit</a></td>
                                <td style="text-align: center;"><a href="{{route('admin.faq.delete', ['id'=>$rs->id])}}" class="btn btn-outline-danger" onclick="return confirm('You are deleting faq! Are you sure?')"><i class="bi bi-trash"></i> Delete</a> </td>
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



