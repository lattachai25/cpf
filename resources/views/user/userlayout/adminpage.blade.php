<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon.ico">
    <title>CPFAUSTRALIA - @yield('title')</title>

    <!--CSS styles-->
    <link rel="stylesheet" media="all" href="{{ URL::asset('mainpage/css/bootstrap.css') }}" />
    <link rel="stylesheet" media="all" href="{{ URL::asset('mainpage/css/animate.css') }}" />
    <link rel="stylesheet" media="all" href="{{ URL::asset('mainpage/css/font-awesome.css') }}" />
    <link rel="stylesheet" media="all" href="{{ URL::asset('mainpage/css/furniture-icons.css') }}" />
    <link rel="stylesheet" media="all" href="{{ URL::asset('mainpage/css/linear-icons.css') }}" />
    <link rel="stylesheet" media="all" href="{{ URL::asset('mainpage/css/magnific-popup.css') }}" />
    <link rel="stylesheet" media="all" href="{{ URL::asset('mainpage/css/owl.carousel.css') }}" />
    <link rel="stylesheet" media="all" href="{{ URL::asset('mainpage/css/ion-range-slider.css') }}" />
    <link rel="stylesheet" media="all" href="{{ URL::asset('mainpage/css/theme.css') }}" />

    <!--Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600&amp;subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('font3/flaticon.css') }}">
</head>
<style>

    nav .navigation-main .floating-menu > ul > li > a.current:after, nav .navigation-main .floating-menu > ul > li > a:after {
    background-color: #fff !important;
    }
    nav .navigation-main .floating-menu > ul > li .navbar-dropdown .navbar-box .box-2 {
    width: 60%;
    background-color: #3c3b3a !important;
}

nav .navigation-top > ul > li > a:hover {
    color: #fff !important;
}

nav .navigation .nav-settings .nav-settings-list {
    background-color: #3c3b3a;
}
.owl-icons-wrapper .owl-icons figure {
    font-size: 60px !important;
}
.products {
    background-color: #000000 !important;
}

.stretcher-wrapper {
    background-color: #000 !important;
}
.stretcher-wrapper .stretcher .stretcher-item.more .more-icon {
    color: #000 !important;
}
.stretcher-wrapper .stretcher .stretcher-item.more {
    background-color: #fff !important;
}
.stretcher-wrapper .stretcher .stretcher-item figure {
    background-color: rgb(0 0 0 / 64%) !important;
}
.btn.btn-main {
    background-color: #000 !important;
    text-shadow: 1px 1px 1px rgb(0 0 0 / 50%);
}

footer h1, footer h2, footer h3, footer h4, footer h5, footer h6, footer .h1, footer .h2, footer .h3, footer .h4, footer .h5, footer .h6 {
    color: #fff;
}
footer a:hover {
    color: #fff;
}
.scroll-top {
    background-color: #797978 !important;
}
.products .box-filters figure.active {
    background-color: #3a3d45;
    color: #fff !important;
}
.cards figure figcaption:before {
    background-color: #4e4e4d !important;
}

.products .box-filters figure {
    width: 120px !important;
    height: 120px !important;
}
</style>

<body>
    @include('.user.userlayout.menu')
    @yield('content')
    @include('.user.userlayout.footer')    
</body>

    <!--JS files-->
    <script src="{{ asset('mainpage/js/jquery.min.js') }}"></script>
    <script src="{{ asset('mainpage/js/jquery.bootstrap.js') }}"></script>
    <script src="{{ asset('mainpage/js/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('mainpage/js/jquery.owl.carousel.js') }}"></script>
    <script src="{{ asset('mainpage/js/jquery.ion.rangeSlider.js') }}"></script>
    <script src="{{ asset('mainpage/js/jquery.isotope.pkgd.js') }}"></script>
    <script src="{{ asset('mainpage/js/main.js') }}"></script>
</html>






