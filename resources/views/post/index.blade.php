@extends('product.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel crud blog</h2>
            </div>
            <div class="pull-right">
                <a href="/post/create_page" class="btn btn-secondary">create new post</a>
            </div>
            
            @if ($msg = Session::get('success'))
                <div class="alert alert-success my-5">{{ $msg }}</div>
            @endif
            <div class="mt-5"></div>
            
            @if ($posts)
                @foreach ($posts as $post)
                <div class="jumbotron">
                    <h1 class="display-3">{{ $post->title }}</h1>
                    <p class="lead">{{ $post->body }}</p>
                    <hr class="my-2">
                    <p>{{ $post->created_at->diffforhumans() }}  created by {{ $post->author }}</p>

                    <p class="lead">
                        <a class="btn btn-info btn-lg" href="/post/{{ $post->id }}" role="button">show</a>
                    </p>
                </div>
                @endforeach
            @endif

        </div>
    </div>
@endsection