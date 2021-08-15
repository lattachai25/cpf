@extends('.user.userlayout.adminpage')
    @foreach ($shells as $shellss)
        @section('title', $shellss->title )
        @section('keywords', $shellss->keywords )
        @section('description', $shellss->description )
        @section('google', $shellss->google_code )
        @section('facebook', $shellss->facrbook_code )
    @endforeach
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

@foreach ($shells as $shellss)
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

                                <h1 class="title" data-title="Dairy">{{  $shellss->name_categories }} <small>BROWNES DAIRY PRODUCT</small></h1>

                                <div class="clearfix">

                                    <!-- === price wrapper === -->

                                    <div class="price">
                                        <span class="h3">
                                        {{  $shellss->name_brand_en }} 
                                        </span>
                                    </div>
                                    <hr />

                                    <!-- === info-box === -->

                                    <div class="info-box">
                                        <span><strong>Brand name</strong></span>
                                        <span>{{  $shellss->name_brand_en }} </span>
                                    </div>

                                    <!-- === info-box === -->

                                    <div class="info-box">
                                        <span><strong>Type Product</strong></span>
                                        <span> {{  $shellss->name_categories }} </span>
                                    </div>

                                    <!-- === info-box === -->

                                    <hr />
                                                            <!-- === product-designer === -->

                                    <div class="info-box">
                                        <div class="image">
                                        <img src="{{ asset('files_upload/Brand/'.$shellss->images.'') }}" alt="Alternate Text" width="80%" />
                                        </div>
                                    </div>
                                </div> <!--/clearfix-->
                            </div> <!--/product-info-wrapper-->
                        </div> <!--/col-md-4-->
                        <!-- === product item gallery === -->

                        <div class="col-md-8 col-sm-12 product-flex-gallery">
                            <!-- === product gallery === -->

                            <div class="owl-product-gallery open-popup-gallery">
                            @php
                            $meat = explode('|', $shellss->images_product1);
                            @endphp
                            @foreach($meat as $meats)
                            <a href="{{ URL::to($meats) }}"><img src="{{ URL::to($meats) }}" alt="" height="250px" /></a>  
                            @endforeach
                            </div>
                        </div>
                        <a href="/Shells" class="btn btn-clean" style="margin-top:80px; width:150px; float:right;"> Back </a>

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
                                             
                                            

                                                <div class="col-md-4 col-xs-4">
                                                    <article>
                                                        <div class="figure-grid">
                                                            <div class="image">
                                                                <a href="#productid1" class="mfp-open">
                                                                    <img src="../{{ $shellss->images_show }}" alt="" width="250px" height="250px" />
                                                                </a>
                                                            </div>
                                                            <div class="text" style="background: #000000bf; color:#fff;">
                                                                <h4 class="title" style="color:#fff !important;">WOODWARD</h4>
                                                                <sup>Designer collection</sup>
                                                                <span class="description clearfix">Gubergren amet dolor ea diam takimata consetetur facilisis blandit et aliquyam lorem ea duo labore diam sit et consetetur nulla</span>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                              


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
                                                <img class="full-image" src="{{ asset('files_upload/Brand/'.$shellss->images.'') }}"  width="250" />
                                                   
                                                </p>
                                                         
                                                <div class="icon_right" style="float: right;">
                                                <b>Read Attachment</b> <i class="icon icon-arrow-right"></i> <a href="../{{ $shellss->attachment }}" target="_blank"  class="btn btn-main btn-xs" ><i class="icon icon-layers"></i></a>
                                                </div>
                                                <br>
                                                <hr />

                                            </div>
                                            <div class="col-md-8">
                                                <h3>{{  $shellss->text_title_en }}</h3>
                                                <p>
                                                {{  $shellss->detel_product_en }}
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
  
                    <img src="../{{  $shellss->images_show }}" alt="" width="640" />
      
                </div>

                <!-- === product-popup-info === -->

                <div class="popup-content">
                    <div class="product-info-wrapper">
                        <div class="row">

                            <!-- === left-column === -->

                            <div class="col-sm-6">
                                <div class="info-box">
                                    <strong>Name</strong>
                                    <span>{{ $shellss->name_product_en }}</span>
                                </div>
                            </div>

                            <!-- === right-column === -->

                            <div class="col-sm-6">
                                <div class="info-box">
                                    <strong>Product details</strong>
                                    <div class="product-colors clearfix">
                                    {{ $shellss->detel_product_en }}
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
@endforeach

@endsection