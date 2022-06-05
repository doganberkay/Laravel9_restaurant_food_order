@extends('layouts.home')


@section('title','User Profile')

@section('content')
<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>User Panel</p>
                    <h1>User Profile</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb section -->

<!-- contact form -->
<div class="contact-from-section mt-150 mb-150">

    <div class="container-lg">
        <div class="row">

            <div class="col-md-9">
                <div class="form-title">
                    @include('profile.show')
                </div>
            </div>
            <div class="col-md-3">
                <div class="contact-form-wrap">
                        <h4><i class="fas fa-map"></i> User Menu</h4>
                    @include('Home.user.usermenu')
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end contact form -->

<!-- end google map section -->
@endsection
