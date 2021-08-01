
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
            <form action="{{ route('Contact.update', $contact->id) }}"  method="POST" enctype="multipart/form-data">
            @method('PATCH')
            @csrf

            <div class="card">
        <div class="card-header">
            <h3>SEO</h3>
                </div>
                  <div class="card-body">
                    
                    
                    <div class="form-group">
                      <label for="exampleFormControlInput1"><b>Title Bar</b></label>
                      <input type="text" class="form-control" name="title"  value="{{ $contact->title }}">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1"><b>Keywords</b></label>
                      <input type="text" class="form-control" name="keywords"  value="{{ $contact->keywords }}">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1"><b>Description</b></label>
                      <input type="text" class="form-control" name="description"  value="{{ $contact->description }}">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1"><b>Google Code</b></label>
                      <input type="text" class="form-control" name="google_code"  value="{{ $contact->google_code }}">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1"><b>Facebook Code</b></label>
                      <input type="text" class="form-control" name="facrbook_code"  value="{{ $contact->facrbook_code }}">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1"><b>Orteh Code</b></label>
                      <input type="text" class="form-control" name="orteh_code" value="{{ $contact->orteh_code }}">
                    </div>
          
                  </div>
        </div>        
            <br><br>
       
            



            <h2><p class="text-success">Content TH / EN </p></h2> 
            
            <div class="form-group">
              <label for="exampleFormControlTextarea1"><b>Text Title EN</b></label>
              <input type="test" class="form-control" name="text_title_en" value="{{ $contact->text_title_en }}">
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1"><b>Text Title TH</b></label>
              <input type="test" class="form-control" name="text_title_th" value="{{ $contact->text_title_th }}">
            </div>
            <br>
            <div class="form-group">
              <label for="exampleFormControlTextarea1"><b>Address EN</b></label>
              <input type="test" class="form-control" name="address_en" value="{{ $contact->address_en }}">
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1"><b>Address TH</b></label>
              <input type="test" class="form-control" name="address_th" value="{{ $contact->address_th }}">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1"><b>Faceboot Link EN </b></label>
              <input type="test" class="form-control" name="faceboot_link_en" value="{{ $contact->faceboot_link_en }}">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1"><b>Faceboot Link TH </b></label>
              <input type="test" class="form-control" name="faceboot_link_th" value="{{ $contact->faceboot_link_th }}">
            </div>

            <div class="form-group">
              <label for="exampleFormControlInput1"><b>Line Link EN</b></label>
              <input type="test" class="form-control" name="line_link_en" value="{{ $contact->line_link_en }}">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1"><b>Line Link TH</b></label>
              <input type="test" class="form-control" name="line_link_th" value="{{ $contact->line_link_th }}">
            </div>

            <div class="form-group">
              <label for="exampleFormControlTextarea1"><b>tel EN</b></label>
              <input type="test" class="form-control" name="tel_link_en" value="{{ $contact->tel_link_en }}">
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1"><b>tel TH</b></label>
              <input type="test" class="form-control" name="tel_link_th" value="{{ $contact->tel_link_th }}">
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1"><b>Mobile Link EN</b></label>
              <input type="test" class="form-control" name="mobile_link_en" value="{{ $contact->mobile_link_en }}">
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1"><b>Mobile Link TH</b></label>
              <input type="test" class="form-control" name="mobile_link_th" value="{{ $contact->mobile_link_th }}">
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1"><b>Email 1 EN</b></label>
              <input type="test" class="form-control" name="Email_link1_en" value="{{ $contact->Email_link1_en }}">
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1"><b>Email 1 TH</b></label>
              <input type="test" class="form-control" name="Email_link1_th" value="{{ $contact->Email_link1_th }}">
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1"><b>Email 2 EN</b></label>
              <input type="test" class="form-control" name="Email_link2_en" value="{{ $contact->Email_link2_en }}">
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1"><b>Email 2 TH</b></label>
              <input type="test" class="form-control" name="Email_link2_th" value="{{ $contact->Email_link2_th }}">
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1"><b>Google Map</b></label>
              <textarea class="form-control" name="link_map" value="">{{ $contact->link_map }}</textarea>
            </div>

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
