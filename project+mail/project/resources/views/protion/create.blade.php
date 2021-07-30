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



                <form method="post" action="{{ route('protion.store') }}">
                        <div class="form-group">
                            @csrf
                            <label for="name">สร้างสถาณะ :</label>
                            <input type="text" class="form-control" name="board_name"/>
                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">ชื่อ สถาณะ</th>
                                </tr>
                              </thead>

                              <tbody>
                            <tr>
                                  <td>
                                    <input name="name" value="name" />
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
