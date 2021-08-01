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
                  <H2>About</H2>
                </div>
                <div class="col-6">
                  <a href="create"><button type="button" class="btn btn-success" style="float:right; margin-bottom: 10px;">Add Product</button></a>
                </div>              
              </div>
            </div>
              <table class="table">
                  <thead class="thead-dark">
                    <tr>
                      <th width="5%">#</th>
                      <th width="8%">Story EN</th>
                      <th width="8%">Story TH</th>
                      <th width="8%">History EN</th>
                      <th width="8%">History TH</th>
                      <th width="8%">Name EN</th>
                      <th width="8%">Name TH</th>

                      <th width="8%">Images</th>
                      <th width="5%">Edit</th>
                      <th width="5%">Dele</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($about as $abouts)
                    <tr>
                      <th scope="row">{{ $abouts ->id }}</th>
                      <td>{{ str_limit($abouts ->story_en, $limit = 30, $end = '...') }}</td>
                      <td>{{ str_limit( $abouts ->story_th, $limit = 30, $end = '...') }}</td>
                      <td>{{ str_limit( $abouts ->history_en, $limit = 30, $end = '...') }}</td>
                      <td>{{ str_limit( $abouts ->history_th, $limit = 30, $end = '...') }}</td>
                      <td>{{ $abouts ->name_en }}</td>
                      <td>{{ $abouts ->name_th }}</td>

                      <td><a href="../files_upload/About/{{$abouts->images}}"><img src="../files_upload/About/{{$abouts->images}}" width="100px" alt=""></a></td>
                      <td><a href="{{ route('About.edit', $abouts->id)}}"><button type="button" class="btn btn-warning">Edit</button></a></td>
                      <td>
                       

                          <form action="{{ route('About.destroy', $abouts->id)}}" method="post">
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

