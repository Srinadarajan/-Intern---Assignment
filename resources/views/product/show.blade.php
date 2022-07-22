@extends('product.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">product Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $product->name }}</h5>
        <p class="card-text">Image :  <img src="/images/{{ $product->image }}" width="500px"></p>
        <p class="card-text">Price : {{ $product->price }}</p>
        <p class="card-text">Status : {{ $product->status }}</p>
		
  </div>
       
    </hr>
  
  </div>
</div>