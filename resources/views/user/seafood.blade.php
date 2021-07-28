@extends('.user.userlayout.adminpage')
@section('title', 'SEAFOOD Product')
@section('keywords', 'CPFAUSTRALIA')
@section('description', 'description CPFAUSTRALIA')
@section('google', 'google')
@section('facebook', 'Facebook')
@section('content')

<div class="wrapper">

        <!-- ========================  Header content ======================== -->

        <section id="page-home" class="header-content">

            <div class="owl-slider owl-slider-fullscreen">

                <!-- === slide item === -->
                @for($i=1; $i<=4; $i++)
                <div class="item" style="background-image:url({{ asset('img/FishTail/'.$i.'.jpg') }})">
                    <div class="box">
                        <div class="container text-center">
                        <h2 class="title animated h1" data-animation="fadeInDown">SEAFOOD</h2>
                            <div class="animated" data-animation="fadeInUp">Unlimited Choices. Unbeatable Prices. Free Shipping.</div>
                            <div class="animated" data-animation="fadeInUp">Furniture category icon fonts!</div>
                            <div class="animated" data-animation="fadeInUp">
                                <a href="/Showseafood" class="btn btn-clean">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endfor
                <!-- === slide item === -->

            </div> <!--/owl-slider-->
        </section>


        <!-- ========================  News Products  ======================== -->

        <section id="page-interiors" class="cards" style="background-color:#000 !important;">

            <!-- === cards header === -->

            <header>
                <div class="row">
                    <div class="col-md-offset-2 col-md-8 text-center">
                        <h2 class="title" style="color:#fff !important;">NEWS PRODUCTS</h2>
                        <div class="text">
                            <p>Fresh products delivered to you every day</p>
                        </div>
                    </div>
                </div>
            </header>

            <div class="container">
                <div class="row">

                    <!-- === item === -->

                    <div class="col-md-8">
                        <figure>
                            <figcaption style="background-image:url({{ asset('img/FishTail/1.jpg') }})">
                                <img src="{{ asset('img/FishTail/1.jpg') }}" alt="" />
                            </figcaption>
                            <a href="/Showseafood" class="btn btn-clean mfp-open-scrollto">Read more</a>
                        </figure>
                    </div>

                    <!-- === item === -->

                    <div class="col-md-4">
                        <figure>
                            <figcaption style="background-image:url({{ asset('img/FishTail/2.jpg') }})">
                                <img src="{{ asset('img/FishTail/1.jpg') }}" alt="" />
                            </figcaption>
                            <a href="/Showseafood" class="btn btn-clean mfp-open-scrollto">Read more</a>
                        </figure>
                    </div>

                    <!-- === item === -->

                    <div class="col-md-4">
                        <figure>
                            <figcaption style="background-image:url({{ asset('img/FishTail/3.jpg') }})">
                                <img src="{{ asset('img/FishTail/1.jpg') }}" alt="" />
                            </figcaption>
                            <a href="/Showseafood" class="btn btn-clean mfp-open-scrollto">Read more</a>
                        </figure>
                    </div>

                    <!-- === item === -->

                    <div class="col-md-4">
                        <figure>
                            <figcaption style="background-image:url({{ asset('img/FishTail/4.jpg') }})">
                                <img src="{{ asset('img/FishTail/1.jpg') }}" alt="" />
                            </figcaption>
                            <a href="/Showseafood" class="btn btn-clean mfp-open-scrollto">Read more</a>
                        </figure>
                    </div>

                    <!-- === item === -->

                    <div class="col-md-4">
                        <figure>
                            <figcaption style="background-image:url({{ asset('img/FishTail/1.jpg') }})">
                                <img src="{{ asset('img/FishTail/1.jpg') }}" alt="" />
                            </figcaption>
                            <a href="/Showseafood" class="btn btn-clean mfp-open-scrollto">Read more</a>
                        </figure>
                    </div>

                </div> <!--/row-->

            </div> <!--/container-->
        </section>
        <!-- ======================== News Products ======================== -->

        <!-- ========================  POULTRY PRODUCTS ======================== -->
        <section id="page-products" class="products" style="background-color:#808080 !important;">

            <div class="container">

                <!-- === header title === -->

                <header>
                    <div class="row">
                        <div class="col-md-offset-2 col-md-8 text-center">
                            <h2 class="title" style="color:#000 !important;">Poultry products</h2>
                            <div class="text" style="color:#3c3b3b !important;">
                                <p>Our latest Poultry Product</p>
                            </div>

                            <!-- === box filters === -->

                            <div id="box-filters" class="box-filters">

                                <figure data-filter=".fish">
                                    <figcaption style="margin-top:-11px;">
                                    <i class="flaticon-fish" style="font-size:60px;"></i>
                                        <span>&nbsp; Fish &nbsp;</span>
                                    </figcaption>
                                </figure>

                                <figure data-filter=".shells">
                                    <figcaption>
                                    <i class="flaticon-oyster" style="font-size:54px;"></i>
                                        <span>Shells</span>
                                    </figcaption>
                                </figure>

                                <figure data-filter=".cephalopod">
                                    <figcaption>
                                    <i class="flaticon-squid" style="font-size:50px;"></i>
                                        <span>Cephalopod</span>
                                    </figcaption>
                                </figure>

                                <figure data-filter=".shrimp">
                                    <figcaption>
                                    <i class="flaticon-shrimp" style="font-size:50px;"></i>
                                        <span>Shrimp</span>
                                    </figcaption>
                                </figure>

                            </div> <!--/box-filters-->

                        </div>
                    </div> <!--/row-->
                </header>

                <div id="box-filters-results" class="row">

                    <!-- === product-item === -->

                    <div class="col-xs-6 col-sm-4 item fish">
                        <article>
                            <div class="figure-grid">
                                <div class="image">
                                    <a href="/Showseafood">
                                        <img src="{{ asset('img/FishTail/Logo_Large_Dark.jpg') }}" alt="" width="360" />
                                    </a>
                                </div>
                                <div class="text radius">
                                    <h2 class="title h4" style="color: #fff !important;">Fish</h2>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- === product-item === -->

                    <div class="col-xs-6 col-sm-4 item fish">
                        <article>
                            <div class="figure-grid">
                                <div class="image">
                                    <a href="/Showseafood">
                                        <img src="{{ asset('img/FishTail/Logo_Large_Dark.jpg') }}" alt="" width="360" />
                                    </a>
                                </div>
                                <div class="text radius">
                                    <h2 class="title h4" style="color: #fff !important;">Fish</h2>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- === product-item === -->

                    <div class="col-xs-6 col-sm-4 item sofa shells">
                        <article>
                            <div class="figure-grid">
                                <div class="image">
                                    <a href="/Showseafood">
                                        <img src="{{ asset('img/FremantleOctopus/fremantle_octopus_logo.jpg') }}" alt="" width="360" />
                                    </a>
                                </div>
                                <div class="text radius">
                                    <h2 class="title h4" style="color: #fff !important;">Shells</h2>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- === product-item === -->

                    <div class="col-xs-6 col-sm-4 item shells">
                        <article>
                            <div class="figure-grid">
                                <div class="image">
                                    <a href="/Showseafood">
                                        <img src="{{ asset('img/FremantleOctopus/fremantle_octopus_logo.jpg') }}" alt="" width="360" />
                                    </a>
                                </div>
                                <div class="text radius">
                                    <h2 class="title h4" style="color: #fff !important;">Shells</h2>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- === product-item === -->

                    <div class="col-xs-6 col-sm-4 item cephalopod">
                        <article>
                            <div class="figure-grid">
                                <div class="image">
                                    <a href="/Showseafood">
                                        <img src="{{ asset('img/FishTail/Logo_Large_Dark.jpg') }}" alt="" width="360" />
                                    </a>
                                </div>
                                <div class="text radius">
                                    <h2 class="title h4" style="color: #fff !important;">Cephalopod</h2>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- === product-item === -->

                    <div class="col-xs-6 col-sm-4 item cephalopod">
                        <article>
                            <div class="figure-grid">
                                <div class="image">
                                    <a href="/Showseafood">
                                        <img src="{{ asset('img/FishTail/Logo_Large_Dark.jpg') }}" alt="" width="360" />
                                    </a>
                                </div>
                                <div class="text radius">
                                    <h2 class="title h4" style="color: #fff !important;">Cephalopod</h2>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- === product-item === -->

                    <div class="col-xs-6 col-sm-4 item shrimp">
                        <article>
                            <div class="figure-grid">
                                <div class="image">
                                    <a href="/Showseafood">
                                        <img src="{{ asset('img/FishTail/2.jpg') }}" alt="" width="360" />
                                    </a>
                                </div>
                                <div class="text radius">
                                    <h2 class="title h4" style="color: #fff !important;">Shrimp</h2>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- === product-item === -->

                    <div class="col-xs-6 col-sm-4 item shrimp">
                        <article>
                            <div class="figure-grid">
                                <div class="image">
                                    <a href="/Showseafood">
                                        <img src="{{ asset('img/FishTail/2.jpg') }}" alt="" width="360" />
                                    </a>
                                </div>
                                <div class="text radius">
                                    <h2 class="title h4" style="color: #fff !important;">Shrimp</h2>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- === product-item === -->

                    <div class="col-xs-6 col-sm-4 item sofa shrimp">

                        <article>
                            <div class="figure-grid">
                                <div class="image">
                                    <a href="/Showseafood">
                                        <img src="{{ asset('img/FishTail/2.jpg') }}" alt="" width="360" />
                                    </a>
                                </div>
                                <div class="text radius">
                                    <h2 class="title h4" style="color: #fff !important;">Shrimp</h2>
                                </div>
                            </div>
                        </article>
                    </div>

                </div> <!--/row-->
                <!-- ========================  Product info popup - quick view ======================== -->

                <div class="popup-main mfp-hide" id="productid1">

                    <!-- === product popup === -->

                    <div class="product">

                        <!-- === popup-title === -->

                        <div class="popup-title">
                            <div class="h1 title">SEAFOOD</div>
                        </div>

                        <!-- === product gallery === -->

                        <div class="owl-product-gallery">
                            <img src="{{ asset('img/FishTail/1.jpg') }}" alt="" width="640" />
                            <img src="{{ asset('img/FishTail/1.jpg') }}" alt="" width="640" />
                            <img src="{{ asset('img/FishTail/1.jpg') }}" alt="" width="640" />
                        </div>

                        <!-- === product-popup-footer === -->

                        <div class="popup-table">
                            <div class="popup-cell">
                                <div class="price price-single">
                                    <span class="h6">DWoeoddwiacrda Ftoeodds Atuost rpaleiar isf ae vcerttiicoalnly isntiengrcateed 1m8ea8t b8us.iness from the rich fertile Murray Valley region </span>
                                </div>
                            </div>
                        </div>

                    </div> <!--/product-->
                </div> <!--popup-main-->
            </div> <!--/container-->
        </section>

        <!-- ========================  POULTRY PRODUCTS ======================== -->

</div>
@endsection