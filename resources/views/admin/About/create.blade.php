
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
            <h2>  BORDERS   </h2>
            <form method="post" action="{{ route('Brand.store') }}">
            @csrf



            <button type="submit" class="btn btn-danger">ลบข้อมูล</button>
            </form>                
        </div>
<div class="col-1"></div>
</div>
</div>

@endsection
