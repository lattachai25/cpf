
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
            <h2>Create  contact</h2>
            <a href="../show"><button type="submit" class="btn btn-primary" style="float:right;">BACK</button></a>
            <br><br>
            <form action="{{ route('Brand.update', $brand->id) }}"  method="POST" enctype="multipart/form-data">
            @method('PATCH')
            @csrf

            <div class="card">
        <div class="card-header">
            <h3>EDIT BRAND List</h3>
                </div>
                  <div class="card-body">
                    
                    
                    <div class="form-group">
                      <label for="exampleFormControlInput1"><b>Title Bar</b></label>
                      <input type="text" class="form-control" name="name_brand_en"  value="{{ $brand->name_brand_en }}">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1"><b>Keywords</b></label>
                      <input type="text" class="form-control" name="name_brand_th"  value="{{ $brand->name_brand_th }}">
                    </div>

                    <div class="form-group">
                        <input type="text" hidden name="status" value="1">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlFile1"> <br> File input MaxSize 400px - 600px / Size less than 1M </b></label>
                        <br><img src="../../files_upload/Brand/{{$brand->images}}" width="100px" style="border:1px solid #000;" alt=""> <br><br>
                        <input type="file" name="images" class="form-control-file" value="{{ $brand->images }}">
                    </div>  
          
                  </div>
        </div>        
            <br><br>
       
            <div class="cal-12">
              <center>
                        <button type="submit" class="btn btn-success">SAVE</button>
                        <a href="../show"><button type="submit" class="btn btn-primary">CENCEL</button> </a>  
              </center>
            </div>
            
            </form>       
            
            <br><br><br><br><br>
        </div>
<div class="col-1"></div>
</div>
</div>

@endsection
