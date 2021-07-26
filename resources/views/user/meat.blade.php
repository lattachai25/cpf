@extends('.user.userlayout.adminpage')
@section('title', 'Meat Product')
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
                @for($i=1; $i<=3; $i++)
                <div class="item" style="background-image:url({{ asset('img/Brochure/'.$i.'.jpg') }})">
                    <div class="box">
                        <div class="container text-center">
                        <h2 class="title animated h1" data-animation="fadeInDown">THE MAGIC MARBLE</h2>
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
                            <figcaption style="background-image:url({{ asset('img/Brochure/5.jpg') }})">
                                <img src="{{ asset('img/Brochure/5.jpg') }}" alt="" />
                            </figcaption>
                            <a href="/Showmeat" class="btn btn-clean mfp-open-scrollto">Read more</a>
                        </figure>
                    </div>

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
                            <h2 class="title" style="color:#000 !important;">Poultry products</h2>
                            <div class="text" style="color:#3c3b3b !important;">
                                <p>Our latest Poultry Product</p>
                            </div>

                            <!-- === box filters === -->

                            <div id="box-filters" class="box-filters">

                                <figure data-filter=".poultry">
                                    <figcaption>
                                    <i class="flaticon-hen" style="font-size:60px;"></i>
                                        <span>POULTRY</span>
                                    </figcaption>
                                </figure>

                                <figure data-filter=".beef">
                                    <figcaption>
                                    <i class="flaticon-animal" style="font-size:60px;"></i>
                                        <span>BEEF</span>
                                    </figcaption>
                                </figure>

                                <figure data-filter=".lamb">
                                    <figcaption>
                                    <i class="flaticon-lamb-1" style="font-size:60px;"></i>
                                        <span>LAMB</span>
                                    </figcaption>
                                </figure>

                                <figure data-filter=".venison">
                                    <figcaption>
                                    <i class="flaticon-deer-1" style="font-size:60px;"></i>
                                        <span>VENISON</span>
                                    </figcaption>
                                </figure>

                                <figure data-filter=".turkey">
                                    <figcaption>
                                    <i class="flaticon-turkey" style="font-size:60px;"></i>
                                        <span>TURKEY</span>
                                    </figcaption>
                                </figure>

                            </div> <!--/box-filters-->

                        </div>
                    </div> <!--/row-->
                </header>

                <div id="box-filters-results" class="row">

                    <!-- === product-item === -->

                    <div class="col-xs-6 col-sm-4 item poultry">
                        <article>
                            <div class="figure-grid">
                                <div class="image">
                                    <a href="/Showmeat">
                                        <img src="{{ asset('img/Brochure/logoAngus.jpg') }}" alt="" width="360" />
                                    </a>
                                </div>
                                <div class="text" style="background: #000000bf;">
                                    <h2 class="title h4" style="color: #fff !important;">poultry</h2>
                                    <span class="description clearfix">Gubergren amet dolor ea diam takimata consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et consetetur nulla</span>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- === product-item === -->

                    <div class="col-xs-6 col-sm-4 item poultry">
                        <article>
                            <div class="figure-grid">
                                <div class="image">
                                    <a href/Showmeat">
                                        <img src="{{ asset('img/Brochure/logoAngus.jpg') }}" alt="" width="360" />
                                    </a>
                                </div>
                                <div class="text" style="background: #000000bf;">
                                    <h2 class="title h4" style="color: #fff !important;">poultry</h2>
                                    <span class="description clearfix">Gubergren amet dolor ea diam takimata consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et consetetur nulla</span>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- === product-item === -->

                    <div class="col-xs-6 col-sm-4 item sofa beef">
                        <article>
                            <div class="figure-grid">
                                <div class="image">
                                    <a href="/Showmeat">
                                        <img src="{{ asset('img/Brochure/logoAngus.jpg') }}" alt="" width="360" />
                                    </a>
                                </div>
                                <div class="text" style="background: #000000bf;">
                                    <h2 class="title h4" style="color: #fff !important;">beef</h2>
                                    <span class="description clearfix">Gubergren amet dolor ea diam takimata consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et consetetur nulla</span>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- === product-item === -->

                    <div class="col-xs-6 col-sm-4 item beef">
                        <article>
                            <div class="figure-grid">
                                <div class="image">
                                    <a href="/Showmeat">
                                        <img src="{{ asset('img/Brochure/logoAngus.jpg') }}" alt="" width="360" />
                                    </a>
                                </div>
                                <div class="text" style="background: #000000bf;">
                                    <h2 class="title h4" style="color: #fff !important;">beef</h2>
                                    <span class="description clearfix">Gubergren amet dolor ea diam takimata consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et consetetur nulla</span>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- === product-item === -->

                    <div class="col-xs-6 col-sm-4 item lamb">
                        <article>
                            <div class="figure-grid">
                                <div class="image">
                                    <a href="/Showmeat">
                                        <img src="{{ asset('img/Brochure/logoAngus.jpg') }}" alt="" width="360" />
                                    </a>
                                </div>
                                <div class="text" style="background: #000000bf;">
                                    <h2 class="title h4" style="color: #fff !important;">lamb</h2>
                                    <span class="description clearfix">Gubergren amet dolor ea diam takimata consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et consetetur nulla</span>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- === product-item === -->

                    <div class="col-xs-6 col-sm-4 item lamb">
                        <article>
                            <div class="figure-grid">
                                <div class="image">
                                    <a href="/Showmeat">
                                        <img src="{{ asset('img/Brochure/logoAngus.jpg') }}" alt="" width="360" />
                                    </a>
                                </div>
                                <div class="text" style="background: #000000bf;">
                                    <h2 class="title h4" style="color: #fff !important;">lamb</h2>
                                    <span class="description clearfix">Gubergren amet dolor ea diam takimata consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et consetetur nulla</span>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- === product-item === -->

                    <div class="col-xs-6 col-sm-4 item venison">
                        <article>
                            <div class="figure-grid">
                                <div class="image">
                                    <a href="/Showmeat">
                                        <img src="{{ asset('img/Brochure/logoAngus.jpg') }}" alt="" width="360" />
                                    </a>
                                </div>
                                <div class="text" style="background: #000000bf;">
                                    <h2 class="title h4" style="color: #fff !important;">venison</h2>
                                    <span class="description clearfix">Gubergren amet dolor ea diam takimata consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et consetetur nulla</span>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- === product-item === -->

                    <div class="col-xs-6 col-sm-4 item turkey">
                        <article>
                            <div class="figure-grid">
                                <div class="image">
                                    <a href="/Showmeat">
                                        <img src="{{ asset('img/Brochure/logoAngus.jpg') }}" alt="" width="360" />
                                    </a>
                                </div>
                                <div class="text" style="background: #000000bf;">
                                    <h2 class="title h4" style="color: #fff !important;">turkey</h2>
                                    <span class="description clearfix">Gubergren amet dolor ea diam takimata consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et consetetur nulla</span>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- === product-item === -->

                    <div class="col-xs-6 col-sm-4 item sofa turkey">

                        <article>
                            <div class="figure-grid">
                                <div class="image">
                                    <a href="/Showmeat">
                                        <img src="{{ asset('img/Brochure/logoAngus.jpg') }}" alt="" width="360" />
                                    </a>
                                </div>
                                <div class="text" style="background: #000000bf;">
                                    <h2 class="title h4" style="color: #fff !important;">turkey</h2>
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
                            <img src="{{ asset('img/Brochure/1.jpg') }}" alt="" width="640" />
                            <img src="{{ asset('img/Brochure/2.jpg') }}" alt="" width="640" />
                            <img src="{{ asset('img/Brochure/3.jpg') }}" alt="" width="640" />
                        </div>

                        <!-- === product-popup-footer === -->

                        <div class="popup-table">
                            <div class="popup-cell">
                                <div class="price price-single">
                                    <span class="h6">Pure Australian meat, satisfying meat-lovers worldwide. As one of Australia's largest meat producers and distributors with hubs in Brisbane, Sydney, Adelaide and Swan Hill, Victoria,
we are dedicated to upholding the highest quality standards across our entire network.</span>
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