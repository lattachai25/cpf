@extends('.user.userlayout.adminpage')
@section('title', 'Dairy Product')
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
                @for($i=1; $i<=2; $i++)
                <div class="item" style="background-image:url({{ asset('img/Dairy/01.jpg') }})">
                    <div class="box">
                        <div class="container text-center">
                        <h2 class="title animated h1" data-animation="fadeInDown">Brownes Dairy</h2>
                            <div class="animated" data-animation="fadeInUp">All natural, thick and creamy</div>
                            <div class="animated" data-animation="fadeInUp">Contains probiotics and real fruit</div>
                            <div class="animated" data-animation="fadeInUp">
                                <a href="/ShowDairy" class="btn btn-clean">Read more </a>
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
                            <figcaption style="background-image:url({{ asset('img/Dairy/1.jpg') }})">
                            </figcaption>
                            <a href="/ShowDairy" class="btn btn-clean  mfp-open-scrollto">Read more</a>
                        </figure>
                    </div>

                    <!-- === item === -->
                    @for($i=1; $i<=4; $i++)
                    <div class="col-md-4">
                        <figure>
                            <figcaption style="background-image:url({{ asset('img/Dairy/'.$i.'.jpg') }})">
                            </figcaption>
                            <a href="/ShowDairy" class="btn btn-clean  mfp-open-scrollto">Read more</a>
                        </figure>
                    </div>
                    @endfor
                    <!-- ========================  Article info popup - quick view ======================== -->

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
                            <h2 class="title" style="color:#000 !important;">Brownes Dairy products</h2>
                            <div class="text" style="color:#3c3b3b !important;">
                                <p>Our latest Brownes Dairy Product</p>
                            </div>

                            <!-- === box filters === -->

                            <div id="box-filters" class="box-filters">


                                <figure data-filter=".yogurt">
                                    <figcaption>
                                    <i class="flaticon-yogurt" style="font-size:50px;"></i>
                                        <span>YOGURT</span>
                                    </figcaption>
                                </figure>

                                <figure data-filter=".cheese">
                                    <figcaption>
                                    <i class="flaticon-cheese" style="font-size:50px;"></i>
                                        <span>CHEESE</span>
                                    </figcaption>
                                </figure>

                                <figure data-filter=".butter">
                                    <figcaption>
                                    <i class="flaticon-butter-1" style="font-size:50px;"></i>
                                        <span>BUTTER</span>
                                    </figcaption>
                                </figure>

                            </div> <!--/box-filters-->

                        </div>
                    </div> <!--/row-->
                </header>

                <div id="box-filters-results" class="row">

                    <!-- === product-item === -->
                    @for($i=1; $i<=2; $i++)
                    <div class="col-xs-6 col-sm-4 item yogurt">
                        <article>
                            <div class="figure-grid">
                                <div class="image">
                                    <a href="/ShowDairy">
                                        <img src="{{ asset('img/Dairy/1.jpg') }}" alt="" width="360" />
                                    </a>
                                </div>
                                <div class="text" style="background: #000000bf;">
                                    <h2 class="title h4" style="color: #fff !important;">YOGURT Dairy</h2>
                                </div>
                            </div>
                        </article>
                    </div>
                    @endfor
                    <!-- === product-item === -->
                    <!-- === product-item === -->
                    @for($i=1; $i<=2; $i++)
                    <div class="col-xs-6 col-sm-4 item cheese">
                        <article>
                            <div class="figure-grid">
                                <div class="image">
                                    <a href="/ShowDairy">
                                        <img src="{{ asset('img/Dairy/2.jpg') }}" alt="" width="360" />
                                    </a>
                                </div>
                                <div class="text" style="background: #000000bf;">
                                    <h2 class="title h4" style="color: #fff !important;">CHEESE Dairy</h2>
                                </div>
                            </div>
                        </article>
                    </div>
                    @endfor
                    <!-- === product-item === -->
                    <!-- === product-item === -->
                    @for($i=1; $i<=2; $i++)
                    <div class="col-xs-6 col-sm-4 item butter">
                        <article>
                            <div class="figure-grid">
                                <div class="image">
                                    <a href="/ShowDairy">
                                        <img src="{{ asset('img/Dairy/3.jpg') }}" alt="" width="360" />
                                    </a>
                                </div>
                                <div class="text" style="background: #000000bf;">
                                    <h2 class="title h4" style="color: #fff !important;">BUTTER Dairy</h2>
                                </div>
                            </div>
                        </article>
                    </div>
                    @endfor
                    <!-- === product-item === -->

                </div> <!--/row-->
            </div> <!--/container-->
        </section>

        <!-- ========================  POULTRY PRODUCTS ======================== -->

</div>
@endsection