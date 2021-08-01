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
          <div class="col-12">
              <div class="row">
                <div class="col-6">
                  <H2>SubCategory List</H2>
                </div>
                <div class="col-6">
                  <a href="create"><button type="button" class="btn btn-success" style="float:right; margin-bottom: 10px;">Add Brand</button></a>
                </div>              
              </div>
            </div>
              <table class="table">
                  <thead class="thead-dark">
                    <tr>
                      <th width="5%">#</th>
                      <th width="8%">SubCategory</th>
                      <th width="5%">Edit</th>
                      <th width="5%">Dele</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($subcategory as $subcategorys)
                    <tr>
                      <th scope="row">{{ $subcategorys ->id }}</th>
                      <td>{{ str_limit($subcategorys ->name_sub_categories, $limit = 30, $end = '...') }}</td>
                      <td><a href="{{ route('Subcategory.edit', $subcategorys->id)}}"><button type="button" class="btn btn-warning">Edit</button></a></td>
                      <td>
                       

                          <form action="{{ route('Subcategory.destroy', $subcategorys->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                          </form>
                      </td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>

        </div>
<div class="col-1"></div>
</div>
</div>

@endsection

