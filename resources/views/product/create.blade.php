@extends('product/layout')

@section('content')

<div class="row flex-content-center">

  <div class="col-xs-8 col-lg-6 margin-tb">
      <div class="pull-left">
          <h2>create product</h2>
      </div>
      <div class="pull-right">
          <a href="/products" class="btn btn-primary">Home</a>
      </div>
      <div class="mt-5"></div>


    <form action="/create" method="post" enctype="multipart/form-data">
    
      @csrf
      
        <div class="form-group">
          <label for="product_name">Product Name:</label>
          <input type="text" name="product_name" id="product_name" class="form-control" placeholder="Product name" aria-describedby="helpId">
          <small id="helpId" class="text-muted">small text</small>
        </div>
        <div class="form-group">
          <label for="product_code">Product code</label>
          <input type="text" name="product_code" id="product_code" class="form-control" placeholder="Enter Product code" aria-describedby="helpId">
          <small id="helpId" class="text-muted">Help text</small>
        </div>
        <div class="form-group">
          <label for="details">Product details</label>
          <input type="text" name="details" id="details" class="form-control" placeholder="Enter product details" aria-describedby="helpId">
          <small id="helpId" class="text-muted">Help text</small>
        </div>
        <div class="form-group">
          <label for="logo">Product logo</label>
          <input type="file" class="form-control-file" name="logo" id="logo" placeholder="Enter logo" aria-describedby="fileHelpId">
          <small id="fileHelpId" class="form-text text-muted">Help text</small>
        </div>

        <button type="submit" class="btn btn-primary">create</button>
    </form>
    <div class="mt-5"></div>
  </div>
</div>


@endsection
