@extends('product.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('product/' .$product->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$product->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$product->name}}" class="form-control"></br>
        <label>Image</label></br> <input type="file" name="image" class="form-control" placeholder="image">
                    <img src="/images/{{ $product->image }}" width="300px">
		<label>Price</label></br>
        <input type="text" name="price" id="price" value="{{$product->price}}" class="form-control"></br>
		<label>Status</label></br>
        <input type="text" name="status" id="status" value="{{$product->status}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop