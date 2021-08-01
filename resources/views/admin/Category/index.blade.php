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
                  <H2>Category List</H2>
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
                      <th width="8%">Category</th>
                      <th width="5%">Edit</th>
                      <th width="5%">Dele</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($category as $categorys)
                    <tr>
                      <th scope="row">{{ $categorys ->id }}</th>
                      <td>{{ str_limit($categorys ->name_categories, $limit = 30, $end = '...') }}</td>
                      <td><a href="{{ route('Category.edit', $categorys->id)}}"><button type="button" class="btn btn-warning">Edit</button></a></td>
                      <td>
                       

                          <form action="{{ route('Category.destroy', $categorys->id)}}" method="post">
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

