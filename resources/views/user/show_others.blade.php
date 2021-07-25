@extends('.user.userlayout.adminpage')
@section('title', 'SHOW OTHERS')
@section('keywords', 'CPFAUSTRALIA')
@section('description', 'SHOW OTHERS description CPFAUSTRALIA')
@section('google', 'google')
@section('facebook', 'Facebook')
@section('content')



<style>
    .product .main {
    background: #000000c7 !important;
}
.products {
    background-color: #e2e2e2 !important;
}
.product .info {
    background-color: #e2e2e2 !important;
    padding: 20px 0;
    z-index: 1;
}
.product {
    background: #000000 !important;
}
.product .title {
    color: #fff !important;
}
.popup-main .mfp-close {
    color: white !important;
}
</style>
<div class="wrapper">

        <!-- ========================  Product ======================== -->

        <section class="product">
            <div class="main">
                <div class="container">

                <br><br><br><br><br><br>


                    <div class="row product-flex">
                        <div class="col-md-4 col-sm-12 product-flex-info">
                            <div class="clearfix">

                                <!-- === product-title === -->

                                <h1 class="title" data-title="Others">Others <small>Others PRODUCT</small></h1>

                                <div class="clearfix">

                                    <!-- === price wrapper === -->

                                    <div class="price">
                                        <span class="h3">
                                        Others
                                        </span>
                                    </div>
                                    <hr />

                                    <!-- === info-box === -->

                                    <div class="info-box">
                                        <span><strong>Brand name</strong></span>
                                        <span>Brand name</span>
                                    </div>

                                    <!-- === info-box === -->

                                    <div class="info-box">
                                        <span><strong>Type Product</strong></span>
                                        <span>DAIRY</span>
                                    </div>

                                    <!-- === info-box === -->

                                    <hr />
                                                            <!-- === product-designer === -->

                                    <div class="info-box">
                                        <div class="image">
                                            <img src="{{ asset('img/Brochure/logo_carrara.jpg') }}" alt="Alternate Text" width="80%" />
                                        </div>
                                    </div>
                                </div> <!--/clearfix-->
                            </div> <!--/product-info-wrapper-->
                        </div> <!--/col-md-4-->
                        <!-- === product item gallery === -->

                        <div class="col-md-8 col-sm-12 product-flex-gallery">
                            <!-- === product gallery === -->

                            <div class="owl-product-gallery open-popup-gallery">
                            @for($i=1; $i<=4; $i++)
                                <a href="{{ asset('img/Brochure/'.$i.'.jpg') }}"><img src="{{ asset('img/Brochure/'.$i.'.jpg') }}" alt="" height="250px" /></a>
                            @endfor
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- === product-info === -->

            <div class="info">
                <div class="container">
                    <div class="row">

                        <!-- === nav-tabs === -->

                        <div class="col-md-12">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#designer" aria-controls="designer" role="tab" data-toggle="tab">
                                        <i class="icon icon-eye"></i>
                                        <span>PRODUCT LIST</span>
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#design" aria-controls="design" role="tab" data-toggle="tab">
                                        <i class="icon icon-sort-alpha-asc"></i>
                                        <span>Attachment</span>
                                    </a>
                                </li>
                            </ul>

                            <!-- === tab-panes === -->

                            <div class="tab-content">

                                <div role="tabpanel" class="tab-pane active" id="designer">
                                    <div class="content">

                                        <!-- === designer collection title === -->

                                        <h3>Product details</h3>

                                        <div class="products">
                                            <div class="row">

                                                <!-- === product-item === -->
                                                @for($i=1; $i<=6; $i++ )
                                                <div class="col-md-4 col-xs-4">
                                                    <article>
                                                        <div class="figure-grid">
                                                            <div class="image">
                                                                <a href="#productid1" class="mfp-open">
                                                                    <img src="{{ asset('img/Brochure/5.jpg') }}" alt="" width="360" />
                                                                </a>
                                                            </div>
                                                            <div class="text" style="background: #000000bf; color:#fff;">
                                                                <h4 class="title" style="color:#fff !important;">BROWNES DAIRY</h4>
                                                                <sup>Designer collection</sup>  
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                                @endfor
                                            </div> <!--/row-->
                                        </div> <!--/products-->
                                    </div> <!--/content-->
                                </div> <!--/tab-pane-->
                                <!-- ============ tab #2 ============ -->

                                <div role="tabpanel" class="tab-pane" id="design">
                                    <div class="content">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <h3>Dimensions</h3>
                                                <p>
                                                    <img class="full-image" src="{{ asset('img/Brochure/logo_carrara.jpg') }}" alt="Brownes Dairy" width="250" />
                                                </p>
                                                         
                                                <div class="icon_right" style="float: right;">
                                                <b>Read Attachment</b> <i class="icon icon-arrow-right"></i> <a href="#" class="btn btn-main btn-xs"><i class="icon icon-layers"></i></a>
                                                </div>
                                                <br>
                                                <hr />

                                            </div>
                                            <div class="col-md-8">
                                                <h3>Established in 1886, Brownes Dairy is the oldest</h3>
                                                <p>
                                                and most established dairy in Australia.
                                                For 133 years we have been pioneering award winning, great tasting
                                                and innovative new products. Our natural yoghurt is lovingly made with
                                                fresh milk sourced from the pristine South-West region of Western Australia.
                                                All Brownes Dairy cows roam freely and our farmers never produce under intense
                                                farming conditions. Happy, free range cows mean great tasting milk and yoghurt!
                                                </p>
                                            
                                            </div>
                                        </div> <!--/row-->
                                    </div> <!--/content-->
                                </div> <!--/tab-pane-->
                                <!-- ============ tab #3 ============ -->

                            </div> <!--/tab-content-->
                        </div>
                    </div> <!--/row-->
                </div> <!--/container-->
            </div> <!--/info-->
        </section>

        <!-- ========================  Product info popup - quick view ======================== -->

        <div class="popup-main mfp-hide" id="productid1">

            <!-- === product popup === -->

            <div class="product">

                <!-- === popup-title === -->

                <div class="popup-title">
                    <div class="h1 title">Name Product</div>
                </div>

                <!-- === product gallery === -->

                <div class="owl-product-gallery">
                    @for($i=1; $i<=4; $i++)
                    <img src="{{ asset('img/Brochure/'.$i.'.jpg') }}" alt="" width="640" />
                    @endfor
                </div>

                <!-- === product-popup-info === -->

                <div class="popup-content">
                    <div class="product-info-wrapper">
                        <div class="row">

                            <!-- === left-column === -->

                            <div class="col-sm-6">
                                <div class="info-box">
                                    <strong>Name</strong>
                                    <span>Name Product</span>
                                </div>
                            </div>

                            <!-- === right-column === -->

                            <div class="col-sm-6">
                                <div class="info-box">
                                    <strong>Product details</strong>
                                    <div class="product-colors clearfix">

                                    </div>
                                </div>
                            </div>

                        </div><!--/row-->
                    </div> <!--/product-info-wrapper-->
                </div><!--/popup-content-->
                <!-- === product-popup-footer === -->
            </div> <!--/product-->
        </div> <!--popup-main-->

</div>
@endsection