
@extends('.admin.userlayout.adminpage')
@section('content')
<div class="col-12">
<div class="row">
<div class="col-2">
  @if(session()->get('success'))
      {{ session()->get('success') }}
  @endif
</div>
        <div class="col-9">
          <br><br><br>
            <h2>Create Contact Us</h2>
            <a href="show"><button type="submit" class="btn btn-primary" style="float:right;">BACK</button></a>
            <br><br>
            <form role="form" action="{{ route('Contact.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="card">
        <div class="card-header">
            <h3>SEO</h3>
                </div>
                  <div class="card-body">

                    <div class="form-group">
                      <label for="exampleFormControlInput1"><b>Title Bar</b></label>
                      <input type="text" class="form-control" name="title">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1"><b>Keywords</b></label>
                      <input type="text" class="form-control" name="keywords">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1"><b>Description</b></label>
                      <input type="text" class="form-control" name="description">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1"><b>Google Code</b></label>
                      <input type="text" class="form-control" name="google_code">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1"><b>Facebook Code</b></label>
                      <input type="text" class="form-control" name="facrbook_code">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1"><b>Orteh Code</b></label>
                      <input type="text" class="form-control" name="orteh_code">
                    </div>
          
                  </div>
        </div>        
            <br><br>
       
            



            <h2><p class="text-success">Content TH / EN </p></h2> 
            
            <div class="form-group">
              <label for="exampleFormControlTextarea1"><b>Text Title EN</b></label>
              <textarea class="form-control" name="text_title_en"></textarea>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1"><b>Text Title TH</b></label>
              <textarea class="form-control" name="text_title_th"></textarea>
            </div>
            <br>
            <div class="form-group">
              <label for="exampleFormControlTextarea1"><b>Address EN</b></label>
              <textarea class="form-control" name="address_en"></textarea>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1"><b>Address TH</b></label>
              <textarea class="form-control" name="address_th"></textarea>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1"><b>Faceboot Link EN </b></label>
              <input type="test" class="form-control" name="faceboot_link_en">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1"><b>Faceboot Link TH </b></label>
              <input type="test" class="form-control" name="faceboot_link_th">
            </div>

            <div class="form-group">
              <label for="exampleFormControlInput1"><b>Line Link EN</b></label>
              <input type="test" class="form-control" name="line_link_en">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1"><b>Line Link TH</b></label>
              <input type="test" class="form-control" name="line_link_th">
            </div>

            <div class="form-group">
              <label for="exampleFormControlTextarea1"><b>tel EN</b></label>
              <textarea class="form-control" name="tel_link_en"></textarea>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1"><b>tel TH</b></label>
              <textarea class="form-control" name="tel_link_th"></textarea>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1"><b>Mobile Link EN</b></label>
              <textarea class="form-control" name="mobile_link_en"></textarea>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1"><b>Mobile Link TH</b></label>
              <textarea class="form-control" name="mobile_link_th"></textarea>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1"><b>Email 1 EN</b></label>
              <textarea class="form-control" name="Email_link1_en"></textarea>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1"><b>Email 1 TH</b></label>
              <textarea class="form-control" name="Email_link1_th"></textarea>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1"><b>Email 2 EN</b></label>
              <textarea class="form-control" name="Email_link2_en"></textarea>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1"><b>Email 2 TH</b></label>
              <textarea class="form-control" name="Email_link2_th"></textarea>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1"><b>Google Map</b></label>
              <textarea class="form-control" name="link_map"></textarea>
            </div>

              <div class="cal-12">
                <center>
                          <button type="submit" class="btn btn-success">SAVE</button>
                          <button type="reset" class="btn btn-primary">CENCEL</button>    
                </center>
              </div>
            
            </form>     
            
            <br><br><br><br><br>
        </div>
<div class="col-1"></div>
</div>
</div>




  <script type="text/javascript">
    CKEDITOR.replace('story_en', {
        filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
</script>

@endsection
