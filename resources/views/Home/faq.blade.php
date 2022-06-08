@extends('layouts.home')

@section('title','F.A.Q. | '.$setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keyword)
@section('icon', Storage::url($setting->icon))

@section('content')
<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>Get 24/7 Support</p>
                    <h1>Frequently Askes Questions</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb section -->
<!-- contact form -->
<div class="product-section mt-150 mb-150">
    <div class="container">
        <div class="accordion" id="accordion">
            @foreach($datalist as $rs)

                <div class="card">
                    <div class="card-header" id="heading{{$rs->id}}">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse{{$rs->id}}" aria-expanded="true" aria-controls="collapse{{$rs->id}}">
                                {{$rs->question}}
                            </button>
                        </h2>
                    </div>

                    <div id="collapse{{$rs->id}}" class="collapse" aria-labelledby="heading{{$rs->id}}" data-parent="#accordion">
                        <div class="card-body">
                            {!! $rs->answer !!}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- end contact form -->
@endsection
