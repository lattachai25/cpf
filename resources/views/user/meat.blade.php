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

            @foreach ($meat as $meats)
                <div class="item" style="background-image:url({{ $meats->images_show }})">
                        <div class="box">
                            <div class="container text-center">
                            <h2 class="title animated h1" data-animation="fadeInDown">{{ $meats->text_title_en }}</h2>
                                <div class="animated" data-animation="fadeInUp">{{ $meats->text_title_en }}</div>
                                <div class="animated" data-animation="fadeInUp">{{ $meats->detel_product_en }}</div>
                                <div class="animated" data-animation="fadeInUp">
                                    <a href="/Showmeat/{{ $meats->id }}" class="btn btn-clean">Read more</a>
                                </div>
                            </div>
                        </div>
            
                </div>
            @endforeach 
   
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
                            <figcaption style="background-image:url({{ $meats->images_show }})">
                                <img src="{{ $meats->images_show }}" alt="" />
                            </figcaption>
                            <a href="/Showmeat/{{ $meats->id }}" class="btn btn-clean mfp-open-scrollto">Read more</a>
                        </figure>
                    </div>
                    <!-- === item === -->
                    @foreach ($meat as $meats)
                    <div class="col-md-4">
                        <figure>
                            <figcaption style="background-image:url({{ $meats->images_show }})">
                                <img src="{{ $meats->images_show }}" alt="" />
                            </figcaption>
                            <a href="/Showmeat/{{ $meats->id }}" class="btn btn-clean mfp-open-scrollto">Read more</a>
                        </figure>
                    </div>
                    @endforeach 
                    <!-- === item === -->

                


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

                                <figure data-filter=".POULTRY">
                                    <figcaption>
                                    <i class="flaticon-hen" style="font-size:60px;"></i>
                                        <span>POULTRY</span>
                                    </figcaption>
                                </figure>

                                <figure data-filter=".BEEF">
                                    <figcaption>
                                    <i class="flaticon-animal" style="font-size:60px;"></i>
                                        <span>BEEF</span>
                                    </figcaption>
                                </figure>

                                <figure data-filter=".LAMB">
                                    <figcaption>
                                    <i class="flaticon-lamb-1" style="font-size:60px;"></i>
                                        <span>LAMB</span>
                                    </figcaption>
                                </figure>

                                <figure data-filter=".VENISON">
                                    <figcaption>
                                    <i class="flaticon-deer-1" style="font-size:60px;"></i>
                                        <span>VENISON</span>
                                    </figcaption>
                                </figure>

                                <figure data-filter=".TURKEY">
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
                    @foreach ($meat as $meats)
                    <div class="col-xs-6 col-sm-4 item {{ $meats->id }} {{ $meats->name_sub_categories }}">
                        <article>
                            <div class="figure-grid">
                                <div class="image">
                                    <a href="/Showmeat/{{ $meats->id }}">
                                        <img src="{{ $meats->images_show }}" alt="" width="360" />
                                    </a>
                                </div>
                                <div class="text radius">
                                    <h2 class="title h4" style="color: #fff !important;">{{ $meats->name_sub_categories }}</h2>
                                </div>
                            </div>
                        </article>
                    </div>
                    @endforeach 
                    <!-- === product-item === -->

                    </div> <!--/product-->
                </div> <!--popup-main-->
            </div> <!--/container-->
        </section>

        <!-- ========================  POULTRY PRODUCTS ======================== -->

</div>
@endsection