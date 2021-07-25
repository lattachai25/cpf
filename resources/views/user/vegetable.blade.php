@extends('.user.userlayout.adminpage')
@section('title', 'Vegetable Product')
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
                <div class="item" style="background-image:url({{ asset('img/Patane/Purple'.$i.'.jpg') }})">
                    <div class="box">
                        <div class="container text-center">
                        <h2 class="title animated h1" data-animation="fadeInDown">VEGETABLE</h2>
                            <div class="animated" data-animation="fadeInUp">Unlimited Choices. Unbeatable Prices. Free Shipping.</div>
                            <div class="animated" data-animation="fadeInUp">Furniture category icon fonts!</div>
                            <div class="animated" data-animation="fadeInUp">
                                <a href="/Showvegetable" class="btn btn-clean">Get insipred</a>
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
                            <figcaption style="background-image:url({{ asset('img/Patane/Purple1.jpg') }})">
                            </figcaption>
                            <a href="/Showvegetable" class="btn btn-clean mfp-open-scrollto">Read more</a>
                        </figure>
                    </div>

                    <!-- === item === -->
                    @for($i=1; $i<=4; $i++)
                    <div class="col-md-4">
                        <figure>
                            <figcaption style="background-image:url({{ asset('img/Patane/Purple2.jpg') }})">
                            </figcaption>
                            <a href="/Showvegetable" class="btn btn-clean mfp-open-scrollto">Read more</a>
                        </figure>
                    </div>
                    @endfor
                    <!-- === item === -->

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
                            <h2 class="title" style="color:#000 !important;">VEGETABLE products</h2>
                            <div class="text" style="color:#3c3b3b !important;">
                                <p>Our latest VEGETABLE Product</p>
                            </div>

                            <!-- === box filters === -->

                            <div id="box-filters" class="box-filters">

                                <figure data-filter=".carrot">
                                    <figcaption>
                                    <i class="flaticon-carrot-1" style="font-size:50px;"></i>
                                        <span>CARROT</span>
                                    </figcaption>
                                </figure>

                                <figure data-filter=".beetroot">
                                    <figcaption>
                                    <i class="flaticon-beetroot" style="font-size:50px;"></i>
                                        <span>BEETROOT</span>
                                    </figcaption>
                                </figure>

                                <figure data-filter=".whiteonion">
                                    <figcaption>
                                    <i class="flaticon-onion" style="font-size:50px;"></i>
                                        <span>ONION</span>
                                    </figcaption>
                                </figure>

                                <figure data-filter=".sweetpotatoes">
                                    <figcaption>
                                    <i class="flaticon-sweet-potato" style="font-size:50px;"></i>
                                        <span>POTATOES</span>
                                    </figcaption>
                                </figure>

                            </div> <!--/box-filters-->

                        </div>
                    </div> <!--/row-->
                </header>

                <div id="box-filters-results" class="row">

                    <!-- === product-item === -->
                    @for($i=1; $i<=2; $i++)
                    <div class="col-xs-6 col-sm-4 item carrot">
                        <article>
                            <div class="figure-grid">
                                <div class="image">
                                    <a href="/Showvegetable">
                                        <img src="{{ asset('img/Patane/Purple1.jpg') }}" alt="" width="360" />
                                    </a>
                                </div>
                                <div class="text" style="background-color:#000000bf; !important;">
                                    <h2 class="title h4" style="color: #fff !important;">CARROT</h2>
                                </div>
                            </div>
                        </article>
                    </div>
                    @endfor

                    <!-- === product-item === -->
                    <!-- === product-item === -->
                    @for($i=1; $i<=3; $i++)
                    <div class="col-xs-6 col-sm-4 item beetroot">
                        <article>
                            <div class="figure-grid">
                                <div class="image">
                                    <a href="/Showvegetable">
                                        <img src="{{ asset('img/Patane/Purple1.jpg') }}" alt="" width="360" />
                                    </a>
                                </div>
                                <div class="text" style="background-color:#000000bf; !important;">
                                    <h2 class="title h4" style="color: #fff !important;">Purple</h2>
                                </div>
                            </div>
                        </article>
                    </div>
                    @endfor
                    <!-- === product-item === -->
                    @for($i=1; $i<=2; $i++)
                    <div class="col-xs-6 col-sm-4 item whiteonion">
                        <article>
                            <div class="figure-grid">
                                <div class="image">
                                    <a href="/Showvegetable">
                                        <img src="{{ asset('img/Patane/Purple2.jpg') }}" alt="" width="360" />
                                    </a>
                                </div>
                                <div class="text" style="background-color:#000000bf; !important;">
                                    <h2 class="title h4" style="color: #fff !important;">white onion</h2>
                                </div>
                            </div>
                        </article>
                    </div>
                    @endfor
                    <!-- === product-item === -->
                    <!-- === product-item === -->
                    @for($i=1; $i<=2; $i++)
                    <div class="col-xs-6 col-sm-4 item sweetpotatoes">
                        <article>
                            <div class="figure-grid">
                                <div class="image">
                                    <a href="/Showvegetable">
                                        <img src="{{ asset('img/Patane/Purple2.jpg') }}" alt="" width="360" />
                                    </a>
                                </div>
                                <div class="text" style="background-color:#000000bf; !important;">
                                    <h2 class="title h4" style="color: #fff !important;">sweet potatoes</h2>
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