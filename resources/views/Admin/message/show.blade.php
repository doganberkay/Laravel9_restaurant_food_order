@extends('layouts.adminwindow')

@section('title','Show Message: '.$data->subject )
@section('description')
    You can order food without a waitress
@endsection
@section('keywords','food,order,order food')

@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection

@section('content')


    <div class="pagetitle">
        <h1>Show message: {{$data->subject}}</h1>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <a href="/admin/message/delete/{{$data->id}}" onclick="return confirm('You are deleting {{$data->subject}} message! Are you sure?')" class="btn btn-danger" >Delete Category</a>
                        </div>
                    </div>
                </div>


                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Detailed Information of message: <b>{{$data->subject}}</b> </h5>

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
                                <th scope="row">Phone</th>
                                <td>{{$data->phone}}</td>
                            </tr>
                            <tr>
                                <th scope="row">E-mail</th>
                                <td>{{$data->email}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Subject</th>
                                <td>{{$data->subject}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Message</th>
                                <td>{{$data->message}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Status</th>
                                <td>{{$data->status}}</td>
                            </tr>
                            <tr>
                                <th scope="row">IP Address</th>
                                <td>{{$data->ip}}</td>
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
                                <th scope="row">Admin Note: </th>
                                <td>
                                    <form role="form" action="{{route('admin.message.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <textarea id="note" name="note">
                                        {{$data->note}}
                                     </textarea><!-- End TinyMCE Editor -->
                                        <div><br>
                                            <button type="submit" class="btn btn-primary">Update Now</button>
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
@endsection


@section('foot')
    <script>
        ClassicEditor
            .create( document.querySelector( '#note' ) )
            .then( editor => {
                console.log( editor );
            } )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection



