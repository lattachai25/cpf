
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
            <h2>Create  About</h2>
            <a href="../show"><button type="submit" class="btn btn-primary" style="float:right;">BACK</button></a>
            <br><br>
            <form action="{{ route('About.update', $about->id) }}"  method="POST" enctype="multipart/form-data">
            @method('PATCH')
            @csrf

            <div class="card">
        <div class="card-header">
            <h3>SEO</h3>
                </div>
                  <div class="card-body">
                    
                    
                    <div class="form-group">
                      <label for="exampleFormControlInput1"><b>Title Bar</b></label>
                      <input type="text" class="form-control" name="title" value="{{ $about->title }}">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1"><b>Keywords</b></label>
                      <input type="text" class="form-control" name="keywords" value="{{ $about->keywords }}">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1"><b>Description</b></label>
                      <input type="text" class="form-control" name="description" value="{{ $about->description }}">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1"><b>Google Code</b></label>
                      <input type="text" class="form-control" name="google_code" value="{{ $about->google_code }}">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1"><b>Facebook Code</b></label>
                      <input type="text" class="form-control" name="facrbook_code" value="{{ $about->facrbook_code }}">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1"><b>Orteh Code</b></label>
                      <input type="text" class="form-control" name="orteh_code" value="{{ $about->orteh_code }}">
                    </div>
          
                  </div>
        </div>        
            <br><br>
       
            



            <h2><p class="text-success">Content TH / EN </p></h2> 
            
            <div class="form-group">
              <label for="exampleFormControlTextarea1"><b>OUR STORY EN</b></label>
              <textarea class="form-control" name="story_en">{{ $about->story_en }}</textarea>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1"><b>OUR STORY TH</b></label>
              <textarea class="form-control" name="story_th">{{ $about->story_th }}</textarea>
            </div>
            <br>
            <div class="form-group">
              <label for="exampleFormControlTextarea1"><b>A bit of history EN</b></label>
              <textarea class="form-control" name="history_en">{{ $about->history_en }}</textarea>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1"><b>A bit of history TH</b></label>
              <textarea class="form-control" name="history_th">{{ $about->history_th }}</textarea>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1"><b>Name EN </b></label>
              <input type="test" class="form-control" name="name_en" value="{{ $about->name_en }}">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1"><b>Name TH </b></label>
              <input type="test" class="form-control" name="name_th" value="{{ $about->name_th }}">
            </div>

            <div class="form-group">
              <label for="exampleFormControlInput1"><b>Protion EN</b></label>
              <input type="test" class="form-control" name="protion_en" value="{{ $about->protion_en }}">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1"><b>Protion TH</b></label>
              <input type="test" class="form-control" name="protion_th" value="{{ $about->protion_th }}">
            </div>

            <div class="form-group">
              <label for="exampleFormControlTextarea1"><b>Content EN</b></label>
              <textarea class="form-control" name="content_en">{{ $about->content_en }}</textarea>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1"><b>Content TH</b></label>
              <textarea class="form-control" name="content_th">{{ $about->content_th }}</textarea>
            </div>
            <div class="form-group">
              <input type="text" hidden name="status" value="1">
            </div>





            <div class="form-group">
              <label for="exampleFormControlFile1"> <br> File input MaxSize 400px - 600px / Size less than 1M </b></label>
             <h3>{{ $about->images }}</h3> 
              <input type="file" name="images" class="form-control-file" value="{{ $about->images }}">
            </div>
<div class="cal-12">
  <center>
  <button type="submit" class="btn btn-primary">Update</button> 
  </center>
</div>
            
            </form>     
            
            <br><br><br><br><br>
        </div>
<div class="col-1"></div>
</div>
</div>

@endsection
