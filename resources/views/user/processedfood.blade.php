@extends('.user.userlayout.adminpage')
@section('title', 'PROCESSED FOODS Product')
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
                        <h2 class="title animated h1" data-animation="fadeInDown">Poultry Meat</h2>
                            <div class="animated" data-animation="fadeInUp">Unlimited Choices. Unbeatable Prices. Free Shipping.</div>
                            <div class="animated" data-animation="fadeInUp">Furniture category icon fonts!</div>
                            <div class="animated" data-animation="fadeInUp">
                                <a href="" class="btn btn-clean">Read more</a>
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
                        <h2 class="title" style="color:#fff !important;">NEWS POULTRY PRODUCT</h2>
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
                            <a href="#interiorId1" class="btn btn-clean mfp-open mfp-open-scrollto">Read more</a>
                        </figure>
                    </div>

                    <!-- === item === -->

                    <div class="col-md-4">
                        <figure>
                            <figcaption style="background-image:url({{ asset('assets/img/02.jpg') }})">
                                <img src="{{ asset('assets/img/01.jpg') }}" alt="" />
                            </figcaption>
                            <a href="#interiorId1" class="btn btn-clean mfp-open mfp-open-scrollto">Read more</a>
                        </figure>
                    </div>

                    <!-- === item === -->

                    <div class="col-md-4">
                        <figure>
                            <figcaption style="background-image:url({{ asset('assets/img/03.jpg') }})">
                                <img src="{{ asset('assets/img/01.jpg') }}" alt="" />
                            </figcaption>
                            <a href="#interiorId1" class="btn btn-clean mfp-open mfp-open-scrollto">Read more</a>
                        </figure>
                    </div>

                    <!-- === item === -->

                    <div class="col-md-4">
                        <figure>
                            <figcaption style="background-image:url({{ asset('assets/img/04.jpg') }})">
                                <img src="{{ asset('assets/img/01.jpg') }}" alt="" />
                            </figcaption>
                            <a href="#interiorId1" class="btn btn-clean mfp-open mfp-open-scrollto">Read more</a>
                        </figure>
                    </div>

                    <!-- === item === -->

                    <div class="col-md-4">
                        <figure>
                            <figcaption style="background-image:url({{ asset('assets/img/01.jpg') }})">
                                <img src="{{ asset('assets/img/01.jpg') }}" alt="" />
                            </figcaption>
                            <a href="#interiorId1" class="btn btn-clean mfp-open mfp-open-scrollto">Read more</a>
                        </figure>
                    </div>

                    <!-- ========================  Article info popup - quick view ======================== -->

                    <div class="popup-main popup-main-article mfp-hide" id="interiorId1">

                        <!-- === product popup === -->

                        <div class="product">

                            <!-- === popup-title === -->

                            <div class="popup-title">
                                <div class="h1 title">Meat Product <small>Atisfying meat-lovers worldwide</small></div>
                            </div>

                            <div class="popup-content">
                                <h2>Pure Australian meat, satisfying meat-lovers worldwide.</h2>
                                <p>
                                DWoeoddwiacrda Ftoeodds Atuost rpaleiar isf ae vcerttiicoalnly isntiengrcateed 1m8ea8t b8us.iness from the rich fertile Murray Valley region
                                    of Victoria, Australia.
                                    We are committed to ethical and sustainable practices, which drives the signature quality across all aspects of
                                    our operations to maintain our organic structure.
                                    From the well-being of our livestock to producing world leading high-quality Australian beef and lamb, combined
                                    with awareness of our environmental footprint, we follow stringent certification and accreditation guidelines for a
                                    consistently premium product.
                                    Quality Assurance & Compliance
                                    Woodward Foods Australia is committed to supply products that consistently meet our customer’s requirements. Quality and
                                    Food Safety is assured by working in a systematic manner following formalised procedures which are designed to eliminate and
                                    control potential hazards to the quality and safety of products and safety of people.
                                    Animal Welfare
                                    At all stages of livestock handling, we are committed to the protection of the overall wellness and well-being of our livestock,
                                    including living conditions, veterinary care and proper handling. We are committed to the stringent guidelines, systems and
                                    procedures including livestock identification and traceability, food safety, animal health and surveillance, feeding and processing
                                    practices. These measures guarantee meat safety, product integrity, market access and bio-security.
                                    Farming Process
                                    Woodward Foods Australia is proud to be one of the very few Australian meat producers that own and operate every stage
                                    of the supply chain. In so doing, it guarantees the production of the finest quality meat for our customers.
                                    Processing
                                    Our commitment is to deliver the best products, using state-of-the-art production facilities across our entire manufacturing
                                    and distribution chain, ensuring quality consistency and eating experience. As a respected and long standing member of the
                                    Australian food industry, Woodward Foods are continuously striving to improve processing standards ensuring that at all times
                                    Australian and international standards are maintained.
                                    Sustainability
                                    Our natural environment is important to us and we recognise the importance of minimising our environmental footprint for a
                                    operations to assure the ongoing delivery of our commitment to environmental sustainability.
                                    sustainable future. We are continuously adopting ecient processes and technologies across our farming and manufacturing
                                    Accreditations & Licenses:
                                    Codex HACCP approved; BRCGS certified; AUS-MEAT accreditation; AUS-QUAL Product Certification; Australian
                                    Renderer’s Association accredited; Halal certification; Meat Standards Australia licenses (MSA); PrimeSafe certified
                                </p>
                                <p><img src="{{ asset('assets/img/01.jpg') }}" /></p>
                                <p>
                                of Victoria, Australia.
                                    We are committed to ethical and sustainable practices, which drives the signature quality across all aspects of
                                    our operations to maintain our organic structure.
                                    From the well-being of our livestock to producing world leading high-quality Australian beef and lamb, combined
                                    with awareness of our environmental footprint, we follow stringent certification and accreditation guidelines for a
                                    consistently premium product.
                                    Quality Assurance & Compliance
                                    Woodward Foods Australia is committed to supply products that consistently meet our customer’s requirements. Quality and
                                    Food Safety is assured by working in a systematic manner following formalised procedures which are designed to eliminate and
                                    control potential hazards to the quality and safety of products and safety of people.
                                    Animal Welfare
                                    At all stages of livestock handling, we are committed to the protection of the overall wellness and well-being of our livestock,
                                    including living conditions, veterinary care and proper handling. We are committed to the stringent guidelines, systems and
                                    procedures including livestock identification and traceability, food safety, animal health and surveillance, feeding and processing
                                    practices. These measures guarantee meat safety, product integrity, market access and bio-security.
                                    Farming Process
                                    Woodward Foods Australia is proud to be one of the very few Australian meat producers that own and operate every stage
                                    of the supply chain. In so doing, it guarantees the production of the finest quality meat for our customers.
                                    Processing
                                    Our commitment is to deliver the best products, using state-of-the-art production facilities across our entire manufacturing
                                    and distribution chain, ensuring quality consistency and eating experience. As a respected and long standing member of the
                                    Australian food industry, Woodward Foods are continuously striving to improve processing standards ensuring that at all times
                                    Australian and international standards are maintained.
                                    Sustainability
                                    Our natural environment is important to us and we recognise the importance of minimising our environmental footprint for a
                                    operations to assure the ongoing delivery of our commitment to environmental sustainability.
                                    sustainable future. We are continuously adopting ecient processes and technologies across our farming and manufacturing
                                    Accreditations & Licenses:
                                    Codex HACCP approved; BRCGS certified; AUS-MEAT accreditation; AUS-QUAL Product Certification; Australian
                                    Renderer’s Association accredited; Halal certification; Meat Standards Australia licenses (MSA); PrimeSafe certified
                                </p>
                            </div>


                        </div> <!--/product-->
                    </div> <!--popup-main-->


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
                    <a href="#">
                        <figure style="padding:10px;">
                            <img src="{{ asset('assets/img/01.jpg') }}" width="100%" alt="">
                            <figcaption>Poultry</figcaption>
                        </figure>
                    </a>
                    @endfor
                </div> <!--/owl-icons-->
            </div> <!--/container-->
        </section>

        <!-- ========================  POULTRY PRODUCTS ======================== -->
        <section id="page-products" class="products" style="background-color:#808080 !important;">

            <div class="container">

                <!-- === header title === -->

                <header>
                    <div class="row">
                        <div class="col-md-offset-2 col-md-8 text-center">
                            <h2 class="title" style="color:#000 !important;">Poultry products BRAND</h2>
                            <div class="text" style="color:#3c3b3b !important;">
                                <p>Our latest Poultry Product</p>
                            </div>

                            <!-- === box filters === -->

                            <div id="box-filters" class="box-filters">

                              <!--  
                                  <figure data-filter=".sofa">
                                    <figcaption>
                                    <i class="flaticon-hen" style="font-size:60px;"></i>
                                        <span>POULTRY</span>
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
                                    <i class="flaticon-lamb-1" style="font-size:60px;"></i>
                                        <span>LAMB</span>
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

                    <div class="col-xs-6 col-sm-4 item sofa">
                        <article>
                            <div class="figure-grid">
                                <div class="image">
                                    <a href="#productid1" class="mfp-open">
                                        <img src="{{ asset('assets/img/01.jpg') }}" alt="" width="360" />
                                    </a>
                                </div>
                                <div class="text">
                                    <h2 class="title h4" style="color: #fff !important;">TURKEY</h2>
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
                                    <a href="#productid1" class="mfp-open">
                                        <img src="{{ asset('assets/img/02.jpg') }}" alt="" width="360" />
                                    </a>
                                </div>
                                <div class="text">
                                    <h2 class="title h4" style="color: #fff !important;">TURKEY</h2>
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
                                    <a href="#productid1" class="mfp-open">
                                        <img src="{{ asset('assets/img/03.jpg') }}" alt="" width="360" />
                                    </a>
                                </div>
                                <div class="text">
                                    <h2 class="title h4" style="color: #fff !important;">TURKEY</h2>
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
                                    <a href="#productid1" class="mfp-open">
                                        <img src="{{ asset('assets/img/04.jpg') }}" alt="" width="360" />
                                    </a>
                                </div>
                                <div class="text">
                                    <h2 class="title h4" style="color: #fff !important;">TURKEY</h2>
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
                                    <a href="#productid1" class="mfp-open">
                                        <img src="{{ asset('assets/img/01.jpg') }}" alt="" width="360" />
                                    </a>
                                </div>
                                <div class="text">
                                    <h2 class="title h4" style="color: #fff !important;">TURKEY</h2>
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
                                    <a href="#productid1" class="mfp-open">
                                        <img src="{{ asset('assets/img/02.jpg') }}" alt="" width="360" />
                                    </a>
                                </div>
                                <div class="text">
                                    <h2 class="title h4" style="color: #fff !important;">TURKEY</h2>
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
                                    <a href="#productid1" class="mfp-open">
                                        <img src="{{ asset('assets/img/03.jpg') }}" alt="" width="360" />
                                    </a>
                                </div>
                                <div class="text">
                                    <h2 class="title h4" style="color: #fff !important;">TURKEY</h2>
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
                                    <a href="#productid1" class="mfp-open">
                                        <img src="{{ asset('assets/img/04.jpg') }}" alt="" width="360" />
                                    </a>
                                </div>
                                <div class="text">
                                    <h2 class="title h4" style="color: #fff !important;">TURKEY</h2>
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
                                    <a href="#productid1" class="mfp-open">
                                        <img src="{{ asset('assets/img/04.jpg') }}" alt="" width="360" />
                                    </a>
                                </div>
                                <div class="text">
                                    <h2 class="title h4" style="color: #fff !important;">TURKEY</h2>
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
                            <div class="h1 title">TURKEY</div>
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