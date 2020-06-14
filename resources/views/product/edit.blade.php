@extends('product.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>edit product</h2>
        </div>
        <div class="pull-right">
            <a href="/products" class="btn btn-primary">cancal go home</a>
        </div>
        
        <div class="mt-5"></div>

    <form action="/edit" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group" hidden>
          <input type="text" value="{{ $product->id }}" name="id" id="id" class="form-control" placeholder="Product name">
        </div>

        <div class="form-group">
          <label for="product_name">Product Name:</label>
          <input type="text" value="{{ $product->product_name }}" name="product_name" id="product_name" class="form-control" placeholder="Product name">
        </div>
        <div class="form-group">
          <label for="product_code">Product code</label>
          <input type="text" value="{{ $product->product_code }}" name="product_code" id="product_code" class="form-control" placeholder="Enter Product code">
        </div>
        <div class="form-group">
          <label for="details">Product details</label>
          <input type="text" value="{{ $product->details }}" name="details" id="details" class="form-control" placeholder="Enter product details" >
        </div>
        <div class="form-group">
          <label for="logo">Product logo</label>
          <input type="file" class="form-control-file" name="logo" id="logo" placeholder="Enter logo">
        </div>

        <div class="form-group">
          <label for="logo">old logo</label>
          <img src="{{ $product->logo }}" width="50px" height="50px" alt="product img">
          <input type="file" hidden value="{{ $product->logo }}" class="form-control-file" name="old_logo" id="logo">

        </div>

        <button type="submit" class="btn btn-primary">save edit</button>
    </form>
    </div>
</div>

@endsection