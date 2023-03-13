 @extends('template.dashboard')
 @section('contents')
        <div class="card">
  <div class="card-body">
      
    <form action="{{url('/admin')}}" method="post">
        {!! csrf_field() !!}
        <label>head</label></br>
        <input type="text" name="head" id="text" class="form-control"></br>
        <label>Header</label></br>
        <input type="text" name="header" id="text" class="form-control"></br>
        <label>Image</label></br>
        <input type="text" name="image" id="text" class="form-control"></br>
        <label>Desc</label></br>
        <input type="text" name="desc" id="paragraph" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>

@endsection
