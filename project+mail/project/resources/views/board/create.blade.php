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



                <form method="post" action="{{ route('board.store') }}">
                        <div class="form-group">
                            @csrf
                            <br>
                            <label for="name"> <h2> สร้างชุดคณะการประชุม :  </h2></label>
                            <br><br>
                            <label for="name">ชื่อชุดการประชุม : <b> เป็นตัวเลขเท่านั้นเช่น 1 , 2 , 3  </b></label>
                               <input type="num" class="form-control" name="board_name" />
                            <br><br>
                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">ชื่อผู้ใช้</th>
                                  <th scope="col">ตำแหน่ง เลขานุการ</th>
                                </tr>
                              </thead>

                              <tbody>

                                <tr>
                                        <td>
                                        <select class="form-control" id="user_name" name="user_name">
                                            <option>เลือกบุคคลเป็น เลขานุการ</option>
                                                @foreach ($ser_user as $ser_users )
                                                <option value="{{ $ser_users->name }}"> {{ $ser_users->name }} </option>
                                                @endforeach
                                        </select>
                                        </td>


                                        <td>
                                                <select class="form-control" id="set_group" name="position">
                                                    <option>เลือกสถาณะ</option>
                                                    @foreach ($positions as $p )
                                                    <option value="{{ $p->name }}">{{ $p->name }}</option>
                                                    @endforeach
                                                </select>
                                          </td>


                                </tr>

                          </tbody>
                        </table>
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
