@extends('.user.userlayout.adminpage')
@section('title', 'HOME')
@section('keywords', 'CPFAUSTRALIA')
@section('description', 'description CPFAUSTRALIA')
@section('google', 'google')
@section('facebook', 'Facebook')
@section('content')


        <!-- ========================  Header Slide ======================== -->

        <section class="header-content">

            <div class="owl-slider">

                <!-- === slide item === -->
                @for ($i = 1; $i < 5; $i++)

                <div class="item" style="background-image:url({{asset('assets/img/0'.$i.'.jpg') }})">
                    <div class="box">
                        <div class="container">
                            <h2 class="title animated h1" data-animation="fadeInDown">Meat is animal flesh that is eaten as food.</h2>
                            <div class="animated" data-animation="fadeInUp">
                            Meat is animal flesh that is eaten as food.[1] Humans have hunted and killed animals for meat since prehistoric times.
                            </div>

                        </div>
                    </div>
                </div>

                @endfor

            </div> <!--/owl-slider-->
        </section>
        <!-- ========================  Header Slide ======================== -->
        <!-- ========================  Icons slider ======================== -->
        <section class="owl-icons-wrapper owl-icons-frontpage">

            <!-- === header === -->



            <div class="container">

                <div class="owl-icons">

                    <!-- === icon item === -->

                    <a href="/Meat">
                        <figure>
                            <i class="flaticon-meat"></i>
                            <figcaption>MEAT</figcaption>
                        </figure>
                    </a>

                    <!-- === icon item === -->

                    <a href="/Seafood">
                        <figure>
                            <i class="flaticon-seafood"></i>
                            <figcaption>SEAFOOD</figcaption>
                        </figure>
                    </a>

                    <!-- === icon item === -->

                    <a href="/Fruit">
                        <figure>
                            <i class="flaticon-fruits"></i>
                            <figcaption>FRUITS</figcaption>
                        </figure>
                    </a>

                    <!-- === icon item === -->

                    <a href="/Vegetable">
                        <figure>
                            <i class="flaticon-vegetable"></i>
                            <figcaption>VEGRTABLE</figcaption>
                        </figure>
                    </a>

                    <!-- === icon item === -->

                    <a href="/Dairy">
                        <figure>
                            <i class="flaticon-milk"></i>
                            <figcaption>DAIRY</figcaption>
                        </figure>
                    </a>

                    <!-- === icon item === -->

                    <a href="/Cloche">
                        <figure>
                            <i class="flaticon-cloche"></i>
                            <figcaption>CLOCHE</figcaption>
                        </figure>
                    </a>

                </div> <!--/owl-icons-->
            </div> <!--/container-->
        </section>
        <!-- ========================  Icons slider ======================== -->

        <!-- ========================  NEW PRODUCTS  ======================== -->
        <section class="products">

            <div class="container">

                <!-- === header title === -->

                <header>
                    <div class="row">
                        <div class="col-md-offset-2 col-md-8 text-center">
                            <h2 class="title" style="color:#FFF;">New Products</h2>
                            <div class="text">
                                <p>Monthly new products</p>
                            </div>
                        </div>
                    </div>
                </header>

                <div class="row">

                    <!-- === product-item === -->

                    <div class="col-md-4 col-xs-6">

                        <article>
                            <div class="figure-grid">
                                <div class="image">
                                    <a href="/Apple">
                                        <img src="{{ asset('assets/newproduct/01.jpg') }}" alt="" width="360" />
                                    </a>
                                </div>
                                <div class="text" style="background-color:#000000b0;">
                                    <h2 class="title h4" ><a href="" style="color:#fff !important;">Apple Bravo</a></h2>
                                    <span class="description clearfix">Gubergren amet dolor ea diam takimata consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et consetetur nulla</span>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- === product-item === -->

                    <div class="col-md-4 col-xs-6">
                        <article>
                            <div class="figure-grid">
                                <div class="image">
                                    <a href="/Yogurt">
                                        <img src="{{ asset('assets/newproduct/02.jpg') }}" alt="" width="360" />
                                    </a>
                                </div>
                                <div class="text" style="background-color:#000000b0;">
                                    <h2 class="title h4"><a href="" style="color:#fff !important;">Yogurt</a></h2>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- === product-item === -->

                    <div class="col-md-4 col-xs-6">
                        <article>
                            <div class="figure-grid">
                                <div class="image">
                                    <a href="/Cephalopod">
                                        <img src="{{ asset('assets/newproduct/03.jpg') }}" alt="" width="360" />
                                    </a>
                                </div>
                                <div class="text" style="background-color:#000000b0;">
                                    <h2 class="title h4"><a href="" style="color:#fff !important;">Fremantle Octopus</a></h2>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- === product-item === -->

                    <div class="col-md-4 col-xs-6">
                        <article>
                            <div class="figure-grid">
                                <div class="image">
                                    <a href="/Beef">
                                        <img src="{{ asset('assets/newproduct/04.jpg') }}" alt="" width="360" />
                                    </a>
                                </div>
                                <div class="text" style="background-color:#000000b0;">
                                    <h2 class="title h4"><a href="" style="color:#fff !important;">Harvey Beef</a></h2>
                            
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- === product-item === -->

                    <div class="col-md-4 col-xs-6">
                        <article>
                            <div class="figure-grid">

                                <div class="image">
                                    <a href="/Fish">
                                        <img src="{{ asset('assets/newproduct/05.jpg') }}" alt="" width="360" />
                                    </a>
                                </div>
                                <div class="text" style="background-color:#000000b0;">
                                    <h2 class="title h4"><a href="" style="color:#fff !important;">Fresh Large</a></h2>

                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- === product-item === -->

                    <div class="col-md-4 col-xs-6">
                        <article>
                            <div class="figure-grid">
                                <div class="image">
                                    <a href="/Sweetpotatoes">
                                        <img src="{{ asset('assets/newproduct/06.jpg') }}" alt="" width="360" />
                                    </a>
                                </div>
                                <div class="text" style="background-color:#000000b0;">
                                    <h2 class="title h4"><a href="" style="color:#fff !important;">Purple</a></h2>
                                </div>
                            </div>
                        </article>
                    </div>

                </div> <!--/row-->
                <!-- === button more === -->

            </div> <!--/container-->
        </section>
        <!-- ========================  NEW PRODUCTS  ========================= -->
        <!-- ========================  4 Ping Effice  ======================== -->   
        <section class="stretcher-wrapper">

            <!-- === stretcher header === -->


            <!-- === stretcher === -->

            <ul class="stretcher">

                <!-- === stretcher item === -->
                @for ($i = 1; $i < 5; $i++)
                <li class="stretcher-item" style="background-image:url({{ asset('assets/newproduct/HarveyBeef0'.$i.'.jpg') }});">
                    <!--main text-->
                    <figure>
                        <h4>Harvey Beef</h4>
                        <figcaption>Harvey Beef</figcaption>
                    </figure>
                    <!--anchor-->
                    <a href="/Meat"></a>
                </li>
                @endfor

                <!-- === stretcher item more=== -->

                <li class="stretcher-item more">
                    <div class="more-icon">
                        <span data-title-show="Show more" data-title-hide="+"></span>
                    </div>
                    <a href="/Meat"></a>
                </li>

            </ul>
        </section>
        <!-- ======================== 4 Ping Effice  ======================== -->   
        <!-- ========================  สินค้าเพื่อสุขภาพ ======================== -->      
        <section class="blog blog-block" style="background-color: rgba(0, 0, 0, 0.8);">

            <div class="container">

                <!-- === blog header === -->

                <header>
                    <div class="row">
                        <div class="col-md-offset-2 col-md-8 text-center">
                            <h2 class="title" style="color: rgb(255, 255, 255);">Health Products</h2>
                            <div class="text">
                                <p>Healthy Food</p>
                            </div>
                        </div>
                    </div>
                </header>

                <div class="row">

                    <!-- === blog item === -->
                    @for ($i = 1; $i < 4; $i++)
                    <div class="col-sm-4">
                        <article>
                            <a href="/Beef">
                                <div class="image">
                                    <img src="{{ asset('assets/newproduct/HarveyBeef0'.$i.'.jpg') }}" alt="" />
                                </div>
                                <div class="entry entry-block">
                                    <div class="date">06/06/2021</div>
                                    <div class="title">
                                        <h2 class="h4">Harvey Beef is proud to offer our premium 100 Day Grain finished beef range.</h2>
                                    </div>
                                    <div class="description" style="background-color: rgba(0, 0, 0, 0.6); padding: 20px;">
                                        <p>
                                        Since 1919 Harvey Beef has fostered long lasting relationships with Western Australia’s best beef producers. From the pristine and rugged Kimberley and Pilbara regions where the cattle feed on the natural grasses of the rangelands, to the green grass pastures of the Great Southern and South Western regions, Harvey Beef and our producers place the highest priority on animal welfare and food safety. We are proud that our beef has no added hormones and have MSA programs suitable for domestic and international markets.
                                        </p>
                                    </div>
                                </div>
                                <div class="show-more">
                                    <span class="btn btn-main btn-block" style="box-shadow: rgb(255, 255, 255) 2px 2px 2px;">Read more</span>
                                </div>
                            </a>
                        </article>
                    </div>
                    @endfor

                </div> <!--/row-->
                <!-- === button more === -->

            </div> <!--/container-->
        </section>
        <!-- ========================  สินค้าเพื่อสุขภาพ ======================== -->                
        <!-- ========================  About ======================== --> 
        <section class="banner" style="background-image:url({{ asset('mainpage/assets/images/gallery-4.jpg') }})">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-2 col-md-8 text-center">
                        <h2 class="title">ABOUT Us</h2>
                        <p>
                        We are importers of meat, vegetables, fruit and dairy products from Australia that have standards.
                        </p>
                        <p><a href="/About" class="btn btn-clean">Read full story</a></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========================  About ======================== --> 
        <!-- ========================  ช่องทางการจัดจำหน่าย ======================== -->
        <section class="blog" style="background-color: rgb(0, 0, 0);">

            <div class="container">

                <!-- === blog header === -->

                <header>
                    <div class="row">
                        <div class="col-md-offset-2 col-md-8 text-center">
                            <h1 class="h2 title" style="color: rgb(255, 255, 255);">Distribution Channel</h1>
                            <div class="text">
                                <p>Fresh, clean food to you</p>
                            </div>
                        </div>
                    </div>
                </header>

                <div class="row">

                    <!-- === blog item === -->
                    @for ($i = 1; $i < 4; $i++)
                    <div class="col-sm-4">
                        <article>
                            <a href="">
                                <div class="image" style="background-image:url({{ asset('assets/newproduct/Purple'.$i.'.jpg') }})">
                                    <img src="{{ asset('assets/newproduct/Purple'.$i.'.jpg') }}" alt="" />
                                </div>
                                <div class="entry entry-table">
                                    <div class="date-wrapper">
                                        <div class="date">
                                            <span>MAR</span>
                                            <strong>08</strong>
                                            <span>2017</span>
                                        </div>
                                    </div>
                                    <div class="title">
                                        <h2 class="h5">Purple Carrots Try fresh purple carrots direct from Australia today  ...</h2>
                                    </div>
                                </div>
                                <div class="show-more">
                                    <span class="btn btn-main btn-block">Read more</span>
                                </div>
                            </a>
                        </article>
                    </div>
                    @endfor

                </div> <!--/row-->
                <!-- === button more === -->

                <div class="wrapper-more">
                    <a href="blog-grid.html" class="btn btn-main">View all posts</a>
                </div>

            </div> <!--/container-->
        </section>
        <!-- ========================  ช่องทางการจัดจำหน่าย ======================== -->
        <!-- ======================== สินค้าอื่นๆ ======================== -->
        <section class="instagram">
            
            <!-- === instagram header === -->

            <header>
                <div class="container">
                    <div class="row">
                        <div class="col-md-offset-2 col-md-8 text-center">
                            <h2 class="h2 title">Our other products</h2>
                            <div class="text">
                                <p>There are also many fresh and clean products.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- === instagram gallery === -->

            <div class="gallery clearfix">
                @for ($i = 1; $i < 7; $i++)
                <a class="item" href="Showmeat">
                    <img src="{{ asset('assets/newproduct/Beef0'.$i.'.jpg') }}" alt="Alternate Text" />
                </a>
                @endfor
            </div> <!--/gallery-->

        </section>
        <!-- ======================== สินค้าอื่นๆ ======================== -->
    

@endsection