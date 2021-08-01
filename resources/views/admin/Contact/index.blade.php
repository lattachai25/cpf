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
                  <H2>Content List</H2>
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
                      <th width="8%">text title EN</th>
                      <th width="8%">address EN</th>
                      <th width="8%">faceboot EN</th>
                      <th width="8%">line EN</th>
                      <th width="8%">tel EN</th>
                      <th width="8%">mobile TH</th>
                      <th width="5%">Edit</th>
                      <th width="5%">Dele</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($contact as $contacts)
                    <tr>
                      <th scope="row">{{ $contacts ->id }}</th>
                      <td>{{ str_limit($contacts ->text_title_en, $limit = 30, $end = '...') }}</td>
                      <td>{{ str_limit( $contacts ->address_en, $limit = 30, $end = '...') }}</td>
                      <td>{{ str_limit( $contacts ->faceboot_link_en, $limit = 30, $end = '...') }}</td>
                      <td>{{ str_limit( $contacts ->line_link_en, $limit = 30, $end = '...') }}</td>
                      <td>{{ str_limit( $contacts ->tel_link_en, $limit = 30, $end = '...') }}</td>
                      <td>{{ str_limit( $contacts ->mobile_link_en, $limit = 30, $end = '...') }}</td>

                     
                      <td><a href="{{ route('Contact.edit', $contacts->id)}}"><button type="button" class="btn btn-warning">Edit</button></a></td>
                      <td>
                       

                          <form action="{{ route('Contact.destroy', $contacts->id)}}" method="post">
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

