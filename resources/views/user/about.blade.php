@extends('.user.userlayout.adminpage')
@section('title', "$title")
@section('keywords', "$keywords")
@section('description', "$description")
@section('google', "$google_code")
@section('facebook', "$facrbook_code")
@section('Orter_code', "$orteh_code")
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
                        @foreach($about as $abouts)
                        {{ $abouts->story_en }} 
                        @endforeach
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
                            @foreach($about as $abouts)
                            {{ $abouts->history_en }}
                            @endforeach
                            </div>
                        </div>
                    </div>
                </header>
                    <!-- === row item === -->
                    @foreach($about as $abouts)
                    <div class="row row-block">
                        <div class="col-md-5 history-image" style="background-image:url({{ asset('files_upload/About/'.$abouts->images.'') }})">
                            <div class="history-title">
                                <h2 class="title">{{ $abouts->protion_en }}</h2>
                                <p style="font-size:13px !important;">CPF AUSTRALIA</p>
                            </div>
                        </div>
                        <div class="col-md-7 history-desc">
                            <div class="h5 title">{{ $abouts->name_en }}</div>
                            {{ $abouts->content_en }}
                        </div>
                    </div>
                    @endforeach
                    <!-- === row item === -->
            </div>
        </section>
  
</div>
@endsection