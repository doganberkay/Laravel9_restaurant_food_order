@extends('layouts.admin')

@section('title','Create Question')
@section('description')
    You can order food without a waitress
@endsection
@section('keywords','food,order,order food')

@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection

@section('content')


    <div class="pagetitle">
        <h1>Create Question</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('admin.product.index')}}">F.A.Q.</a></li>
                <li class="breadcrumb-item active">Create Question</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-8">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">You can create a Question</h5>

                        <!-- Horizontal Form -->
                        <form method="post" action="{{route('admin.faq.store')}}" enctype="multipart/form-data" >
                            @csrf
                            <div class="row mb-3">
                                <label for="keywords" class="col-sm-2 col-form-label">Question</label>
                                <div class="col-sm-10">
                                    <input type="text" name="question" class="form-control" placeholder="Question">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Answer</label>
                                <div class="col-sm-10 " >

                                    <textarea id="answer" name="answer" placeholder="Answer">
                                     </textarea ><!-- End TinyMCE Editor -->
                                </div>
                               </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-10">
                                    <select class="form-select" name="status" aria-label="Default select example">
                                        <option value="True">True</option>
                                        <option value="False">False</option>
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

            <div class="col-lg-4">
                <div class="card">
                    <img src="/assets/admin/img/card.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">You can create a Product here</h5>
                        <p class="card-text">You can use this page to create a food Product for your restaurant such as burgers or salads.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

@section('foot')
    <script>
        ClassicEditor
            .create( document.querySelector( '#answer' ) )
            .then( editor => {
                console.log( editor );
            } )
            .catch( error => {
                console.error( error );
            } );
    </script>

@endsection



