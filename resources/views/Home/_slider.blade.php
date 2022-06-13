<!-- home page slider -->
<div class="homepage-slider">
    <!-- single home slider -->
    @foreach($sliderdata as $rs)
    <div class="single-homepage-slider" style="background-image: url({{Storage::url($rs->image)}});" >
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 text-center">
                    <div class="hero-text">
                        <div class="hero-text-tablecell">
                            <p class="subtitle">Fresh Everyday</p>
                            <h1>{{$rs->title}}</h1>
                            <div class="hero-btns">
                                <a href="{{route('categoryproducts',['id'=>$rs->id, 'slug'=>$rs->title])}}" class="boxed-btn">Visit Shop</a>
                                <a href="{{route('contact')}}" class="bordered-btn">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <!-- single home slider -->
</div>
<!-- end home page slider -->
