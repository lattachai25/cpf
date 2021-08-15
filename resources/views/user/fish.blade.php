@extends('.user.userlayout.adminpage')
    @foreach ($fish as $fishs)
        @section('title', $fishs->title )
        @section('keywords', $fishs->keywords )
        @section('description', $fishs->description )
        @section('google', $fishs->google_code )
        @section('facebook', $fishs->facrbook_code )
    @endforeach
@section('content')

<div class="wrapper">

        <!-- ========================  Header content ======================== -->

        <section id="page-home" class="header-content">

            <div class="owl-slider owl-slider-fullscreen">

                <!-- === slide item === -->
            @foreach ($fish as $fishs)
                <div class="item" style="background-image:url({{ $fishs->images_show }})">
                    <div class="box">
                        <div class="container text-center">
                        <h2 class="title animated h1" data-animation="fadeInDown">{{ $fishs->text_title_en }}</h2>
                            <div class="animated" data-animation="fadeInUp">{{ $fishs->text_title_en }}</div>
                            <div class="animated" data-animation="fadeInUp">{{ $fishs->detel_product_en }}</div>
                            <div class="animated" data-animation="fadeInUp">
                                <a href="/Show_fish/{{ $fishs->id }}" class="btn btn-clean">Read more</a>
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
                        <h2 class="title" style="color:#fff !important;">NEWS fish PRODUCT</h2>
                        <div class="text">
                            <p>Fresh products delivered to you every day</p>
                        </div>
                    </div>
                </div>
            </header>

            <div class="container">
                <div class="row">

                    <!-- === item === -->
                    @foreach ($fish2 as $fishs)
                    <div class="col-md-8">
                        <figure>
                            <figcaption style="background-image:url({{$fishs->images_show }})">
                                <img src="{{$fishs->images_show }}" alt="" />
                            </figcaption>
                            <a href="/Show_fish/{{ $fishs->id }}" class="btn btn-clean mfp-open-scrollto">Read more</a>
                        </figure>
                    </div>
                    @endforeach

                    <!-- === item === -->
                    @foreach ($fish3 as $fishs)
                    <div class="col-md-4">
                        <figure>
                            <figcaption style="background-image:url({{ $fishs->images_show }})">
                                <img src="{{ $fishs->images_show }}" alt="" />
                            </figcaption>
                            <a href="/Show_fish/{{ $fishs->id }}" class="btn btn-clean mfp-open-scrollto">Read more</a>
                        </figure>
                    </div>
                    @endforeach
                    <!-- === item === -->

                </div> <!--/row-->

            </div> <!--/container-->
        </section>
        <!-- ======================== News Products ======================== -->
        <section class="owl-icons-wrapper">

            <!-- === header === -->
            <div class="container">

                <div class="owl-icons">

                    <!-- === icon item === -->

                    @foreach ($fish4 as $fishs)
                    <a href="/Show_fish/{{ $fishs->id }}">
                        <figure style="padding:10px;">
                            <img src="{{ asset('files_upload/Brand/'.$fishs->images.'') }}" width="100%" alt="">
                            <figcaption> {{ $fishs->name_brand_en }}</figcaption>
                        </figure>
                    </a>
                    @endforeach
                </div> <!--/owl-icons-->
            </div> <!--/container-->
        </section>

        <!-- ========================  fish PRODUCTS ======================== -->
        <section id="page-products" class="products" style="background-color:#808080 !important;">

            <div class="container">

                <!-- === header title === -->

                <header>
                    <div class="row">
                        <div class="col-md-offset-2 col-md-8 text-center">
                            <h2 class="title" style="color:#000 !important;">fish products BRAND</h2>
                            <div class="text" style="color:#3c3b3b !important;">
                                <p>Our latest fish Product</p>
                            </div>

                            <!-- === box filters === -->
                            <div id="box-filters" class="box-filters">
                            </div> <!--/box-filters-->

                        </div>
                    </div> <!--/row-->
                </header>

                <div id="box-filters-results" class="row">

                    <!-- === product-item === -->

                    @foreach ($fish5 as $fishs)
                    <div class="col-xs-6 col-sm-4 item sofa">
                    <article>
                            <div class="figure-grid">
                                <div class="image">
                                    <a href="/Show_fish/{{ $fishs->id }}">
                                        <img src="{{ $fishs->images_show }}" alt="" width="360px" height="210px" />
                                    </a>
                                </div>
                                <div class="text radius">
                                    <h2 class="title h4" style="color: #fff !important;">{{ $fishs->name_sub_categories }}</h2>
                                </div>
                            </div>
                        </article>
                    </div>
                    @endforeach
                    <!-- === product-item === -->
                </div> <!--/row-->

            </div> <!--/container-->
        </section>

        <!-- ========================  fish PRODUCTS ======================== -->

</div>
@endsection