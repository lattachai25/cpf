@extends('.user.userlayout.adminpage')
@section('title', 'ABOUT')
@section('keywords', 'CPFAUSTRALIA')
@section('description', 'ABOUT description CPFAUSTRALIA')
@section('google', 'google')
@section('facebook', 'Facebook')
@section('content')




<style>
    .history .history-desc {
    background-color: #313133fc !important;
    color: #fff !important;
    padding-left: 120px;
}
.history .history-title:before {
    background-color: #060606 !important;
}
</style>
<div class="wrapper">

        <!-- ========================  Main header ======================== -->
        <section class="banner" style="background-image:url(assets/images/gallery-2.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-1 col-md-10 text-center">
                        <h2 class="title">Our story</h2>
                        <p>
                        Leading Agro-Industrial and Food Conglomerate
CPF operates integrated agro-industrial and food business, including livestock and aquaculture such as swine, broiler, layer, duck, shrimp and fish. The businesses are categorized into 3 categories, namely Feed, Farm and Food. The Company also operates retail and foods outlets
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========================  History ======================== -->

        <section class="history">
            <div class="container">

                <!-- === History header === -->

                <header>
                    <div class="row">
                        <div class="col-md-offset-2 col-md-8 text-center">
                            <h1 class="h2 title">A bit of history</h1>
                            <div class="text">
                                <p>Our architects and designers constantly and carefully monitor the environment, they accept and develop changes, research fashion and architectural, as well as sociological, changes and transform them into unique design.</p>
                            </div>
                        </div>
                    </div>
                </header>

                <!-- === row item === -->
                @for($i=1; $i<=2; $i++)
                <div class="row row-block">
                    <div class="col-md-5 history-image" style="background-image:url({{ asset('assets/about/0'.$i.'.jpg') }})">
                        <div class="history-title">
                            <h2 class="title">CEO</h2>
                            <p style="font-size:13px !important;">CPF AUSTRALIA</p>
                        </div>
                    </div>
                    <div class="col-md-7 history-desc">
                        <div class="h5 title">MR.CPF AUSTRALIA</div>
                        <p>
                        Charoen Pokphand Foods Public Company Limited (the "Company") believes that the
conduct of businesses in a fair, honest, and transparent manner, with responsibility
towards all groups of stakeholders, will essentially support the sustainable growth of its
businesses. The Company has signed the Declaration of Intent to join Thailand's PrivateSector Collective Action Coalition Against Corruption, in order to express its
commitment to prevent and counter all forms of corruption, and to cooperate with the
public sector, civil society, mass media, and international organizations in establishing
clean business practice standards.
                        </p>
                    </div>
                </div>
                @endfor
                <!-- === row item === -->

            </div>
        </section>
        <!-- ======================== Quotes ======================== -->

        <!-- <section class="quotes quotes-slider" style="background-color:#403f3f63 !important;">
            <div class="container">
                <div class="row">

                    <div class="quote-carousel">

                        <div class="quote">
                            <div class="image">
                                <img src="{{ asset('assets/about/01.jpg') }}" alt="" />
                            </div>
                            <div class="text">
                                <h4>นาย สุภกิต เจียรวนนท์</h4>
                                <p>ประธานกรรมการบริษัท <br /></p>
                            </div>
                        </div>

                        <div class="quote">
                            <div class="image">
                                <img src="{{ asset('assets/about/02.jpg') }}" alt="" />
                            </div>
                            <div class="text">
                                <h4>นาย อดิเรก ศรีประทักษ์</h4>
                                <p>ประธานคณะกรรมการบริหาร<br />รองประธานกรรมการบริษัท</p>
                            </div>
                        </div>


                        <div class="quote">
                            <div class="image">
                                <img src="{{ asset('assets/about/03.jpg') }}" alt="" />
                            </div>
                            <div class="text">
                                <h4>นาย ประสิทธิ์ บุญดวงประเสริฐ</h4>
                                <p>ประธานคณะผู้บริหาร  <br />กรรมการ</p>
                            </div>
                        </div>


                        <div class="quote">
                            <div class="image">
                                <img src="{{ asset('assets/about/01.jpg') }}" alt="" />
                            </div>
                            <div class="text">
                                <h4>นาย พงษ์เทพ เจียรวนนท์</h4>
                                <p>รองประธานกรรมการบริษัท <br /></p>
                            </div>
                        </div>
                    </div> 
                </div> 
            </div> 
        </section> -->





</div>
@endsection