<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="CPFAUSTRALIA - @yield('keywords')">
    <meta name="description" content="@yield('description')">
    <meta name="google" content="@yield('google')">
    <meta name="Facebook" content="@yield('facebook')">
    <meta name="robots" content="noindex, nofollow">
    <meta name="author" content="Nut Nextcis">
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

@media (max-width: 991px) {

    nav .container {
        padding: 0;
        margin: 0;
        width: 100% !important;
    }

    nav .navigation-main .open-menu {
        position: absolute;
        top: 0px;
        right: 0;
        width: 100px !important;
        height: 100%;
        color: #fff;
        text-align: center;
        border-left: 1px solid #333;
    }
    nav .navigation .logo img {
        width: 55px !important;
    }
    nav .navigation-main .floating-menu > ul > li > a {
        color: white;
        padding: 10px 10px !important;
    }
    nav.navbar-fixed {
        position: fixed;
        min-height: 100px !important;
        background-color: #000000ab;
    }
    nav.navbar-sticked {
        min-height: 75px !important;
        background-color: #232529 !important;
    }
}






.container {
    width: 85% !important;
}
nav .navigation-main .floating-menu > ul > li > a {
    color: white;
    padding: 45px 20px;
}
nav .navigation .logo img {
    width: 80px;
}
nav.navbar-fixed {
    position: fixed;
    min-height: 150px;
    background-color: #000000ab;
}
nav.navbar-sticked {
    min-height: 110px;
    background-color: #232529 !important;
}
nav .navigation > ul {
    width: 80% !important;
    float: right;
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
}
.blog.blog-block article .show-more {
    bottom: 2px !important;
}
nav .navigation-main .floating-menu > ul > li > a.current:after, nav .navigation-main .floating-menu > ul > li > a:after {
    background-color: #fff !important;
    }
    nav .navigation-main .floating-menu > ul > li .navbar-dropdown .navbar-box .box-1 {
    background-color: rgba(0, 0, 0, 0.9);
    width: 60% !important;
}
nav .navigation-main .floating-menu > ul > li .navbar-dropdown .navbar-box .box-2 {
    width: 100% !important;
    background-color: #3c3b3a !important;
}

nav .navigation-top > ul > li > a {
    color: #91e608 !important;
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
.owl-icons-wrapper.owl-icons-frontpage {
    margin-top: -143px;
    background: #05050578;
}
.owl-icons-wrapper.owl-icons-frontpage a, .owl-icons-wrapper.owl-icons-frontpage a:focus, .owl-icons-wrapper.owl-icons-frontpage a:active, .owl-icons-wrapper.owl-icons-frontpage a{
    color:#000;
}
.owl-icons-wrapper.owl-icons-frontpage a, .owl-icons-wrapper.owl-icons-frontpage a:focus, .owl-icons-wrapper.owl-icons-frontpage a:active, .owl-icons-wrapper.owl-icons-frontpage a:hover {
    color:#b5b5ba;
}
.products article .image {
    border-radius: 10px;
}

.products article {
    margin-bottom: 30px;
}
.products article {
    background-color: #0000 !important
}

.btn.btn-clean {
    background-color: #0000007a !important;
    border-color: #f8f5f5 !important;
    color: white !important;
}
.btn.btn-clean:hover {
    background-color: #100f0f !important;
    border-color: white !important;
    color: #f3f8f3 !important;
}

.figure-grid .image a img:hover {
    -moz-transform: scale(1.2);
    -ms-transform: scale(1.2);
    -o-transform: scale(1.2);
    -webkit-transform: scale(1.2);
    transform: scale(1.2);
    -moz-transition: all 0.8s;
    -o-transition: all 0.8s;
    -webkit-transition: all 0.8s;
    transition: all 0.8s;
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






