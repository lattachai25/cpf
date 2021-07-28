@extends('.admin.userlayout.adminpage')
@section('content')
<div class="col-12">
<div class="row">
<div class="col-2">
  @if(session()->get('success'))
      {{ session()->get('success') }}
  @endif
</div>
        <div class="col-9">
          <br><br><br>
          <div class="col-12"><button type="button" class="btn btn-success" style="float:right; margin-bottom: 10px;">Add Product</button></div>
              <table class="table">
                  <thead class="thead-dark">
                    <tr>
                      <th width="10%">#</th>
                      <th width="30%">Subject</th>
                      <th width="30%">Details</th>
                      <th width="20%">Images</th>
                      <th width="5%">Edit</th>
                      <th width="5%">Dele</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                      <td><button type="button" class="btn btn-warning">Edit</button></td>
                      <td><button type="button" class="btn btn-danger">Delete</button></td>
                    </tr>
                   
                  </tbody>
                </table>

        </div>
<div class="col-1"></div>
</div>
</div>

@endsection

