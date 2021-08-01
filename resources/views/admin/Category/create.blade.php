
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
            <h2>Create Category</h2>
            <a href="show"><button type="submit" class="btn btn-primary" style="float:right;">BACK</button></a>
            <br><br>
            <form role="form" action="{{ route('Category.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="card">
        <div class="card-header">
            <h3>CARTE Category</h3>
                </div>
                  <div class="card-body">
                    
                    
                    <div class="form-group">
                      <label for="exampleFormControlInput1"><b>CATEGORY</b></label>
                      <input type="text" class="form-control" name="name_categories">
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
