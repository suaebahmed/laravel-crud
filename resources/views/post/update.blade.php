@extends('product.layout')

@section('content')

<div class="row flex-content-center">
    <div class="col-xs-8 col-lg-6 margin-tb">
        <div class="pull-right">
            <a href="/posts" class="btn btn-outer-primary">Home</a>
        </div>
        <div class="mt-5"></div>
  
      <form action="/post/update" method="post" enctype="multipart/form-data">
        @csrf

          <div class="form-group" hidden>
            <input type="text" value="{{ $post->id }}" name="id">
          </div>

          <div class="form-group">
            <label for="title">Post title:</label>
            <input type="text" value="{{ $post->title }}" name="title" id="title" class="form-control" placeholder="Post name" aria-describedby="helpId">
          </div>
          <div class="form-group">
            <label for="body">Post code</label>
            <textarea type="text" name="body" id="body" class="form-control" placeholder="Enter Post code" aria-describedby="helpId">{{ $post->body }}</textarea>
          </div>

          <div class="form-group">
            <label for="author">Post author</label>
            <input type="text" value="{{ $post->author }}" name="author" id="author" class="form-control" placeholder="Enter post author" aria-describedby="helpId">
          </div>
          <div class="form-group">
            <label for="logo">Post logo</label>
            <input type="file" class="form-control-file" name="logo" id="logo" placeholder="Enter logo" aria-describedby="fileHelpId">
          </div>

          <button type="submit" class="btn btn-warning btn-block">update</button>
      </form>
      <div class="mt-5"></div>

    </div>
  </div>
@endsection