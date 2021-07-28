@extends('.user.userlayout.adminpage')
@section('title', 'VENISON Product')
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
                <div class="item" style="background-image:url({{ asset('img/Brochure/'.$i.'.jpg') }})">
                    <div class="box">
                        <div class="container text-center">
                        <h2 class="title animated h1" data-animation="fadeInDown">THE VENISON</h2>
                            <div class="animated" data-animation="fadeInUp">DECADENCE HAS ARRIVED</div>
                            <div class="animated" data-animation="fadeInUp">Carrara 640 is a perfect
combination of nature and
experience. Only Carrara 640
Wagyu is created to honour the
magic marble. Displaying an
intricate, feathery pattern and
distinguished as the world’s finest.</div>
                            <div class="animated" data-animation="fadeInUp">
                                <a href="/Showmeat" class="btn btn-clean">Read more</a>
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
                        <h2 class="title" style="color:#fff !important;">NEWS VENISON PRODUCT</h2>
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
                            <figcaption style="background-image:url({{ asset('img/Brochure/1.jpg') }})">
                                <img src="{{ asset('img/Brochure/1.jpg') }}" alt="" />
                            </figcaption>
                            <a href="/Showmeat" class="btn btn-clean mfp-open-scrollto">Read more</a>
                        </figure>
                    </div>

                    <!-- === item === -->

                    <div class="col-md-4">
                        <figure>
                            <figcaption style="background-image:url({{ asset('img/Brochure/2.jpg') }})">
                                <img src="{{ asset('img/Brochure/1.jpg') }}" alt="" />
                            </figcaption>
                            <a href="/Showmeat" class="btn btn-clean mfp-open-scrollto">Read more</a>
                        </figure>
                    </div>

                    <!-- === item === -->

                    <div class="col-md-4">
                        <figure>
                            <figcaption style="background-image:url({{ asset('img/Brochure/3.jpg') }})">
                                <img src="{{ asset('img/Brochure/1.jpg') }}" alt="" />
                            </figcaption>
                            <a href="/Showmeat" class="btn btn-clean mfp-open-scrollto">Read more</a>
                        </figure>
                    </div>

                    <!-- === item === -->

                    <div class="col-md-4">
                        <figure>
                            <figcaption style="background-image:url({{ asset('img/Brochure/4.jpg') }})">
                                <img src="{{ asset('img/Brochure/1.jpg') }}" alt="" />
                            </figcaption>
                            <a href="/Showmeat" class="btn btn-clean mfp-open-scrollto">Read more</a>
                        </figure>
                    </div>

                    <!-- === item === -->

                    <div class="col-md-4">
                        <figure>
                            <figcaption style="background-image:url({{ asset('img/Brochure/1.jpg') }})">
                                <img src="{{ asset('img/Brochure/1.jpg') }}" alt="" />
                            </figcaption>
                            <a href="/Showmeat" class="btn btn-clean mfp-open-scrollto">Read more</a>
                        </figure>
                    </div>

                </div> <!--/row-->

            </div> <!--/container-->
        </section>
        <!-- ======================== News Products ======================== -->
        <section class="owl-icons-wrapper">

            <!-- === header === -->
            <div class="container">

                <div class="owl-icons">

                    <!-- === icon item === -->
                    @for($i=1; $i<=10; $i++)
                    <a href="/Showmeat">
                        <figure style="padding:10px;">
                            <img src="{{ asset('img/Brochure/logo_carrara.jpg') }}" width="100%" alt="">
                            <figcaption>CARRARA</figcaption>
                        </figure>
                    </a>
                    @endfor
                </div> <!--/owl-icons-->
            </div> <!--/container-->
        </section>

        <!-- ========================  VENISON PRODUCTS ======================== -->
        <section id="page-products" class="products" style="background-color:#808080 !important;">

            <div class="container">

                <!-- === header title === -->

                <header>
                    <div class="row">
                        <div class="col-md-offset-2 col-md-8 text-center">
                            <h2 class="title" style="color:#000 !important;">VENISON products BRAND</h2>
                            <div class="text" style="color:#3c3b3b !important;">
                                <p>Our latest VENISON Product</p>
                            </div>

                            <!-- === box filters === -->

                            <div id="box-filters" class="box-filters">

                              <!--  
                                  <figure data-filter=".sofa">
                                    <figcaption>
                                    <i class="flaticon-hen" style="font-size:60px;"></i>
                                        <span>VENISON</span>
                                    </figcaption>
                                </figure>

                                 <figure data-filter=".armchair">
                                    <figcaption>
                                    <i class="flaticon-animal" style="font-size:60px;"></i>
                                        <span>BEEF</span>
                                    </figcaption>
                                </figure>

                                <figure data-filter=".chair">
                                    <figcaption>
                                    <i class="flaticon-VENISON-1" style="font-size:60px;"></i>
                                        <span>VENISON</span>
                                    </figcaption>
                                </figure>

                                <figure data-filter=".bedroom">
                                    <figcaption>
                                    <i class="flaticon-deer-1" style="font-size:60px;"></i>
                                        <span>VENISON</span>
                                    </figcaption>
                                </figure>

                                <figure data-filter=".bedroom">
                                    <figcaption>
                                    <i class="flaticon-turkey" style="font-size:60px;"></i>
                                        <span>TURKEY</span>
                                    </figcaption>
                                </figure> -->

                            </div> <!--/box-filters-->

                        </div>
                    </div> <!--/row-->
                </header>

                <div id="box-filters-results" class="row">

                    <!-- === product-item === -->
                    @for($i=1; $i <= 9; $i++)
                    <div class="col-xs-6 col-sm-4 item sofa">
                        <article>
                            <div class="figure-grid">
                                <div class="image">
                                    <a href="/Showmeat">
                                        <img src="{{ asset('img/Brochure/1.jpg') }}" alt="" width="360" />
                                    </a>
                                </div>
                                <div class="text" style="background: #000000bf; border-radius: 10px 10px 0px 0px;">
                                    <h2 class="title h4" style="color: #fff !important;">VENISON</h2>
                                    <span class="description clearfix">Gubergren amet dolor ea diam takimata consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et consetetur nulla</span>
                                </div>
                            </div>
                        </article>
                    </div>
                    @endfor
                    <!-- === product-item === -->
                </div> <!--/row-->

            </div> <!--/container-->
        </section>

        <!-- ========================  VENISON PRODUCTS ======================== -->

</div>
@endsection