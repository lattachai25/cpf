@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-12" style="left:-4%">

<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div><br />
  @endif



  <div class="tb" style="float:right; padding:20px;"><a href="setmeting/create" class="btn btn-warning">เพิ่มวาระการประชุมย่อย</a></div>
<br>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>วาระการประชุม</td>
          <td>วาระการประชุมย่อย</td>
          <td>รายละเอียดการประชุม</td>
          <td>รายละเอียดเพิ่มเติม</td>
          <td>วัน</td>
          <td>เวลา</td>
          <td>เอกสารแนบ</td>
          <td colspan="2">ลบข้อมูล</td>
        </tr>
    </thead>
    <tbody>
        @foreach($set as $sets)

        <tr>
            <td><H3>{{$sets->series_name}}</H3></td>
            <td>{{$sets->set_name}}</td>
            <td>{{$sets->detel}}</td>
            <td>{{$sets->note}}</td>
            <td>{{$sets->date}}</td>
            <td>{{$sets->time}}</td>
            <td><a href="../files_upload/{{$sets->file}}">{{$sets->file}}</a></td>
            <td><a href="{{ route('setmeting.edit', $sets->id)}}" class="btn btn-primary">แก้ไข</a></td>
            <td>

                <form action="{{ route('setmeting.destroy', $sets->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">ลบ</button>
                </form>
            </td>

        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection

</div>
</div>
</div>

