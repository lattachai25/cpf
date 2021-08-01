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
    height: 250px !important;
    background-color:#000 !important;
}


.white-block hr {
    border-top: 1px solid #000;
}
</style>

<div class="wrapper">

<section class="contact" style="background-color: #7e7f83 !important;">
<br><br><br><br><br>
<br><br><br>
<!-- === Goolge map === -->
@foreach($contact as $contacts)
<div class="container">

    <div class="row">

    <div class="cart-wrapper">

        <div class="note-block">

            <div class="row">
                <!-- === left content === -->
                        <div class="col-md-12">
                            <center> 
                                <div class="h3" style="color:#000;">MAP CPF AUSTRALIA</div> 
                                <p style="color:#000;">{{ $contacts->text_title_en }}</p>
                            </center>
                            <br>
                        </div>
                <div class="col-md-6">

                    <div class="white-block">

                        <div class="row">
                            <div class="col-md-12">
                            <iframe src="{{ $contacts->link_map }}" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>

                    </div> <!--/col-md-6-->

                </div>

                <!-- === right content === -->

                <div class="col-md-6">
                    <div class="white-block">

                        <div class="row">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="h4" style="color:#000;">MAP CPF AUSTRALIA</div>
                                    <span style="color:#fff;">{{ $contacts->address_en }}</span>
                                <br><br><br>  
                                </div>
                            </div>
                           
                        </div>
                       
                        <div class="row">
                            <!-- <div class="h4">SOCAL MEDIA</div> -->
                            <div class="col-md-6">
                                <div class="form-group" style="color:#fff;">
                                <strong style="color:#000;">SOCAL MEDIA</strong><br /><hr />
                                <span>
                                <table style="width:100%">
                                    <tr>
                                        <td style="color:#000;">FACEBOOK </td>
                                        <td><a href="{{ $contacts->faceboot_link_en }}" style="color:#fff;">: {{ $contacts->faceboot_link_en }}</a></td>
                                    </tr>
                                    <tr>
                                        <td style="color:#000;">LINE </td>
                                        <td><a href="{{ $contacts->line_link_en }}" style="color:#fff;">: {{ $contacts->line_link_en }}</a></td>
                                    </tr>
                                </table>
                                </span>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group" style="color:#fff;">
                                <strong style="color:#000;">PHONE</strong><br /><hr />
                                <span>
                                <table style="width:100%">
                                    <tr>
                                        <td style="color:#000;">T </td>
                                        <td>:{{ $contacts->tel_link_en }}</td>
                                    </tr>
                                    <tr>
                                        <td style="color:#000;">M </td>
                                        <td>:{{ $contacts->mobile_link_en }}</td>
                                    </tr>
                                </table>
                                </span>
                                </div>
                            </div>

                            

                            <div class="col-md-6">
                                <div class="form-group" style="color:#000;">
                                <strong>E-MAIL</strong><br /><hr />
                                <span>
                                   <a href="{{ $contacts->Email_link1_en }}" style="color:#000;">{{ $contacts->Email_link1_en }}</a> <br />
                                   <a href="{{ $contacts->Email_link2_en }}" style="color:#000;">{{ $contacts->Email_link2_en }}</a> 
                                </span>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        </div>

        <!-- ========================  Cart wrapper ======================== -->

    </div> <!--/row-->
</div><!--/container-->
@endforeach
</section>

</div>
@endsection