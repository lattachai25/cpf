@extends('layouts.app')
@extends('layouts.menu')

@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-11" style="left:-5%;" >

<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div><br />
  @endif
<br>

<center> <tr class="table-danger"><h1>วาระการประชุม</h1> </tr></center>

  <table class="table table-striped">
    <thead>
        <tr>
          <td>วาระการประชุม</td>
          <td>วาระการประชุมย่อย</td>
          <td>ชุดคณะกรรมการ</td>
          <td>รายละเอียดการประชุม</td>
          <td>วัน</td>
          <td>เวลา</td>
          <td>เอกสารแนบ</td>

        </tr>
    </thead>
    <tbody>
        @foreach($set as $sets)
        <tr>
            <td>{{$sets->series_name}}</td>
            <td>{{$sets->set_name}}</td>
            <td>{{$sets->group_name}}</td>
            <td>{{$sets->note}}</td>
            <td>{{$sets->date}}</td>
            <td>{{$sets->time}}</td>
            <td><a href="../files_upload/{{$sets->file}}">{{$sets->file}}</a></td>
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
