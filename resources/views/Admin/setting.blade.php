@extends('layouts.admin')

@section('title','Setting')
@section('description')
    You can order food without a waitress
@endsection
@section('keywords','food,order,order food')

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

                        <!-- Bordered Tabs Justified -->
                        <ul class="nav nav-tabs nav-tabs-bordered d-flex" id="borderedTabJustified" role="tablist">
                            <li class="nav-item flex-fill" role="presentation">
                                <button class="nav-link w-100 active" id="home-tab" data-bs-toggle="tab" data-bs-target="#bordered-justified-home" type="button" role="tab" aria-controls="home" aria-selected="false">Home</button>
                            </li>
                            <li class="nav-item flex-fill" role="presentation">
                                <button class="nav-link w-100 " id="profile-tab" data-bs-toggle="tab" data-bs-target="#bordered-justified-profile" type="button" role="tab" aria-controls="profile" aria-selected="true">Profile</button>
                            </li>
                            <li class="nav-item flex-fill" role="presentation">
                                <button class="nav-link w-100" id="contact-tab" data-bs-toggle="tab" data-bs-target="#bordered-justified-contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
                            </li>
                            <li class="nav-item flex-fill" role="presentation">
                                <button class="nav-link w-100" id="contact-tab" data-bs-toggle="tab" data-bs-target="#bordered-justified-contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
                            </li>
                            <li class="nav-item flex-fill" role="presentation">
                                <button class="nav-link w-100" id="contact-tab" data-bs-toggle="tab" data-bs-target="#bordered-justified-contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
                            </li>
                            <li class="nav-item flex-fill" role="presentation">
                                <button class="nav-link w-100" id="contact-tab" data-bs-toggle="tab" data-bs-target="#bordered-justified-contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
                            </li>

                        </ul>
                        <div class="tab-content pt-2" id="borderedTabJustifiedContent">
                            <div class="tab-pane fade active show" id="bordered-justified-home" role="tabpanel" aria-labelledby="home-tab">

                                <div class="card-body">
                                    <h5 class="card-title">General Form Elements</h5>

                                    <!-- General Form Elements -->
                                    <form action="{{route('admin.setting.update')}}" method="post" enctype="multipart/form-data">
                                        @csrf

                                        <div class="row mb-3">
                                            <label for="title" class="col-sm-2 col-form-label">Title</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="title" value="{{$data->title}}" class="form-control" id="title" placeholder="Title">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputNumber" class="col-sm-2 col-form-label">Number</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="file" id="formFile">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputTime" class="col-sm-2 col-form-label">Time</label>
                                            <div class="col-sm-10">
                                                <input type="time" class="form-control">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="inputColor" class="col-sm-2 col-form-label">Color Picker</label>
                                            <div class="col-sm-10">
                                                <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#4154f1" title="Choose your color">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">Textarea</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" style="height: 100px"></textarea>
                                            </div>
                                        </div>
                                        <fieldset class="row mb-3">
                                            <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                                            <div class="col-sm-10">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked="">
                                                    <label class="form-check-label" for="gridRadios1">
                                                        First radio
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                                    <label class="form-check-label" for="gridRadios2">
                                                        Second radio
                                                    </label>
                                                </div>
                                                <div class="form-check disabled">
                                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios" value="option" disabled="">
                                                    <label class="form-check-label" for="gridRadios3">
                                                        Third disabled radio
                                                    </label>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <div class="row mb-3">
                                            <legend class="col-form-label col-sm-2 pt-0">Checkboxes</legend>
                                            <div class="col-sm-10">

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                                                    <label class="form-check-label" for="gridCheck1">
                                                        Example checkbox
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="gridCheck2" checked="">
                                                    <label class="form-check-label" for="gridCheck2">
                                                        Example checkbox 2
                                                    </label>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">Disabled</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" value="Read only / Disabled" disabled="">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">Select</label>
                                            <div class="col-sm-10">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected="">Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">Multi Select</label>
                                            <div class="col-sm-10">
                                                <select class="form-select" multiple="" aria-label="multiple select example">
                                                    <option selected="">Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">Submit Button</label>
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Submit Form</button>
                                            </div>
                                        </div>

                                    </form><!-- End General Form Elements -->

                                </div>


                            </div>
                            <div class="tab-pane fade " id="bordered-justified-profile" role="tabpanel" aria-labelledby="profile-tab">

                                <div class="card-body">
                                    <h5 class="card-title">General Form Elements</h5>

                                    <!-- General Form Elements -->
                                    <form>
                                        <div class="row mb-3">
                                            <label for="inputText" class="col-sm-2 col-form-label">Text</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputNumber" class="col-sm-2 col-form-label">Number</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="file" id="formFile">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputTime" class="col-sm-2 col-form-label">Time</label>
                                            <div class="col-sm-10">
                                                <input type="time" class="form-control">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="inputColor" class="col-sm-2 col-form-label">Color Picker</label>
                                            <div class="col-sm-10">
                                                <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#4154f1" title="Choose your color">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">Textarea</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" style="height: 100px"></textarea>
                                            </div>
                                        </div>
                                        <fieldset class="row mb-3">
                                            <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                                            <div class="col-sm-10">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked="">
                                                    <label class="form-check-label" for="gridRadios1">
                                                        First radio
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                                    <label class="form-check-label" for="gridRadios2">
                                                        Second radio
                                                    </label>
                                                </div>
                                                <div class="form-check disabled">
                                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios" value="option" disabled="">
                                                    <label class="form-check-label" for="gridRadios3">
                                                        Third disabled radio
                                                    </label>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <div class="row mb-3">
                                            <legend class="col-form-label col-sm-2 pt-0">Checkboxes</legend>
                                            <div class="col-sm-10">

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                                                    <label class="form-check-label" for="gridCheck1">
                                                        Example checkbox
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="gridCheck2" checked="">
                                                    <label class="form-check-label" for="gridCheck2">
                                                        Example checkbox 2
                                                    </label>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">Disabled</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" value="Read only / Disabled" disabled="">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">Select</label>
                                            <div class="col-sm-10">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected="">Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">Multi Select</label>
                                            <div class="col-sm-10">
                                                <select class="form-select" multiple="" aria-label="multiple select example">
                                                    <option selected="">Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">Submit Button</label>
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Submit Form</button>
                                            </div>
                                        </div>

                                    </form><!-- End General Form Elements -->

                                </div>


                            </div>
                            <div class="tab-pane fade" id="bordered-justified-contact" role="tabpanel" aria-labelledby="contact-tab">

                                <div class="card-body">
                                    <h5 class="card-title">General Form Elements</h5>

                                    <!-- General Form Elements -->
                                    <form>
                                        <div class="row mb-3">
                                            <label for="inputText" class="col-sm-2 col-form-label">Text</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputNumber" class="col-sm-2 col-form-label">Number</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="file" id="formFile">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputTime" class="col-sm-2 col-form-label">Time</label>
                                            <div class="col-sm-10">
                                                <input type="time" class="form-control">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="inputColor" class="col-sm-2 col-form-label">Color Picker</label>
                                            <div class="col-sm-10">
                                                <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#4154f1" title="Choose your color">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">Textarea</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" style="height: 100px"></textarea>
                                            </div>
                                        </div>
                                        <fieldset class="row mb-3">
                                            <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                                            <div class="col-sm-10">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked="">
                                                    <label class="form-check-label" for="gridRadios1">
                                                        First radio
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                                    <label class="form-check-label" for="gridRadios2">
                                                        Second radio
                                                    </label>
                                                </div>
                                                <div class="form-check disabled">
                                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios" value="option" disabled="">
                                                    <label class="form-check-label" for="gridRadios3">
                                                        Third disabled radio
                                                    </label>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <div class="row mb-3">
                                            <legend class="col-form-label col-sm-2 pt-0">Checkboxes</legend>
                                            <div class="col-sm-10">

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                                                    <label class="form-check-label" for="gridCheck1">
                                                        Example checkbox
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="gridCheck2" checked="">
                                                    <label class="form-check-label" for="gridCheck2">
                                                        Example checkbox 2
                                                    </label>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">Disabled</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" value="Read only / Disabled" disabled="">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">Select</label>
                                            <div class="col-sm-10">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected="">Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">Multi Select</label>
                                            <div class="col-sm-10">
                                                <select class="form-select" multiple="" aria-label="multiple select example">
                                                    <option selected="">Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">Submit Button</label>
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Submit Form</button>
                                            </div>
                                        </div>

                                    </form><!-- End General Form Elements -->

                                </div>


                            </div>

                            <div class="tab-pane fade" id="bordered-justified-contact" role="tabpanel" aria-labelledby="cadsasdtact-tab">

                                <div class="card-body">
                                    <h5 class="card-title">General Form Elements</h5>

                                    <!-- General Form Elements -->
                                    <form>
                                        <div class="row mb-3">
                                            <label for="inputText" class="col-sm-2 col-form-label">Text</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputNumber" class="col-sm-2 col-form-label">Number</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="file" id="formFile">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputTime" class="col-sm-2 col-form-label">Time</label>
                                            <div class="col-sm-10">
                                                <input type="time" class="form-control">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="inputColor" class="col-sm-2 col-form-label">Color Picker</label>
                                            <div class="col-sm-10">
                                                <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#4154f1" title="Choose your color">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">Textarea</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" style="height: 100px"></textarea>
                                            </div>
                                        </div>
                                        <fieldset class="row mb-3">
                                            <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                                            <div class="col-sm-10">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked="">
                                                    <label class="form-check-label" for="gridRadios1">
                                                        First radio
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                                    <label class="form-check-label" for="gridRadios2">
                                                        Second radio
                                                    </label>
                                                </div>
                                                <div class="form-check disabled">
                                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios" value="option" disabled="">
                                                    <label class="form-check-label" for="gridRadios3">
                                                        Third disabled radio
                                                    </label>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <div class="row mb-3">
                                            <legend class="col-form-label col-sm-2 pt-0">Checkboxes</legend>
                                            <div class="col-sm-10">

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                                                    <label class="form-check-label" for="gridCheck1">
                                                        Example checkbox
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="gridCheck2" checked="">
                                                    <label class="form-check-label" for="gridCheck2">
                                                        Example checkbox 2
                                                    </label>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">Disabled</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" value="Read only / Disabled" disabled="">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">Select</label>
                                            <div class="col-sm-10">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected="">Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">Multi Select</label>
                                            <div class="col-sm-10">
                                                <select class="form-select" multiple="" aria-label="multiple select example">
                                                    <option selected="">Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">Submit Button</label>
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Submit Form</button>
                                            </div>
                                        </div>

                                    </form><!-- End General Form Elements -->

                                </div>


                            </div>
                            <div class="tab-pane fade" id="bordered-justified-contact" role="tabpanel" aria-labelledby="contact-tab">

                                <div class="card-body">
                                    <h5 class="card-title">General Form Elements</h5>

                                    <!-- General Form Elements -->
                                    <form>
                                        <div class="row mb-3">
                                            <label for="inputText" class="col-sm-2 col-form-label">Text</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputNumber" class="col-sm-2 col-form-label">Number</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="file" id="formFile">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputTime" class="col-sm-2 col-form-label">Time</label>
                                            <div class="col-sm-10">
                                                <input type="time" class="form-control">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="inputColor" class="col-sm-2 col-form-label">Color Picker</label>
                                            <div class="col-sm-10">
                                                <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#4154f1" title="Choose your color">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">Textarea</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" style="height: 100px"></textarea>
                                            </div>
                                        </div>
                                        <fieldset class="row mb-3">
                                            <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                                            <div class="col-sm-10">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked="">
                                                    <label class="form-check-label" for="gridRadios1">
                                                        First radio
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                                    <label class="form-check-label" for="gridRadios2">
                                                        Second radio
                                                    </label>
                                                </div>
                                                <div class="form-check disabled">
                                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios" value="option" disabled="">
                                                    <label class="form-check-label" for="gridRadios3">
                                                        Third disabled radio
                                                    </label>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <div class="row mb-3">
                                            <legend class="col-form-label col-sm-2 pt-0">Checkboxes</legend>
                                            <div class="col-sm-10">

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                                                    <label class="form-check-label" for="gridCheck1">
                                                        Example checkbox
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="gridCheck2" checked="">
                                                    <label class="form-check-label" for="gridCheck2">
                                                        Example checkbox 2
                                                    </label>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">Disabled</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" value="Read only / Disabled" disabled="">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">Select</label>
                                            <div class="col-sm-10">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected="">Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">Multi Select</label>
                                            <div class="col-sm-10">
                                                <select class="form-select" multiple="" aria-label="multiple select example">
                                                    <option selected="">Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">Submit Button</label>
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Submit Form</button>
                                            </div>
                                        </div>

                                    </form><!-- End General Form Elements -->

                                </div>


                            </div>
                            <div class="tab-pane fade" id="bordered-justified-contact" role="tabpanel" aria-labelledby="contact-tab">

                                <div class="card-body">
                                    <h5 class="card-title">General Form Elements</h5>

                                    <!-- General Form Elements -->
                                    <form>
                                        <div class="row mb-3">
                                            <label for="inputText" class="col-sm-2 col-form-label">Text</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputNumber" class="col-sm-2 col-form-label">Number</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="file" id="formFile">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputTime" class="col-sm-2 col-form-label">Time</label>
                                            <div class="col-sm-10">
                                                <input type="time" class="form-control">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="inputColor" class="col-sm-2 col-form-label">Color Picker</label>
                                            <div class="col-sm-10">
                                                <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#4154f1" title="Choose your color">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">Textarea</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" style="height: 100px"></textarea>
                                            </div>
                                        </div>
                                        <fieldset class="row mb-3">
                                            <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                                            <div class="col-sm-10">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked="">
                                                    <label class="form-check-label" for="gridRadios1">
                                                        First radio
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                                    <label class="form-check-label" for="gridRadios2">
                                                        Second radio
                                                    </label>
                                                </div>
                                                <div class="form-check disabled">
                                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios" value="option" disabled="">
                                                    <label class="form-check-label" for="gridRadios3">
                                                        Third disabled radio
                                                    </label>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <div class="row mb-3">
                                            <legend class="col-form-label col-sm-2 pt-0">Checkboxes</legend>
                                            <div class="col-sm-10">

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                                                    <label class="form-check-label" for="gridCheck1">
                                                        Example checkbox
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="gridCheck2" checked="">
                                                    <label class="form-check-label" for="gridCheck2">
                                                        Example checkbox 2
                                                    </label>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">Disabled</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" value="Read only / Disabled" disabled="">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">Select</label>
                                            <div class="col-sm-10">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected="">Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">Multi Select</label>
                                            <div class="col-sm-10">
                                                <select class="form-select" multiple="" aria-label="multiple select example">
                                                    <option selected="">Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">Submit Button</label>
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Submit Form</button>
                                            </div>
                                        </div>

                                    </form><!-- End General Form Elements -->

                                </div>


                            </div>
                            <div class="tab-pane fade" id="bordered-justified-contact" role="tabpanel" aria-labelledby="contact-tab">

                                <div class="card-body">
                                    <h5 class="card-title">General Form Elements</h5>

                                    <!-- General Form Elements -->
                                    <form>
                                        <div class="row mb-3">
                                            <label for="inputText" class="col-sm-2 col-form-label">Text</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputNumber" class="col-sm-2 col-form-label">Number</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="file" id="formFile">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputTime" class="col-sm-2 col-form-label">Time</label>
                                            <div class="col-sm-10">
                                                <input type="time" class="form-control">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="inputColor" class="col-sm-2 col-form-label">Color Picker</label>
                                            <div class="col-sm-10">
                                                <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#4154f1" title="Choose your color">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">Textarea</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" style="height: 100px"></textarea>
                                            </div>
                                        </div>
                                        <fieldset class="row mb-3">
                                            <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                                            <div class="col-sm-10">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked="">
                                                    <label class="form-check-label" for="gridRadios1">
                                                        First radio
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                                    <label class="form-check-label" for="gridRadios2">
                                                        Second radio
                                                    </label>
                                                </div>
                                                <div class="form-check disabled">
                                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios" value="option" disabled="">
                                                    <label class="form-check-label" for="gridRadios3">
                                                        Third disabled radio
                                                    </label>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <div class="row mb-3">
                                            <legend class="col-form-label col-sm-2 pt-0">Checkboxes</legend>
                                            <div class="col-sm-10">

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                                                    <label class="form-check-label" for="gridCheck1">
                                                        Example checkbox
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="gridCheck2" checked="">
                                                    <label class="form-check-label" for="gridCheck2">
                                                        Example checkbox 2
                                                    </label>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">Disabled</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" value="Read only / Disabled" disabled="">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">Select</label>
                                            <div class="col-sm-10">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected="">Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">Multi Select</label>
                                            <div class="col-sm-10">
                                                <select class="form-select" multiple="" aria-label="multiple select example">
                                                    <option selected="">Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">Submit Button</label>
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Submit Form</button>
                                            </div>
                                        </div>

                                    </form><!-- End General Form Elements -->

                                </div>


                            </div>
                        </div><!-- End Bordered Tabs Justified -->

                    </div>
                </div>

            </div>

            <div class="col-lg-2">




            </div>
        </div>
    </section>
@endsection



