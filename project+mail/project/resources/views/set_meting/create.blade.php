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
      <form action='{{ route('setmeting.store') }}' method='POST' enctype='multipart/form-data'>
          <div class="form-group">
              @csrf

              <div class="form-group">
                <label for="series_name">เลือก หัวข้อการประชุม :</label>
                <select class="form-control" id="series_name" name="series_name">
                    @foreach ($meetings as $data)
                    <option value="{{ $data['series_name'] }}">{{ $data['series_name'] }}</option>
                    @endforeach
                </select>
              </div>
            <br>
              <hr>
            <br>
              <div class="form-group">
                <label for="set_name">วาระการประชุมย่อย :</label>
                <input type="text" class="form-control" id="set_name" name="set_name"  placeholder="">
              </div>

            <div class="form-group">
                <label for="detel">รายละเอียดการประชุม :</label>
                <textarea class="form-control" id="detel" name="detel" rows="3"></textarea>
              </div>
              <div class="form-group">
                <label for="note">สรุปการประชุม :</label>
                <textarea class="form-control" id="note" name="note" rows="3"></textarea>
              </div>

              <div class="form-group">
                <label for="date">วัน: ตัวอย่าง 22/6/2019</label>
                <input type="date" date-format="dd:mm:yy" name="date" class="form-control" id="date">
              </div>
              <div class="form-group">
                    <label for="time">เวลา: ตัวอย่าง 13.30 AM</label>
                    <input type="time" time-format="hh:mm:ss"  name="time" class="form-control">
              </div>

              <div class="form-group">
                    <label for="file">เอกสารการประชุม :</label>
                    <input type="file" name="file" class="form-control-file" id="file">
                  </div>
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
