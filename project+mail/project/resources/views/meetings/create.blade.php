@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-10">

        <div class="uper">
                @if(session()->get('success'))
                  <div class="alert alert-success">
                    {{ session()->get('success') }}
                  </div><br />
                @endif

                <form action='{{ route('meetings.store') }}' method='POST' enctype='multipart/form-data'>

                        <div class="form-group">
                            @csrf

<br><br>
                                <h2> จัดการประชุม </h2>
                            <br>
                            <div class="form-group">
                                    <label for="set_group">วาระการประชุม :</label>
                                    <select class="form-control" id="series_name" name="series_name">
                                    @foreach($series_metings as $series)
                                        <option value="{{$series->series_name}}"> {{$series->series_name}}</option>
                                    @endforeach
                                    </select>
                            </div>
                            <div class="form-group">
                                    <label for="set_group">วาระ ย่อยๆ :</label>
                                    <select class="form-control" id="set_name" name="set_name">
                                    @foreach($set as $sets)
                                        <option value="{{$sets->set_name}}"> {{$sets->set_name}}</option>
                                    @endforeach
                                    </select>
                            </div>
                            <div class="form-group">
                            <label for="group_name">กลุ่ม :</label>
                            <select class="form-control" id="group_name" name="group_name">
                             <label for="group_name">เลือกกลุ่ม:</label>
                                    @foreach($num as $nums)
                                    <option value="{{ $nums->num_name }}">{{ $nums->num_name }}</option>
                                    @endforeach
                            </select>
                            </div>
                            <div class="form-group">
                                    <label for="date">วัน :</label>
                                    <input type="date" name="date">
                            </div>
                            <div class="form-group">
                                    <label for="time">เวลา :</label>
                                    <input type="time" name="time">
                            </div>

                            <div class="form-group">
                                    <label for="note">สถานที่ประชุม :</label>
                                    <textarea class="form-control" id="note" name="note" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                    <label for="file">เอกสารการประชุม :</label>
                                    <input type="file" name="file">
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
