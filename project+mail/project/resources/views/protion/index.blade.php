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

  <div class="tb" style="float:right; padding:20px;"><a href="board/create" class="btn btn-warning">รายงาน วาระ และ เลขานุการ </a></div>
<br>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ชุดคณะการประชุม</td>
          <td>ชื่อ</td>
          <td>เลขานุการ</td>
        </tr>
    </thead>
    <tbody>
        @foreach($ser_user as $ser_users)
        <tr>
            <td>{{$ser_users->board_name}}</td>
            <td>{{$ser_users->user_name}}</td>
            <td>{{$ser_users->position}}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection

</div>
</div>
</div>

