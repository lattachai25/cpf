@extends('.user.userlayout.adminpage')
@section('title', 'Others Product')
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
                <div class="item" style="background-image:url({{ asset('assets/img/0'.$i.'.jpg') }})">
                    <div class="box">
                        <div class="container text-center">
                        <h2 class="title animated h1" data-animation="fadeInDown">Others</h2>
                            <div class="animated" data-animation="fadeInUp">Unlimited Choices. Unbeatable Prices. Free Shipping.</div>
                            <div class="animated" data-animation="fadeInUp">Furniture category icon fonts!</div>
                            <div class="animated" data-animation="fadeInUp">
                                <a href="/Showothers" class="btn btn-clean">Read more</a>
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
                            <figcaption style="background-image:url({{ asset('assets/img/01.jpg') }})">
                                <img src="{{ asset('assets/img/01.jpg') }}" alt="" />
                            </figcaption>
                            <a href="/Showothers" class="btn btn-clean mfp-open-scrollto">Read more</a>
                        </figure>
                    </div>

                    <!-- === item === -->

                    <div class="col-md-4">
                        <figure>
                            <figcaption style="background-image:url({{ asset('assets/img/02.jpg') }})">
                                <img src="{{ asset('assets/img/01.jpg') }}" alt="" />
                            </figcaption>
                            <a href="/Showothers" class="btn btn-clean mfp-open-scrollto">Read more</a>
                        </figure>
                    </div>

                    <!-- === item === -->

                    <div class="col-md-4">
                        <figure>
                            <figcaption style="background-image:url({{ asset('assets/img/03.jpg') }})">
                                <img src="{{ asset('assets/img/01.jpg') }}" alt="" />
                            </figcaption>
                            <a href="/Showothers" class="btn btn-clean mfp-open-scrollto">Read more</a>
                        </figure>
                    </div>

                    <!-- === item === -->

                    <div class="col-md-4">
                        <figure>
                            <figcaption style="background-image:url({{ asset('assets/img/04.jpg') }})">
                                <img src="{{ asset('assets/img/01.jpg') }}" alt="" />
                            </figcaption>
                            <a href="/Showothers" class="btn btn-clean mfp-open-scrollto">Read more</a>
                        </figure>
                    </div>

                    <!-- === item === -->

                    <div class="col-md-4">
                        <figure>
                            <figcaption style="background-image:url({{ asset('assets/img/01.jpg') }})">
                                <img src="{{ asset('assets/img/01.jpg') }}" alt="" />
                            </figcaption>
                            <a href="/Showothers" class="btn btn-clean mfp-open-scrollto">Read more</a>
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
                            <h2 class="title" style="color:#000 !important;">OTHERS products</h2>
                            <div class="text" style="color:#3c3b3b !important;">
                                <p>Our latest Poultry Product</p>
                            </div>

                            <!-- === box filters === -->

                            <div id="box-filters" class="box-filters">

                                <figure data-filter=".sofa">
                                    <figcaption>
                                    <i class="flaticon-fast-food" style="font-size:50px;"></i>
                                        <span>PROCESSED</span>
                                    </figcaption>
                                </figure>

                                <figure data-filter=".armchair">
                                    <figcaption>
                                    <i class="flaticon-beverages" style="font-size:50px;"></i>
                                        <span>BEVERAGE</span>
                                    </figcaption>
                                </figure>

                                <figure data-filter=".chair">
                                    <figcaption>
                                    <i class="flaticon-sweet" style="font-size:50px;"></i>
                                        <span style="margin-left:-15px;">CONFECTIONARY</span>
                                    </figcaption>
                                </figure>


                            </div> <!--/box-filters-->

                        </div>
                    </div> <!--/row-->
                </header>

                <div id="box-filters-results" class="row">

                    <!-- === product-item === -->

                    <div class="col-xs-6 col-sm-4 item sofa">
                        <article>
                            <div class="figure-grid">
                                <div class="image">
                                    <a href="/Showothers">
                                        <img src="{{ asset('assets/img/01.jpg') }}" alt="" width="360" />
                                    </a>
                                </div>
                                <div class="text">
                                    <h2 class="title h4" style="color: #fff !important;">Green corner</h2>
                                    <span class="description clearfix">Gubergren amet dolor ea diam takimata consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et consetetur nulla</span>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- === product-item === -->

                    <div class="col-xs-6 col-sm-4 item armchair">
                        <article>
                            <div class="figure-grid">
                                <div class="image">
                                    <a href="/Showothers">
                                        <img src="{{ asset('assets/img/02.jpg') }}" alt="" width="360" />
                                    </a>
                                </div>
                                <div class="text">
                                    <h2 class="title h4" style="color: #fff !important;">Laura</h2>
                                    <span class="description clearfix">Gubergren amet dolor ea diam takimata consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et consetetur nulla</span>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- === product-item === -->

                    <div class="col-xs-6 col-sm-4 item sofa armchair">
                        <article>
                            <div class="figure-grid">
                                <div class="image">
                                    <a href="/Showothers">
                                        <img src="{{ asset('assets/img/03.jpg') }}" alt="" width="360" />
                                    </a>
                                </div>
                                <div class="text">
                                    <h2 class="title h4" style="color: #fff !important;">Nude</h2>
                                    <span class="description clearfix">Gubergren amet dolor ea diam takimata consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et consetetur nulla</span>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- === product-item === -->

                    <div class="col-xs-6 col-sm-4 item armchair">
                        <article>
                            <div class="figure-grid">
                                <div class="image">
                                    <a href="/Showothers">
                                        <img src="{{ asset('assets/img/04.jpg') }}" alt="" width="360" />
                                    </a>
                                </div>
                                <div class="text">
                                    <h2 class="title h4" style="color: #fff !important;">Aurora</h2>
                                    <span class="description clearfix">Gubergren amet dolor ea diam takimata consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et consetetur nulla</span>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- === product-item === -->

                    <div class="col-xs-6 col-sm-4 item bedroom">
                        <article>
                            <div class="figure-grid">
                                <div class="image">
                                    <a href="/Showothers">
                                        <img src="{{ asset('assets/img/01.jpg') }}" alt="" width="360" />
                                    </a>
                                </div>
                                <div class="text">
                                    <h2 class="title h4" style="color: #fff !important;">Dining set</h2>
                                    <span class="description clearfix">Gubergren amet dolor ea diam takimata consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et consetetur nulla</span>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- === product-item === -->

                    <div class="col-xs-6 col-sm-4 item sofa">
                        <article>
                            <div class="figure-grid">
                                <div class="image">
                                    <a href="/Showothers">
                                        <img src="{{ asset('assets/img/02.jpg') }}" alt="" width="360" />
                                    </a>
                                </div>
                                <div class="text">
                                    <h2 class="title h4" style="color: #fff !important;">Seat chair</h2>
                                    <span class="description clearfix">Gubergren amet dolor ea diam takimata consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et consetetur nulla</span>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- === product-item === -->

                    <div class="col-xs-6 col-sm-4 item bedroom">
                        <article>
                            <div class="figure-grid">
                                <div class="image">
                                    <a href="/Showothers">
                                        <img src="{{ asset('assets/img/03.jpg') }}" alt="" width="360" />
                                    </a>
                                </div>
                                <div class="text">
                                    <h2 class="title h4" style="color: #fff !important;">Dining set</h2>
                                    <span class="description clearfix">Gubergren amet dolor ea diam takimata consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et consetetur nulla</span>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- === product-item === -->

                    <div class="col-xs-6 col-sm-4 item chair">
                        <article>
                            <div class="figure-grid">
                                <div class="image">
                                    <a href="/Showothers">
                                        <img src="{{ asset('assets/img/04.jpg') }}" alt="" width="360" />
                                    </a>
                                </div>
                                <div class="text">
                                    <h2 class="title h4" style="color: #fff !important;">Seat chair</h2>
                                    <span class="description clearfix">Gubergren amet dolor ea diam takimata consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et consetetur nulla</span>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- === product-item === -->

                    <div class="col-xs-6 col-sm-4 item sofa chair">

                        <article>
                            <div class="figure-grid">
                                <div class="image">
                                    <a href="/Showothers">
                                        <img src="{{ asset('assets/img/04.jpg') }}" alt="" width="360" />
                                    </a>
                                </div>
                                <div class="text">
                                    <h2 class="title h4" style="color: #fff !important;">Green corner</h2>
                                    <span class="description clearfix">Gubergren amet dolor ea diam takimata consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et consetetur nulla</span>
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
                            <div class="h1 title">Green corner</div>
                        </div>

                        <!-- === product gallery === -->

                        <div class="owl-product-gallery">
                            <img src="{{ asset('assets/img/01.jpg') }}" alt="" width="640" />
                            <img src="{{ asset('assets/img/01.jpg') }}" alt="" width="640" />
                            <img src="{{ asset('assets/img/01.jpg') }}" alt="" width="640" />
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