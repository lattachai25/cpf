@extends('.user.userlayout.adminpage')
@section('title', 'Contact US')
@section('keywords', 'CPFAUSTRALIA')
@section('description', 'description CPFAUSTRALIA')
@section('google', 'google')
@section('facebook', 'Facebook')
@section('content')




<style>
    .contact #map {
    width: 100%;
    height: 200px !important;
    background-color:#000 !important;
}
</style>

<div class="wrapper">

<section class="contact">

<!-- === Goolge map === -->

<div id="map" >
</div>

<div class="container">

    <div class="row">

        <div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">

            <div class="contact-block">

                <div class="contact-info">
                    <div class="row">
                        <div class="col-sm-4">
                            <figure class="text-center">
                                <span class="icon icon-map-marker"></span>
                                <figcaption>
                                    <strong>MAP CPF AUSTRALIA </strong>
                                    <span>13 ซอยอารีย์ สัมพันธ์ 2 ซอยพหลโยธิน 5 (ราชครู) ถนนพหลโยธิน แขวงพญาไท เขตพญาไท กรุงเทพมหานคร 10400</span>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-sm-4">
                            <figure class="text-center">
                                <span class="icon icon-phone"></span>
                                <figcaption>
                                    <strong>Call us</strong>
                                    <span>
                                        <strong>Phone</strong> 02 - 123 - 45678<br />
                                        <strong>Mobile</strong> 02 - 123 - 45678
                                    </span>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-sm-4">
                            <figure class="text-center">
                                <span class="icon icon-clock"></span>
                                <figcaption>
                                    <strong>Working hours</strong>
                                    <span>
                                        <strong>Mon - Fri</strong> - Sat: 10 am - 6 pm <br />
                                        
                                    </span>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>

                <div class="banner">
                    <div class="row">
                        <div class="col-md-offset-1 col-md-10 text-center">
                            <h2 class="title">MAP CPF AUSTRALIA</h2>
                            <p>
                                Thanks for your interest in Product CPF AUSTRALIA we'll get back with you very soon.
                            </p>

                            <div class="contact-form-wrapper">

                                <a class="btn btn-clean open-form" data-text-open="Click Open Map" data-text-close="Close MAP">Click Open Map</a>

                                <div class="contact-form clearfix">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d551.7295618675165!2d100.53282601891937!3d13.727481637763042!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29f2c645ba09b%3A0xb9f3861b315a58ca!2sCPF%20Thailand!5e1!3m2!1sth!2sth!4v1627117557127!5m2!1sth!2sth" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="contact-info">
                    <div class="row">

                        <div class="col-xs-6 col-sm-4">
                            <figure>
                                <figcaption>
                                    <strong>Socal</strong>
                                    <span>
                                        <strong>Facebook</strong> <a href="https://">facebook.com</a> <br />
                                        <strong>Line</strong>ID : <a href="http://">CPFAUSTRALIA</a>
                                    </span>
                                </figcaption>
                            </figure>
                        </div>

                        <div class="col-xs-6 col-sm-4">
                            <figure>
                                <figcaption>
                                    <strong>PHONE</strong>
                                    <span>
                                        <strong>P</strong> 02 - 123 - 45678 <br />
                                        <strong>P</strong> 08 - 123 - 45678
                                    </span>
                                </figcaption>
                            </figure>
                        </div>

                        <div class="col-xs-6 col-sm-4">
                            <figure>
                                <figcaption>
                                    <strong>E-Mail</strong>
                                    <span>
                                        <strong>T</strong> +1 222 852 9632 <br />
                                        <strong>F</strong> +1 357 333 5555
                                    </span>
                                </figcaption>
                            </figure>
                        </div>
                       
                    </div>
                </div>
            </div>


        </div><!--col-sm-8-->
    </div> <!--/row-->
</div><!--/container-->
</section>

</div>
@endsection