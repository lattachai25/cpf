@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
  <div class="card-header">
  วาระการประชุม
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('seriesmeting.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">วาระใหญ่ :</label>
              <input type="text" class="form-control" name="series_name"/>
          </div>
    <center>
          <button type="submit" class="btn btn-warning">เพิ่ม</button>
          <button type="submit" class="btn btn-danger">ลบข้อมูล</button>
    </center>
      </form>
  </div>
</div>
</div>
</div>

@endsection
