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



  <div class="tb" style="float:right; padding:20px;"><a href="seriesmeting/create" class="btn btn-warning">เพิ่มวาระ</a></div>
<br>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>วาระการประชุม</td>
          <td>แก้ไขข้อมูล</td>
          <td colspan="2">ลบข้อมูล</td>
        </tr>
    </thead>
    <tbody>
        @foreach($smg as $smgs)
        <tr>
            <td>{{$smgs->series_name}}</td>
            <td><a href="{{ route('seriesmeting.edit', $smgs->id)}}" class="btn btn-primary">แก้ไข</a></td>
            <td>

                <form action="{{ route('seriesmeting.destroy', $smgs->id)}}" method="post">
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
