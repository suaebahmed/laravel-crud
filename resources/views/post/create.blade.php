@extends('product.layout')

@section('content')

<div class="row flex-content-center">
    <div class="col-xs-8 col-lg-6 margin-tb">
        <div class="pull-right">
            <a href="/posts" class="btn btn-primary-outer">Home</a>
        </div>
        <div class="mt-5"></div>
  
      <form action="/post/create" method="post" enctype="multipart/form-data">
        @csrf
          <div class="form-group">
            <label for="title">Post title:</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Post name" aria-describedby="helpId">
          </div>

          <div class="form-group">
            <label for="body">Post code</label>
            <textarea type="text" name="body" id="body" class="form-control" placeholder="Enter Post code" aria-describedby="helpId"></textarea>
          </div>

          <div class="form-group">
            <label for="author">Post author</label>
            <input type="text" name="author" id="author" class="form-control" placeholder="Enter post author" aria-describedby="helpId">
          </div>
          <div class="form-group">
            <label for="logo">Post logo</label>
            <input type="file" class="form-control-file" name="logo" id="logo" placeholder="Enter logo" aria-describedby="fileHelpId">
          </div>

          <button type="submit" class="btn btn-primary btn-block">create</button>
      </form>
      <div class="mt-5"></div>

    </div>
  </div>
@endsection