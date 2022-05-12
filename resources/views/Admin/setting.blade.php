@extends('layouts.admin')

@section('title','Setting')
@section('description')
    You can order food without a waitress
@endsection
@section('keywords','food,order,order food')

@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection

@section('content')

    <div class="pagetitle">
        <h1>Setting</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                <li class="breadcrumb-item active">Settings</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Change any settings you like</h5>
                        <form role="form" action="{{route('admin.setting.update')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <!-- Bordered Tabs Justified -->
                        <ul class="nav nav-tabs nav-tabs-bordered d-flex" id="borderedTabJustified" role="tablist">
                            <li class="nav-item flex-fill" role="presentation">
                                <button class="nav-link w-100 active" id="home-tab" data-bs-toggle="tab" data-bs-target="#bordered-justified-home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
                            </li>
                            <li class="nav-item flex-fill" role="presentation">
                                <button class="nav-link w-100 " id="mail-tab" data-bs-toggle="tab" data-bs-target="#bordered-justified-mail" type="button" role="tab" aria-controls="mail" aria-selected="false">SMTP Email</button>
                            </li>
                            <li class="nav-item flex-fill" role="presentation">
                                <button class="nav-link w-100" id="media-tab" data-bs-toggle="tab" data-bs-target="#bordered-justified-media" type="button" role="tab" aria-controls="media" aria-selected="false">Social Media</button>
                            </li>
                            <li class="nav-item flex-fill" role="presentation">
                                <button class="nav-link w-100" id="about-tab" data-bs-toggle="tab" data-bs-target="#bordered-justified-about" type="button" role="tab" aria-controls="about" aria-selected="false">About Us</button>
                            </li>
                            <li class="nav-item flex-fill" role="presentation">
                                <button class="nav-link w-100" id="contact-tab" data-bs-toggle="tab" data-bs-target="#bordered-justified-contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact Page</button>
                            </li>
                            <li class="nav-item flex-fill" role="presentation">
                                <button class="nav-link w-100" id="references-tab" data-bs-toggle="tab" data-bs-target="#bordered-justified-references" type="button" role="tab" aria-controls="references" aria-selected="false">References</button>
                            </li>

                        </ul>
                        <div class="tab-content pt-2" id="borderedTabJustifiedContent">
                            <div class="tab-pane fade active show" id="bordered-justified-home" role="tabpanel" aria-labelledby="home-tab">

                                <div class="card-body">
                                    <h5 class="card-title">General Settings</h5>
                                    <!-- General Form Elements -->

                                        <input type="text" name="id" id="id" value="{{$data->id}}" class="form-control" hidden>

                                        <div class="row mb-3">
                                            <label for="title" class="col-sm-2 col-form-label">Title</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="title" value="{{$data->title}}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="title" class="col-sm-2 col-form-label">Keyword</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control" id="keywords">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="title" class="col-sm-2 col-form-label">Description</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="description" value="{{$data->description}}" class="form-control" id="description">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="title" class="col-sm-2 col-form-label">Company</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="company" value="{{$data->company}}" class="form-control" id="company" placeholder="Title">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="title" class="col-sm-2 col-form-label">Address</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="address" value="{{$data->address}}" class="form-control" id="address" placeholder="Title">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="title" class="col-sm-2 col-form-label">Phone</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="phone" value="{{$data->phone}}" class="form-control" id="phone" placeholder="Title">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="title" class="col-sm-2 col-form-label">E-mail</label>
                                            <div class="col-sm-10">
                                                <input type="email" name="email" value="{{$data->email}}" class="form-control">
                                            </div>
                                        </div>




                                            <div class="row">

                                                <label for="inputNumber" class="col-sm-2 col-form-label">Icon Upload</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" type="file" name="icon" id="formFile">
                                                </div>
                                                <div class="col-sm-1">
                                                    @if(is_null($data->icon))
                                                        <div class="img-container" style="position:relative; padding-top:66.59%;">
                                                            <img src="/assets/admin/img/default.jpg" style="position: absolute; top: 0; left: 0; width:50px; height:50px; object-fit: cover;" >
                                                        </div>
                                                    @else
                                                        <div class="img-container" style="position:relative; padding-top:66.59%;">
                                                            <img src="{{Storage::url($data->icon)}}" style="position: absolute; top: 0; left: 0; width:50px; height:50px; object-fit: cover;" >
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>


                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">Status</label>
                                        <div class="col-sm-10">
                                            <select class="form-select" name="status" value="{{$data->status}}" aria-label="Default select example">
                                                <option value="True" @if($data->status == "True") selected="selected" @endif>True</option>
                                                <option value="False"@if($data->status == "False") selected="selected" @endif>False</option>
                                            </select>
                                        </div>
                                    </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">Submit Button</label>
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Submit Form</button>
                                            </div>
                                        </div>

                                    <!-- End General Form Elements -->

                                </div>


                            </div>
                            <div class="tab-pane fade " id="bordered-justified-mail" role="tabpanel" aria-labelledby="mail-tab">

                                <div class="card-body">
                                    <h5 class="card-title">SMTP Settings</h5>

                                    <!-- General Form Elements -->

                                        <div class="row mb-3">
                                            <label for="title" class="col-sm-2 col-form-label">smtpserver</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="smtpserver" value="{{$data->smtpserver}}" class="form-control">
                                            </div>
                                        </div>

                                    <div class="row mb-3">
                                        <label for="title" class="col-sm-2 col-form-label">smtpemail</label>
                                        <div class="col-sm-10">
                                            <input type="email" name="smtpemail" value="{{$data->smtpemail}}" class="form-control">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="title" class="col-sm-2 col-form-label">smtppassword</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="smtppassword" value="{{$data->smtppassword}}" class="form-control">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="title" class="col-sm-2 col-form-label">smtpport</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="smtpport" value="{{$data->smtpport}}" class="form-control">
                                        </div>
                                    </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">Submit Button</label>
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Submit Form</button>
                                            </div>
                                        </div>

                                    <!-- End General Form Elements -->

                                </div>


                            </div>
                            <div class="tab-pane fade" id="bordered-justified-media" role="tabpanel" aria-labelledby="media-tab">

                                <div class="card-body">
                                    <h5 class="card-title">Social Media Settings</h5>

                                    <!-- General Form Elements -->
                                    <div class="row mb-3">
                                        <label for="title" class="col-sm-2 col-form-label">fax</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="fax" value="{{$data->fax}}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="title" class="col-sm-2 col-form-label">facebook</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="facebook" value="{{$data->facebook}}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="title" class="col-sm-2 col-form-label">instagram</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="instagram" value="{{$data->instagram}}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="title" class="col-sm-2 col-form-label">twitter</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="twitter" value="{{$data->twitter}}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="title" class="col-sm-2 col-form-label">youtube</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="youtube" value="{{$data->youtube}}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">Submit Button</label>
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary">Submit Form</button>
                                        </div>
                                    </div>

                                </div>


                            </div>
                            <div class="tab-pane fade" id="bordered-justified-about" role="tabpanel" aria-labelledby="about-tab">

                                <div class="card-body">
                                    <h5 class="card-title">AboutUs Page Settings</h5>

                                    <!-- General Form Elements -->

                                    <div class="row mb-3">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">aboutus</label>
                                        <div class="col-sm-10 " >

                                    <textarea id="aboutus" name="aboutus">
                                        {{$data->aboutus}}
                                     </textarea><!-- End TinyMCE Editor -->

                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">Submit Button</label>
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary">Submit Form</button>
                                        </div>
                                    </div>

                                </div>


                            </div>
                            <div class="tab-pane fade" id="bordered-justified-contact" role="tabpanel" aria-labelledby="contact-tab">

                                <div class="card-body">
                                    <h5 class="card-title">Contact Page Settigs</h5>

                                    <!-- General Form Elements -->

                                    <div class="row mb-3">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">contact</label>
                                        <div class="col-sm-10 " >

                                    <textarea id="contact" name="contact">
                                        {{$data->contact}}
                                     </textarea><!-- End TinyMCE Editor -->

                                        </div>
                                    </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">Submit Button</label>
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Submit Form</button>
                                            </div>
                                        </div>

                                    <!-- End General Form Elements -->

                                </div>


                            </div>
                            <div class="tab-pane fade" id="bordered-justified-references" role="tabpanel" aria-labelledby="references-tab">

                                <div class="card-body">
                                    <h5 class="card-title">References Settings</h5>

                                    <!-- General Form Elements -->

                                    <div class="row mb-3">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">references</label>
                                        <div class="col-sm-10 " >

                                    <textarea id="references" name="references">
                                        {{$data->references}}
                                     </textarea><!-- End TinyMCE Editor -->

                                        </div>
                                    </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">Submit Button</label>
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Submit Form</button>
                                            </div>
                                        </div>

                                    <!-- End General Form Elements -->

                                </div>


                            </div>
                        </div><!-- End Bordered Tabs Justified -->
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </section>
@endsection

@section('foot')
    <script>
        ClassicEditor
            .create( document.querySelector( '#contact' ) )
            .then( editor => {
                console.log( editor );
            } )
            .catch( error => {
                console.error( error );
            } );

        ClassicEditor
            .create( document.querySelector( '#aboutus' ) )
            .then( editor => {
                console.log( editor );
            } )
            .catch( error => {
                console.error( error );
            } );
        ClassicEditor
            .create( document.querySelector( '#references' ) )
            .then( editor => {
                console.log( editor );
            } )
            .catch( error => {
                console.error( error );
            } );

    </script>
@endsection



