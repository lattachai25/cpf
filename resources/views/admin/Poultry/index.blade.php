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
          <div class="col-12"><a href="create"><button type="button" class="btn btn-success" style="float:right; margin-bottom: 10px;">Add Product</button></a></div>
              <table class="table">
                  <thead class="thead-dark">
                    <tr>
                      <th width="5%">#</th>
                      <th width="8%">TITLE EN</th>
                      <th width="8%">NAME PRODUCT EN</th>
                      <th width="8%">DETEL PRODUCT EN</th>
                      <th width="8%">History TH</th>
                      <th width="8%">IMAGES BRAND</th>

                      <th width="5%">Edit</th>
                      <th width="5%">Dele</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($poultry as $poultrys)
                    <tr>
                      <th scope="row">{{ $poultrys ->id }}</th>
                      <td>{{ str_limit($poultrys ->text_title_en, $limit = 30, $end = '...') }}</td>
                      <td>{{ str_limit( $poultrys ->name_product_en, $limit = 30, $end = '...') }}</td>
                      <td>{{ str_limit( $poultrys ->detel_product_en, $limit = 30, $end = '...') }}</td>
                      <td>{{ $poultrys ->images_logo }}</td>

                      <td><a href="../files_upload/Poultry/{{$poultrys->images_logo}}"><img src="../files_upload/Poultry/{{$poultrys->images_logo}}" width="100px" alt=""></a></td>
                      <td><a href="{{ route('Poultry.edit', $poultrys->id)}}"><button type="button" class="btn btn-warning">Edit</button></a></td>
                      <td>
                       

                          <form action="{{ route('Poultry.destroy', $poultrys->id)}}" method="post">
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

