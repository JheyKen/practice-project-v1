@extends('template.dashboard')
@section('contents')

<div class="card">
  <div class="card-body">
      
    <form action="{{url('/admin/'.$products->id)}}" method="post">
    {!! csrf_field() !!}
        @method ("PATCH")
        <label>id</label></br>
        <input type="hidden" name="id" id="text" value="{{$products->id}}" class="form-control"></br>
        <label>head</label></br>
        <input type="text" name="head" id="name" value="{{$products->head}}" class="form-control"></br>
        <label>Heading</label></br>
        <input type="text" name="header" id="name" value="{{$products->header}}" class="form-control"></br>
        <label>Image</label></br>
        <input type="text" name="image" id="name" value="{{$products->image}}" class="form-control"></br>
        <label>Description</label></br>
        <input type="text" name="desc" id="paragraph" value="{{$products->desc}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  </div>
</div>

@endsection 