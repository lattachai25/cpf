@extends('.admin.userlayout.adminpage')
@section('content')
<div class="col-12">
<div class="row">
<div class="col-3">
  @if(session()->get('success'))
      {{ session()->get('success') }}
  @endif
</div>
        <div class="col-8" style="border:1px solid #000;">
            <h2>  BORDERS  INDEX </h2>
        </div>
<div class="col-1"></div>
</div>
</div>

@endsection

