@extends('layouts.app2')

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

<center>
    <br><br>
    <h2>
    รายงานการประชุม
    </h2>
</center>
<br>

                <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">วาระ</th>
                            <th scope="col">วาระย่อย</th>
                            <th scope="col">กลุ่ม</th>
                            <th scope="col">วัน</th>
                            <th scope="col">เวลา</th>
                            <th scope="col">รายละเอียด</th>
                            <th scope="col">เอกสารแนบ</th>
                          </tr>
                        </thead>
                        <tbody>
                    @foreach($meetings as $meeting)
                          <tr>
                            <th scope="row">{{ $meeting ->series_name }} </th>
                            <td>{{ $meeting ->set_name }} </td>
                            <td>{{ $meeting ->group_name }} </td>
                            <td>{{ $meeting ->date }}</td>
                            <td>{{ $meeting ->time }}</td>
                            <td>{{ $meeting ->note }}</td>
                            <td><a href="../files_upload/{{$meeting->file}}">{{$meeting->file}}</a></<td>
                          </tr>
                          @endforeach
                        </tbody>
                    </table>

        </div>
</div>
</div>
</div>
@endsection
