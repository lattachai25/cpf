@extends('layouts.app')

@section('content')

<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
  <div class="card-header">
    Edit Share
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

      <form method="post" action="{{ route('setmeting.update', $set->id) }}">
        @method('PATCH')
        @csrf

        <div class="form-group">
          <label for="name">วาระการประชุม : </label>
          <input type="text" class="form-control" name="series_name" value="{{ $set->series_name }}" />
        </div>
        <div class="form-group">
          <label for="name">วาระการประชุมย่อย: </label>
          <input type="text" class="form-control" name="set_name" value="{{ $set->set_name }}" />
        </div>
        <div class="form-group">
                <label for="name">ผู้เข้ารวมการประชุม: </label>
                <input type="text" class="form-control" name="set_group" value="{{ $set->set_group }}" />
        </div>
        <div class="form-group">
                    <label for="name">รายละเอียดการประชุม: </label>
                    <input type="text" class="form-control" name="detel" value="{{ $set->detel }}" />
        </div>
        <div class="form-group">
                <label for="name">รายละเอียดเพิ่มเติม: </label>
                <input type="text" class="form-control" name="note" value="{{ $set->note }}" />
        </div>
        <div class="form-group">
                <label for="date">วัน: </label>
                <input type="date" class="form-control" name="date" value="{{ $set->date }}" />
        </div>
        <div class="form-group">
                <label for="time">เวลา: </label>
                <input type="time" class="form-control" name="time" value="{{ $set->time }}" />
        </div>
        <div class="form-group">
                <label for="file">file upload ที่มีอยู่: {{ $set->file }} </label>
                <input type="file" class="form-control" name="file" value="{{ $set->file }}" />
    </div>


        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
</div>
</div>
@endsection
