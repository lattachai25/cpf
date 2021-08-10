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
        <h2> Beverage List </h2>
          <table class="table">
                  <thead class="thead-dark">
                    <tr>
                      <th width="10%">#</th>
                      <th width="20%">TITLE</th>
                      <th width="20%">NAME PRODUCT</th>
                      <th width="30%">DETEL PRODUCT</th>

                      <th width="10%">Edit</th>
                      <th width="10%">Dele</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($beverage as $key => $beverages)
                    <tr>
                      <th scope="row">{{ $key + 1  }}</th>
                      <td>{{ str_limit($beverages ->text_title_en, $limit = 30, $end = '...') }}</td>
                      <td>{{ str_limit( $beverages ->name_product_en, $limit = 30, $end = '...') }}</td>
                      <td>{{ str_limit( $beverages ->detel_product_en, $limit = 30, $end = '...') }}</td>
                      <td><a href="{{ route('Beverage.edit', $beverages->id)}}"><button type="button" class="btn btn-warning">Edit</button></a></td>
                      <td>
                          <form action="{{ route('Beverage.destroy', $beverages->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                          </form>
                      </td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
<style>

.page-item.active .page-link {
    z-index: 1;
    color: #fff;
    background-color: #000 !important;
    border-color: !important;
}
.pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover {
    z-index: 3;
    color: #fff;
    cursor: default;
    background-color: #5a5b5d !important;
    border-color: #5a5b5d !important;
}
</style>


                <center>
                  {{ $beverage->links() }}
                </center>
        </div>
<div class="col-1"></div>
</div>
</div>

@endsection

