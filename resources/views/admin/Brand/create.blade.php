
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
            <form role="form" action="{{ route('Brand.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="card">
        <div class="card-header">
            <h3>CARTE BRAND EN / TH</h3>
                </div>
                  <div class="card-body">
                    
                    
                    <div class="form-group">
                      <label for="exampleFormControlInput1"><b>NAME BRAND EN</b></label>
                      <input type="text" class="form-control" name="name_brand_en">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1"><b>NAME BRAND TH</b></label>
                      <input type="text" class="form-control" name="name_brand_th">
                    </div>
                    <div class="form-group">
                      <input type="text" hidden name="status" value="1">
                    </div>

                    <div class="form-group">
                      <label for="exampleFormControlFile1"> <br> File input MaxSize 400px - 600px / Size less than 1M </b></label>
                      <input type="file" name="images" class="form-control-file">
                    </div>
          

                    <div class="cal-12">
                      <center>
                                <button type="submit" class="btn btn-success">SAVE</button>
                                <button type="reset" class="btn btn-primary">CENCEL</button>    
                      </center>
                    </div>

                  </div>
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
