

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<div class="top-header-area" id="sticker">
    <div class="container" >
        <div class="row">
            <div class="col-lg-12 col-sm-12 text-center">
                <div class="main-menu-wrap">
                    <!-- logo -->
                    <div class="site-logo">
                        <a href="{{route('home')}}">
                            <img src="/assets/img/logo.png" alt="">
                        </a>
                    </div>
                    <!-- logo -->
                    @php
                        $mainCategories = \App\Http\Controllers\HomeController::maincategorylist()
                    @endphp

                    <!-- menu start -->

                    <nav class="main-menu">
                        <ul>
                            <li class="current-list-item"><a href="{{route('home')}}">Home</a>
                            </li>
                            <li><a href="{{route('about')}}">About Us</a>
                                <ul class="sub-menu">
                                    <li><a href="{{route('references')}}">References</a></li>
                                    <li><a href="{{route('contact')}}">Contact</a></li>
                                    <li><a href="{{route('faq')}}">F.A.Q</a></li>
                                </ul>
                            </li>
                            <li><a href="{{route('references')}}">References</a>
                            </li>
                            <li><a href="{{route('contact')}}">Contact</a></li>
                            <li><a href="{{route('faq')}}">F.A.Q</a></li>

                            <li><a href="{{route('shop')}}">Shop</a>
                                <ul class="sub-menu">
                                    @foreach($mainCategories as $rs)


                                        <li><a href="{{route('categoryproducts',['id'=>$rs->id, 'slug'=>$rs->title])}}">
                                                 {{$rs->title}}
                                                </a>
                                            @if(count($rs->children))
                                                @include('home.categorytree',['children' => $rs->children])
                                            @endif
                                        </li>

                                    @endforeach
                                </ul>
                            </li>
                                    <li>
                                        @auth
                                            <a  href="/login"><i class="fas fa-user"></i> {{Auth::user()->name}} </a>
                                        @endauth
                                        @guest
                                        <a  href="/login"><i class="fas fa-user"></i> Username </a>
                                            @endguest
                                        <ul class="sub-menu">
                                            <li><a href="" > My Account </a></li>
                                            <li><a href=""> Cart </a></li>
                                            @guest
                                            <li><a data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();" > Login </a></li>
                                            <li><a data-toggle="modal" href="javascript:void(0)" onclick="openRegisterModal();"> Register </a></li>
                                            @endguest
                                            @auth
                                            <li><a href="/logoutuser"> Logout </a></li>
                                            @endauth
                                        </ul>
                                    <a class="shopping-cart" href="cart.html"><i class="fas fa-shopping-cart"></i></a>

                                    <a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                                    </li>
                        </ul>

                    </nav>

                    <a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                    <div class="mobile-menu"></div>
                    <!-- menu end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end header -->
<!-- search area -->
<div class="search-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <span class="close-btn"><i class="fas fa-window-close"></i></span>
                <div class="search-bar">
                    <div class="search-bar-tablecell">
                        <h3>Search For:</h3>
                        <input type="text" placeholder="Keywords">
                        <button type="submit">Search <i class="fas fa-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end search area -->
