@extends('layouts.admin')

@section('title','Laravel9 restaurant')
@section('description')
    You can order food without a waitress
@endsection
@section('keywords','food,order,order food')

@section('content')

    @if(is_null($rs->image))
        <div class="img-container" style="position:relative; padding-top:66.59%;">
            <img src="/assets/admin/img/default.jpg" style="position: absolute; top: 0; left: 0; width:100%;" >
        </div>
    @else
        <div class="img-container" style="position:relative; padding-top:66.59%;">
            <img src="{{Storage::url($rs->image)}}" style="position: absolute; top: 0; left: 0; width:100%;" >
        </div>
    @endif

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-8">
                    <div class="row">



                    </div>
                </div><!-- End Left side columns -->

                <!-- Right side columns -->
                <div class="col-lg-4">



                </div><!-- End Right side columns -->

            </div>
        </section>


@endsection


