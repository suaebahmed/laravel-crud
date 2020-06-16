@extends('product.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">

            <div class="mt-3"></div>
                <a href="/posts" class="btn btn-info">back</a>
            </div>
            <div class="mt-3"></div>
            

            <div class="jumbotron">
                <h1 class="display-3">{{ $post->title }}</h1>
                <p class="lead">{{ $post->body }}</p>
                <hr class="my-2">
                <p>{{ $post->created_at->diffforhumans() }}  created by {{ $post->author }}</p>
                <p>{{ $post->updated_at->diffforhumans() }} was updated</p>
                <p class="lead">
                    <a class="btn btn-warning btn-lg" href="/post/update_page/{{ $post->id }}">edit</a>
                    <a class="btn btn-danger btn-lg" onclick="return confirm('Are you sure?')" href="/post/delete/{{ $post->id }}">delete</a>
                </p>
            </div>

        </div>
    </div>
@endsection