
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
            <h2>Edit  Shells</h2>
            <a href="../show"><button type="submit" class="btn btn-primary" style="float:right;">BACK</button></a>
            <br><br>
            <form action="{{ route('Shells.update', $shells->id) }}"  method="POST" enctype="multipart/form-data">
            @method('PATCH')
            @csrf

            <div class="card">
                <div class="card-header">
                    <h3>SEO</h3>
                        </div>
                        <div class="card-body">

                            <div class="form-group">
                            <label for="exampleFormControlInput1"><b>Title BAR</b></label>
                            <input type="text" class="form-control" name="title" value="{{ $shells->title }}">
                            </div>
                            <div class="form-group">
                            <label for="exampleFormControlTextarea1"><b>Keywords</b></label>
                            <input type="text" class="form-control" name="keywords" value="{{ $shells->keywords }}">
                            </div>
                            <div class="form-group">
                            <label for="exampleFormControlTextarea1"><b>Description</b></label>
                            <input type="text" class="form-control" name="description" value="{{ $shells->description }}">
                            </div>
                            <div class="form-group">
                            <label for="exampleFormControlTextarea1"><b>Google Code</b></label>
                            <input type="text" class="form-control" name="google_code"  value="{{ $shells->google_code }}">
                            </div>
                            <div class="form-group">
                            <label for="exampleFormControlTextarea1"><b>Fackbook Code</b></label>
                            <input type="text" class="form-control" name="facrbook_code"  value="{{ $shells->facrbook_code }}">
                            </div>
                            <div class="form-group">
                            <label for="exampleFormControlTextarea1"><b>Orter Code</b></label>
                            <input type="text" class="form-control" name="orteh_code" value="{{ $shells->orteh_code }}">
                            </div>
                
                        </div>
                </div>        
                    <br><br>



            <h2><p class="text-success">CONTENT TH / EN </p></h2> 
            
            <div class="form-group">
              <label for="exampleFormControlTextarea1"><b>Brand </b></label>
              <select class="form-control" id="exampleFormControlSelect1"  name="brade" style="height:40px;">
               @foreach ($brand as $brands)
                <option value="{{ $brands->id }}"> {{ $brands->name_brand_en }} </option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1"><b>Category</b></label>
              <select class="form-control" id="exampleFormControlSelect1"  name="category" style="height:40px;">
               @foreach ($category as $categorys)
                <option value="{{ $categorys->id }}"> {{ $categorys->name_categories }} </option>
                @endforeach
              </select>
            </div>
            <br>
            <div class="form-group">
              <label for="exampleFormControlTextarea1"><b>Sub Category</b></label>
              <select class="form-control" id="exampleFormControlSelect1"  name="sub_category" style="height:40px;">
               @foreach ($subcategory as $subcategorys)
                <option value="{{ $subcategorys->id}}"> {{ $subcategorys->name_sub_categories }} </option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1"><b>Title</b></label>
              <input type="test" class="form-control" name="text_title_en" value="{{ $shells->text_title_en }}">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1"><b>หัวข้อ</b></label>
              <input type="test" class="form-control" name="text_title_th" value="{{ $shells->text_title_th }}">
            </div>

            <div class="form-group">
              <label for="exampleFormControlInput1"><b>Name Product</b></label>
              <input type="test" class="form-control" name="name_product_en" value="{{ $shells->name_product_en }}">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1"><b>ชื่อสินค้า</b></label>
              <input type="test" class="form-control" name="name_product_th" value="{{ $shells->name_product_th }}">
            </div>

            <div class="form-group">
              <label for="exampleFormControlTextarea1"><b>Detel Product</b></label>
              <textarea class="form-control" name="detel_product_en">{{ $shells->detel_product_en }}</textarea>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1"><b>รายละเอียดสินค้า</b></label>
              <textarea class="form-control" name="detel_product_th">{{ $shells->detel_product_th }}</textarea>
            </div>
            <div class="form-group">
              <input type="test" hidden class="form-control" name="status" value="1">
            </div>
            <div class="card-header">
                <h3>UPLOAD IMAGE PRODUCTS</h3>
                <h6 style="color:red;">*** กรุณณาใส่รูปตามขนาที่กำหนด ถ้ารูปภาพมีขนาดใหญ่กว่าจะทำให้เปิดช้า และจะทำให้เว็บทำงานช้า ***</h6>
                <div class="card-body">

                <div class="form-group">
                    <div class="input-group control-group increment" >
                    <label for="exampleFormControlTextarea1"><b>รูปโชว์ </b> <b style="color:red;">** 400px X 600px  และขนาดน้อยกว่า 500k **</b></label>
                        <input type="file" name="images_show[]" class="form-control" multiple>
                    </div>
                    <br>  
                    <div class="form-group">
                    <div class="input-group control-group increment" >
                    <label for="exampleFormControlTextarea1"><b>รูปรายละเอียด </b> <b style="color:red;">** 400px X 600px และขนาดน้อยกว่า 500k **</b></label>
                        <input type="file" name="images_product1[]" class="form-control" multiple>
                    </div>
                    <br>
                    <div class="input-group control-group increment" >
                    <label for="exampleFormControlTextarea1"><b>เอกสารแนบ PDF</b> <b style="color:red;">** MAX SIZE 1Mb**</b></label>
                        <input type="file" name="attachment[]" class="form-control">
                    </div>

                    </div>
                </div>
            </div>    
            <br>
            <div class="cal-12">
                        <center>
                                <button type="submit" class="btn btn-success">SAVE</button>
                                <a href="/Shells/show" class="btn btn-primary">BACK</a>    
                        </center>
            </div>
            </form>      
            <br><br><br><br><br>
        </div>
<div class="col-1"></div>
</div>
</div>

@endsection
