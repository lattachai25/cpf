
@extends('.admin.userlayout.adminpage')
@section('content')
<div class="col-12">
<div class="row">
<div class="col-3">
  @if(session()->get('success'))
      {{ session()->get('success') }}
  @endif
</div>
        <div class="col-8">
          <br><br><br>
            <h2>Create  About</h2>
            <a href="show"><button type="submit" class="btn btn-primary" style="float:right;">BACK</button></a>
            <br><br>
            <form method="post" action="{{ route('Brand.store') }}">
            @csrf
            <div class="form-group">
              <label for="exampleFormControlTextarea1">OUR STORY</label>
              <textarea class="ckeditor form-control" name="wysiwyg-editor"></textarea>
            </div>

            <div class="form-group">
              <label for="exampleFormControlTextarea1">A bit of history</label>
              <textarea class="ckeditor form-control" name="wysiwyg-editor"></textarea>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Name</label>
              <input type="email" class="form-control">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Protion</label>
              <input type="email" class="form-control">
            </div>
            <div class="form-group">
              <label for="exampleFormControlFile1">Example file input</label>
              <input type="file" class="form-control-file">
            </div>

            <button type="submit" class="btn btn-success">SAVE</button>
            <button type="submit" class="btn btn-danger">DELECT</button>
            </form>                
        </div>
<div class="col-1"></div>
</div>
</div>

@endsection
